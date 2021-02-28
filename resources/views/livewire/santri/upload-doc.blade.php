<section class="section">
    <div class="section-header">
      <h1>Card</h1>
      @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        This is a success alert—check it out!
      </div>
    @endif
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
        <div class="breadcrumb-item">Unggah Dokumen</div>
      </div>
    </div>
    
    <div class="section-body">
      </p>
     

      <div class="row">

        <div class="col-12 col-md-6 col-lg-8">
            <div class="card card-info">
              <div class="card-header">
                <h4>Unggah Dokumen</h4>
              </div>
              <div class="card-body">
                <form wire:submit.prevent="save"  class="was-validated" >
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Kartu Keluarga
                      <span class="badge badge-primary"> 
                        <input type="file"  wire:model="kk" id="kk" required>
                        @error('kk') <div class="error">{{ $message }}</div>@enderror
                        <div wire:loading wire:target="kk" >Uploading...</div>
                      </span>
                     
                        
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Ijazah
                      <span class="badge badge-primary badge-pill">
                        <input type="file"  wire:model="ijazah" id="ijazah" required>
                        @error('ijazah') <div class="error">{{ $message }}</div>@enderror
                        <div wire:loading wire:target="ijazah" >Uploading...</div>
                      </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Surat Pernyataan Santri
                      <span class="badge badge-primary badge-pill">
                      <input type="file"  wire:model="spSantri" id="spSantri" required>
                        @error('spSantri') <div class="error">{{ $message }}</div>@enderror
                        <div wire:loading wire:target="spSantri" >Uploading...</div>
                      </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Surat Pernyataan Wali Santri
                      <span class="badge badge-primary badge-pill">
                        <input type="file"  wire:model="spWsantri" id="spWsantri" required>
                        @error('spWsantri') <div class="error">{{ $message }}</div>@enderror
                        <div wire:loading wire:target="spWsantri" >Uploading...</div>
                      </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Surat Ijab Qabul
                      <span class="badge badge-primary badge-pill">
                      <input type="file"  wire:model="spiQabul" id="spiQabul" required>
                        @error('spiQabul') <div class="error">{{ $message }}</div>@enderror
                        <div wire:loading wire:target="spiQabul" >Uploading...</div>
                      </span>
                    </li>
                    
                  </ul>
                <br>
                  <div class="form-group col-md-12">
                    <div class="text-md-right">
                      <button type="submit" class="btn btn-lg btn-success ">Simpan Berkas</button>
                    </div>
                                               
                 
                 
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
            </div>
          </div>
      </div>     
    </div>
  </section>

  