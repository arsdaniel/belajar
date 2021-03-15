<div class="modal fade show" tabindex="-1" role="dialog" id="fire-modal-5" style="display: block; padding-right: 17px;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kategori</h5> 
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="form-group">
                        <label>Kategori</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" wire:model.debounce.1000ms='name' placeholder="name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Kategori Induk</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="text"  wire:model.debounce.500ms="jenisKelamin" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                    
                    <button class="d-none" id="fire-modal-5-submit"></button>
                </form>
            </div>
            <div class="modal-footer bg-whitesmoke"> 
                <button  wire:click.prevent='store()'  class="btn btn-primary btn-shadow" id="">Simpan</button>
                <button  wire:click='closeModal()'  class="btn btn-primary btn-shadow" id="">Batal</button>
            
            </div>
                    
        </div>
    </div>
</div>

