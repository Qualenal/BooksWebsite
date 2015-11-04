@extends('app')

@section('content')
    <h1>{{$book->title}}</h1>
    <body>{{$book->author}} ({{$book->year}}) {{$book->comments}}</body>
@stop