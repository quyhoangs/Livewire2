<div>
    @foreach ($names as $name)
        @livewire('say-hi', ['name' => $name],key($name) )
    @endforeach

    <hr>
     <button wire:click="$refresh">refresh</button>
     {{now()}}
</div>
