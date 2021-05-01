<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('index') ;//$router->app->version();
});

$router->group(['prefix' => 'taxi'], function () use ($router) {
   $router->group(['prefix' => 'driver'], function () use ($router) {
   		 $router->get('create', function(){
         	return view('drivers.create');
         });
   		 $router->get('print[/{record_id}]',  ['uses' => 'TaxiDriverController@print', 'as' => 'taxi-driver-print']);
   		 $router->get('{record_id}', ['uses' => 'TaxiDriverController@show', 'as' => 'taxi-driver']);
   		 
   });
});