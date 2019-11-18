@extends('layouts.admin')

@section('content')
    <div class="row text-uppercase">
        <div class="col-lg-12">
            <h1>Blog Bejegyzesek Letrehozasa</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <form method="POST" action="">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bejegyzes cim">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategoria</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tartalom</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-success mr-3">Letrehozas</button>
                <a href="{{ route('admin.articles') }}" class="btn btn-outline-danger">Megsem</a>
            </form>
        </div>
    </div>
@endsection
