<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

// Route::get('/', function()
// {
// 	$generator = new Badcow\LoremIpsum\Generator();
//     $data = $generator->getParagraphs(1);
// 	$name = "Vineet";
// 	return View::make('hello')->with('name', $data);
// 	//Route::get('/', 'HomeController@showWelcome');
// });
