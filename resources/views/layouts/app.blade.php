<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <!-- Scripts -->
    <style>
        nav{

            height: 70px;
            background:url({{ asset('img/bg-pattern.png') }}),#7b4397;
            background:url({{ asset('img/bg-pattern.png') }}),-webkit-linear-gradient(to left,#7b4397,#dc2430);
            background:url({{ asset('img/bg-pattern.png') }}),linear-gradient(to left,#7b4397,#dc2430);
        }

        .navbar-default .navbar-brand {
            color: #fed136;
            font-family: "Kaushan Script", "Helvetica Neue", Helvetica, Arial, cursive;
            font-size: 28px;
        }

        .panel-default .panel-heading {
            color: #fed136;
            font-family: "Kaushan Script", "Helvetica Neue", Helvetica, Arial, cursive;
            font-size: 20px;
        }

        .navbar-default .navbar-right li {
            font-size: 20px;
            color: #ffffff;
        }
    </style>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="margin-top: 10px;">
                        {{ config('app.name', 'Bloodhealth') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}" style="color: #ffffff; margin-top: 10px;">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color: #ffffff; margin-top: 10px;">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false" style="padding-top: 20px; color: #ffffff;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/home">Home</a>
                                    </li>
                                    <li>
                                        <a href="/profile/{{ Auth::user()->name }}">My Profile</a>
                                    </li>

                                    <hr>

                                    <li>
                                        <a href="/blood">Blood Bank</a>
                                    </li>

                                    <li>
                                        <a href="/blood/create">Add a blood bag</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
