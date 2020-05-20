<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function()
{
	Route::get('/tweets', 'TweetsController@index')
		->name('home');
	Route::post('/tweets', 'TweetsController@store');
	Route::delete('/tweets/{tweet}/remove', 'TweetsController@destroy')->middleware('can:update,tweet');
	Route::get('/tweets/{tweet}/edit', 'TweetsController@edit')
		->middleware('can:update,tweet');
	Route::patch('/tweets/{tweet}', 'TweetsController@update')
		->middleware('can:update,tweet');

	Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');

	Route::post('/profiles/{user:username}/follow', 'FollowsController@store')
		->name('follow');
	Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')
		->middleware('can:edit,user');

	Route::patch('/profiles/{user:username}', 'ProfilesController@update')
		->middleware('can:edit,user');

	Route::get('/explore', 'ExploreController');

	Route::get('/profiles/{user:username}', 'ProfilesController@show')
		->name('profile');

	Route::get('/liked/notifications', 'TweetLikesController@show');
});

Auth::routes();