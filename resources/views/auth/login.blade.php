<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="assetsadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="assetsadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="assetsadmin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">E-mail</label>


              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Senha</label>


              <input id="password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                Entrar
              </button>
            </div>
          </div>
        </form>
        <div class="text-center">
          <a class="d-block small" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="assetsadmin/vendor/jquery/jquery.min.js"></script>
  <script src="assetsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="assetsadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
