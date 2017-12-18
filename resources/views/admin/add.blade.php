@extends('layouts/templateadmin')
@section('content')
<div class="row">
<h1>Nova publicação</h1>
<hr>
<form class="" action="{{action('AdminController@store')}}" method="post">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />
  <div class="form-group col-lg-4">
    <input type="text" name="titulo" placeholder="Título">
  </div>

  <div class="form-group col-lg-4">
    <textarea name="conteudo" rows="8" cols="80" placeholder="Escreva seu artigo..."></textarea>
  </div>

  <div class="form-group col-lg-4">
    <button type="submit" class="btn btn-success">Enviar</button>
    <a class="btn btn-danger" href="index.php" id="toggleNavColor">Cancelar</a>
  </div>
</form>
<!-- Blank div to give the page height to preview the fixed vs. static navbar-->
<div style="height: 1000px;"></div></div>
@endsection
