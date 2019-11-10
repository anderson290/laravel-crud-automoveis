@extends('master')
@section('titulo','Novo Vendedor')
@section('conteudo')
  <form method="post" action="/vendedor">
  @csrf
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
    <dt>Salário</dt>
  	<dd><input type="text" name="salario"></dd>
    <dt>Comissão</dt>
  	<dd><input type="text" name="comissao"></dd>
    <dt>Meta</dt>
  	<dd><input type="text" name="meta"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection
