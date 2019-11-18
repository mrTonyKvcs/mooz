@extends('layouts.admin')

@section('content')
    <div class="row text-uppercase">
        <div class="col-lg-6">
            <h1>Blog Bejegyzesek</h1>
        </div>
        <div class="col-lg-6 text-right">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-outline-success text-uppercase"> Uj bejegyzes letrehozas</a>
        </div>
    </div>

    <div class="row text-uppercase mt-3">
        <div class="col">
            {{--<h2>Osszes Bejegyzes</h2>--}}
            @include('admin.articles.partials._all')
        </div>
    </div>
@endsection
