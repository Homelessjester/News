<?php

abstract class AbstractModel
{
    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DB('localhost', 'root', '', 'news');
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, MYSQLI_USE_RESULT);
    }

    public static function getOne($id)
    {
        $db = new DB('localhost', 'root', '', 'news');
        $sql = 'SELECT * FROM ' . static::$table .' WHERE id=' . $id;
        return $db->queryOne($sql, static::$class);
    }
}

