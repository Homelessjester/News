<?php

class Article {
    public $title;
    public $text;

    public function view()
    {
        echo $this->title;
        echo $this->text;
    }
}

class NewsArticle extends Article {
    public $author;

    public function view($br = '<br>')
    {
        echo $this->author . $br . $this->title . $br . $this->text;
    }
}

$a = new NewsArticle();
$a->title = 'Title';
$a->text = 'text';
$a->author = 'Author';
$a->view();