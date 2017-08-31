@extends("layouts.master")

@section("title")
    <title> Show Specific Post </title>

@stop

@section("content")
<style>
    .vote-header {
        font-size: 20px;
        color: darkgrey;
        font-family: 'oswald';
        padding-bottom: 10px;
    }

    button {
        padding-left: 20px;

    }

</style>
    <main class="container">
            <h2>{{ $post->title }}</h2>
            <a href="{{ action('PostsController@edit', $post->id) }}">
            <span class="glyphicon glyphicon-pencil"></span> EDIT POST</a>
            <div class="text-box">
                <div>{{ $post->content }}</div>
            </div>
            <br>
            <div class="blog-details">
            	<div>URL: {{ $post->url }}</div>
                <div>CREATED BY USER ID: {{ $post->user->name }}</div>
                <div>DATE CREATED:  {{ $post->created_at }}</div>
                <div>DATE UPDATED: {{ $post->updated_at }}</div>
            </div>
        </form>
        <br>
        <div class="vote-header" > VOTE ON THIS POST </div>
        <form method="POST" action="{{ action('PostsController@index', $post->id) }}">
                {!! csrf_field() !!}
            <button class="btn btn-success" type="submit" value="1" name="yes"> AWESOME </button>
            <button class="btn btn-danger"  type="submit" value="0" name="no"> AWFUL </button>
             {{ method_field('PUT') }}
    </main>

    @stop
