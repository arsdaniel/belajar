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
                <form wire:submit.prevent="save"  class="was-validated" >
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Kartu Keluarga
                      <span class="badge badge-primary badge-pill"> Pilih File
                        <input type="file" class="custom-file-input" wire:model="kk" id="kk" required>
                      </span>
                      <div wire:loading wire:target="kk" class="text-sm text-gray-500 italic">Uploading...</div>
                        @error('kk') <div class="error">{{ $message }}</div>@enderror
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Ijazah
                      <span class="badge badge-primary badge-pill">Unduh</span>
                    </li>
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
                      <span class="badge badge-primary badge-pill">Unduh</span>
                    </li>
                    
                  </ul>
                  <div class="form-group col-md-12">
                                               
                    <button type="submit" class="btn btn-primary ">Simpan Berkas</button>
                 
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

  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var kk = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(kk);
        });
    </script>