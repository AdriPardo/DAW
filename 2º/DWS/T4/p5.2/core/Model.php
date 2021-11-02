<?php

namespace core;

class Model
{
    protected $table;
    protected $primary_key = 'id';

    protected function all()
    {
        $result = db\DB::select($this->table);
        return $result;
    }

    protected function find($pk)
    {
        $fields = ['*'];
        $where = $this->primary_key . ' = :id';
        $params = [
            ':id' => $pk
        ];
        $result = db\DB::select($this->table, $fields, $where, $params);
        return $result[0];
    }

    protected function belongsToMany($t2, $tJ, $pk_tJ1, $pk_tJ2, $pk, $pk_t2 = 'id')
    {
        $sql = "SELECT t2.* FROM $t2 t2" .
            " JOIN $tJ tJ ON t2.$pk_t2 = tJ.$pk_tJ2" .
            " JOIN $this->table t1 ON t1.$this->primary_key = tJ.$pk_tJ1 
            AND t1.$this->primary_key = :id";

        $params = [
            ":id" => $pk
        ];

        return db\DB::execute($sql, $params);
    }

    protected function hasMany($t2, $fk_t2, $pk)
    {
        $sql = "SELECT t2.* FROM $t2 t2
        JOIN $this->table t1 ON t1.$this->primary_key = t2.$fk_t2
        AND t1.$this->primary_key = :id";
        $params = [
            ":id" => $pk
        ];
        return db\DB::execute($sql, $params);
    }

    protected function insert()
    {
        $result = db\DB::insert($this->table, $_POST);
        return $result;
    }

    protected function edit($pk)
    {
        $result = db\DB::edit($this->table, $_POST, $this->primary_key, $pk);
        return $result;
    }


    public static function __callStatic($name, $arguments)
    {
        return (new static)->$name(...$arguments);
    }
}
