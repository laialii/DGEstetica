@extends('layouts/templateadmin')
@section('content')
<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-file-text-o"></i>
        </div>
        <div class="mr-5">Novo artigo</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="{{action('AdminController@add')}}">
        <span class="float-left">Adicionar</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>  <!-- Card Columns Example Social Feed-->
<div class="mb-0 mt-4">
  <i class="fa fa-newspaper-o"></i> Publicações</div>
  <hr class="mt-2">
  <div class="col-md-12">
    @foreach($publicacoes as $p)

    <div class="card mb-3">
      <div class="card-body">
        <h6 class="card-title mb-1"><a href="#">{{$p->titulo}}</a></h6>
        <p class="card-text small">{{$p->conteudo}}
        </p>
      </div>
      <hr class="my-0">
      <div class="card-body py-2 small">
          <a class="mr-3 d-inline-block" href="{{action('AdminController@edit', $p->id)}}">
            <i class="fa fa-fw fa-pencil"></i> Editar</a>
            <a class="d-inline-block" href="{{action('AdminController@delete', $p->id)}}">
              <i class="fa fa-fw fa-trash"></i> Apagar</a>
            </div>
          </div>

        @endforeach
        </div>
        @endsection
