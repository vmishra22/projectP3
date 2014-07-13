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


Route::get('/', function() {
	return View::make('index');		
});

Route::post('/lorem', function() {

	$input =  Input::all();
	$numParagraphs = $input['paragraphs'];

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numParagraphs);

	$retArr = array('numParagraphs'=>$numParagraphs, 'paragraphs'=>$paragraphs);
    return View::make('lorem')->with('retArr', $retArr);
});


Route::get('/lorem', function() {

   return View::make('lorem');	

});

Route::get('/user', function() {

   return View::make('user');	

});

Route::post('/user', function() {

	$input =  Input::all();
	$numUsers = $input['users'];

	$bdayOption = false;
	$profileOption = false;
	foreach($input as $key => $value) {
		if ($key == "birthdate")
			$bdayOption = true;
		elseif ($key == "profile") 
			$profileOption = true;
	}

	$faker = Faker\Factory::create();
	$retArr = array('numUsers'=>$numUsers, 'bdayOption'=>$bdayOption, 'profileOption'=>$profileOption, 'faker'=>$faker);
	return View::make('user')->with('retArr', $retArr);
});