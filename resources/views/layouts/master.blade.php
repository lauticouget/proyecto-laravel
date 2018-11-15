<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- TEST DATETIME -->
        {{-- bootstrap default color palette --}}
        <link rel="stylesheet" href="/path/to/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
        
</head>
<body>
    <div >
        @yield('test')
    </div>

    <!-- scripts -->
        {{-- JQUERY --}}
            {{-- jquery core 3.3.1 --}}
                <script  src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            {{-- jquery migate --}}
                <script src="https://code.jquery.com/jquery-migrate-3.0.1.js" integrity="sha256-VvnF+Zgpd00LL73P2XULYXEn6ROvoFaa/vbfoiFlZZ4=" crossorigin="anonymous"></script>
            {{-- jquery ui --}}
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
            {{-- jquery color --}}
                <script src="https://code.jquery.com/color/jquery.color-2.1.2.js" integrity="sha256-1Cn7TdfHiMcEbTuku97ZRSGt2b3SvZftEIn68UMgHC8=" crossorigin="anonymous"></script>
            {{-- jquery unit --}}
                <script src="https://code.jquery.com/qunit/qunit-2.6.2.js" integrity="sha256-72OhbBvECs6Z5vG0GfPqiyYvTf8vhdEVHKQcacIcIeM=" crossorigin="anonymous"></script>
            {{-- jquery mobile --}}
                <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js"></script>
            {{-- jquery pep --}}
                <script src="https://code.jquery.com/pep/0.4.3/pep.js"></script>

    asd
</body>
</html>
