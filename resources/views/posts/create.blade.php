@extends("layouts.master")

@section("title")
    <title> Posts Create Form </title>

@stop

@section("content")
<style>
    label {
        font-family: 'play';
        font-size: 18px;
        font-weight: bold;
    }
</style>
    <main class="container">
        <h1> Create a Post </h1>
        <form method="POST" action="{{ action('PostsController@store') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                <label for="title"> TITLE </label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}"placeholder="Post Title">
            </div>
            <div class="form-group">
                    {!! $errors->first('url', '<span class="help-block">:message</span>') !!}
                <label for="url"> URL </label>
                <input type="text" id="url" name="url" class="form-control" value="{{ old('url') }}" placeholder="Enter URL">
            </div>
            <br>
            <div class="form-group">
                    {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
                <label for="title"> BLOG CONTENT </label>
                <input type="textarea"  id="content" name="content" class="form-control" value="{{ old('content' ) }}" placeholder="Enter Content">
            </div>
            <br>
            <button class='btn btn-success'> Submit </button>

        </form>
    </main>

@stop
