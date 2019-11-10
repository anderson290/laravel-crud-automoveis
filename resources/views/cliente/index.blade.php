@extends('master')
@section('titulo','Clientes')
@section('conteudo')
  <h3><a href="/cliente/create">Novo Cliente</a></h3>
  @foreach($clientes as $a)
  <p>{{$a->nome}} - {{$a->endereco}} - 
  	<a href="Cliente/{{$a->id}}/edit">Editar</a>
  </p>
  @endforeach
@endsection