@extends("layouts.master")

@section("title")
    <title> My Posts! </title>

@stop

@section("content")

    <main class="container">
        <h1> My Posts </h1>
        @foreach($posts as $post)
        <h2><a  href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h2>
        <div>{{ $post->content }}</div>
        <br>
        <div>URL: {{ $post->url }}</div>
        <div>POST ID: {{ $post->id }}</div>
        <div> CREATED BY USER ID:  {{ $post->created_by }}</div>
        <div>DATE CREATED:  {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</div>
        <div>DATE UPDATED: {{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</div>
  	     @endforeach
         {!! $posts->render() !!}
        </form>
    </main>

@stop
