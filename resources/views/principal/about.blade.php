@extends('layouts.templateBusiness')
@section('content')
    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Quem somos</h2>
        <hr class="divider">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="img/perfil.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Dienny Garcia
                  <small class="text-muted">Esteticista</small>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="img/perfil2.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Aritana Pais
                  <small class="text-muted">Manicure e cabelereira</small>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    @endsection
