<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $fillable=['marca','modelo', 'descricao', 'cd_peca', 'preco','dt_fabricacao'];
    public $timestamps=false;
    
    public function obterAutomoveis(){
        return $this->belongsToMany('App\Altomovel');
    }
}

