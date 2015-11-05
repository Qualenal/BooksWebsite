@extends('app')
@section('content')
    <body>Here are some dank books:</body>
    <table class="table table-bordered table-striped">
    @foreach($books as $book)
        <tr>
            <td><a href="{{ action('BooksController@show', [$book->id]) }}">{{$book->title}}</a></td>
            <td>{{$book->author}}</td>
            <td><a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Show Book</a></td>
            <td><a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit Book</a></td>
        </tr>
    @endforeach
    </table>
    <br>
@stop

@section('footer')
    <body>There are {{count($books)}} dank books here!</body>
@stop