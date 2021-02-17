@extends('web.layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1>halaman home</h1>
                   @can('santri-baru')
                <a class="btn btn-primary" href="">Edit</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
