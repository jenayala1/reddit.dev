@extends("layouts.master")

@section("title")
    <title> Posts Create Form </title>

@stop

@section("content")

    <main class="container">
        <h1> Add a Post </h1>
        <form method="POST" action="{{ action('PostsController@store') }}">
            {!! csrf_field() !!}
            <input type="text" name="title" placeholder="Post Title">
            <input type="textarea" name="content" placeholder="Enter Content">
            <input type="text" name="url" placeholder="Enter URL">
            <button> Submit </button>
        </form>
    </main>

@stop
