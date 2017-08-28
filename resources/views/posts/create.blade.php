@extends("layouts.master")

@section("title")
    <title> Posts Create Form </title>

@stop

@section("content")

    <main class="container">
        <h1> Add a Post </h1>
        <form method="POST" action="{{ action('PostsController@store') }}">
            {!! csrf_field() !!}
            <input type="text" id="title" name="title" placeholder="Post Title">
            <input type="textarea" id="content" name="content" rows="5" cols="40" placeholder="Enter Content"></textarea>
            <input type="text" id="url" name="url" placeholder="Enter URL">
            <button> Submit </button>
        </form>
    </main>

@stop
