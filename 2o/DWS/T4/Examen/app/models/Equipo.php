<?php

namespace app\models;

use core\Model;
use core\db\DB;

class Equipo extends Model {
    protected $table = 'teams';

    protected function getJugadores($id_equipo) {
        return $this->hasMany('players', 'team_id', $id_equipo);
    }
}