<?php

abstract class Article {
    public $title;
    public $text;

    static protected $br = '<br>';

    public function view()
    {
        echo $this->title;
        echo $this->text;
    }
}

class NewsArticle extends Article {
    public $author;

    public function view()
    {
        echo $this->author;
        echo parent::$br;
        echo $this->title;
        echo parent::$br;
        echo $this->text;

    }
}

$a = new NewsArticle();
$a->title = 'Title';
$a->text = 'text';
$a->author = 'Author';
$a->view();