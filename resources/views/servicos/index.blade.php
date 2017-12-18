@extends('layouts.template3ColPort')
@section('content')

    <!-- Page Content -->
    <div class="container">
<br>
<br>
      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="../assets/img/img (15).jpg" alt="" ></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Dreno Detox</a>
              </h4>
              <p class="card-text">Dreno Detox: conheça a técnica preferida de Bruna Marquezine e Fernanda Souza.  Por meio da mobilização intensa e vigorosa do tecido, a Dreno Detox promove a desintoxicação, melhorando oxigenação e circulação da região na qual é feita.

</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="../assets/img/img (4).jpg" alt="" ></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Massagens</a>
              </h4>
              <p class="card-text">O relaxamento que você tanto quer ou necessita. A Massagem é a prática de aplicar força ou vibração sobre tecidos macios do corpo, incluindo músculos, tecidos conectivos, tendões, ligamentos e articulações, para estimular a circulação sanguínea ou alivio de determinadas dores corporais.
</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="../assets/img/img (11).jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Auriculoterapia</a>
              </h4>
              <p class="card-text">Auriculoterapia trabalha a ansiedade, a função renal e intestinal, com as famosas sementinhas de mostardas colocadas em pontos específicos da orelha.
</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="../assets/img/img (7).jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Maquiagem</a>
              </h4>
              <p class="card-text">Nada como um batom e um pouco de máscara de cílios para encarar o dia. É inevitável: todas temos algumas inseguranças relativas à aparência que acabam influenciando a forma como vivemos e como nos comportamos. Venha fazer uma maquiagem conosco e encare o dia se sentindo poderosa.
</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="../assets/img/img (13).jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Bronzeamento a jato</a>
              </h4>
              <p class="card-text">Nosso bronzeamento a jato é a melhor opção para aqueles que não querem ou não podem se bronzear tomando sol, mas querem uma aparência saudável e bronzeada.
Seja para um momento especial, uma festa imperdível ou para aquela semana em que o sol foi trocado pelas nuvens e chuvas. O bronzeamento a jato contém uma formulação única para vários tipos de pele, e o melhor, eles evitam vermelhidão, queimaduras, câncer e envelhecimento precoce.
</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="../assets/img/img (5).jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Manicure</a>
              </h4>
              <p class="card-text">Aproveite esse final de ano, e venha deixar suas unhas ainda mais bonitas. A cliente que vir fazer as unhas  e trazer uma amiga, ganha 20% de desconto as duas!!!</p>
            </div>
          </div>
        </div>
      </div>

      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item active">
          <a class="page-link" href="{{action('ServicosController@servicos1')}}">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="{{action('ServicosController@servicos2')}}">2</a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    @endsection
