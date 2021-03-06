@extends('layouts.auth')


@section('content')
<div class="container mt-5">
    <div class="row">
        
        <div class="col-12 col-sm-10 offset-sm-1 col-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            </div>

            <div class="card card-warning">
            <div class="card-header"><h4 class="text-warning">Verifikasi Email</h4></div>

            <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-primary" role="alert">
                                {{ __('E-mail Verifikasi Sudah dikirim ke E-mail Anda') }}
                                
                            </div>
                        @endif
                        {{ __('Sebelum Melanjutkan Pendaftaran, Silahkan cek Email Anda untuk Verifikasi Email.') }}
                        <br>
                        <h6>Tidak menerima Email???</h6>
                    
                        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-warning ">{{ __('Kirim Ulang Email') }}</button>
                        </form>
                        

                    </div>
                </div>
                <div class="card author-box card-primary">
                    <div class="card-body">
                      
                     
                        <div class="author-box-name">
                          <a href="#" class="text-primary mb-2">{{ Auth::user()->name}} {{ Auth::user()->nama_belakang}} </a>
                        </div>
                        
                        <div class="author-box-description">
                          <h6>Informasi Akun Anda:</h6>
                              Email : <a  class="text-danger mb-2">{{ Auth::user()->email}}</a> <br>
                                Password : <a  class="text-danger mb-2"> {{ Auth::user()->tgl_lahir}} </a><br>
                                <a  class="text-primary mb-2"> Silahkan Login Menggunakan data diatas</p>
                        </div>
                        <div class="text-md-right">
                            <button  class="btn btn-primary "><a href="/" class="text-light">Kembali ke Beranda</a></button>
                        </div>
                        
                      </div>
                    </div>
                  
            </div>
            
            
        </div>

        
</div>


@endsection
