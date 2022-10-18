<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find easily a doctor and book online an appointment">
    <meta name="author" content="Ansonika">
    <title>Medisbook.ro iti ofera oportunitatea de a pastra in permanenta legatura cu medicii care au grija de sanatatea ta</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
        href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="{{ asset('img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="{{ asset('img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


    <!-- BASE CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->
    <header class="header_sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div id="logo_home">
                        <h1><a href="/" title="Medisbook">Medisbook</a></h1>
                    </div>
                </div>
                <nav class="col-lg-9 col-6">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu
                            mobile</span></a>
                    <ul id="top_access">
                        <li><a href="/register" class="btn_2 small"><i class="pe-7s-add-user"></i> Inregsitrare</a></li>
                    </ul>
                    <div class="main-menu">
                        <ul>
                            <li class="submenu">
                                <a href="/" class="show-submenu">Acasa</a>
                            </li>
                            <li class="submenu">
                                <a href="/about" class="show-submenu">Prezentare</a>
                            </li>
                            <li><a href="#0">Blog</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /main-menu -->
                </nav>
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->
    @section('doctor')
    @show
    <footer>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <p>
                        <a href="index.html" title="Findoctor">
                            <img src="img/logo.png" alt="" width="163" height="36" class="img-fluid">
                        </a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5>About</h5>
                    <ul class="links">
                        <li><a href="#0">About us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="#0">FAQ</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5>Useful links</h5>
                    <ul class="links">
                        <li><a href="#0">Doctors</a></li>
                        <li><a href="#0">Clinics</a></li>
                        <li><a href="#0">Specialization</a></li>
                        <li><a href="/registration">Join as a Doctor</a></li>
                        <li><a href="#0">Download App</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5>Contact with Us</h5>
                    <ul class="contacts">
                        <li><a href="tel://61280932400"><i class="icon_mobile"></i> + 61 23 8093 3400</a></li>
                        <li><a href="mailto:info@findoctor.com"><i class="icon_mail_alt"></i> help@medisbook.tk</a></li>
                    </ul>
                    <div class="follow_us">
                        <h5>Follow us</h5>
                        <ul>
                            <li><a href="#0"><i class="social_facebook"></i></a></li>
                            <li><a href="#0"><i class="social_twitter"></i></a></li>
                            <li><a href="#0"><i class="social_linkedin"></i></a></li>
                            <li><a href="#0"><i class="social_instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <ul id="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div id="copy">© 2022 Medisbook</div>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ 'js/common_scripts.min.js' }}"></script>
    <script src="{{ 'js/functions.js' }}"></script>

</body>

</html>