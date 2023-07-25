@extends('layout.app')

@section('title', 'Comic - DC Comics')

@section('main-section')
<div class="container">
    <div class="row">
        <div class="card col-12 ivy_card">
            <img class="card-img-top ivy_comic_img" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <a href="{{ route('guest.home') }}" class="btn btn-primary">Back To Comic List</a>
            </div>
        </div>
    </div>
</div>

@endsection