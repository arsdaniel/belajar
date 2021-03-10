@extends('layouts.dashboard.dashboard')

@section('content')
@if ($status == 1)
    <livewire:santri.ubahdata />
@elseif($status == 2)
    <livewire:santri.upload-doc />
@elseif($status == 3)
<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
   

      <div class="row mt-sm-12">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card author-box card-primary">
                <div class="card-body">
                  
                 
                    <div class="author-box-name">
                      <a href="#" class="text-primary mb-2">{{ Auth::user()->name}} {{ Auth::user()->nama_belakang}} </a>
                    </div>
                    
                    <div class="author-box-description">
                      <h6>Informasi Akun Anda:</h6>
                          Email : <a  class="text-primary mb-3">{{ Auth::user()->email}}</a> <br>
                            Password : <a  class="text-primary mb-3"> {{ Auth::user()->tgl_lahir}} </a><br>
                            Status Pendaftaran : <a  class="text-warning mb-2"> <h6>Berkas kamu sedang di Evaluasi Admin</h6> </a><br>
                           
                    </div>
                   
                    
                  </div>
                </div>
              
            </div>
       
      </div>
    </div>
  </section>
@endif

@endsection