@extends("layouts.master")

@section("title")
    <title> Register </title>

@stop

@section("content")
<style>
    label {
        font-family: "play";
        font-size: 20px;
        margin-left: 10px;
        padding-right: 10px;
    }
    h2 {
        text-align: center;
        padding-bottom: 20 px;
    }
</style>

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}
<h2> PLEASE REGISTER TO CREATE A POST </h2>
<br>
    <div>
        <label for="name"> NAME  </label>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <br>
    <div>
        <label for="email"> EMAIL  </label>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <br>
    <div>
        <label for="password"> PASSWORD  </label>
        <input type="password" name="password">
    </div>
    <br>
    <div>
        <label for="confirm_password"> CONFIRM PASSWORD   </label>
        <input type="password" name="password_confirmation">
    </div>
    <br>
    <div>
        <button class="btn btn-primary" type="submit"> REGISTER! </button>
    </div>
</form>
@stop
