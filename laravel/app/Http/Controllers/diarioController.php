<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{
    public function metodoInicio()
    {
        return view('welcome');
    }
    public function metodoFormulario()
    {
        return view('formulario');
    }
    public function metodoRecuerdo()
    {
        return view('recuerdos');
    }

    public function metodoGuardar(validadorFormDiario $req){
        // validaciones en el controlador

        // $validated = $req->validate([
        //     'txtTitulo' => 'required|max:10',
        //     'txtRecuerdo' => 'required|min:5',
        // ]);

        return redirect('/formulario')->with('confirmacion', 'Tu recuerdo llego al controlador');
        
    }
}



