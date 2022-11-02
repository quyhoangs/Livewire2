<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWord extends Component
{
    public $names = ['Luis', 'Bingo', 'Chicago'];
     protected $listeners = ['Child' =>'$refresh'];

    public function mount($name){
        $this->name = $name;
    }

    public function refreshChildren(){
        $this->emit('refreshChildren');
    }

    public function updatedName()
    {
        $this->name = strtoupper($this->name);
    }

    public function render()
    {
        return view('livewire.hello-word');
    }
}
