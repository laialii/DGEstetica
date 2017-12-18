@extends('layouts.templateBusiness')
@section('content')
    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Encontre a gente</h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-8">
            <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.3575071870328!2d-51.10066298508305!3d-20.0773368865214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9499912a00040f33%3A0x860f722233949447!2sR.+Pres.+Dutra%2C+Aparecida+do+Taboado+-+MS%2C+79570-000!5e0!3m2!1spt-BR!2sbr!4v1512650985964" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-4">
            @foreach($dados as $d)
            <h5 class="mb-0">Whatsapp:</h5>
            <div class="mb-4">{{$d->telefone}}</div>
            <h5 class="mb-0">Endereço:</h5>
            <div class="mb-4">{{$d->endereco}}<br>{{$d->cidade}}/{{$d->estado}}</div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->


    @endsection
