<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Change Title and Meta tags-->
        <title>moOz - Egy mosollyal közelebb hozunk!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="icon" href="/favicon.ico">
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="assets/plugins/dist/css/plugins.min.css" />
        <!-- Main Template CSS -->
        <link rel="stylesheet" href="assets/css/main.css" id="zero_color" />
        <!-- Style Switch CSS -->
        <link rel="stylesheet" href="zero-styleswitch/style.css" />
    </head>
<body class="transparent-header gradient" data-spy="scroll" data-offset="75" data-target="#navbarCollapse">
        <!-- Loader -->
        <div id="preloader"></div>
        <!-- Loader End-->
        <!-- Main Wrap -->
        <div class="wrap">
            <!-- Header -->
            <header class="header">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-sticky">
                    <div class="container">
                        <a class="navbar-brand" href="#"><img class="img-fluid" src="/images/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav ml-auto mr-auto">
                                <li class="nav-item"><a class="nav-link" data-scroll href="#az-uj-szarnysegeded">Az új szárnysegéded</a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll href="#mi-ez">Mi ez?</a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll href="#hogy-mukodik">Hogy működik?</a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll href="#nezz-bele">NÉZZ BELE!</a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll href="#gyakran-ismetelt-kerdesek">GY.I.K.</a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll href="{{ route('articles.index') }}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll href="#kapcsolat">kapcsolat </a></li>
                            </ul>
                            <a href="#letoltes" class="btn btn-light btn-rounded d-none d-lg-block nav-link">LETÖLTÉS</a>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </header>
            <!-- End Header -->

            @yield('content')

            <!-- Footer -->
            <div class="footer pb-0">
                <div class="container">
                    <div class="row text-lg-left text-center">
                        <div class="col-12 col-lg-8 d-flex align-items-center pb-3">
                            <div class="mr-5">
                                <a href="" class="mr-3">ÁSZF</a>
                                <a href="/pdfs/gdpr.pdf" target="_blank">GDPR</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-right pb-3">
                            <ul class="list-inline my-auto social">
                                <li class="list-inline-item pr-2"><a href="https://www.facebook.com/moozforzoom" class="facebook" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item pr-2"><a href="https://www.instagram.com/mooz_forzoom/ " class="instagram" title="instagram" style="background-color: #C82C8D;" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row bg-light">
                    <div class="container">
                        <div class="col-12 text-center">
                            <span class="copyright">Copyright @ 2019 <a href="https://pixelapps.eu/" target="_blank">Pixel Apps.</a>   |   Minden jog fenntartva. </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Main Wrap -->
        <!-- back to top -->
        <a href="#" class="zero-scrolltop"><i class="fa fa-sort-asc" aria-hidden="true"></i></a>
        <!-- jQuery Plugins JS -->
        <script src="/assets/plugins/dist/js/plugins.min.js"></script>
        <!-- Main JS -->
        <script src="/assets/js/main.js"></script>
        <!-- Style Switch JS -->
        <script src="/zero-styleswitch/script.js"></script>
    </body>
</html>
