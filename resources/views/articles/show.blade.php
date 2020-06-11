@extends('layouts.article')

@section('content')
    <div class="zero-post">
        <div class="post-thumb">
            <div class="gallery-slider flexslider clearfix">
                <ul class="slides">
                    <li>
                        <img src="{{ $article->image_path }}" alt="{{ $article->title }}" class="img-fluid">
                    </li>
                </ul>
            </div><!--gallery slider-->
        </div>
        <div class="post-meta"><h4 class="mb-3 mt-3"><a href="#">{{ $article->title }}</a></h4>
            <ul class="list-inline news-meta">
                <li class="list-inline-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> {{ $article->category->title }}</a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-calendar"></i> {{ $article->published_at }}</a></li>
            </ul>
        </div>
        <div class="post-content">{!! $article->content !!}</div>
    </div>
@endsection
