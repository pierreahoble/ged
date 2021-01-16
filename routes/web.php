<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Login
Route::view('/', 'pages.login');

Route::get('home', 'DoController@index');

Route::get('ajouter','DoController@add');

Route::post('ajouter','DoController@store');

//Modifier doc
Route::get('modifier_{id}','DoController@show');

//

Route::view('search', 'pages.recherche_doc');