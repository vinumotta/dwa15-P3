<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$generator = new Badcow\LoremIpsum\Generator();
		$data = $generator->getParagraphs(5);
    	$faker = Faker\Factory::create();
    	$array = ['returned_paragraphs' => $data, 'returned_users' => $faker];

		return View::make('hello')->with('array',$array);
	}

	public function showParagraphs($num_paragraphs)
	{
		$generator = new Badcow\LoremIpsum\Generator();
		$data = $generator->getParagraphs(5);
		$array = ['returned_paragraphs' => $data, 'returned_users' => null];
		return View::make('hello')->with('array',$array);
	}

	public function showUsers()
	{
		$faker = Faker\Factory::create();
		$array = ['returned_users' => $faker, 'returned_paragraphs' => null];
		//$returned_users = ['name' => $faker->name, 'address' => $faker->address, 'text' => $faker->text];

		return View::make('hello')->with('array',$array);
	}
}
