<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

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

// ruta de tipo get sin controlador

// Route::get('/', function () {
//     return view('welcome');
// });

// ruta de tipo view sin controlador

// Route::view('/', 'welcome') ->name('apodoInicio');

// Route::view('/formulario', 'Formulario')->name('apodoFormulario');

// Route::view('/recuerdos', 'Recuerdos')->name('apodoRecuerdos');

// Route::view('/componentes', 'Componentes')->name('apodoComp');


// Rutas individuales para controlador

// Route::get('/',[diarioController::class, 'metodoInicio']) ->name('apodoInicio');

// Route::get('/formulario',[diarioController::class, 'metodoFormulario']) ->name('apodoFormulario');

// Route::get('/recuerdos',[diarioController::class, 'metodoRecuerdo']) ->name('apodoRecuerdos');

// Rutas agrupadas para controlador

Route::controller(diarioController::class)->group(function (){
    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/formulario', 'metodoFormulario')->name('apodoFormulario');
    Route::get('/recuerdos', 'metodoRecuerdo')->name('apodoRecuerdos');});



