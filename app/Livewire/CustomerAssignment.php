<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClientAssignedToRM;

class CustomerAssignment extends Component
{
    public $users;
    public $rmUsers;
    public $selections = [];

    public function mount()
    {
        $this->users = User::where('type', 0)
            ->whereNull('rm_id')
            ->get();
        $this->rmUsers = User::where('type', 1)->get();

        foreach ($this->users as $user) {
            $this->selections[$user->id] = $user->rm_id;
        }
    }

    public function save()
    {
        foreach ($this->selections as $userId => $rmId) {
            User::where('id', $userId)->update([
                'rm_id' => $rmId === '' ? null : $rmId,
                'state' => $rmId ? 30 : 20
            ]);

            if ($rmId) {
                $rm = User::where('id', $rmId)->first();
                $user = User::where('id', $userId)->first();
                if ($rm) {
                    Mail::to($rm->email)->send(new ClientAssignedToRM($user));
                }
            }
        }

        // Refresh the list
        $this->mount();
        session()->flash('message', 'RM assignments updated successfully.');
    }

    public function render()
    {
        return view('livewire.customer-assignment');
    }
}
