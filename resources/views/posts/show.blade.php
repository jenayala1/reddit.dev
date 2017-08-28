@extends("layouts.master")

@section("title")
    <title> Show Specific Post </title>

@stop

@section("content")
    <main class="container">
            <h2>{{ $post->title }}</h2>
        	<div>{{ $post->content }}</div>
        	<div>URL: {{ $post->url }}</div>
            <div>CREATED BY USER ID: {{ $post->id }}</div>
            <div>DATE CREATED:  {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</div>
            <div>DATE UPDATED: {{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</div>
            {!! $posts->render() !!}
        </form>
    </main>

    @stop
