@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Editar dados empresariais</div>

        <div class="panel-body">
          <form class="" action="{{action('AdminController@atualizarempresa', 1)}}" method="post">
            <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden"  name="id" value="1" />
            <div class="form-group">
              <label for="telefone">Telefone:</label>
              <input type="text" name="telefone" value="{{$e->telefone}}">
            </div>
            <div class="form-group">
              <label for="telefone">Endereço:</label>
              <input type="text" name="endereco" value="{{$e->endereco}}">
            </div>
            <div class="form-group">
              <label for="telefone">Cidade:</label>
              <input type="text" name="cidade" value="{{$e->cidade}}">
            </div>
            <div class="form-group">
              <label for="telefone">Estado:</label>
              <input type="text" name="estado" value="{{$e->estado}}">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Atualizar</button>
              <a class="btn btn-danger" href="{{action('AdminController@empresaindex')}}" id="toggleNavColor">Cancelar</a>
            </div>

          </form>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
