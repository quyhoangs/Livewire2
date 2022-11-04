<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormElement extends Component
{
    public $message = 'Binding 2 chiều';

    public function render()
    {
        return view('livewire.form-element');
    }
}
