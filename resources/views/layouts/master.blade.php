<!DOCTYPE html>
    <html lang="en">
        <head>
            <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
           <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
           <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
           <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
           <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
           <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
           <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
           <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
           <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
           <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
           <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
           <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
           <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
           <link rel="manifest" href="/manifest.json">
           <meta name="msapplication-TileColor" content="#ffffff">
           <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
           <meta name="theme-color" content="#ffffff">
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

       @include('layouts.partials._navbar')
        @yield('title')
            <!-- Bootstrap CSS-->
        	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <style>
                h1 {
                    font-family: "play";
                    font-size: 48px;
                    font-weight: bold;
                    color: black;
                    text-align: center;
                    padding-bottom: 20px;
                }

                h2 {
                    font-family: "play";
                    font-size: 36px;
                    color: black;
                }

                label {
                    font-family: "play";
                    font-size: 30px;
                }

                a {
                    font-size: 20px;
                    color: dimgrey;
                    font-weight: bold;
                }
                body {
                    background-color: mintcream;
                    color: black;
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
                    color: black;
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
                    color: white;
                }
            </style>
        </head>
        <body>
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
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </body>
    </html>
