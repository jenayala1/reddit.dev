@extends("layouts.master")

@section("title")
    <title> Edit Post </title>

@stop

@section("content")

    <main class="container">
        <h1> Edit Post </h1>
        <form method="POST" action="{{ action('PostsController@update', array(1)) }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <div>
                    <label for="id"> Post ID </label>
                    <input type="int" id="id" name="post_id" class="form-control" value="{{ old('id') }}">
                </div>
                <div>
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
             {{ method_field('PUT') }}
           <button type="submit" class="btn btn-success" value="edit post"> SUBMIT </button>

          </div>
       </form>
       <br>
        <form method="DELETE" action="{{ action('PostsController@destroy', array(1)) }}">
                {!! csrf_field() !!}
        	<button class="btn btn-danger" value="delete post">DELETE </button>
        	{{ method_field('DELETE') }}
        </form>
    </main>

@stop
