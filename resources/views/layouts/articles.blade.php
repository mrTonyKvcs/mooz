<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Change Title and Meta tags-->
        <title>moOz Blog - Egy mosollyal közelebb hozunk!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="icon" href="/favicon.ico">
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="/assets/plugins/dist/css/plugins.min.css" />
        <!-- Main Template CSS -->
        <link rel="stylesheet" href="/assets/css/main.css" id="zero_color" />
        <!-- Style Switch CSS -->
        <link rel="stylesheet" href="/zero-styleswitch/style.css" />
    </head>

    <body class="transparent-header">
        <!-- Loader -->
        <div id="preloader"></div>
        <!-- Loader End-->
        <!-- Main Wrap -->
        <div class="wrap">
            <!-- Header -->
            <!-- Navbar -->
            <nav class="navbar navbar-sticky">
                <div class="container">
                    <a class="navbar-brand" href="#"><img class="img-fluid" src="/images/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="offcanvas" data-target="#navbarCollapse" data-placement="left" data-disableScrolling="true">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </nav>
            <div id="navbarCollapse" class="navmenu-inverse navmenu navmenu-fixed-left text-center offcanvas" role="navigation">
                <a class="navbar-brand" href="#"><img class="img-fluid" src="/images/logo.png" alt=""></a>
                <hr />
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Kezdőlap</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('articles.index') }}">Blogok</a></li>
                </ul>
                <hr />
                <ul class="list-inline my-auto social">
                    <li class="list-inline-item pr-2"><a href="https://www.facebook.com/moozforzoom" class="facebook" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item pr-2"><a href="https://www.instagram.com/mooz_forzoom/ " class="instagram" title="instagram" style="background-color: #C82C8D;" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <hr />
                <a href="#"><img src="/assets/images/google-play.png" class="img-fluid mb-3" width="180" alt="" /></a>
                <a href="#"><img class="img-fluid mb-3" width="180" src="/assets/images/app-store.png" alt="" /></a>
            </div>

            <!-- End Navbar -->
            </header>
            <!-- End Header -->
            <!-- Section main banner -->
            <!--==============page header============-->
            @yield('content')
            <!-- Footer -->
            <div class="footer pb-0 bg-dark">
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
