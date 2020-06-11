@extends('layouts.article')

@section('content')

    <div class="row">
        @forelse($articles as $article)
            <div class="col-md-6">
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
                    <div class="post-meta"><h6 class="mb-3 mt-3"><a href="#">{{ $article->title }}</a></h6>
                        <ul class="list-inline news-meta">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> {{ $article->category->title }}</a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-calendar"></i> {{ $article->published_at }}</a></li>
                        </ul>
                    </div>
                    <div class="post-excerpt">
                        <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        </p>
                        <div class="text-right">
                            <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-link">Tovább...</a>
                        </div>
                    </div>
                </div><!--end post-->
            </div>
        @empty
            <p>nincs blog bejegyzes</p>
        @endforelse
    </div>
    <hr />

    {{ $articles->links() }}

@endsection
