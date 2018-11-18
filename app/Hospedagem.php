<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedagem extends Model
{

    protected $table = 'hospedagens';

    protected $fillable = [
        'titulo', 'descricao', 'instrucoes', 'quantidade_hospedes', 'quantidade_camas', 'quantidade_quartos',
        'quantidade_banheiros', 'tipo_hospedagem', 'endereco', 'user_id',
    ];

    public function proprietario (){
        return $this->belongsTo(User::class);
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function reservas(){
        return $this->hasMany(Reserva::class);
    }

}
