<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\apucontroller;

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
//simple routing
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','home')->name('welcome');
Route::view('about','about')->name('about');
Route::view('rules','rules')->name('rules');;

Route::view('login','login')->name('login');;
Route::post('login',[apucontroller::class,'loginuser']);

Route::view('register','register')->name('register');
Route::POST('register1',[apucontroller::class,'registeruser'])->middleware('protect');


//use of includes  (one blade in another blade)

//Route::view('header','header');