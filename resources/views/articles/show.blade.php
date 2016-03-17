@extends('welcome')

@section('content')

    <h1>Article Number: {{ $article->id }}</h1>
    <hr/>
    <h2>{{ $article->title }}</h2>
    <div class="body">
        {{ $article->body }}
    </div>


@stop