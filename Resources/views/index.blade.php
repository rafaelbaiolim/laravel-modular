@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>

    @foreach($posts as $post)
        <li>{{ $post->title}} - {{$post->author}}</li>
    @endforeach

@stop
