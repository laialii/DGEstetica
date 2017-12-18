<?php

namespace App\Http\Controllers;

use Request;
use App\Publicacao;

class AdminController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth',
    ['only' => ['index','create', 'store', 'show', 'edit', 'update', 'destroy']]);
  }

  public function index()
  {
    return view('admin\index')->with('publicacoes', Publicacao::all());
  }

  public function create()
  {
    return view('admin\add');
  }

  public function store(Request $request)
  {
    $publicacao = new Publicacao;
    $publicacao->titulo        = $request->titulo;
    $publicacao->conteudo = $request->conteudo;
    $publicacao->save();
    return redirect()->action('AdminController@index')->with('message');
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $publicacao = Publicacao::find($id);
    return view('admin/edit',['p'=>$publicacao]);
  }

  public function update(Request $request, $id)
  {

    $novosdados = Request::all();
    $publicacao = new Publicacao();
    $publicacao = Publicacao::find($novosdados['id']);
    $publicacao->titulo = $novosdados['titulo'];
    $publicacao->conteudo = $novosdados['conteudo'];
    $publicacao->save();
    return redirect()->action('AdminController@index');
  }

  public function destroy($id)
  {
    $publicacao = Publicacao::find($id);
    $publicacao->delete();
    return redirect()->action('AdminController@index');
  }
}
