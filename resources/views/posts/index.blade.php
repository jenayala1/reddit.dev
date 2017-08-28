@extends("layouts.master")

@section("title")
    <title> My Posts! </title>

@stop

@section("content")

    <main class="container">
        @foreach($posts as $post)
        <h2><a  href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h2>
        	<div>{{ $post->content }}</div>
 			<div>{{ $post->url }}</div>
 			<div>{{ $post->created_by }}</div>
  	     @endforeach
        </form>
    </main>
@stop
