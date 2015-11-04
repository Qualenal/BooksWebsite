@extends('app')
@section('content')
    Here are some dank books:
    @foreach($books as $book)
        <ul>
            <li><a href="{{ action('BooksController@show', [$book->id]) }}">{{$book->title}}</a> {{$book->author}}</li>
        </ul>
    @endforeach
    <br>
@stop

@section('footer')
    <body>There are {{count($books)}} dank books here!</body>
@stop