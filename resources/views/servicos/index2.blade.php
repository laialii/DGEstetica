@extends('layouts.template3ColPort')
@section('content')

<!-- Page Content -->
<div class="container">
  <br><br>

  <div class="row">
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="../assets/img/img (6).jpg" alt="" ></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Massagem Modeladora</a>
          </h4>
          <p class="card-text"> Operação Verão na Clínica, conheça os benefícios da massagem modeladora.
            É um tipo de massagem vigorosa, com o objetivo de modelar o corpo e reduzir medidas. Nas regiões onde há maior concentração de celulite, a técnica pode ser bem dolorosa (mas vale a pena!). A  Modeladora reduz gordura localizada, combate a celulite e deixa a pele mais tonificada, combatendo também a flacidez.
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="../assets/img/img (9).jpg" alt="" ></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Depilação</a>
          </h4>
          <p class="card-text">Utilizamos diversos tipos de cera para todo tipo de pele. Marque a sua depilação, assim você vai poder botar os pernões para fora sem medo de ser feliz! #depilação #pernas #xopelo
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="../assets/img/img (12).jpg" alt="" ></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Cuidados faciais</a>
          </h4>
          <p class="card-text">O rosto é a primeira parte do corpo em que reparamos quando conhecemos uma pessoa; é o nosso cartão de visitas. Por isso, para estar sempre bonita, o segredo fundamental é cuidar do rosto. Aqui na clínica temos produtos de confiança para que sua pele fique macia e rejuvenescida.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="../assets/img/img (1).jpg" alt="" ></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Materiais de qualidade</a>
          </h4>
          <p class="card-text"> Na nossa clínica usamos apenas materiais de confiança, com produtos com selo de qualidade. Para melhor atendermos nossos clientes.
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="../assets/img/img (8).jpg" alt="" ></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Cuidados Capilares</a>
          </h4>
          <p class="card-text">Toda mulher deseja ter cabelos bonitos, sedosos e invejáveis. Aqui na clínica cuidados disso pra você. Com métodos de hidratação, reconstrução e cauterização.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="../assets/img/img (14).jpg" alt="" ></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Especialista em cabelos cacheados</a>
          </h4>
          <p class="card-text">Aqui você encontra a melhor especialista em cabelos cacheados, para que seus cachos ganhe vida e força. Venha nos fazer uma visita e ganhe uma hidratação pela metade do preço.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- /.row -->

  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="{{action('ServicosController@servicos1')}}">1</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="{{action('ServicosController@servicos2')}}">2</a>
    </li>
  </ul>

</div>
<!-- /.container -->
@endsection
