<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';
    protected $table = 'jugadores';
    public $timestamps = false;

    public function equipo() {
        return $this->belongsTo('\App\Models\Equipo', 'Nombre_equipo', 'Nombre');
    }
}
