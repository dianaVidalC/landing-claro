<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    Public function getHome () {
        return view('home');
    }
    Public function getProducts () {
        return view('catalogo');
    }
    Public function getDetailProduct ($id) {
        $data = array(
            'name'  => 'samsung'
        );
        // dd($data);
        return view('producto', $data);
    }
    Public function getUbicaciones () {
        return view('ubicaciones');
    }
    Public function getPlayuno () {
        return view('playuno');
    }
    Public function getPlaydos () {
        return view('playdos');
    }
    Public function getPlaytres () {
        return view('playtres');
    }
}
