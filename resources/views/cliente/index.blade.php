@extends('master')
@section('titulo','Clientes')
@section('conteudo')
<a href="/home" class="btn float-right">Home</a>

<div class="container">

  <h1 class="text-center display-4"><a href="/cliente/create">Novo Cliente</a></h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
  </tbody>
    @foreach($clientes as $a)
    <tr> 
      <td>{{$a->cpf}}</td>
      <td>{{$a->nome}}</td>
      <td>{{$a->endereco}}</td>
      <td>{{$a->email}}</td>
      <td>{{$a->telefone}}</td>
      <td><a href="cliente/{{$a->id}}/edit">Editar</a></td>  	

  </tr>
  @endforeach
  </table>

  </div>
@endsection