<?php

abstract class AbstractModel
{
    protected static $table;

    public static function getAll()
    {
        $db = new DB('localhost', 'root', '', 'news');
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, MYSQLI_USE_RESULT);
    }
}