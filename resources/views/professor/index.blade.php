@extends('master')
@section('titulo','Professores')
@section('conteudo')
    <h3><a href="/professor/create">Novo Professor</a></h3>
    @foreach($professores as $prof)
        <p>{{$prof->nome}} leciona {{$prof->materia}} 
        <button>
        <a href="professor/{{$prof->id}}/edit">Editar</a>
        </button>
        </p>
        @endforeach
    @endsection