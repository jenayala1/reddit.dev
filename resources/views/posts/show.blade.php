@extends("layouts.master")

@section("title")
    <title> Show Posts </title>

@stop

@section("content")

    <main class="container">
        <h2>{{ $post->title }}</h2>
    	<div>{{ $post->content }}</div>
    	<div>{{ $post->url }}</div>
    	<div>{{ $post->created_by }}</div>

    </main>

    @stop
