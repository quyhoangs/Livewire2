<div>
    <input wire:model ="name" type="text">
    <input wire:model ="loud" type="checkbox">
    <select wire:model = "greeting" multiple>
        <option>Hi</option>
        <option>Hello</option>
        <option>Yo</option>
    </select>
    {{implode(', ', $greeting)}} {{$name}} @if($loud) ! @endif


    <form action="#" wire:submit.prevent="$set('name', 'Luis')" >
        <button>Reset Name</button>
    </form>


</div>
