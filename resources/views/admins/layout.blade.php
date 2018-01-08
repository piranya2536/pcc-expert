<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PCC - Expert</title>
        <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/pcc.css') }}" rel="stylesheet">
        <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
        <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        
    </body>
</html>