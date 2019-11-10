@extends('master')
@section('titulo','Nova Peça')
@section('conteudo')
  <form method="post" action="/Peca">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
  	<dt>Especialidade</dt>
  	<dd><input type="text" name="especialidade"></dd>
  	<dt>CRM</dt>
  	<dd><input type="text" name="crm"></dd>
  	<dt>Valor da Consulta</dt>
  	<dd><input type="text" name="vl_consulta"></dd>
  	<dt>Endereço</dt>
  	<dd><input type="text" name="endereco_atendimento"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection

