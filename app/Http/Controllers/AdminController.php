<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
return redirect()->action('AdminController@index')->with('message', 'Product created successfully!');



    Publicacao::create($request->all());
    return redirect()->action('AdminController@index');
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
