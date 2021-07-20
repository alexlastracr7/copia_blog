<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class paginaController extends Controller
{
    public function execute($nombre = null){

        $destino = ['Madrid', 'Quito', 'Turkey','Moscow','Paris, Mallorca', 'Rio of Janeiro'];
        return view('home'  , compact( 'destino', 'nombre'));

    }

    public function about(){
        return view('about');

    }

    public function destinations(){
        return view('destinations');

    }

    public function contact(){
        return view('contact');

    }
}
