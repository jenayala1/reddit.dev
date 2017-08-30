@extends("layouts.master")

@section("title")
    <title> All Our Posts! </title>

@stop

@section("content")

    <main class="container">
        <h1>  All Posts </h1>
        <br>
        @foreach($posts as $post)
        <h2><a  href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h2>
        <div>{{ $post->content }}</div>
        <br>
        <div>URL: {{ $post->url }}</div>
        <div>POST ID: {{ $post->id }}</div>
        <div> CREATED BY USER ID:  {{ $post->created_by }}</div>
        <div>DATE CREATED:  {{ $post->created_at }}</div>
        <div>DATE UPDATED: {{ $post->updated_at }}</div>
  	     @endforeach
         {!! $posts->render() !!}
        </form>
    </main>

@stop
