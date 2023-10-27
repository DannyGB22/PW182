<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// escribir bien el nombre de Requests con s al final
use App\Http\Requests\validadorFormBooks;


class libraryController extends Controller
{
    public function metodoInicio(){

        return view('principal');
    }

    public function metodoRegistro(){

        return view('RegistroLibro');
    }

    public function metodoGuardar(validadorFormBooks $req){


        return redirect('/registro')->with('confirmacion', 'Todo correcto: Libro ' . $req->input('txtTitulo') . ' guardado');
    }

}


