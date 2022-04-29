<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class PostController extends Controller
{
    public function index() 
    { 
      $clientes = Cliente::get(); 
      dd($clientes);
      return view('index',['clientes'=>$clientes]);
    }

    public function cli() 
    { 
      $clientes = Cliente::get(); 
      return view('index2',['clientes'=>$clientes]);
    }

};


