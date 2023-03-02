<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    protected $table='menuses';
    protected $primaryKey='id';
    protected $fillable=[
        'nombre',
        'precio',
    ];

    public function reserva_menu(){
        return $this->belongsTo(Reservass::class, 'id');
    }

    public static function recogerMenus(){
        return Menus::all();
    }
}
