<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservass extends Model
{
    use HasFactory;
    protected $table='reservasses';
    protected $primaryKey='id';
    protected $fillable=[
        'id_cliente',
        'id_invitado',
        'id_mesa',
        'id_menu',
        'fecha_reserva',
        'num_tarjeta',
        'num_personas'
    ];

    public function cliente(){
        return$this->belongsTo(User::class,'id_cliente');
    }
    public function menu(){
        return $this->belongsTo(Menus::class,'id_menu');
    }
    public function horario(){
        return $this->belongsTo(Horarios::class,'fecha_reserva');
    }
    public function mesas_cliente(){
        return $this->belongsTo(Mesas::class,'id_mesa');
    }
    public function invitados(){
        return $this->belongsTo(Invitados::class,'id_invitado');
    }

}
