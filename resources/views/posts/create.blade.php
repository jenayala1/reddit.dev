@extends("layouts.master")

@section("title")
    <title> Posts Create Form </title>

@stop

@section("content")
    <main class="container">
        <h1> Create a Post </h1>
        <form method="POST" action="{{ action('PostsController@store') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"placeholder="Post Title">
            </div>
            <div class="form-group">
                    {!! $errors->first('url', '<span class="help-block">:message</span>') !!}
                <label for="url"> URL </label>
                <input type="text" id="url" name="url" value="{{ old('url') }}" placeholder="Enter URL">
            </div>
            <br>
            <div class="form-group">
                    {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
                <label for="title">Content </label>
                <input type="textarea" id="content" name="content"  value="{{ old('content' ) }}" placeholder="Enter Content"></textarea>
            </div>
            <br>
            <button class='btn btn-success'> Submit </button>

        </form>
    </main>

@stop
