<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/','inicio')->name('ApodoInicio');
Route::view('vista1','vista1')->name('Apodovista1');

Route::get('vista2', function () {
    return view('vista2');});

Route::get('vista3', function () {
    return view('vista3');});

    