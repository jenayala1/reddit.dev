@extends('layouts.master')

@section('title')
    <title> Dog Create Form </title>

@stop

@section('content')

    <main class="container">
        <h1> Dog Create Form </h1>
        <form method="POST" action="{{ action ('DogsControllers@store') }}">"
            {!! csrf_field() !!}
            <input type="text" name="name" placeholder="Enter Dog Name" value="{{ old('name' ) }}"">
            <input type="text" name="breed" placeholder="Enter Dog Breed">
            <input type="text" name="age" placeholder="Enter Dog Age">
            <button> Submit </button>
        </form>

        <!-- Edit & Delete must be completed in a seperate form -->
        <form method="POST" action="{{ action('DogsController@destroy', array(2)) }}">
            {!! csrf_field() !!}
            <button class="btn-btn-danger" > DELETE DOG </button>
            {{method_field('DELETE') }}
        </form>
    </main>

@stop
