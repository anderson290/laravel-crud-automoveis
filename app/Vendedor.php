<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable=['nome', 'endereco', 'email','cpf','telefone', 'salario', 'Comissao', 'Meta'];
    public $timestamps = false; 
}
