<div>
    @foreach ($names as $name)
        @livewire('say-hi', ['name' => $name],key($name) )
    @endforeach

    <hr>
     <button wire:click="$emit('refreshChildren')">Refresh Children</button>
     {{now()}}
</div>
