<?php

class NewsController
{
    public function actionAll()
    {
        $article = NewsModel::findOneByColumn('title', 'Привет!!!');
        $article->title = 'New title';
        $article->save();
        var_dump($article);

    }
}