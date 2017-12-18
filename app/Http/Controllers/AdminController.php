<?php

namespace App\Http\Controllers;

use Request;
use App\Publicacao;
use App\Empresa;

class AdminController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth',
    ['only' => ['index','create', 'store', 'show', 'edit', 'update', 'destroy', 'empresaindex', 'editarempresa', 'atualizarempresa']]);
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

  public function empresaindex(){
    return view('admin/empresa', ['e'=> Empresa::find(1)]);
  }
  public function editarempresa($id){
    $empresa = Empresa::find($id);
    return view('admin/editarempresa',['e'=>$empresa]);
  }
  public function atualizarempresa($id){
    $novosdados = Request::all();
    $empresa = new Empresa();
    $empresa = Empresa::find($novosdados['id']);
    $empresa->telefone = $novosdados['telefone'];
    $empresa->endereco = $novosdados['endereco'];
    $empresa->cidade = $novosdados['cidade'];
    $empresa->estado = $novosdados['estado'];
    $empresa->save();
    return redirect()->action('AdminController@empresaindex');
  }
}
