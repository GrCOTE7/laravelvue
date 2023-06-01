@extends('app')

@section('content')

<h2>Books Listing</h2>

@foreach ($books as $book) {
    Titre: {{ $book->title }}<br>
}
@endforeach

@endsection

