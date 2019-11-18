@extends('layouts.articles')

@section('content')

<div class="page-breadcrumb">
    <div class="content-table">
        <div class="content-middle">
            <div class="container text-center">
                <h1>Blog With Rigth Sidebar</h1>
            </div>
        </div>
    </div>
</div>

<!-- Section Blogs -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-6">
                            <div class="zero-post">
                                <div class="post-thumb">
                                    <img src="assets/images/Rounded-Rectangle-352.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="post-meta"><h6 class="mb-3 mt-3"><a href="#">{{ $article->title }}</a></h6>
                                    <ul class="list-inline news-meta">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> John</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-calendar"></i> {{ $article->published_at }}</a></li>
                                    </ul>
                                </div>
                                <div class="post-excerpt">
                                    <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    </p>
                                    <div class="text-right">
                                        <a href="#" class="btn btn-link">Tovább...</a>
                                    </div>
                                </div>
                            </div><!--end post-->
                        </div>
                    @endforeach
                </div>
                <hr />
                <div class="d-flex justify-content-center">
                    {{ $articles->links() }}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="zero-sidebar">
                    {{--<div class="sidebar-widget">--}}
                        {{--<h4 class="widget-title">Search</h4>--}}
                        {{--<div class="beside-search">--}}
                            {{--<form>--}}
                                {{--<input type="text" class="form-control" placeholder="Search...">--}}
                                {{--<button type="button"><i class="fa fa-search"></i></button>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}<!--sidebar widget-->
                    <div class="sidebar-widget">
                        <h4 class="widget-title">Latest News</h4>
                        <ul class="widget-news">
                            <li>
                                <div class="news-pic"> <img src="assets/images/Rounded-Rectangle-35.jpg" alt="Aenean leo ligula, porttitor consequat"> </div>
                                <div class="news-box-right">
                                    <h4 class="news-title"><a href="#" title="Aenean leo ligula, porttitor consequat">Aenean leo ligula, porttitor consequat</a></h4>
                                    <div class="news-meta">March 23, 2017</div>
                                </div>
                            </li>
                            <li>
                                <div class="news-pic"> <img src="assets/images/Rounded-Rectangle-351.jpg" alt="Aenean leo ligula, porttitor consequat"> </div>
                                <div class="news-box-right">
                                    <h4 class="news-title"><a href="#" title="Aenean leo ligula, porttitor consequat">Aenean leo ligula, porttitor consequat</a></h4>
                                    <div class="news-meta">March 22, 2017</div>
                                </div>
                            </li>
                            <li>
                                <div class="news-pic"> <img src="assets/images/Rounded-Rectangle-352.jpg" alt="Aenean leo ligula, porttitor consequat"> </div>
                                <div class="news-box-right">
                                    <h4 class="news-title"><a href="#" title="Aenean leo ligula, porttitor consequat">Aenean leo ligula, porttitor consequat</a></h4>
                                    <div class="news-meta">March 21, 2017</div>
                                </div>
                            </li>
                        </ul>

                    </div><!--sidebar widget-->
                    <div class="sidebar-widget">
                        <h4>Categories</h4>
                        <ul class="category-list list-angle-double">
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 2</a></li>
                            <li><a href="#">Category 3</a></li>
                            <li><a href="#">Category 4</a></li>
                            <li><a href="#">Category 5</a></li>
                            <li><a href="#">Category 6</a></li>
                            <li><a href="#">Category 7</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget archive-widget">
                        <h4 class="widget-title">Archive</h4>
                        <ul class="archive-list list-angle-double">
                            <li><a href="#" title="May 2017">May 2017</a> </li>
                            <li><a href="#" title="March 2017">March 2017</a> </li>
                            <li><a href="#" title="February 2017">February 2017</a> </li>
                            <li><a href="#" title="January 2017">January 2017</a> </li>
                        </ul>
                    </div>
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
<section class="bg-newsletter text-white">
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


@endsection
