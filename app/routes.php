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

Route::get('/', function()
{
	return View::make('home');
});


Route::get('/api/search', function()
{
	$query = Input::get('query');

	$votantes = Votante::select('id', 'nombre','cedula')->search($query)->take(5)->get();

	$data = [];
	$data['query'] = $query;

	$data['suggestions'] = [];

	foreach ($votantes as $key => $votante) {
		$v = array('value' => $votante->nombre . " (".$votante->cedula.")", 'data' => $votante->id);
		array_push($data['suggestions'], $v);
	}

	return json_encode($data);

	//dd(Input::all());

});