@extends('master')
@section('titulo','Vendedores')
@section('conteudo')
    <h3><a href="/vendedor/create">Novo Vendedor</a></h3>
    @foreach($vendedores as $prof)
        <p>{{$prof->nome}} leciona {{$prof->materia}} 
        <button>
        <a href="vendedor/{{$prof->id}}/edit">Editar</a>
        </button>
        </p>
        @endforeach
    @endsection