@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Új bejegyzés létrehozása</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <form action="{{ route('admin.articles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Címe</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kategória</label>
            <select name="category_id" class="form-control rounded-0" id="exampleFormControlSelect1">
                <option value="1">moOz</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Publikálás dátuma</label>
            <input name="published_at" type="datetime-local" class="form-control" id="publishedAt" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Tartalom</label>
            <textarea name="content" class="form-control" id="mytextarea" rows="25"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Képfeltöltés</label>
            <input name="image" type="file" class="form-control-file" id="imagaUpload">
        </div>

        <div class="form-group">
                <button type="submit" class="btn btn-success col-lg-12 rounded-0 mb-2 text-uppercase">bejegyzés létrehozása</button>
                <a href="{{ route('admin.articles.index') }}" class="btn btn-danger col-lg-12 rounded-0 mt-lg text-uppercase">mégsem</a>
        </div>
    </form>
@endsection
