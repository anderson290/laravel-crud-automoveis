@extends('master')
@section('titulo','Nova Peça')
@section('conteudo')
  <form method="post" action="/Peca">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
  	<dt>Marca</dt>
  	<dd><input type="text" name="marca"></dd>
  	<dt>Modelo</dt>
  	<dd><input type="text" name="modelo"></dd>
  	<dt>Descricao</dt>
  	<dd><input type="text" name="vl_consulta"></dd>
  	<dt>Preço</dt>
  	<dd><input type="text" name="preco"></dd>
	<dt>Data de fabricação</dt>
  	<dd><input type="text" name="dt_fabricacao"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection


