<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// escribir bien el nombre de Requests con s al final
use App\Http\Requests\validadorFormBooks;
use RealRashid\SweetAlert\Facades\Alert;


class libraryController extends Controller
{
    public function metodoInicio(){

        return view('principal');
    }

    public function metodoRegistro(){

        return view('RegistroLibro');
    }

    public function metodoGuardar(validadorFormBooks $req){


        // Guarda el mensaje en una variable de sesión
        session()->flash('confirmacion', 'Todo correcto: Libro ' . $req->input('txtTitulo') . ' guardado');

        // Muestra el mensaje usando SweetAlert
        Alert::success('Confirmación', session('confirmacion'));

        // Redirige a la página de registro
        return redirect('/registro');
        
    }

}


