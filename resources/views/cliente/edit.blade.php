@extends('master')
@section('titulo','Novo Cliente')
@section('conteudo')
  <form method="post" action="/cliente/{{$cliente->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$cliente->nome}}">
    </dd>
  	<dt>Endereco</dt>
  	<dd><input type="text" name="endereco" value="{{$cliente->endereco}}"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection