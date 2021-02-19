 <div class="panel">
    <div class="col-md-12">
	<div class="panel-heading">
       
		<h2 class="panel-title">Lengkapi Biodata Anda {{ Auth::user()->status->status}}</h2>
	</div>
    </div>
	<div class="panel-body">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" wire:model="nama_depan" class="form-control" id="nama_depan" placeholder="Nama Depan">
            </div>
            <div class="form-group col-md-4">
                <label for="nama_tengah">Nama Tengah</label>
                <input type="text" wire:model="nama_tengah" class="form-control" id="nama_tengah" placeholder="Nama tengah">
            </div>
            <div class="form-group col-md-4">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" wire:model="nama_belakang" class="form-control" id="nama_belakang" placeholder="Nama Belakang">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nis">NIS </label>
                <input type="text" wire:model="nis" class="form-control" id="nis" placeholder="NIS">
            </div>
            <div class="form-group col-md-4">
                <label for="nisn">NISN</label>
                <input type="text" wire:model="nisn" class="form-control" id="nisn" placeholder="NISN">
            </div>
            <div class="form-group col-md-4">
                <label for="no_ijazah">No. Ijazah</label>
                <input type="text" wire:model="no_ijazah" class="form-control" id="no_ijazah" placeholder="No. Ijazah">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" wire:model="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
            </div>
            <div class="form-group col-md-6">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" wire:model="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir">
            </div>
           
        </div>
        <div class="form-group col-md-12">
        <label for="jenis_kelamin">Jenis Kelamin</label>
      <select id="jenis_kelamin" wire:model="jenis_kelamin" class="form-control">
        <option selected value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
  </div>
  <div class="form-row">
            <div class="form-group col-md-6">
                <label for="sekolah_asal">Nama Sekolah Asal</label>
                <input type="text" wire:model="sekolah_asal" class="form-control" id="sekolah_asal" placeholder="Isikan sekolah asal anda">
            </div>
            <div class="form-group col-md-6">
            <label for="sekolah_sekarang">Mendaftar Sebagai Santri</label>
            <select id="sekolah_sekarang" wire:model="sekolah_sekarang" class="form-control">
                <option value="SD" selected>SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
            </select>
        </div>
  <div class="form-group col-md-12">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" wire:model="alamat" id="alamat" placeholder="Alamat">
  </div>
  <div class="form-group col-md-5">
    <label for="provinsi">Provinsi</label>
    <select id="provinsi" wire:model="provinsiId" class="form-control">
      <option value="" selected >Pilih...</option>
      @foreach (getProvinsi() as $provinsi)
           
          <option value='{{ $provinsi['id']}}'>{{ $provinsi['nama']}}</option>
      @endforeach
      
     
    </select>
</div>
<div class="form-group col-md-5">
    <label for="kabupaten">Kabupaten/Kota</label>
    <select id="kabupaten" wire:model="kabupaten" class="form-control">
      <option value="" selected >Pilih...</option>
      @foreach($kotas as $kota)
          <option value='{{ $kota['id']}}'>{{ $kota['nama']}}</option>
      @endforeach
      
     
    </select>
    
  </div>

  <div class="form-group col-md-5">
    <label for="kecamatan">kecamatan</label>
    <select id="kecamatan" wire:model="kecamatan" class="form-control">
      <option value="" selected >Pilih...</option>
      @foreach($kecamatans as $kecamatan)
          <option value='{{ $kecamatan['id']}}'>{{ $kecamatan['nama']}}</option>
      @endforeach
      
     
    </select>
    
  </div>
  
  
 
  
   
   
    <div class="form-group col-md-2">
      <label for="kode_pos">Kode Pos</label>
      <input type="text" wire:model="kode_pos" class="form-control" id="kode_pos">
    </div>
  </div>
  
        <div class="form-group col-md-12">
            <label for="wni">Kewarganegaraan</label>
            <select id="wni" wire:model="wni" class="form-control">
                <option value="WNI"selected>WNI</option>
                <option value="WNA">WNA</option>
            </select>
        </div>
  
  
  <div class="form-group col-md-2">
  <button wire:click="store()" type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
	</div>
</div>