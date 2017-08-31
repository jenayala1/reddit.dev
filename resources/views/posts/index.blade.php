@extends("layouts.master")

@section("title")
    <title> All Our Posts! </title>

@stop

@section("content")

    <main class="container">
        <h1>  POSTS</h1>
        <br>
        @foreach($posts as $post)
        <h2><a  href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h2>
        <div class="text-box">{{ $post->content }}</div>
        <br>
        <div class="blog-details">
            <div>URL: {{ $post->url }}</div>
            <div>POST ID: {{ $post->id }}</div>
            <div> CREATED BY USER ID:  {{ $post->user->name }}</div>
            <div>DATE CREATED:  {{ $post->created_at }}</div>
            <div>DATE UPDATED: {{ $post->updated_at }}</div>
        </div>
  	     @endforeach
    
        </form>
    </main>

@stop
