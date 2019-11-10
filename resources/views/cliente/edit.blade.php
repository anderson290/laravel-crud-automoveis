@extends('master')
@section('titulo','Novo Cliente')
@section('conteudo')
  <form method="post" action="/cliente/{{$cliente->id}}">
  @csrf
  @method("put")
  <dl>
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
    <dt>Email</dt>
  	<dd><input type="text" name="email"></dd>
    <dt>Telefone</dt>
  	<dd><input type="text" name="telefones"></dd>
    <dt>CPF</dt>
  	<dd><input type="text" name="cpf"></dd>
  	<dt>Endereco</dt>
  	<dd><input type="text" name="endereco"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection