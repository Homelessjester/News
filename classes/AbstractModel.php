<?php

abstract class AbstractModel
{
    static protected $table;
    
    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public static function getTable()
    {
        return static::$table;
    }

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::getTable();
        $db = new DB();
        $class = get_called_class();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function findOneByPk($id)
    {
        $sql = 'SELECT * FROM ' . static::getTable() .
            ' WHERE id=:id';
        $db = new DB();
        $class = get_called_class();
        $db->setClassName($class);
        return $db->query($sql, [':id' => $id])[0];
    }

    public function insert()
    {
        $cols = array_keys($this->data);
        $data = [];

        foreach ($cols as $col) {
            $data[':' . $col] = $this->data[$col];
        }

         $sql = '
          INSERT INTO ' . static::getTable() .
        ' (' . implode(', ', $cols) . ') 
        VALUES 
        (' . implode(', ', array_keys($data)) . ')';

        $db = new DB();
        $db->execute($sql, $data);
    }
}