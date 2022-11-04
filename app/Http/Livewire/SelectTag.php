<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SelectTag extends Component
{
    public $size = 'XL';
    public $frameworkPHP = ['Laravel', 'Codeigniter'];

    public function render()
    {
        return view('livewire.select-tag');
    }
}
