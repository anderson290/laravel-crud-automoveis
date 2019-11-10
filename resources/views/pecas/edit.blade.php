@extends('master')
@section('titulo','Nova Peça')
@section('conteudo')
  <form method="post" action="/peca/{{$peca->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$peca->nome}}">
    </dd>
  	<dt>Especialidade</dt>
  	<dd><input type="text" name="especialidade" value="{{$peca->especialidade}}"></dd>
  	<dt>CRM</dt>
  	<dd><input type="text" name="crm" value="{{$peca->crm}}"></dd>
  	<dt>Valor da Consulta</dt>
  	<dd><input type="text" name="vl_consulta" value="{{$peca->vl_consulta}}"></dd>
  	<dt>Endereço do Atendimento</dt>
  	<dd><input type="texto" name="endereco_atendimento" value="{{$peca->endereco_atendimento}}"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection

