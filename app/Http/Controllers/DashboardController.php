<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->isClient() && $user->state == 0) {
            return view('dashboard.letstalk');
        } elseif ($user->isClient() && $user->state == 10) {
            return view('dashboard.wait');
        } elseif ($user->isClient() && $user->state == 20) {
            return view('dashboard.wait');
        } elseif ($user->isClient() && $user->state == 30) {
            return redirect()->to($user->onboardingRoute());
        } elseif ($user->isClient() && $user->state == 100) {
            return view('dashboard.client');
        } elseif ($user->isClient() && $user->state == -1) {
            return view('dashboard.rejected');
        } elseif ($user->isRM()) {
            return view('dashboard.rm');
        } elseif ($user->isSwisscomply()) {
            return view('dashboard.compliance');
        } elseif ($user->isSuperuser()) {
            return view('dashboard.superuser');
        } else {
            // En caso de que no se reconozca el tipo, redirigir a una página genérica o de error.
            return view('dashboard.generic');
        }
    }
}
