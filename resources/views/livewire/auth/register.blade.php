<form wire:submit.prevent="register" >
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" wire:model="password">
        @error('password') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="passwordConfirm" wire:model="passwordConfirm">
        @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div>
        <button type="submit" >Register</button>
    </div>

</form>
