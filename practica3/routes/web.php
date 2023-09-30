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


Route::view('/', 'welcome') ->name('apodoInicio');

Route::view('/formulario', 'Formulario')->name('apodoFormulario');

Route::view('/recuerdos', 'Recuerdos')->name('apodoRecuerdos');

Route::view('/componentes', 'Componentes')->name('apodoComp');


