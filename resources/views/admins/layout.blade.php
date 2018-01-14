<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PCC - Expert</title>
    <!-- Style -->
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pcc.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/simple-sidebar.css') }}" rel="stylesheet">
    <!-- /style -->
    <!-- Script -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/moment.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/locales/bootstrap-datepicker.th.min.js') }}"></script>
    <!-- /script -->
    @yield('head')
</head>

<body>
    @section('sidebar')
    <img class="img-fluid" src="{{ asset('assets/img/psu2.png') }}" alt="First slide" width="350" height="auto" >
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand">
            <img src="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjonpmR2eHWAhUGuI8KHXw7CY8QjRwIBw&url=https%3A%2F%2Fwww.humanrightslogo.net%2Fen%2Fdownload&psig=AOvVaw0wnsRAS60Q_93j-WdF7J2y&ust=1507575119963069"
                alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 border border-danger rounded">
                <input class="form-control mr-sm-2 border-0" type="text" placeholder="Search" aria-label="Search">
                <i class="material-icons">search</i>
            </form>
        </div>
    </nav>
    @show
    <div class="content">
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
    
    

</body>

</html>