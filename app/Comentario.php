<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $fillable = [
        'nome', 'email', 'comentario', 'hospedagem_id'
    ];

    public function hospedagem (){
        return $this->belongsTo(Hospedagem::class, 'hospedagem_id');
    }
}
