<?php

class News
    extends AbstractModel
{
    public $id;
    public $title;
    public $text;

    protected $table = 'news';

    public static function getOne($id)
    {
        $db = new DB('localhost', 'root', '', 'news');
        return $db->queryOne('SELECT * FROM news WHERE id=' . $id, 'News');
    }
}