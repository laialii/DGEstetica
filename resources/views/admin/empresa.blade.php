@extends('layouts/templateadmin')
@section('content')
<!-- Icon Cards-->
<div class="mb-0 mt-4">
  <i class="fa fa-newspaper-o"></i> Dados empresariais:
</div>
<hr class="mt-2">
<div class="col-md-12">
  <label>Telefone: {{$e->telefone}}</label><br>
  <label>Endereço: {{$e->endereco}}</label><br>
  <label>Cidade: {{$e->cidade}}</label><br>
  <label>Estado: {{$e->estado}}</label>
</div>
<br>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-success o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-pencil-square-o"></i>
      </div>
      <div class="mr-5">Editar dados</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="{{action('AdminController@editarempresa', 1)}}">
      <span class="float-left">Editar</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
@endsection
