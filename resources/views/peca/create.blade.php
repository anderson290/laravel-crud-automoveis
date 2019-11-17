@extends('master')
@section('titulo','Nova Peça')
@section('conteudo')
  
  @foreach($errors->all() as $e)  
  <div class="alert alert-primary" role="alert">
    <p>{{$e}}</p>
  </div>
  @endforeach

  <form method="post" class="container" action="/peca">
    <h3 class="text-center display-4">Nova Peça</h3>
  @csrf
  <dl class="row">

  <div class="col-12">
  	<dt>Nome</dt>
  	<dd><input type="text" class="form-control" name="nome"></dd>
    </div>
    <div class="col-12">
  	<dt>Descrição</dt>
  	<dd><input type="text" class="form-control" name="descricao"></dd>
    </div>
  <div class="col-12">
  	<dt>Marca</dt>
  	<dd><input type="text" class="form-control" name="marca"></dd>
    </div>
    <div class="col-12">
  	<dt>Modelo</dt>
  	<dd><input type="text" class="form-control"  name="modelo"></dd>
    </div>
    <div class="col-12">
    <dt>Código Peça</dt>
  	<dd><input type="text" class="form-control"  name="cd_peca"></dd>
    </div>
    <div class="col-12">
    <dt>Preço</dt>
  	<dd><input type="number" class="form-control"  name="preco"></dd>
    </div>
    <div class="col-6">
      <dt>Data de Fabricação</dt>
      <dd><input type="date"  class="form-control"  name="dt_fabricacao"></dd>  
    </div>   

    <div class="col-6">
      <dt>Carro</dt>
      
      <select name="" id="" class="form-control">
        @foreach($automovel as $a)
         <option name="{{$a->nome}}" id="" value="{{$a->id}}">{{$a->nome}}</option>
        @endforeach
      </select>
    </div> 

  </dl>
  <a href="/peca" class="btn">Voltar</a>
  <input type="submit" class="btn btn-primary" value="Enviar">

  </form>
@endsection


