@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Blog bejegyzések</h1>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-success col-12 text-uppercase rounded-0">Új bejegyzés létrehozása</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cím</th>
                <th scope="col">Szerkesztés</th>
                <th scope="col">Törlés</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">3</th>
                <td>Title</td>
                <td><a href=""><i class="far fa-edit"></i></a></td>
            </tr>
        </tbody>
    </table>
@endsection
