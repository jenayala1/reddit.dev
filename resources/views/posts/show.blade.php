@extends("layouts.master")

@section("title")
    <title> Show Specific Post </title>

@stop

@section("content")
    <main class="container">
            <h2>{{ $post->title }}</h2>
        	<div>{{ $post->content }}</div>
        	<div>{{ $post->url }}</div>
        	<div>Created by: {{ $post->created_by }}</div>
            <div>Date Created: {{ $post->created_at }}</div>
            <div>Date Updated {{ $post->updated_at }}</div>
        </form>
    </main>

    @stop
