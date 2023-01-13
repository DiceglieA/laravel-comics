@extends('layouts.app')
@section('title', 'comics')
@section('main-content')
    <ul class="container">
        @foreach ($comics as $elem)
            <li>{{ $elem['title'] }}</li>
        @endforeach
    </ul>
@endsection
