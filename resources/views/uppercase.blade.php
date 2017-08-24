@extends('layouts.master')
@section('title')
    <title> Uppercase Word</title>
@stop

@section('content')
<h2> uppercased: {{$word}} </h2>

<a href="{{ action( 'HomeController@lowercase', array($word )) }}">Lower Case</a>
@stop
