<section class="section">
    <div class="section-header">
      <h1>Card</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
        <div class="breadcrumb-item">Card</div>
      </div>
    </div>

    <div class="section-body">
      </p>
      <form wire:submit.prevent="save" >
      <div class="row">
        <div class="col-12 col-md-6 col-lg-8">
            <div class="card card-info">
              <div class="card-header">
                <h4>Unggah Dokumen</h4>
              </div>
              <div class="card-body">
                <form wire:submit.prevent="save" >
                    <div class="form-group row mb-4">
                        <label class="col-form-label  col-12 col-md-3 col-lg-8">Unggah hasil scan KK anda. maksimal 1000kb</label>
                        <div class="col-sm-12 col-md-4">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" wire:model="kk" id="kk">
                                <div wire:loading wire:target="ijazah" class="text-sm text-gray-500 italic">Uploading...</div>
                                <label class="custom-file-label" for="customFile">Pilih Berkas</label>
                                @error('kk') <div class="invalid-feedback">{{ $message }}</div>@enderror
                              </div>
                        </div>
                    </div>

                  

                    <div class="form-group row mb-4">
                        <label class="col-form-label  col-12 col-md-3 col-lg-8">KK Unggah hasil scan KK anda. maksimal 1000kb</label>
                        <div class="col-sm-12 col-md-4">
                        <input type="file" class="custom-file" wire:model="ijazah" id="ijazah" required>
                            <div wire:loading wire:target="ijazah" class="text-sm text-gray-500 italic">Uploading...</div>
                            @error('ijazah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label  col-12 col-md-3 col-lg-8">KK Unggah hasil scan KK anda. maksimal 1000kb</label>
                        <div class="col-sm-12 col-md-4">
                        <input type="file" class="custom-file" wire:model="spSantri" id="spSantri" required>
                            <div wire:loading wire:target="spSantri" class="text-sm text-gray-500 italic">Uploading...</div>
                            @error('spSantri') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label  col-12 col-md-3 col-lg-8">KK Unggah hasil scan KK anda. maksimal 1000kb</label>
                        <div class="col-sm-12 col-md-4">
                        <input type="file" class="custom-file" wire:model="spWsantri" id="spWsantri" required>
                            <div wire:loading wire:target="spWsantri" class="text-sm text-gray-500 italic">Uploading...</div>
                            @error('spWsantri') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label  col-12 col-md-3 col-lg-8">KK Unggah hasil scan KK anda. maksimal 1000kb</label>
                        <div class="col-sm-12 col-md-4">
                        <input type="file" class="custom-file" wire:model="spiQabul" id="spiQabul" required>
                            <div wire:loading wire:target="spiQabul" class="text-sm text-gray-500 italic">Uploading...</div>
                            @error('spiQabul') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    


                    <div class="form-group col-md-12">
                                               
                        <button type="submit" class="btn btn-lg btn-success ">Simpan Berkas</button>
                     
                    </div>
                </form>
              </div>
            </div>
          </div>
       
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-warning">
              <div class="card-header">
                <h4>Unduh Dokumen</h4>
              </div>
              <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Surat Pernyataan Santri
                      <span class="badge badge-primary badge-pill">Unduh</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Surat Pernyataan Wali Santri
                      <span class="badge badge-primary badge-pill">Unduh</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Surat Ijab Qabul
                      <a href="https://www.google.com/search?q=surat+pernyataan&oq=surat+pern&aqs=chrome.1.69i57j0i433j0j0i131i433j0i433l3j0l3.3294j0j7&sourceid=chrome&ie=UTF-8"><span class="badge badge-primary badge-pill">Unduh</span></a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
      </div>     
    </div>
  </section>