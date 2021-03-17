<div class="modal fade show" tabindex="-1" role="dialog" id="fire-modal-7" style="display: block;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yakin?{{$hapus}}</h5> 
            </div>
            <div class="modal-body"> Apakah anda yakin mau menghapus {{$nama_biaya}}?</div>
            <div class="modal-footer"> <button wire:click="delete({{ $biaya_id }})" class="btn btn-danger btn-shadow" id="">Ya, Saya Yakin</button>
                <button wire:click="batalHapus" class="btn btn-secondary">Batal</button></div>
        </div>
    </div>
</div>
