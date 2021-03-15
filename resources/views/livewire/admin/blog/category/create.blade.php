<form>
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Cari Santri....." wire:model.debounce.1000ms='name'>
        </div>
        <div class="col-md-3">
            <select id="jenisKelamin" wire:model.debounce.500ms="jenisKelamin" class="form-control @error('jenisKelamin') is-invalid @enderror">
                <option value="" selected>Kategori Induk</option>`
                
            </select>
        </div>
        <div class="form-group col-md-3">
            <a wire:click.prevent='store()' class="btn btn-block btn-icon icon-left btn-success btn-filter"><i class="fas fa-plus-circle"></i>Simpan</a>
        </div>
    </div>
</form>