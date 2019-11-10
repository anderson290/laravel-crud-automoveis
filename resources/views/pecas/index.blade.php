@extends('master')
@section('titulo','Pecas')
@section('conteudo')
  <h3><a href="/peca/create">Nova Peça</a></h3>
  @foreach($pecas as $a)
  <p>{{$a->nome}} - {{$a->CRM}} - 
  	<a href="peca/{{$a->id}}/edit">Editar</a>
  </p>
  @endforeach
@endsection