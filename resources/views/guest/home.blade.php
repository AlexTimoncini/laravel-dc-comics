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
        <th scope="col"></th>
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
            <td>
                <form action="{{ route('guest.edit', ['id' => $comic->id]) }}" method="GET">
                    <button class="btn btn-success" type="submit">Edit</button>
                </form>
                <form action="{{ route('guest.destroy', ['id' => $comic->id]) }}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $comicList->links() !!}
@endsection