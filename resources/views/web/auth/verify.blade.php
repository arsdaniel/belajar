@extends('web.layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-primary" role="alert">
                            {{ __('E-mail Verifikasi Sudah dikirim ke E-mail Anda') }}
                        </div>
                    @endif

                    {{ __('Sebelum Login, Silah kan cek Email Anda untuk Verifikasi akun.') }}
                   
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik disini untuk mengirim ulang') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
