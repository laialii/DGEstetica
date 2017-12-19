@extends('layouts.templateBusiness')
@section('content')

<div class="container">
  @foreach($publicacoes as $p)
  <div class="col-lg-12">
    <div class="bg-faded p-4 my-4">
      <div class="card card-inverse">
        <h2 class="card-title text-shadow text-uppercase mb-0">{{$p->titulo}}</h2>
        <h4 class="text-shadow ">{{$p->created_at}}</h4>
        <p class="lead text-shadow d-none d-lg-block">{{$p->conteudo}}</p>
        @guest
        @else
        <a class="mr-3 d-inline-block" href="{{action('AdminController@edit', $p->id)}}">
          <i class="fa fa-fw fa-pencil"></i> Editar</a>
          <a class="d-inline-block" href="{{action('AdminController@destroy', $p->id)}}">
            <i class="fa fa-fw fa-trash"></i> Apagar</a>
            @endguest
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!-- /.container -->
    @endsection
