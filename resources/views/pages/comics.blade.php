@extends('layouts.app')
@section('title', 'comics')
@section('main-content')
    <ul class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                        <p class="card-text">{{ $comic['description'] }}</p>
                        <a href="#" class="btn btn-primary">Apri fumetto</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </ul>
@endsection
