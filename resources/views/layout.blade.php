<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LHA - @yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    {{-- <link rel="icon" type="image/x-icon" href="favicon.ico" /> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Landon App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Contens
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clients') }}">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            {{-- @if (session('status')) --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                           Logout
                                       </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                       </form>
                </li>
            </ul>
            {{-- @endif --}}
        </div>
    </nav>
    <!-- End Top Bar -->
    <!-- Begin page content -->
    <main id="app" role="main" class="container">
        <br> @yield('content')
    </main>
    <!-- End page content -->
    <footer class="footer">
        <div class="container">
            <span class="text-muted">Copyright 2018</span>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- proper order: manifest.js, vendor.js, app.js' -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Optional JavaScript -->
    @yield('optional_js')
</body>

</html>