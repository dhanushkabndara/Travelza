<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ContactusController;

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
//   Route::get('/',function (){
//     return view('index'); 
//  });
 //Route::get('/home', [HomeController::class, 'index']);
Route::get('/index',[PagesController::class,'index']);
// Route::get('/home',[App\Http\Controllers\PagesController::class,'index']);

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

 

// displays web pages

 Route::controller(PagesController::class)->group(function () {
    Route::get('/places','places' );
    Route::get('/hotel','hotel' );
    Route::get('/gallery','gallery' );
    Route::get('/contact','contact' );
    Route::get('/travel','travel');
    Route::get('/payment','payment');
    
});

Route::controller(HotelController::class)->group(function () {

    Route::post('/save_hotel','store');
    // Route::view('/img','img');
    
});
Route::controller(ContactController::class)->group(function () {

        Route::post('/save_contact','store');
});

 Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
