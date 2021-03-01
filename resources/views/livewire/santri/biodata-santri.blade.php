<section class="section">
    <div class="section-header">
      <h1>Biodata </h1>
      <!-- Breadcrumb -->
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">biodata</a></div>
      </div>
    </div>

    <div class="section-body">
      
      <p class="section-lead">
      <div class="card card-primary">
        <div class="card-header">
        <h4>Silahkan Lengkapi data anda</h4>
        </div>
        <div class="card-body">
      <form wire:submit.prevent="store" >
        <div class="form-row">
            
            <div class="form-group col-md-4">
                <label for="nama_depan">Nama Depan</label>
                <input type="text"  wire:model.debounce.500ms.debounce.500ms="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan" name="nama_depan" placeholder="Nama Depan">
                @error('nama_depan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="nama_tengah">Nama Tengah</label>
                <input type="text"  wire:model.debounce.500ms="nama_tengah" class="form-control @error('nama_tengah') is-invalid @enderror" name="nama_tengah" id="nama_tengah" placeholder="Nama tengah">
            </div>
            <div class="form-group col-md-4">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text"  wire:model.debounce.500ms="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nisn">NISN</label>
                <input type="text"  wire:model.debounce.500ms="nisn" name="" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="NISN">
                @error('nisn')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="no_ijazah">No. Ijazah</label>
                <input type="text"  wire:model.debounce.500ms="no_ijazah"  name="" class="form-control @error('no_ijazah') is-invalid @enderror" id="no_ijazah" placeholder="No. Ijazah">
                @error('no_ijazah')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text"  wire:model.debounce.500ms="tempat_lahir" name="" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Tempat Lahir">
                @error('tempat_lahir')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date"  wire:model.debounce.500ms="tgl_lahir" name="" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="Tanggal Lahir">
                @error('tgl_lahir')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin"  wire:model.debounce.500ms="jenis_kelamin" name="" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                <option value="" selected >Pilih...</option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="sekolah_asal">Nama Sekolah Asal</label>
                <input type="text"  wire:model.debounce.500ms="sekolah_asal" name="" class="form-control @error('sekolah_asal') is-invalid @enderror" id="sekolah_asal" placeholder="Isikan sekolah asal anda">
                @error('sekolah_asal')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="sekolah_sekarang">Mendaftar Sebagai Santri</label>
                <select id="sekolah_sekarang"  wire:model.debounce.500ms="sekolah_sekarang" name="" class="form-control @error('sekolah_sekarang') is-invalid @enderror">
                <option value="" selected >Pilih...</option>
                <option value="SD" >SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                </select>
                @error('sekolah_asal')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror"  wire:model.debounce.500ms="alamat" name="" id="alamat" placeholder="Alamat">
                @error('alamat')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        <div class="form-group col-md-5">
            <label for="provinsiId">Provinsi</label>
            <select id="provinsiId"  wire:model.debounce.500ms="provinsiId" name="" class="form-control @error('provinsiId') is-invalid @enderror">
                <option value="" selected >Pilih...</option>
                @foreach (getProvinsi() as $provinsi)
                    <option value="{{ $provinsi['id']}}">{{ $provinsi['nama']}}</option>
                @endforeach
            </select>
            @error('provinsiId')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
        </div>

        <div class="form-group col-md-5">
            <label for="kabupaten">Kabupaten/Kota</label>
            <select id="kabupaten"  wire:model.debounce.500ms="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror">
                <option value="" selected >Pilih...</option>
                @foreach($kotas as $kota)
                    <option value="{{ $kota['id']}}">{{ $kota['nama']}}</option>
                @endforeach
            </select>
            @error('kabupaten')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
        </div>

        <div class="form-group col-md-5">
            <label for="kecamatan">kecamatan</label>
                <select id="kecamatan"  wire:model.debounce.500ms="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror">
                <option value="" selected >Pilih...</option>
                @foreach($kecamatans as $kecamatan)
                    <option value="{{ $kecamatan['id']}}">{{ $kecamatan['nama']}}</option>
                @endforeach
                </select>
                @error('kecamatan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
        </div>

       
       
    
        <div class="form-group col-md-12">
            <label for="wni">Kewarganegaraan</label>
            <select id="wni"  wire:model.debounce.500ms="wni" class="form-control @error('wni') is-invalid @enderror">
                <option value="" selected >Pilih...</option>
                <option value="WNI">WNI</option>
                <option value="WNA">WNA</option>
            </select>
            @error('wni')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button  type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
        </form>
        </div>
      </div>
           </p>
      <!-- Your content goes here -->
    </div>
  </section>

    