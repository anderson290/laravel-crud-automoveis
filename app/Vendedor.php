<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable=['nome', 'endereco', 'email','cpf','telefone', 'salario', 'comissao', 'meta'];
    public $timestamps = false; 
}
