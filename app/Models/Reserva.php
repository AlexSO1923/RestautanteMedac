<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table='reservas';
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
}
