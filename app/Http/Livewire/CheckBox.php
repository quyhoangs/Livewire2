<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckBox extends Component
{
    public $showEmail = false;
    public $hobbies = ['Camping'];

    public function render()
    {
        return view('livewire.check-box');
    }
}
