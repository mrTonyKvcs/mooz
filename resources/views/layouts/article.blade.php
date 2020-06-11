<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Change Title and Meta tags-->
        <title>moOz - Egy mosollyal közelebb hozunk!</title>
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

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
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
                    <a class="navbar-brand" href="#"><img class="img-fluid" src="/images/blog/logo.png" alt=""></a>
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
                    <li class="nav-item"><a class="nav-link" href="{{ route('articles.index') }}">Blog</a></li>
                </ul>
                <hr />
                <ul class="list-inline my-auto social">
                    <li class="list-inline-item pr-2"><a href="#" class="facebook" title="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item pr-2"><a href="#" class="twitter" title="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item pr-2"><a href="#" class="pinterest" title="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                    <li class="pr-0 list-inline-item pr-0"><a href="#" class="linkedin" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <hr />
                <a href="https://play.google.com/store/apps/details?id=com.pixelapps.mooz" target="_blank"><img src="/assets/images/google-play.png" class="img-fluid mb-3" width="180" alt="" /></a>
                <a href="https://apps.apple.com/hu/app/mooz/id1469342209?l=hu" target="_blank"><img class="img-fluid mb-3" width="180" src="/assets/images/app-store.png" alt="" /></a>
            </div>

            <!-- End Navbar -->
            </header>
            <!-- End Header -->


            <!-- Section main banner -->
            <!--==============page header============-->
            <div class="page-breadcrumb blog-wallpaper">
                {{--<div class="content-table">--}}
                    {{--<div class="content-middle">--}}
                        {{--<div class="container text-center">--}}
                            {{--<h1>Blog With Rigth Sidebar</h1>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
            </div>
            <!--==============end page header============-->
            <!-- Section Blogs -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            @yield('content')
                        </div>
                        <div class="col-lg-4">
                            <div class="zero-sidebar">
                                <div class="sidebar-widget">
                                    <h4 class="widget-title">Legfrissebb hírek</h4>
                                    <ul class="widget-news">
                                        <li>
                                            <div class="news-pic"> <img src="/assets/images/Rounded-Rectangle-35.jpg" alt="Aenean leo ligula, porttitor consequat"> </div>
                                            <div class="news-box-right">
                                                <h4 class="news-title"><a href="#" title="Aenean leo ligula, porttitor consequat">Aenean leo ligula, porttitor consequat</a></h4>
                                                <div class="news-meta">March 23, 2017</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-pic"> <img src="/assets/images/Rounded-Rectangle-351.jpg" alt="Aenean leo ligula, porttitor consequat"> </div>
                                            <div class="news-box-right">
                                                <h4 class="news-title"><a href="#" title="Aenean leo ligula, porttitor consequat">Aenean leo ligula, porttitor consequat</a></h4>
                                                <div class="news-meta">March 22, 2017</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-pic"> <img src="/assets/images/Rounded-Rectangle-352.jpg" alt="Aenean leo ligula, porttitor consequat"> </div>
                                            <div class="news-box-right">
                                                <h4 class="news-title"><a href="#" title="Aenean leo ligula, porttitor consequat">Aenean leo ligula, porttitor consequat</a></h4>
                                                <div class="news-meta">March 21, 2017</div>
                                            </div>
                                        </li>
                                    </ul>

                                </div><!--sidebar widget-->
                                {{--<div class="sidebar-widget">--}}
                                    {{--<h4>Categories</h4>--}}
                                    {{--<ul class="category-list list-angle-double">--}}
                                        {{--<li><a href="#">Category 1</a></li>--}}
                                        {{--<li><a href="#">Category 2</a></li>--}}
                                        {{--<li><a href="#">Category 3</a></li>--}}
                                        {{--<li><a href="#">Category 4</a></li>--}}
                                        {{--<li><a href="#">Category 5</a></li>--}}
                                        {{--<li><a href="#">Category 6</a></li>--}}
                                        {{--<li><a href="#">Category 7</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--<div class="sidebar-widget archive-widget">--}}
                                    {{--<h4 class="widget-title">Archive</h4>--}}
                                    {{--<ul class="archive-list list-angle-double">--}}
                                        {{--<li><a href="#" title="May 2017">May 2017</a> </li>--}}
                                        {{--<li><a href="#" title="March 2017">March 2017</a> </li>--}}
                                        {{--<li><a href="#" title="February 2017">February 2017</a> </li>--}}
                                        {{--<li><a href="#" title="January 2017">January 2017</a> </li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                <div class="sidebar-widget tags-widget mb-1">
                                    <h4 class="widget-title">Tags</h4>
                                    <a href="#">App</a>
                                    <a href="#">Opportunities</a>
                                    <a href="#">Development</a>
                                    <a href="#">Software</a>
                                    <a href="#">Articles</a>
                                    <a href="#">Audio</a>
                                    <a href="#">Culture</a>
                                    <a href="#">Business</a>
                                    <a href="#">Trends</a>
                                    <a href="#">Video </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Blogs -->

            <!-- Section Newsletter -->
            <section class="text-white" style="background: url(/images/footer.png);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 ml-auto mr-auto wow fadeInUp text-center text-white">
                            <h2 class="text-white text-uppercase">Subscribe to Our Newsletter</h2>
                            <p>Etiam sit amet orci eget eros faucibus tincidunt. Sed fringilla mauris sit amet nibh.</p>
                            <div class="row">
                                <div class="col-md-8 col-lg-8 ml-auto mr-auto">
                                    <form action="mailchimp/process-subscribe.php" id="mc-form" method="post">
                                        <div class="row">
                                            <div class="col-12 col-lg-8 px-md-0 px-lg-2">
                                                <div class="form-group">
                                                    <input type="text" name="mc_email" required="required" class="form-control" placeholder="Email address...">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 px-md-0">
                                                <input type="submit" name="mc_add" class="btn btn-cta btn-sm mb-4" value="Subscribe">
                                            </div>
                                        </div>
                                        <div class="text-center" id="mc-result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Newsletter -->

            <!-- Footer -->
            <div class="footer">
                <div class="container">
                    <div class="row text-lg-left text-center">
                        <div class="col-12 col-lg-6">
                            <span class="copyright">Copyright @ 2017 <a href="#">Zero App Landing Page.</a>   |   All right reserved. </span>
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-right">
                            <ul class="list-inline my-auto social">
                                <li class="list-inline-item pr-2"><a href="#" class="facebook" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item pr-2"><a href="#" class="twitter" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item pr-2"><a href="#" class="dribbble" title="dribbble"><i class="fa fa-dribbble"></i></a></li>
                                <li class="list-inline-item pr-2"><a href="#" class="pinterest" title="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="pr-0 list-inline-item pr-0"><a href="#" class="linkedin" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
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
