<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosController extends Controller
{
  public function servicos1(){
    return view('servicos/index');
  }
  public function servicos2(){
    return view('servicos/index2');
  }
}
