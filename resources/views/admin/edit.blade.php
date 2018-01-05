@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Editar publicação</div>

        <div class="panel-body">
          <div class="col-md-12">

            <form class="form-horizontal" action="{{action('AdminController@update', $p->id)}}" method="post">
              <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />
              <input type="hidden"  name="id" value="{{$p->id}}" />
              <div class="form-group ">
                <input type="text" name="titulo" value="{{$p->titulo}}">
              </div>
              <div class="form-group ">
                <textarea name="conteudo" rows="8" cols="80" placeholder="Escreva seu artigo...">{{$p->conteudo}}</textarea>
              </div>
              <div class="form-group ">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a class="btn btn-danger" href="{{action('AdminController@index')}}" id="toggleNavColor">Cancelar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
