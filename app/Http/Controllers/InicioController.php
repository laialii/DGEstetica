<?php

namespace App\Http\Controllers;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use App\Empresa;
use App\Publicacao;

class InicioController extends Controller
{
  public function home(){
    return view('principal/index');
  }
  public function about(){
    return view('principal/about');
  }
  public function blog(){
    $publicacoes = Publicacao::all();
    return view('principal/blog')->with('publicacoes', $publicacoes);
  }
  public function contact(){
    $dados = Empresa::all();
    return view('principal/contact')->with('dados', $dados);
  }

}
