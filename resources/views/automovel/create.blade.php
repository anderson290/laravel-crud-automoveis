@extends('master')
@section('titulo','Novo Automóvel')
@section('conteudo')

  @foreach($errors->all() as $e)  
  <div class="alert alert-primary" role="alert">
    <p>{{$e}}</p>
  </div>
  @endforeach

  <form method="post" class="container" action="/automovel">
    <h3 class="text-center display-4">Novo Automóvel</h3>
  @csrf
  <dl class="row">
  <div class="col-12">
  	<dt>Marca</dt>
  	<dd><input type="text" class="form-control" name="marca"></dd>
    </div>
    <div class="col-12">
  	<dt>Modelo</dt>
  	<dd><input type="text" class="form-control"  name="modelo"></dd>
    </div>
    <div class="col-12">
    <dt>Placa</dt>
  	<dd><input type="text" class="form-control"  name="placa"></dd>
    </div>
    <div class="col-6">
    <dt>Valor para venda</dt>
  	<dd><input type="number" class="form-control"  name="vl_venda"></dd>
    </div>
    <div class="col-6">
    <dt>Data de Fabricação</dt>
  	<dd><input type="date" class="form-control"  name="dt_fabricacao"></dd>
    </div>
    
  </dl>
  <input type="submit" class="btn btn-primary" value="Enviar">
  </form>
@endsection