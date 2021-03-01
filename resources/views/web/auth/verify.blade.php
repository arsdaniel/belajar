@extends('web.layouts.app2')

@section('content')
<div class="container mt-5">
    <div class="row">
        
        <div class="col-12 col-sm-10 offset-sm-1 col-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            </div>

            <div class="card card-warning">
            <div class="card-header"><h4>Verifikasi Email</h4></div>

            <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-primary" role="alert">
                                {{ __('E-mail Verifikasi Sudah dikirim ke E-mail Anda') }}
                                
                            </div>
                        @endif
                        
                        {{ __('Sebelum Melanjutkan Pendaftaran, Silahkan cek Email Anda untuk Verifikasi Email.') }}
                        <br>
                    
                        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik disini untuk mengirim ulang') }}</button>.
                        </form>
                        


                    </div>
                </div>
                <div class="card author-box card-primary">
                    <div class="card-body">
                      
                     
                        <div class="author-box-name">
                          <a href="#">{{ Auth::user()->name}} {{ Auth::user()->nama_belakang}} </a>
                        </div>
                        
                        <div class="author-box-description">
                          <p>Informasi Akun Anda:<br>
                              Email : {{ Auth::user()->email}} <br>
                                Password : {{ Auth::user()->tgl_lahir}}</p>
                        </div>
                        
                      </div>
                    </div>
                  
            </div>
            
            
        </div>

        
</div>


@endsection
