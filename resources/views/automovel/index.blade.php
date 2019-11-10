@extends('master')
@section('titulo','Automoveis')
@section('conteudo')
<a href="/home" class="btn float-right">Home</a>
<div class="container">

  <h1 class="text-center display-4"><a href="/automovel/create">Novo Automóvel</a></h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Placa</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
  </tbody>
   
  
    @foreach($automoveis as $a)
    <tr> 
      <td>{{$a->nome}}</td>
      <td>{{$a->marca}}</td>
      <td>{{$a->modelo}}</td>
      <td>{{$a->placa}}</td>
      <td>{{$a->vl_venda}}</td>
      <td>{{$a->dt_fabricacao}}</td>
      <td><a href="automovel/{{$a->id}}/edit">Editar</a></td>  	

  </tr>
  @endforeach
  </table>

  </div>
@endsection