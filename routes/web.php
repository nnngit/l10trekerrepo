<?php
//21-12-2024
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookController;

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('welcome', function () {
    return view('welcome');
});

Route::resource('products',ProductController::class);
Route::resource('destinations',DestinationController::class);
Route::resource('tours',TourController::class);//pkgs tours
Route::resource('books',BookController::class);//tour bukings


Route::group(['middleware' => 'auth'], function(){
    //Route::resource('destinations',Destinationcontroller::class);
    //Route::resource('test',TestController::class);

});




//for login stuff end 
  
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
//Route::get('destinations',[DestinationController::class,'index']);  
  
Route::get('/', [AuthController::class, 'index']);
  
Route::get('login', [AuthController::class, 'LOGIN'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//for login stuff end


Route::get('listy', [Destinationcontroller::class, 'listy']); 
Route::get('testy', [Destinationcontroller::class, 'testy']); 

Route::get('tlisty', [Tourcontroller::class, 'listy']); 
Route::get('ttesty', [Tourcontroller::class, 'testy']); 

Route::get('blisty', [Bookcontroller::class, 'listy']); 
Route::get('btesty', [BookController::class, 'testy']); 


Route::get('tested',function ()   {
        echo "tested";
    });
