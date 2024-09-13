<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Mail\ClientAccepted;


class CustomerController extends Controller
{
    public function index()
    {
        if (auth()->user()->type == 1) {
            $customers = User::where('type', 0)->where('rm_id', auth()->user()->id)->orderBy('name')->get();
        } else {
            $customers = User::where('type', 0)->orderBy('name')->get();
        }
        $rmUsers = User::where('type', 1)->get();

        return view('customers.index', compact('customers', 'rmUsers'));
    }

    public function create()
    {
        $rmUsers = User::where('type', 1)->get();
        return view('customers.create', ['rmUsers' => $rmUsers]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'client_type' => 'required',
            'name' => 'required',
        ]);

        try {
            $user = User::create($request->all() + ['type' => 0] + ['password' => Hash::make($request->name)]);

            // Mail::to($user->email)->send(new ContactFormSubmitted());
            Mail::to($user->email)->send(new ClientAccepted($user));

            return redirect()->route('customers.index')->with('message', 'Client created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Hubo un error al crear el cliente: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $customer = User::findOrFail($id);
        return view('customers.index', compact('customer'));
    }

    public function edit($id)
    {
        $customer = User::findOrFail($id);
        $rmUsers = User::where('type', 1)->get();
        return view('customers.edit', compact('customer', 'rmUsers'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        $user->state = ($user->rm_id !== null) ? 30 : 20;
        $user->save();

        return redirect()->route('customers.index')->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        return view('customers.destroy', ['user' => $user]);
    }

    public function confirmDestroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('customers.index')->with('success', 'Cliente eliminado correctamente.');
    }
}

