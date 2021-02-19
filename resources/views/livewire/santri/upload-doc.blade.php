<div>
    <form wire:submit.prevent="save">
        <input type="file" wire:model="kk">
    
        @error('kk') <span class="error">{{ $message }}</span> @enderror
        @if ($kk)
        Photo Preview:
        <img src="{{ $kk->temporaryUrl() }}">
        @endif
    
        <button type="submit">Save Photo</button>
    </form>
</div>
