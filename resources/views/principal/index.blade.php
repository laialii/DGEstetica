@extends('layouts.templateBusiness')
@section('content')
<div class="container">

  <div class="bg-faded p-4 my-4">
    <!-- Image Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid w-100" src="img/slide-1.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-shadow">Tratamentos capilares</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid w-100" src="img/slide-2.png" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-shadow">Unhas mais lindas e resistentes</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid w-100" src="img/slide-3.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-shadow">Depilação a cera</h3>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div>
    <!-- Welcome Message -->
    <div class="text-center mt-4">
      <div class="text-heading text-muted text-lg">Seja bem-vindo ao espaço</div>
      <h1 class="my-2">Estética - Dienny Garcia</h1>
      <div class="text-heading text-muted text-lg">Conheça mais, clique
        <strong><a href="{{action('ServicosController@servicos1')}}">aqui</a> </strong>
      </div>
    </div>
  </div>

</div>
<!-- /.container -->
@endsection
