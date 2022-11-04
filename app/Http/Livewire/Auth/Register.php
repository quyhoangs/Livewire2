<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $email ;
    public $password;
    public $passwordConfirm;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'passwordConfirm' => 'required|same:password',
        ]);
    }

    public function register()
    {
        User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        return redirect()->with('success', 'You have been registered successfully!');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
