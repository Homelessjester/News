<?php

class NewsController
{
    public function actionAll()
    {
        $article = new NewsModel();
        $article->title = 'Привет опять!!!';
        $article->text = 'Тоже ручная вставка';
        $article->insert();
        die();
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne();
        $view = new View();
        $view->render('news/one.php');
    }
}