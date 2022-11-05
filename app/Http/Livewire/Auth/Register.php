<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $saved = false;
    public $email ='demo@gmail.com';
    public $password;
    public $passwordConfirm;

    // public function updated($field)
    // {
    //     $this->validateOnly($field, [
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|min:8',
    //         'passwordConfirm' => 'required|same:password',
    //     ]);
    // }

    public function register()
    {
        User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->saved = true;
    }

    public function updating($field){
         dump($this->email);
         dump($this->saved);
         dump($field);
    }

    public function updated($field){
        dump($this->email);
        dump($this->saved);
        dump($field);
       if($field !== 'saved'){
           $this->saved = false;
       }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
