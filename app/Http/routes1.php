<?php


use App\Http\Controllers\Newscontroller;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', function () {
    //return view('helloworld');
});


//retrieve data
Route::get('view-records','StudViewController@index');
Route::get('viewnews','nvcontroller@index');



Route::get('list', ['New1']);

