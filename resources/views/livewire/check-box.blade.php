<div>
  <label > Single Checkbox</label><br>
  <input type="checkbox" wire:model="showEmail" >showEmail
<br>
Show Email : {{ var_export($showEmail) }}<br><br>

  <label for="vehicle2"> Group Checkbook</label><br>
  <input type="checkbox"  wire:model="hobbies" value="Codding" checked>Codding<br>
  <input type="checkbox"  wire:model="hobbies" value="Sailing">Sailing<br>
  <input type="checkbox"  wire:model="hobbies" value="Camping">Camping<br>
Show Email : {{ var_export($hobbies) }}<br><br>
</div>
