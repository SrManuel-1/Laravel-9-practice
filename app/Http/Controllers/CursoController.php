<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Una vista principal se le coloca index
    public function index(){
        return view('cursos.index');
    }

    //
    public function create(){
        return view('cursos.create');
    }

    //Un elemento en particular
    public function show($curso){
        //Mandar la variable a la vista ;
        
        return view('cursos.show', compact('curso'));
    }
}
