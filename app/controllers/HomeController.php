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
    	$data = $generator->getParagraphs(1);
    	$faker = Faker\Factory::create();
    	$array = ['returned_paragraphs' => $data, 'returned_users' => $faker];

		return View::make('hello')->with('array',$array);
	}

	public function showParagraphs()
	{
		$data = $generator->getParagraphs(1);
		return View::make('hello')->with('returned_paragraphs',$data);
	}

	public function showUsers()
	{
		$faker = Faker\Factory::create();
		$returned_users = ['name' => $faker->name, 'address' => $faker->address, 'text' => $faker->text];

		return View::make('hello')->with('returned_users',$returned_users);
	}
}
