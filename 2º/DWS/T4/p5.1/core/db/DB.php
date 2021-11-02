<?php
namespace core\db;


class DB {

    private function select($table, $fields = ['*'], $where = NULL, $params = NULL) {
        $sql = "SELECT ";
        
        foreach ($fields as $field) {
            $sql .= "$field, ";
        }

        $sql = rtrim($sql, ", "). " FROM $table";

        if (!empty($where)) {
            $sql .= " Where " . $where;
        }
        return $this->execute($sql, $params);
    }

    private function execute($sql, $params) {
        $pdo = Connection::getInstance()::getPDO();
        $ps = $pdo->prepare($sql);
        $ps->execute($params);
        return $ps->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function __callStatic($name, $arguments) {
        return (new static)->$name(...$arguments);
    }
}