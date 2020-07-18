<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetasController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $recetas = ['Recceta Pizza', 'Receta Hamburguesa', 'Recceta Tacos'];
        $categorias = ['Comida Mexicana', 'Comida Argentina', 'Postres'];

        return view('recetas.index')
            ->with('recetas', $recetas)
            ->with('categorias', $categorias);
        //Otra forma
        //return view('recetas.index' , compact('recetas'));
    }
}
