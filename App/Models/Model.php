<?php

namespace App\Models;

use App\DB;

abstract class Model
{
    public static $table = null;
    /**
     * @var
     */
    public $id;


    /**
     * Model constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        if (!empty($data)) {
            $props = get_object_vars($this);
            foreach ($props as $name => $value) {
                $this->$name = $data[$name];
            }
        }

    }


    /**
     * @param $id
     * @return bool|mixed
     */
    public static function findById($id)
    {
        $db = new DB();
        $sql = "SELECT * FROM " . static::$table . " WHERE " . static::$table. ".id = :id";
        $data = $db->query($sql, static::class, [':id' => $id]);

        if (!empty($data)) {
            return reset($data);
        }
        return false;
    }


    /**
     * @return bool
     */
    public function insert(): bool
    {
        $props = get_object_vars($this);
        $fields = [];
        $binds = [];
        foreach ($props as $name => $value) {
            if ($name == 'id' || $name == 'created_at') continue;
            $fields[] = $name;
            $binds[] = ":" . $name;
            $data[':' . $name] = $value;
        }

        $sql = "INSERT INTO " . static::$table . " (" . implode(',', $fields) . ")"
            . " VALUES (" . implode(',', $binds) . ")";
        $db = new DB();

        $res = $db->execute($sql, $data);
        $this->id = $db->getLastInsertedId();
        return $res;
    }

    /**
     * @return bool
     */
    public function update()
    {
        if (!isset($this->id)) return false;


        $props = get_object_vars($this);
        $fields = [];

        foreach ($props as $name => $value) {
            if ($name === 'id' || $name == 'created_at') continue;
            $fields[] = $name . ' = ' . ':' . $name;
            $data[':' . $name] = $value;
        }

        $data[':id'] = $this->id;

        $db = new DB();

        $sql = "UPDATE " . static::$table . " SET " . implode(', ', $fields) . "  WHERE id = :id";

        return $db->execute($sql, $data);
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        return $this->id ? $this->update() : $this->insert();
    }

    /**
     * @return bool
     */
    public function delete(): bool
    {
        if (!isset($this->id)) return false;

        $data[':id'] = $this->id;

        $db = new DB();
        $sql = "DELETE FROM " . static::$table . "  WHERE  " . static::$table . ".id = :id";
        return $db->execute($sql, $data);
    }

    /**
     * @return array
     */
    public static function findAll()
    {
        $db = new DB();
        return $db->query(
            "SELECT * FROM " . static::$table,
            static::class); //'App\Models\Article'
    }

    /**
     * @param int $limit
     * @return array
     */
    public static function getLimitRows(int $limit): array
    {
        $db = new DB();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $limit;
        return $db->query($sql, static::class); //'App\Models\Article'
    }
}