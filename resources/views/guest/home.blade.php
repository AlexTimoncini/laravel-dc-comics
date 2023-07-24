@extends('layout.app')

@section('title', 'Home - DC Comics')

@section('main-section')
<table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Thumb</th>
        <th scope="col">Title</th>
        <th scope="col">Series</th>
        <th scope="col">Sale Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comicList as $comic)
        <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>
                <img class="ivy_comics_thumb" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </td>
            <td>
                <a href="{{ route('guest.show', $comic->id) }}">
                    {{ $comic->title }}
                </a>
            </td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $comicList->links() !!}
@endsection