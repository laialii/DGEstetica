@extends('layouts/templateadmin')
@section('content')
<h1>Editar publicação</h1>
<hr>
<form class="" action="{{action('AdminController@update', $p->id)}}" method="post">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />
  <input type="hidden"  name="id" value="{{$p->id}}" />
  <div class="form-group col-lg-4">
    <input type="text" name="titulo" value="{{$p->titulo}}">
  </div>
  <div class="form-group col-lg-4">
    <textarea name="conteudo" rows="8" cols="80" placeholder="Escreva seu artigo...">{{$p->conteudo}}</textarea>
  </div>
  <div class="form-group col-lg-4">
    <button type="submit" class="btn btn-success">Enviar</button>
    <a class="btn btn-danger" href="index.php" id="toggleNavColor">Cancelar</a>
  </div>
</form>
<!-- Blank div to give the page height to preview the fixed vs. static navbar-->
<div style="height: 1000px;"></div>
@endsection
