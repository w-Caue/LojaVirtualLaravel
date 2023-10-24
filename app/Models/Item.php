<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'itens';
    protected $fillable = ['nome', 'descricao', 'preco', 'marca_id', 'grupo_id'];

    public function marca(){
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function grupo(){
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }
}
