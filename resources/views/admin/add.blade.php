@extends('layouts/templateadmin')
@section('content')
<div class="mb-0 mt-4">
  <i class="fa fa-newspaper-o"></i> Nova publicação
</div>
  <hr class="mt-2">
  <div class="col-md-12">
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
    <a class="btn btn-danger" href="{{action('AdminController@index')}}" id="toggleNavColor">Cancelar</a>
  </div>
</form>
<!-- Blank div to give the page height to preview the fixed vs. static navbar-->
<div style="height: 1000px;"></div></div>
@endsection
