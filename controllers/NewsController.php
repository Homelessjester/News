<?php

class NewsController
{
    public function actionAll()
    {
        $db = new DB();
        $res = $db->query('SELECT * FROM news');
        var_dump($res);
        die();
        /*$news = News::getAll();
        $view = new View();

        $view->items = $news;

        $view->display('news/all.php');*/
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne();
        $view = new View();
        $view->render('news/one.php');
    }
}