<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Radio extends Component
{
    public $lession = 'NKD';

    public function render()
    {
        return view('livewire.radio');
    }
}
