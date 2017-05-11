<?php


class Book{
    public function index(){
        
        session_start();
        if(isset($_SESSION["kitap"])){
            if ($_SESSION["kitap"] == "kaydedildi.") $kitap="Kitap Başarıyla Kaydedildi.";
            else $kitap ="Bu Kitap Daha Önce Kaydedilmiştir";
            unset($_SESSION["kitap"]);
            render("book/view",["kitap"=>$kitap]);
        
        }
        

        
        else{
            render("book/view");
        }
    }

    public function add(){
            global $db;
            $book = $db->query("select * from kitap where ad = '".$_POST['k_ad']."'",PDO::FETCH_OBJ)->fetch();
            $yazar = $db->query("select * from yazar where yazar_ad = '".$_POST['yazar']."'",PDO::FETCH_OBJ)->fetch();
            $yayin = $db->query("select * from yayin where yayin_ad = '".$_POST['yayinci']."'",PDO::FETCH_OBJ)->fetch();
            
            if($yazar)
            {
                $yazar_id= $yazar->id;
            }
            else {
                $yazar = $db->prepare("insert into yazar (yazar_ad) values(?)");
                $yazar->execute([$_POST["yazar"]]);
                $yazar_id= $db->lastInsertId();
            }
            if($yayin)
            {
                $yayin_id = $yayin->id;
            }
            else {
                $yayin = $db->prepare("insert into yayin (yayin_ad) values(?)");
                $yayin->execute([ $_POST["yayinci"] ]);
                $yayin_id=$db->lastInsertId();
            }

            
            if($book)
            {
                session_start();
                $_SESSION["kitap"]="";
                header("location:/kitap");
            }
            else {
                $ozet  = $db->quote($_POST['ozet']);
                $query = $db->exec("insert into kitap(ad,yazar,isbn,yayin,kaynak,resim,konum,ozet,yil) 
                values(
                '".$_POST['k_ad']."',
                $yazar_id,
                '".$_POST['isbn']."',
                $yayin_id,
                '".$_POST['kaynak']."',
                '".$_POST['kapak']."',
                '".$_POST['konum']."',
                ".$ozet.",
                ".$_POST['yili'].")"
                );
                session_start();
                $_SESSION["kitap"] = "kaydedildi.";
                header("location:/kitap");
            }

            

    }
}