<div class="col-12 col-md-6 col-lg-4">

    <div class="card card-warning">
      <div class="card-header">
        <h4>Dokumen Persyaratan</h4>
      </div>
      <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Surat Pernyataan Santri
              <span class="badge badge-warning badge-pill">Unduh</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Surat Pernyataan Wali Santri
              <span class="badge badge-warning badge-pill">Unduh</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Surat Ijab Qabul
              <a href="https://www.google.com/search?q=surat+pernyataan&oq=surat+pern&aqs=chrome.1.69i57j0i433j0j0i131i433j0i433l3j0l3.3294j0j7&sourceid=chrome&ie=UTF-8"><span class="badge badge-warning badge-pill">Unduh</span></a>
            </li>
          </ul>

          
      </div>
      <form>
        <div class="form-group col-md-6">
          <label for="konfirmasi"> <a  class="text-success mb-2">Konfirmasi Dokumen</a></label>
          <select id="konfirmasi"  wire:model.debounce.500ms="konfirmasi" name="" class="form-control @error('konfirmasi') is-invalid @enderror">
          <option value="" selected >Pilih...</option>
          <option value="Terima" >Terima</option>
              <option value="Tolak">Tolak</option>
          </select>
          @error('sekolah_asal')
              <span class="invalid-feedback">{{ $message }}</span>
          @enderror
       
    </div>
  </form>
    </div>
</div>