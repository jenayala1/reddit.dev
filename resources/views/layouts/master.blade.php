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
            h1 {
                font-family: "play";
                font-size: 48px;
                font-weight: bold;
                color: darkslategrey;
                text-align: center;
                padding-bottom: 20px;
            }

            h2 {
                font-family: "play";
                font-size: 36px;
            }

            label {
                font-family: "play";
                font-size: 30px;
            }

            a {
                font-size: 20px;
                color: dimgray;
                font-weight: bold;
            }
            body {
                background-color: mintcream;
            }
            #content {
            display: inline-block;
            height: auto;
            }

            .text-box {
                text-align: left;
                margin-left: 15px;
                font-size: 20px;
                font-family: "oswald";
            }

            .blog-details {
                font-size: 14px;
                margin-left: 20px;
                color: dimgrey;
                font-family: "oswald";
            }
            .auth-status {
                margin-right: auto;
                font-family: 'oswald';
                font-size: 14px;
                color: dimgrey;
            }
        </style>
        @include('layouts.partials._navbar')

        <br>
        <div class="auth-status">
            <span> User Authentication: </span>
                {{ (Auth::check()) ? "User is logged in" : "User is logged out" }}
            <br>
            <span> User ID: </span>
                {{ Auth::id() }}
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
