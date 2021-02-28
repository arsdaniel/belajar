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
      <div class="card">
        <div class="card-header">
        <h4>Silahkan Input Data anda dengan benar</h4>
        </div>
        <div class="card-body">
      <form wire:submit.prevent="store" >
        <div class="form-row">
            
            <div class="form-group col-md-4">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" wire:model="nama_depan" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama Depan">
                @error('nama_depan')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="nama_tengah">Nama Tengah</label>
                <input type="text" wire:model="nama_tengah" class="form-control" name="nama_tengah" id="nama_tengah" placeholder="Nama tengah">
            </div>
            <div class="form-group col-md-4">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" wire:model="nama_belakang" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nisn">NISN</label>
                <input type="text" wire:model="nisn" name="" class="form-control" id="nisn" placeholder="NISN">
                @error('nisn')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="no_ijazah">No. Ijazah</label>
                <input type="text" wire:model="no_ijazah"  name="" class="form-control" id="no_ijazah" placeholder="No. Ijazah">
                @error('no_ijazah')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" wire:model="tempat_lahir" name="" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                @error('tempat_lahir')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" wire:model="tgl_lahir" name="" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir">
                @error('tgl_lahir')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" wire:model="jenis_kelamin" name="" class="form-control">
                <option value="" selected >Pilih...</option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="sekolah_asal">Nama Sekolah Asal</label>
                <input type="text" wire:model="sekolah_asal" name="" class="form-control" id="sekolah_asal" placeholder="Isikan sekolah asal anda">
                @error('sekolah_asal')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="sekolah_sekarang">Mendaftar Sebagai Santri</label>
                <select id="sekolah_sekarang" wire:model="sekolah_sekarang" name="" class="form-control">
                <option value="" selected >Pilih...</option>
                <option value="SD" >SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                </select>
                @error('sekolah_asal')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" wire:model="alamat" name="" id="alamat" placeholder="Alamat">
                @error('alamat')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
            </div>
        <div class="form-group col-md-5">
            <label for="provinsiId">Provinsi</label>
            <select id="provinsiId" wire:model="provinsiId" name="" class="form-control">
                <option value="" selected >Pilih...</option>
                @foreach (getProvinsi() as $provinsi)
                    <option value="{{ $provinsi['id']}}">{{ $provinsi['nama']}}</option>
                @endforeach
            </select>
            @error('provinsiId')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
        </div>

        <div class="form-group col-md-5">
            <label for="kabupaten">Kabupaten/Kota</label>
            <select id="kabupaten" wire:model="kabupaten" class="form-control">
                <option value="" selected >Pilih...</option>
                @foreach($kotas as $kota)
                    <option value="{{ $kota['id']}}">{{ $kota['nama']}}</option>
                @endforeach
            </select>
            @error('kabupaten')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
        </div>

        <div class="form-group col-md-5">
            <label for="kecamatan">kecamatan</label>
                <select id="kecamatan" wire:model="kecamatan" class="form-control">
                <option value="" selected >Pilih...</option>
                @foreach($kecamatans as $kecamatan)
                    <option value="{{ $kecamatan['id']}}">{{ $kecamatan['nama']}}</option>
                @endforeach
                </select>
                @error('kecamatan')
                    <span class="btn btn-warning">{{ $message }}</span>
                @enderror
        </div>

       
       
    
        <div class="form-group col-md-12">
            <label for="wni">Kewarganegaraan</label>
            <select id="wni" wire:model="wni" class="form-control">
                <option value="" selected >Pilih...</option>
                <option value="WNI">WNI</option>
                <option value="WNA">WNA</option>
            </select>
            @error('wni')
                    <span class="btn btn-warning">{{ $message }}</span>
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

    