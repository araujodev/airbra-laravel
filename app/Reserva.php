<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
        'data_criacao_reserva', 'data_inicial', 'data_final', 'hospedagem_id', 'user_id'
    ];

    public function hospede (){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hospedagem (){
        return $this->belongsTo(Hospedagem::class, 'hospedagem_id');
    }
}
