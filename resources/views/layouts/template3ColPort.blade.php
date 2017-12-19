<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Estética - Dienny Garcia</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{action('ServicosController@servicos1')}}">Nossos serviços</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{action('InicioController@home')}}">Início
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{action('InicioController@blog')}}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{action('InicioController@contact')}}">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{action('InicioController@about')}}">Quem somos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
@yield('content')
    <!-- Footer -->
    <footer class="py-5 bg-white">
      <div class="container">
        <p class="m-0 text-center"><img src="img/1 (2).jpg" alt="By: Big Source" width="100px"></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
