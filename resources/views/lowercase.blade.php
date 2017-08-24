@extends('layouts.master')
@section('title')
    <title> Lowercase Word</title>
@stop

@section('content')
<h2> lowercased: {{ $word }} </h2>
<a href="{{ action( 'HomeController@uppercase', array($word )) }}">Upper Case</a>
@stop
