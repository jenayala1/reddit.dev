<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::resource('posts', 'PostsController');


Route::get('/uppercase/{word}', 'HomeController@uppercase');
Route::get('/lowercase/{word}', 'HomeController@lowercase');
Route::get('/increment/{number}', 'HomeController@increment');
// Rotue w/ required parameters
Route::get('/add/{num1}/{num2}', 'HomeController@add');
// Optional parameter w/ default value
Route::get('/sayhello/{name?}', 'HomeController@sayHello');
Route::get('/rolldice/{guess}', 'HomeController@rolldice');

Route::get('sample/{str}','SampleController@firstLetter');
Route::get('/process/{num}', 'SampleController@processNum');
Route::get('/double/{num}', 'SampleController@doubleNum');
Route::get('/triple/{num}', 'SampleController@tripleNum');
Route::get('/zero/{num}', 'HomeController@resetToZero');


Route::resource('dogs', 'DogsController');

Route::get('create-user', function() {
    $user = new \App\User();
 	$user->name = "admin";
 	$user->email = "admin@codeup.com";
 	$user->password = "password";
 	$user->save();

});

Route::get('orm-test', function ()
{
    $post1 = new \App\Models\Post();
    $post1->title = 'Eloquent is awesome!';
    $post1->url='https://laravel.com/docs/5.1/eloquent';
    $post1->content  = 'It is super easy to create a new post.';
    $post1->created_by = 1;
    $post1->save();
});
