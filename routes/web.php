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
    return $router->app->version();
});

$router->get('/table_kelas', ['uses' => 'TableKelasController@index']);
$router->get('/table_kelas/{id}', ['uses' => 'TableKelasController@show']);
$router->get('/table_kelas', ['uses' => 'TableKelasController@store']);
$router->get('/table_kelas/{id}', ['uses' => 'TableKelasController@update']);
$router->post('/table_kelas', ['uses' => 'TableKelasController@destroy']);