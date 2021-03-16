<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $data = [
            'saluto'=>'ciao a tutti'
        ];

        return view('home', $data);
    }
    public function contatti(){
        $data = [
            'email' => 'sh@gmail.com',
            'tel' => '54478349'
        ];

        return view('contatti', $data);
    }
    public function dresses (){
        return view('dresses');

    }
}
