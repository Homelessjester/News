<?php

class News
    extends AbstractModel
{
    public $id;
    public $title;
    public $text;

    protected static $table = __CLASS__;
    protected static $class =__CLASS__;

    public static function getOne()
    {

    }
}