<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
    // Funcion inical para devolver la vista del usuario
    public function __invoke()
    {
        // return "Bienvenido ala pagina pincipal";
        // Funcion para retornar una vista 
        return view('home');
    }
}
