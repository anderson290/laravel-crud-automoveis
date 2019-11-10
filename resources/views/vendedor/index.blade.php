@extends('master')
@section('titulo','Vendedores')
@section('conteudo')
  
<a href="/home" class="btn float-right">Home</a>
<div class="container">

  <h1 class="text-center display-4"><a href="/vendedor/create">Novo Vendedor</a></h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Email</th>
      <th scope="col">CPF</th>
      <th scope="col">Meta</th>
      <th scope="col">Telefone</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
  @foreach($vendedores as $a)
    <tr> 
      <td>{{$a->nome}}</td>
      <td>{{$a->endereco}}</td>
      <td>{{$a->email}}</td>
      <td>{{$a->cpf}}</td>
      <td>{{$a->Meta}}</td>
      <td>{{$a->telefone}}</td>
      <td><a href="vendedor/{{$a->id}}/edit">Editar</a></td>  	

  </tr>
  </tbody>   
 
  @endforeach
  </table>

  </div>

