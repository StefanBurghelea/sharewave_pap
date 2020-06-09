<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function(){

    //USERS ---------------------------------------------------------------------------

    //POSTS ---------------------------------------------------------------------------

    Route::get('/posts', 'PostController@posts');
    Route::get('/posts/{id}', 'PostController@getPost');

    //Route::post('/posts', 'PostController@store'); trabalhar mais tarde
    //Route::put('/posts/{id}', 'PostController@update');

    //Route::delete('/posts/{id}', 'PostController@delete');

    Route::get('/posts/location/{id}','PostController@location');

    //criado na aula 1
    Route::get('/post/recent','PostController@recent');

    Route::get('/post/rating','PostController@rating');

    Route::get('/post/userPosts/{id}','PostController@userPosts');

    //LOCATION ----------------------------------------------------------------------------

    Route::get('/locations', 'LocationController@locations');
    Route::get('/locations/{id}', 'LocationController@getLocation');

    //Route::post('/locations', 'LocationController@store');
    //Route::put('/locations/{id}', 'LocationController@update');

    //Route::delete('/locations/{id}', 'LocationController@delete');

    //COMMENTS --------------------------------------------------------------

    Route::get('/comments', 'CommentController@comments');
    Route::get('/comments/{id}', 'CommentController@getComment');

    Route::post('/comment/store', 'CommentController@store');

    //Route::delete('/comments/{id}', 'CommentController@delete');

    Route::get('/comments/post/{id}','CommentController@post');

    //VOTES --------------------------------------------------------------
    Route::get('/votes', 'VoteController@votes');
    Route::get('/votes/{id}', 'VoteController@getVote');

    Route::post('/votes', 'VoteController@store');
    Route::put('/votes/{id}', 'VoteController@update');

    //LOGIN--------------------------------------------------------------

    Route::post('login','UserController@login');
    Route::post('register','UserController@register');

    

});
