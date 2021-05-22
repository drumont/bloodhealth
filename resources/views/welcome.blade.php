<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BloodHealth') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>


</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="{{ url('/') }}">{{ config('app.name', 'BloodHeath') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#research">Research</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                @if (Auth::guest())
                <li>
                    <a data-toggle="modal" href="#infos">Login</a>
                </li>
                <!--
                <li>
                    <a class="page-scroll" href="{{ route('register') }}">Register</a>
                </li>
                -->
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false" style="color: #fed136;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="/home" style="color: #000000;">Home</a>
                            </li>
                            <li>
                                <a href="/profile/{{ Auth::user()->name }}" style="color: #000;">My Profile</a>
                            </li>

                            <hr/>

                            <li>
                                <a href="/blood">Blood Bank</a>
                            </li>

                            <li>
                                <a href="/blood/create">Add a blood bag</a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #000;">
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
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text" style="margin-top: -150px;">
            <div class="intro-lead-in" style="color: #fed136;">Welcome To Our Blood Platform!</div>
            <div class="intro-heading" style="color: #000000;">It's Nice To help You</div>
            <div class="row text-center">
                <div class="panel panel-default col-md-4" style="opacity: 0.8;width: 350px; margin-left: 20px;">
                    <div class="panel-heading">
                        Enter your values
                    </div>
                    <div class="panel-body">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                        </span>
                        <!--
                        <div class="col-md-6">
                            <select id="rhesus" class="form-control" name="rhesus" required autofocus>
                                <option value="positif">positif</option>
                                <option value="negatif">negatif</option>
                            </select>

                            @if ($errors->has('rhesus'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('rhesus') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <select id="blood_group" class="form-control" name="blood_group" required autofocus>
                                <option value="AB">AB</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                            </select>

                            @if ($errors->has('blood_group'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('blood_group') }}</strong>
                                </span>
                            @endif
                        </div>
                        -->
                    </div>

                    <p class="text-muted"></p>
                </div>
                <div class="panel panel-default col-md-4" style="opacity: 0.8; width: 350px; margin-left: 20px;">
                    <div class="panel-heading">
                        Some caracterics
                    </div>
                    <div class="panel-body">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
                        </span>
                        <!--
                        <div class="col-md-6">
                            <select id="quantity" class="form-control" name="quantity" required autofocus>
                                <option value="adult-60CC">Adult-60CC</option>
                                <option value="pediatry-30CC">Pediatry-30CC</option>
                            </select>

                            @if ($errors->has('quantity'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('quantity') }}</strong>
                                        </span>
                            @endif
                        </div>
                        -->
                    </div>
                    <p class="text-muted"></p>
                </div>
                <div class="panel panel-default col-md-4" style="opacity: 0.8; width: 350px; margin-left: 20px;">
                    <div class="panel-heading">
                        Results
                    </div>
                    <div class="panel-body">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-file-text fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <p class="text-muted"></p>
                </div>
            </div>
            <a href="#" class="btn btn-xl">Research</a>
        </div>
    </div>
</header>

<!-- Research Section -->
<section id="research">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Research</h2>
                <h3 class="section-subheading text-muted">Research quickly what you want</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Enter your values</h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Some caracterics</h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file-text fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Results</h4>
                <p class="text-muted"></p>
            </div>
        </div>
    </div>
</section>


<!-- Team Section -->
<!--
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                    <h4>Kay Garland</h4>
                    <p class="text-muted">Lead Designer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                    <h4>Larry Parker</h4>
                    <p class="text-muted">Lead Marketer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                    <h4>Diana Pertersen</h4>
                    <p class="text-muted">Lead Developer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>


<!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
        </div>
    </div>
</aside>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; BloodHealth 2017</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<div class="modal fade" id="infos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-
                        dismiss="modal">x</button>
                <h4 class="modal-title" style=" color: #fed136;
                font-family: 'Kaushan Script' ;
                font-size: 24px;">
                    Login
                </h4>
            </div>
            <div class="modal-body">
                <span class="fa-stack fa-4x col-md-offset-4 ">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                </span>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                    <a class="page-scroll" href="{{ route('register') }}">Register</a>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>



<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('js/contact_me.js') }}"></script>

<!-- Theme JavaScript -->
<script src="{{ asset('js/agency.js') }}"></script>
</body>

</html>