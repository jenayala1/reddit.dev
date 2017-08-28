@extends("layouts.master")

@section("title")
    <title> Edit Post </title>

@stop

@section("content")

    <main class="container">
        <h1> Add a Post </h1>
        <form method="POST" action="{{ action('PostsController@update', array(1)) }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" placeholder="Post Title">
            </div>
            <div class="form-group">
                <label for="title">Content </label>
                <input type="textarea" id="content" name="content" class="form-control" value="{{ old('content' ) }}" placeholder="Enter Content">
            </div>
            <div class="form-group">
                <label for="url"> URL </label>
                <input type="text" id="url" name="url" class="form-control" value="{{ old('url') }}" placeholder="Enter URL">
            </div>
           <button type="submit" class="btn btn-default" value="edit post"> SUBMIT </button>
	          {{ method_field('PUT') }}
       </form>
        <form method="POST" action="{{ action('PostsController@destroy', array(1)) }}">
        	<input type="submit" class="btn btn-default" value="Delete post">
        	{{ method_field('DELETE') }}
        </form>
    </main>

@stop
