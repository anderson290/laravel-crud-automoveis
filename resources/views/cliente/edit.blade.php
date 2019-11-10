@extends('master')
@section('titulo','Novo Cliente')
@section('conteudo')
  
@foreach($errors->all() as $e)  
  <div class="alert alert-primary" role="alert">
    <p>{{$e}}</p>
  </div>
  @endforeach

  <form method="post" action="/cliente/{{$cliente->id}}">
    <h3 class="text-center display-4">Editar Cliente</h3>
  @csrf
  @method("put")
    <div class="container">
  
  <dl class="row">
  <div class="col-12">
  	<dt>Nome</dt>
  	<dd><input type="text" class="form-control" name="nome" value="{{$cliente->nome}}"></dd>
    </div>
  <div class="col-12">
  	<dt>Email</dt>
  	<dd><input type="text" class="form-control" name="email"  value="{{$cliente->email}}"></dd>
    </div>
    <div class="col-12">
  	<dt>Telefone</dt>
  	<dd><input type="text" class="form-control"  name="telefone"  value="{{$cliente->telefone}}"></dd>
    </div>
    <div class="col-12">
    <dt>CPF</dt>
  	<dd><input type="text" class="form-control"  name="cpf"  value="{{$cliente->cpf}}"></dd>
    </div>
    <div class="col-12">
    <dt>Endereço</dt>
  	<dd><input type="number" class="form-control"  name="endereco"  value="{{$cliente->endereco}}"></dd>
    </div>
    
  </dl>
  <a href="/cliente" class="btn">Voltar</a>
  <input type="submit" class="btn btn-primary" value="Atualizar">
  </form>
@endsection