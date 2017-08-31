@extends("layouts.master")

@section("title")
    <title> LOGIN</title>

@stop

@section("content")
<style>

    label {
        font-family: "play";
        font-size: 20px;
    }
</style>

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}
    <div>
        <label for="email" > EMAIL </label>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <br>
    <div>
        <label for="password" > PASSWORD </label>
        <input type="password" name="password" id="password">
    </div>
    <br>
    <div>
        <input type="checkbox" name="remember">  REMEMBER ME
    </div>
    <br>
    <div>
        <button type="submit" class="btn btn-success">LOGIN</button>
    </div>
</form>

@stop
