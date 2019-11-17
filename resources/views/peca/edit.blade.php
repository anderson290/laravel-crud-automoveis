@extends('master')
@section('titulo','Nova Peça')
@section('conteudo')

  <form method="post" action="/peca/{{$peca->id}}">
    <h3 class="text-center display-4">Editar Peça</h3>
  @csrf
  @method("put")
    <div class="container">
  
  <dl class="row">
  <div class="col-12">
  <dt>Nome</dt>
  	<dd><input type="text"  class="form-control" name="nome" value="{{$peca->nome}}">
    </dd>
  <div class="col-12">
  <dt>Descrição</dt>
  	<dd><input type="text"  class="form-control" name="descricao" value="{{$peca->descricao}}"></dd>
    </div>
    <div class="col-12">
	<dt>Marca</dt> 
  	<dd><input type="text"  class="form-control" name="marca" value="{{$peca->marca}}"></dd>
    </div>
    <div class="col-12">
	<dt>Modelo</dt>
  	<dd><input type="text"  class="form-control" name="modelo" value="{{$peca->modelo}}"></dd>
    </div>
    <div class="col-6">
	<dt>Código</dt>
  	<dd><input type="texto"  class="form-control" name="cd_peca" value="{{$peca->cd_peca}}"></dd>
    </div>
    <div class="col-6">
	  <dt>Preço</dt>
  	  <dd><input type="texto"  class="form-control" name="preco" value="{{$peca->preco}}"></dd>
    </div>
  </dl>
  <div class="col-6">
      <dt>Data de Fabricação</dt>
      <dd><input type="date"  class="form-control" value="{{$peca->dt_fabricacao}}" name="dt_fabricacao"></dd>  
    </div>   

    <div class="col-6">
      <dt>Carro</dt>
      
      <select name="" id="" class="form-control">

        @foreach($automovel as $a)
         <option name="{{$a->nome}}" id="" value="{{$a->id}}"  <?php echo ($peca->carroId) ? 'selected' : '' ?>>{{$a->nome}}</option>
        @endforeach
      </select>
    </div> 

  <a href="/automovel" class="btn">Voltar</a>
  <input type="submit" class="btn btn-primary" value="Atualizar">
  </form>


  
@endsection

