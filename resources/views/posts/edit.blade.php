@extends("layouts.master")

@section("title")
    <title> Edit Post </title>

@stop

@section("content")

    <main class="container">
        <h1> EDIT POST</h1>
        <br>
        <form method="POST" action="{{ action('PostsController@update', $post->id) }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <div>
                    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                    <label for="title">TITLE</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" placeholder="Post Title">
            </div>
            <br>
            <div class="form-group">
                {!! $errors->first('content', '<span class="help-block">:message</span>') !!}
                <label for="title"> BLOG CONTENT </label>
                <input type="textarea" id="content" name="content" class="form-control" value="{{ $post->content  }}" placeholder="Enter Content">
            </div>
            <br>
            <div class="form-group">
                {!! $errors->first('url', '<span class="help-block">:message</span>') !!}
                <label for="url"> URL </label>
                <input type="text" id="url" name="url" class="form-control" value="{{ $post->url }}" placeholder="Enter URL">
            </div>
             {{ method_field('PUT') }}
           <button type="submit" class="btn btn-success" value="edit post"> SUBMIT </button>
          </div>
       </form>
       <br>
       <!-- Delete form method -->
        <form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
                {!! csrf_field() !!}
        	<button class="btn btn-danger" value="delete post">DELETE </button>
        	{{ method_field('DELETE') }}
        </form>
    </main>

@stop
