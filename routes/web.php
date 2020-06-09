<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::view('/','home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('tables/users','UserController@index')->name('users.index')->middleware('auth');
Route::get('users/delete/{id}','UserController@delete');

Route::get('tables/posts','PostController@index')->name('posts.index')->middleware('auth');
Route::get('posts/delete/{id}','PostController@delete');

Route::get('tables/locations','LocationController@index')->name('locations.index')->middleware('auth');
Route::get('locations/delete/{id}','LocationController@delete');
Route::post('store','LocationController@store')->name('location.store');

Route::get('tables/comments','CommentController@index')->name('comments.index')->middleware('auth');
Route::get('comments/delete/{id}','CommentController@delete');

Route::get('tables/votes','VoteController@index')->name('votes.index')->middleware('auth');
Route::get('votes/delete/{id}','VoteController@delete');

Route::get('tables/rewards','RewardController@index')->name('rewards.index')->middleware('auth');
Route::get('rewards/delete/{id}','RewardController@delete');
