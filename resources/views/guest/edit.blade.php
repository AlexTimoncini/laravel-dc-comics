@extends('layout.app')

@section('title', 'Home - DC Comics')

@section('main-section')
<div class="container">
    <form class="row g-3" action="{{ route('guest.update', ['id' => $comic->id]) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="col-12">
            <h1>Modifica un Comic</h1>
        </div>
        <div class="col-md-6">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>
        <div class="col-md-6">
            <label for="serie" class="form-label">Serie</label>
            <input type="text" class="form-control" id="serie" name="series" value="{{ $comic->series }}">
        </div>
        <div class="col-12">
            <label for="type" class="form-label">Comic Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
        </div>
        <div class="col-md-6">
            <label for="price" class="form-label">Price ($)</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <div class="col-md-4">
            <label for="date" class="form-label">In vendita a partire dal:</label>
            <input type="text" class="form-control" id="date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="col-md-2">
            <label for="thumb" class="form-label">Link alla immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Modify</button>
        </div>
    </form>
</div>
@endsection