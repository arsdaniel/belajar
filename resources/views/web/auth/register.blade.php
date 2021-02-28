@extends('web.layouts.app2')
@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 col-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
        </div>

        <div class="card card-primary">
          <div class="card-header"><h4>Formulir Pendaftaran</h4></div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="form-group col-4">
                        <label for="name">Nama Depan</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" value="{{ old('name') }}" autofocus="">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="nama_tengah">Nama Depan</label>
                        <input id="nama_tengah" type="text" class="form-control @error('nama_tengah') is-invalid @enderror" name="nama_tengah" value="{{ old('nama_tengah') }}" autofocus="">
                        @error('nama_tengah')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="nama_belakang">Nama Depan</label>
                        <input id="nama_belakang" type="text" class="form-control @error('nama_belakang') is-invalid @enderror" name="nama_belakang" value="{{ old('nama_belakang') }}" autofocus="">
                        @error('nama_belakang')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus="">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="nisn">NISN</label>
                        <input type="text"  name="nisn" class="form-control @error('nisn') is-invalid @enderror" id="nisn" value="{{ old('nisn') }}"  placeholder="NISN">
                        @error('nisn')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="no_ijazah">No. Ijazah</label>
                        <input type="text"  name="no_ijazah" class="form-control @error('no_ijazah') is-invalid @enderror" id="no_ijazah" value="{{ old('no_ijazah') }}"  placeholder="No. Ijazah">
                        @error('no_ijazah')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
              
                <div class="row">
                    <div class="form-group col-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text"   name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" value="{{ old('tempat_lahir') }}"  placeholder="Tempat Lahir">
                        @error('tempat_lahir')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date"   name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" value="{{ old('tgl_lahir') }}"  placeholder="Tanggal Lahir">
                        @error('tgl_lahir')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin"   name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror"  >
                        <option value="" selected >Pilih...</option>
                        <option value="Laki - Laki" {{ old("jenis_kelamin") == "Laki - Laki" ? "selected":"" }}>Laki - Laki</option>
                        <option value="Perempuan" {{ old("jenis_kelamin") == "Perempuan" ? "selected":"" }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="sekolah_asal">Nama Sekolah Asal</label>
                    <input type="text"name="sekolah_asal" class="form-control @error('sekolah_asal') is-invalid @enderror" id="sekolah_asal" placeholder="Isikan sekolah asal anda">
                    @error('sekolah_asal')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="sekolah_sekarang">Mendaftar Sebagai Santri</label>
                    <select id="sekolah_sekarang" name="sekolah_sekarang" class="form-control @error('sekolah_sekarang') is-invalid @enderror">
                    <option value="" selected >Pilih...</option>
                    <option value="SD" >SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                    </select>
                    @error('sekolah_asal')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>


              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                  Daftar Sekarang
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="simple-footer">
          Copyright © Stisla 2018
        </div>
      </div>
    </div>
  </div>

 

@endsection
