<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovel extends Model
{
    protected $fillable=['marca','modelo', 'placa', 'vl_venda', 'dt_fabricacao'];
    public $timestamps=false;
    
    public function obterPecas(){
        return $this->belongsToMany('App\Peca');
    }
}
