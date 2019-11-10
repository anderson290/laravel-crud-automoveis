@extends('master')
@section('titulo','Novo Vendedor')
@section('conteudo')
  <form method="post" action="/vendedor/{{$vendedor->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$vendedor->nome}}">
    </dd>
  	<dt>Materia</dt>
  	<dd><input type="text" name="materia" value="{{$vendedor->materia}}"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection