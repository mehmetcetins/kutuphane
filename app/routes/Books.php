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
        $query = $db->query("select * from kitap",PDO::FETCH_OBJ);
        
        if($query->rowCount())
        {
            render("books/view",["detail"=>$query]);
        }

     }

 }
