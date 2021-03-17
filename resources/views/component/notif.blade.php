@if (session()->has('success'))
<script>
    swal("Selamat","{{ Session::get('success') }}", "success");
</script>
@endif