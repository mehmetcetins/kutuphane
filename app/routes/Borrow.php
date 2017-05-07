<?php 

class Borrow{

    public function index(){
        global $db;
        render("borrow/view",["db"=>$db]);
    }

    public function back(){

        global $db;
        $query = $db->query("DELETE  FROM odunc WHERE id=".$_GET["id"]);
        header("location:/odunc");


    }
}