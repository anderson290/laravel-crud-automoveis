<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovel extends Model
{
    protected $table = 'automovels';
    protected $fillable=['nome','marca','modelo', 'placa', 'vl_venda', 'dt_fabricacao'];
    public $timestamps=false;
    
    public function pecas()
    {
        return $this->belongsToMany(Peca::class);
    }
}
