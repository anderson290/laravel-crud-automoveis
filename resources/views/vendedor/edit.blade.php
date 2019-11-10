@extends('master')
@section('titulo','Novo Vendedor')
@section('conteudo')
  <form method="post" action="/vendedor/{{$vendedor->id}}">
  <h3 class="text-center display-4">Editar Vendedor</h3>
  @csrf
  @method("put")
    <div class="container">
  
  <dl class="row">
  <div class="col-12">
  	<dt>Nome</dt>
  	<dd><input type="text" class="form-control" name="nome" value="{{$vendedor->nome}}"></dd>
    </div>
  <div class="col-12">
  	<dt>Email</dt>
  	<dd><input type="text" class="form-control" name="email"  value="{{$vendedor->email}}"></dd>
    </div>
    <div class="col-12">
  	<dt>Telefone</dt>
  	<dd><input type="text" class="form-control"  name="telefone"  value="{{$vendedor->telefone}}"></dd>
    </div>
    <div class="col-12">
    <dt>CPF</dt>
  	<dd><input type="text" class="form-control"  name="cpf"  value="{{$vendedor->cpf}}"></dd>
    </div>
    <div class="col-12">
    <dt>Endereço</dt>
  	<dd><input type="number" class="form-control"  name="endereco"  value="{{$vendedor->endereco}}"></dd>
    </div>
    <div class="col-6">
    <dt>Salário</dt>
  	<dd><input type="text" class="form-control"  name="salario"  value="{{$vendedor->salario}}"></dd>
    </div>
    <div class="col-6">
    <dt>Comissão</dt>
  	<dd><input type="text" class="form-control"  name="comissao"  value="{{$vendedor->comissao}}"></dd>
    </div>
    <div class="col-12">
    <dt>Meta</dt>
  	<dd><input type="text" class="form-control"  name="meta"  value="{{$vendedor->meta}}"></dd>
    </div>    
  </dl>
  <a href="/vendedor" class="btn">Voltar</a>
  <input type="submit" class="btn btn-primary" value="Atualizar">

  </form>

  
@endsection