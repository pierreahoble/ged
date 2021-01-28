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

Route::get('/change', function () {

    App\User::find(1)->update([
        'password'=>bcrypt('12345')
    ]);
    return "true";
});

//Login
Route::view('/', 'pages.login');

//Connexion a la base de donnees
Route::post('login','UserController@login');
    
//Register affichage de la vue 
Route::get('addUser','UserController@index');

 //Store user register
 Route::post('addUser','UserController@storeUser');
    

Route::group(['middleware' => 'App\Http\Middleware\AuthMiddleware'], function () {
    

    //Logout
    Route::get('logout','UserController@logout');
    
    //Profile utilisateur
    
    Route::get('profile','UserController@profileUser');
    
    //Modification des donnees user
    Route::post('profile','UserController@updateUser');
    
    
    
    Route::get('home', 'DoController@index');
    
    Route::get('ajouter','DoController@add');

    //Ajouter un document    
    Route::post('ajouter','DoController@storeDocument');
    
    //Modifier doc
    Route::get('modifier_{id}','DoController@show');
    
    //Valider les modificatins du doc
    Route::post('modificationDocument','DoController@updateDocument');

    //Suppression d'un document
    Route::get('supprimer_{id}','DoController@delete');



    //Categorie une type vue add
    Route::get('ajouterType','TypeController@index');

    //Add Type
    Route::post('ajouterType','TypeController@addType');


    
    Route::view('search', 'pages.recherche_doc');


    //Historique
    Route::get('historique','HistoriqueController@index');
});
