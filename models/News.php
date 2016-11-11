<?php

require_once __DIR__ . '/../classes/DB.php';

class News
{
    public $id;
    public $title;
    public $text;

    static public function getAll()
    {
        $db = new DB('localhost', 'root', '', 'news');
        return $db->query('SELECT * FROM news', MYSQLI_USE_RESULT);
    }
}