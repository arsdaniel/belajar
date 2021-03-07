@extends('layouts.dashboard.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-7">
            @livewire('admin.santri.profile', ['user' => $user], key($user->id))
            </div>
        </div> 
    </div>
  </section>
  @endsection
 