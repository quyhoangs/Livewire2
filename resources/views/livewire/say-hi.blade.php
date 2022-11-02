<div>
   Hello {{ $name }} {{ now() }}
   <button wire:click="emitChild">refresh</button>
</div>
