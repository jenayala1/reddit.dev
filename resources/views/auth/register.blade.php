@extends("layouts.master")

@section("title")
    <title> Register </title>

@stop

@section("content")
<style>

</style>

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}
<h1> Register with Us! </h1>
    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <div>
        Password
        <input type="password" name="password">
    </div>
    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>
    <div>
        <button class="btn btn-primary" type="submit"> REGISTER! </button>
    </div>
</form>

@stop
