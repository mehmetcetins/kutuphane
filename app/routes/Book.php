<?php


class Book{
    public function index(){
        render("book/view");
    }

    public function add(){
            global $db;

            $yazar = $db->prepare("insert into yazar (yazar_ad) values(?)");
            $yazar->execute($_POST["yazar"]);
            $yazar_id= $db->lastInsertId();
            $yayin = $db->prepare("insert into yayin (yayin_ad) values(?)");
            $yayin->execute($_POST["yayinci"]);
            $yayin_id=$db->lastInsertId();
            



    }
}