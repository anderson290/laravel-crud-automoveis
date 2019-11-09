@extends('master')
@section('titulo','Novo Professor')
@section('conteudo')
  <form method="post" action="/professor/{{$professor->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$professor->nome}}">
    </dd>
  	<dt>Materia</dt>
  	<dd><input type="text" name="materia" value="{{$professor->materia}}"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection