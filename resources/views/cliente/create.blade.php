@extends('master')
@section('titulo','Novo Cliente')
@section('conteudo')
  @foreach($errors->all() as $e)  
  <div class="alert alert-primary" role="alert">
    <p>{{$e}}</p>
  </div>
  @endforeach

  <form method="post" class="container" action="/cliente">
    <h3 class="text-center display-4">Novo Cliente</h3>
  @csrf
  <dl class="row">
  <div class="col-12">
  	<dt>Nome</dt>
  	<dd><input type="text" class="form-control" name="nome"></dd>
    </div>
  <div class="col-12">
  	<dt>Email</dt>
  	<dd><input type="text" class="form-control" name="email"></dd>
    </div>
    <div class="col-12">
  	<dt>Telefone</dt>
  	<dd><input type="text" class="form-control"  name="telefone"></dd>
    </div>
    <div class="col-12">
    <dt>CPF</dt>
  	<dd><input type="text" class="form-control"  name="cpf"></dd>
    </div>
    <div class="col-12">
    <dt>Endereço</dt>
  	<dd><input type="number" class="form-control"  name="endereco"></dd>
    </div>
  </dl>
  <a href="/cliente" class="btn">Voltar</a>
  <input type="submit" class="btn btn-primary" value="Enviar">

  </form>
@endsection
