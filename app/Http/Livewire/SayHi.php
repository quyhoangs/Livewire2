<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SayHi extends Component
{
    public $name = 'Say hi';
    protected $listeners = ['Child' =>'$refresh'];

    public function refreshChildren()
    {
       //
    }

    public function mount($name){
        $this->name = $name;
    }
    public function emitChild()
    {
        $this->emitUp('Child');
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
