<div class="modal fade show" tabindex="-1" role="dialog" id="fire-modal-5" style="display: block; padding-right: 17px;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Biaya Pendaftaran</h5>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="form-group">
                        <label>Nama Biaya</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('nama_biaya') is-invalid @enderror" wire:model.debounce.1000ms='nama_biaya' placeholder="Nama Biaya @error('nama_biaya') : {{ $message }}  @enderror " name="name">
                        </div>
                        @error('nama_biaya')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tahun Ajaran</label>
                        <div class="input-group">

                            <input type="text" wire:model.debounce.500ms="tahun_ajaran" class="form-control @error('tahun_ajaran') is-invalid @enderror" placeholder="Tahun Ajaran @error('tahun_ajaran') : {{ $message }}  @enderror" name="password">
                        </div>
                        @error('tahun_ajaran')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <div class="input-group">
                            <select id="Kelas" wire:model.debounce.500ms="Kelas" class="form-control @error('Kelas') is-invalid @enderror">
                                <option value="" selected>Kelas</option>
                                <option value="1">SMP</option>
                                <option value="2">SMA</option>
                                <option value="3">MTs</option>
                                <option value="4">MA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <div class="input-group">
                            <input type="text" wire:model.debounce.500ms="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga @error('harga') : {{ $message }}  @enderror" name="password">
                        </div>
                        @error('harga')
                        {{ $message }}
                        @enderror
                    </div>
                    <button class="d-none" id="fire-modal-5-submit"></button>
                </form>
            </div>
            <div class="modal-footer bg-whitesmoke">
                <button wire:click.prevent="store()" class="btn btn-primary btn-shadow" id="">Simpan</button>
                <button wire:click="closeModal()" class="btn btn-warning btn-shadow" id="">Batal</button>

            </div>

        </div>
    </div>
</div>