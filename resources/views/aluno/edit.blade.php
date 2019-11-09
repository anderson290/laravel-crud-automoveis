@extends('master')
@section('titulo','Novo Aluno')
@section('conteudo')
  <form method="post" action="/aluno/{{$aluno->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$aluno->nome}}">
    </dd>
  	<dt>Endereco</dt>
  	<dd><input type="text" name="endereco" value="{{$aluno->endereco}}"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection