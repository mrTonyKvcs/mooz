@extends('layouts.articles')

@section('content')

    <div class="page-breadcrumb">
        <div class="content-table">
            <div class="content-middle">
                <div class="container text-center">
                    <h1>Blog Single Post</h1>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="zero-post">
                        <div class="post-thumb">
                            <div class="gallery-slider flexslider clearfix">
                                <ul class="slides">
                                    <li>
                                        <img src="/assets/images/b-1.jpg" alt="" class="img-fluid">
                                    </li>
                                    <li>
                                        <img src="/assets/images/b-2.jpg" alt="" class="img-fluid">
                                    </li>
                                    <li>
                                        <img src="/assets/images/b-3.jpg" alt="" class="img-fluid">
                                    </li>
                                </ul>
                            </div><!--gallery slider-->
                        </div>
                        <div class="post-meta"><h4 class="mb-3 mt-3"><a href="#">Aenean leo ligula, porttitor consequat</a></h4>
                            <ul class="list-inline news-meta">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> John</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-calendar"></i> 20 Sep. 2017</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-comments"></i> 20 Comments</a></li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.
                            </p>
                            <p>
                            Lorem ipsum dolor sit amet, <span class="text-color">coectetuer diam ipsum</span> dolor sit amet nonummy coectetuer diam ipsum dolor sit coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amipiscing elit sit amet, sit amet, coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amet diam nonummy adipiscing elit sit amet, sit ame. Lorem ipsum dolor sit amet, coectetuer diam ipsum dolor sit amet nonummy coectetuer diam ipsum dolor sit coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amipiscing elit sit amet.
                            </p>
                            <h4>Praesent mattis commodo augue.</h4>
                            <p>
                            Lorem ipsum dolor sit amet, coectetuer diam ipsum dolor sit amet nonummy coectetuer diam ipsum dolor sit coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amipiscing elit sit amet, sit amet, coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amet diam nonummy adipiscing elit sit amet, sit ame. Lorem ipsum dolor sit amet, coectetuer diam ipsum dolor sit amet nonummy coectetuer diam ipsum dolor sit coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amipiscing elit sit amet.
                            </p>
                        </div>
                    </div><!--end post-->
                </div>

                <div class="col-lg-4">
                    <div class="zero-sidebar">
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Search</h4>
                            <div class="beside-search">
                                <form>
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button type="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div><!--sidebar widget-->
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Latest News</h4>
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
@endsection
