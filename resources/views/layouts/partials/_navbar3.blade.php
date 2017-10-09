<style>
    .navbar-header {
        background-color: mintcream;
    }

    .navbar-brand {
        color: silver;

    }
    .navbar-nav>li>a {
        font-size: 18px;
        background-color: mintcream;
        padding-bottom: 10px;
    }
    a {
        font-family: "play";
        font-size: 24px;
        color: black;

    }
</style>

<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ action('PostsController@index') }}"> HOME </a>
            @if (Auth::check())
            <ul class="nav navbar-nav navbar-right" >
                <li><a href="{{ action('PostsController@create') }}"> CREATE POST </a></li>
                <li><a href="{{ action('Auth\AuthController@getLogout') }}"> LOGOUT </a></li>
            </ul>
            @else
            <ul class="nav navbar-nav navbar-right" >
                <li><a href="{{ action('Auth\AuthController@getLogin') }}"> LOGIN </a></li>
                <li><a href="{{ action('Auth\AuthController@getRegister') }}"> REGISTER! </a><li>
            </ul>
        @endif
            <ul class="nav navbar-nav navbar-right" >
                <li><a href="{{ action('PostsController@index') }}"> VIEW POSTS </a></li>
            </ul>
            <br>
        <form class='navbar-form' action=''{{ action('PostsController@index') }}">
            <br>
            <div class="form-group">
                    <input name="q" type="text" class="form-control" placeholder="Search by title">
                    <button type="submit" class="btn btn-primary"> Submit Search </button>
            </div>
        </form>

    </div>
</div>
