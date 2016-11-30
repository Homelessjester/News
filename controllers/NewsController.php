<?php

class NewsController
{
    public function actionAll()
    {
        $article = NewsModel::findOneByColumn('title', 'Привет!!!');

    }
}