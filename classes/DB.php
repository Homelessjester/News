<?php

class DB
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '');
    }

    public function query($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll();
    }
}