@extends('app')

@section('content')
    <h1>Edit your Book!</h1>

    <hr/>

    {!! Form::model($book, ['method' => 'PATCH', 'action' => ['BooksController@update', $book->id]]) !!}
        @include('books._form', ['submitButtonText' => 'Update Book'])
    {!! Form::close() !!}

    @include('errors.list')
@stop