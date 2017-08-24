@extends('layouts.master')
@section('title')
    <title> Increment </title>
@stop

@section('content')
<h2> You entered: {{$data}} </h2>

<a href ="{{ action('HomeController@increment',  array($number)) }}">Increment{{$number}}</a>
@stop
