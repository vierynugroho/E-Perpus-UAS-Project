<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token"
              content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet"
              href="{{ asset('css/app.css') }}">
        <link rel="dns-prefetch"
              href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito"
              rel="stylesheet">

        <!-- Scripts -->
        @viteReactRefresh
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
              crossorigin="anonymous" />

        {{-- Datatables --}}
        <link rel="stylesheet"
              href="{{ asset('DataTables/DataTables-1.13.8/css/dataTables.bootstrap5.css') }}">

        {{-- AddOn Script --}}
        @stack('addOnTopScript')
    </head>

    <body>
        @if(!Request::is('dashboard*')){
        <x-navbar></x-navbar>
        }
        @endif

        @yield('content')
        @yield('footer_content')

        {{-- ! SCRIPT AREA ! --}}
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
                integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
                crossorigin="anonymous"></script>

        {{-- JQuery --}}
        <script src="{{ asset('DataTables/jQuery-3.7.0/jquery-3.7.0.min.js') }}"></script>

        {{-- Datatables --}}
        <script src="{{ asset('DataTables/DataTables-1.13.8/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{asset('DataTables/DataTables-1.13.8/js/dataTables.bootstrap5.min.js')}}"></script>

        {{-- DataTable Config --}}
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>

        {{-- AddOn Script --}}
        @stack('addOnBottomScript')
    </body>

</html>