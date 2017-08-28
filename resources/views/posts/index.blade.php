@extends("layouts.master")

@section("title")
    <title> Index Posts</title>

@stop

@section("content")

    <main class="container">
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->content }}</div>
        <div>{{ $post->url }}</div>
        <div>{{ $post->created_by }}</div>
        @foreach($posts as $post)
        <a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a>
 			<div>{{ $post->content }}</div>
 			<div>{{ $post->url }}</div>
 			<div>{{ $post->created_by }}</div>
  	     @endforeach

    </main>
@stop
