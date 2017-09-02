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

use App\Task;

Route::get('/', 'HomeController@index');

Route::get('/admin', 'admin\HomeController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');














/*Route::get('about', function(){
	return 'About content';
});*/

//Route::get('about', 'AboutController@showAbout');

/*Route::get('about/directions', array('as' => 'directions', function(){
	$theURL = URL::route('directions');
	return "DIRECTIONS go to this URL: $theURL";
}));

Route::any('submit-form', function(){
	return 'Process FORM';
});

Route::get('about/{theSubject}', function($theSubject){
	return $theSubject.' Content goes here';
});

Route::get('about/classes/{theSubject}', function($theSubject){
	return "Content on  $theSubject";
});

Route::get('about/classes/{theArt}/{theSpecialty}', function($theArt, $theSpecialty){
	return "Welcome to $theSpecialty in $theArt!";
});

Route::get('where', function(){
	return Redirect::route('directions');
});*/

