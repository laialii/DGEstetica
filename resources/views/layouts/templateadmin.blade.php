<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dienny Garcia Estética</title>
  <!-- Bootstrap core CSS-->
  <link href="../assetsadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../assetsadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../assetsadmin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../assetsadmin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">DG ESTÉTICA</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{action('AdminController@index')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Página inicial</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Blog">
          <a class="nav-link" href="{{action('InicioController@blog')}}">
            <i class="fa fa-fw fa-file-text-o"></i>
            <span class="nav-link-text">Blog</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="NovaPublicacao">
          <a class="nav-link" href="{{action('AdminController@create')}}">
            <i class="fa fa-fw fa-font"></i>
            <span class="nav-link-text">Nova publicação</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Blog">
          <a class="nav-link" href="{{action('AdminController@empresaindex')}}">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Dados empresariais</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        @if(!Auth::check())
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="{{ route('login') }}">
            <i class="fa fa-fw fa-sign-in"></i>Entrar</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>Sair</a>
            </li>

            @endif
          </ul>
        </div>
      </nav>
      <div class="content-wrapper">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Feito por BigSource 2017</small>
          </div>
        </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Já vai sair?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Clique em sair se você deseja sair do sistema.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../assetsadmin/vendor/jquery/jquery.min.js"></script>
    <script src="../assetsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../assetsadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../assetsadmin/vendor/chart.js/Chart.min.js"></script>
    <script src="../assetsadmin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../assetsadmin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../assetsadmin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../assetsadmin/js/sb-admin-datatables.min.js"></script>
    <script src="../assetsadmin/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
