<?php

 class Books{
     
     public function index(){
        global $db;
        $query = $db->query("select * from kitap",PDO::FETCH_OBJ);

        if($query->rowCount())
        {
            render("books/list",["kitaplar"=>$query]);
        }

     }

     public function detail(){
         global $db;
        $query = $db->query("SELECT * FROM kitap INNER JOIN yazar ON kitap.yazar = yazar.id INNER JOIN yayin ON kitap.yayin = yayin.id where kitap.id=".$_GET['id']."",PDO::FETCH_OBJ);
        
        if($query->rowCount())
        {
            render("books/view",["detail"=>$query]);
        }

     }

 }
