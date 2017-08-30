<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')
        <!-- Bootstrap CSS-->
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <style>
            .navbar-header {
                background-color: lightgrey;
                color: white;
            }
            .title {
                color: lightseagreen;
                font-size: 72px;
                font-weight: bold;
                margin-bottom: 40px;
            }

            h1 {
                color: grey;
                text-align: center;
            }

            .content {
            display: inline-block;
            font-family: 'lato';
            }

        </style>
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand" href="{{ action('PostsController@index') }}">Reddit Home</a>
                <a class="navbar-brand" href="{{ action('PostsController@create') }}">Create Posts</a>
                <a class="navbar-brand" href="{{ action('PostsController@edit') }}">Edit Posts</a>
                <a class="navbar-brand">Login</a>
                <a class="navbar-brand">Logout</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
        </div>
        <br>
        @if (session()->has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif

        @if (session()->has('errorMessage'))
            <div class="alert alert-error">{{ session('errorMessage') }}</div>
        @endif
        @yield('content')

        <footer>

        </footer>
    </body>
</html>
