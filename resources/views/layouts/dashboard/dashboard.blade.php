<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="description" content="{{ config('app.name', 'Laravel') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- CSS Libraries 
        <link rel="stylesheet" href="{{ asset('stisla/stisla/plugins/jqvmap/dist/jqvmap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/stisla/plugins/summernote/dist/summernote-bs4.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/stisla/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/stisla/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/stisla/plugins/bootstrap-daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/stisla/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/stisla/plugins/select2/dist/css/select2.min.css') }}">
        -->
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('stisla/stisla/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/stisla/assets/css/components.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/stisla/assets/css/custom.css') }}">
        <style>
            .btn-filter {
                padding: .500rem .75rem;
            }
        </style>
        	@livewireStyles
           
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
                    @role('admin') {{-- Laravel-permission blade helper --}}
                        @include('layouts.admin.shared.navbar')
                    @endrole
                    @role('santri') {{-- Laravel-permission blade helper --}}
                        @include('layouts.santri.shared.navbar')
                    @endrole
                
                <div class="main-sidebar">
                    @role('admin')
                        @include('layouts.admin.shared.sidebar')
                    @endrole
                    @role('santri')
                        @include('layouts.santri.shared.sidebar')
                    @endrole
                </div>

                <!-- Main Content -->
                <div class="main-content">
                    @yield('content')
                </div>
                    @role('admin')
                        @include('layouts.admin.shared.footer')
                    @endrole
                    @role('santri')
                        @include('layouts.santri.shared.footer')
                    @endrole
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="{{ asset('stisla/stisla/assets/js/stisla.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
        <!-- JS Libraies 
        <script src="{{ asset('stisla/stisla/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('stisla/stisla/plugins/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('stisla/stisla/plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('stisla/stisla/plugins/summernote/dist/summernote-bs4.js') }}"></script>
        <script src="{{ asset('stisla/stisla/plugins/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
        <script src="{{ asset('stisla/stisla/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('stisla/stisla/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
        <script src="{{ asset('stisla/stisla/plugins/select2/dist/js/select2.min.js') }}"></script>
        -->
        <!-- Template JS File -->
        <script src="{{ asset('stisla/stisla/assets/js/scripts.js') }}"></script>
        <script src="{{ asset('stisla/stisla/assets/js/custom.js') }}"></script>
       
        <!-- Page Specific JS File -->
        
        @livewireScripts

       
        
    </body>
</html>
