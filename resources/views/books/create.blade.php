@extends('app')

@section('content')
    <h1>Enter a new Book!</h1>

    <hr/>

    {!! Form::open(['url' => 'books']) !!}
        @include('books._form', ['submitButtonText' => 'Add Book'])
    {!! Form::close() !!}

    @include('errors.list')
@stop