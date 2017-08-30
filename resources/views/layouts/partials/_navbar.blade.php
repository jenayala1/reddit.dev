<div class="container">
    <div class="navbar-header"><a class="navbar-brand" href="{{ action('PostsController@index') }}">Reddit Home</a>
        @if (Auth::check())
            <a class="navbar-brand" href="{{ action('PostsController@create') }}">Create Posts</a>
            <a class="navbar-brand" href="{{ action('Auth\AuthController@getLogout') }}">Logout</a>
        @else
            <a class="navbar-brand" href="{{ action('Auth\AuthController@getLogin') }}">Login</a>
            <a class="navbar-brand" href="{{ action('Auth\AuthController@getRegister') }}">Register</a>
        @endif
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span>
        </button>
    </div>
</div>
