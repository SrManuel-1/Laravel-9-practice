<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Invoke sirve para administrar una unica ruta
    public function __invoke()
    {
        return view('home');
    }
}
