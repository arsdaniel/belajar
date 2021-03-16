@extends('layouts.dashboard.dashboard')

@section('content')
  <livewire:admin.biayapendaftaran.index />
  @if (session()->has('success'))
<script>
    swal("great","{!! Session::get('success') !!}")
</script>
@endif
@endsection
