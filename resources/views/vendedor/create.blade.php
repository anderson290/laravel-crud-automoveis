@extends('master')
@section('titulo','Novo Vendedor')
@section('conteudo')
  <form method="post" action="/vendedor">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
  	<dt>Materia</dt>
  	<dd><input type="text" name="materia"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection