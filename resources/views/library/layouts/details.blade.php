@extends('library.app')
@section('title', 'Book | Detail')
@section('content')
    <div class="container">
        @foreach ($books as $book)
        @endforeach
    </div>
@endsection
