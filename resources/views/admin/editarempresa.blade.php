@extends('layouts/templateadmin')
@section('content')
<h1>Editar dados empresariais</h1>

<form class="" action="{{action('AdminController@atualizarempresa', $e->id)}}" method="post">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />
  <input type="hidden"  name="id" value="{{$e->id}}" />
  <div class="form-group col-lg-4">
    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" value="{{$e->telefone}}">
  </div>
  <div class="form-group col-lg-4">
    <label for="telefone">Endereço:</label>
    <input type="text" name="endereco" value="{{$e->endereco}}">
  </div>
  <div class="form-group col-lg-4">
    <label for="telefone">Cidade:</label>
    <input type="text" name="cidade" value="{{$e->cidade}}">
  </div>
  <div class="form-group col-lg-4">
    <label for="telefone">Estado:</label>
    <input type="text" name="estado" value="{{$e->estado}}">
  </div>
  <div class="form-group col-lg-4">
    <button type="submit" name="button">Atualizar</button>
  </div>

</form>


@endsection
