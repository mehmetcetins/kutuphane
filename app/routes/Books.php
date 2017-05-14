<?php

 class Books{
     
     public function index(){
        global $db;
        global $e;
        if(isset($_GET["ara"])){
            if($_GET["ara"] == "")
                header("location:/");
            $ara = $_GET["ara"];
            $query= $db->query("SELECT *,kitap.id as katid FROM kitap INNER JOIN yazar ON kitap.yazar = yazar.id 
            INNER JOIN yayin ON kitap.yayin = yayin.id
            WHERE LOWER(ad) like LOWER('%$ara%') or LOWER(yayin_ad) like LOWER('%$ara%') or LOWER(yazar_ad) like LOWER('%$ara%') or isbn like '%$ara%' ",PDO::FETCH_OBJ);
        }
        else{
            $query = $db->query("SELECT *,kitap.id as katid FROM kitap INNER JOIN yazar ON kitap.yazar = yazar.id 
            INNER JOIN yayin ON kitap.yayin = yayin.id ",PDO::FETCH_OBJ);
        }
        

        if($query->rowCount())
        {
            render("books/list",["kitaplar"=>$query]);
        }
        else {
            session_start();

            $_SESSION["sonuc"] = "";
            header("location:/");
        }

     }

     public function detail(){
        if(!isset($_GET["id"])) header("Location:/kitaplar");
        global $db;
        $query = $db->query("SELECT *, kitap.id as kitap_id  FROM kitap INNER JOIN yazar ON kitap.yazar = yazar.id INNER JOIN yayin ON kitap.yayin = yayin.id where kitap.id=".$_GET['id']."", PDO::FETCH_OBJ)->fetch();
        $borrowed = $db->query('SELECT COUNT(id) as sayi FROM odunc WHERE kitap = "'.$query->kitap_id.'"', PDO::FETCH_OBJ)->fetch()->sayi > 0;

        if($query)
        {
            render("books/view", ["book"=>$query, "borrowed" => $borrowed]);
        }

     }
     
     public function borrow(){
        global $db;
        $db->exec("INSERT INTO odunc(ogrenci,tarih,teslim,kitap) values(
        '".$_POST["ogrenci"]."',
        '".date("Y-m-d")."',
        '".date("Y-m-d",strtotime($_POST["teslim"]))."',
        ".$_GET["id"]."
        )");
        header("location:/kitaplar");
     }

     public function add(){
        
        session_start();
        if(isset($_SESSION["kitap"])){
            if ($_SESSION["kitap"] == "kaydedildi.") $kitap="Kitap Başarıyla Kaydedildi.";
            if ($_SESSION["kitap"] == "konumhata") $kitap="Lütfen konumu doğru formatta giriniz.";
            else $kitap ="Bu Kitap Daha Önce Kaydedilmiştir";
            unset($_SESSION["kitap"]);
            render("books/add",["kitap"=>$kitap]);
        
        }
        

        
        else{
            render("books/add");
        }
    }

    public function ekle(){
        if (!preg_match('/.-[0-9]{1,}/', $_POST['konum'])) {
            session_start();
            $_SESSION["kitap"]="konumhata";
            header("location:/kitaplar/ekle");
        }

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
                header("location:/kitaplar/ekle");
            }
            else {
                $kapak = $_FILES["kapak"]["tmp_name"];
                $resim = md5($kapak).".".pathinfo($_FILES["kapak"]["name"],PATHINFO_EXTENSION);
                move_uploaded_file($kapak,__DIR__ . "/../../uploads/".$resim);

                $ozet  = $db->quote($_POST['ozet']);
                $query = $db->exec("insert into kitap(ad,yazar,isbn,yayin,kaynak,resim,konum,ozet,yil) 
                values(
                '".$_POST['k_ad']."',
                $yazar_id,
                '".$_POST['isbn']."',
                $yayin_id,
                '".$_POST['kaynak']."',
                '"."/uploads/".$resim."',
                '".$_POST['konum']."',
                ".$ozet.",
                ".$_POST['yili'].")"
                );
                session_start();
                $_SESSION["kitap"] = "kaydedildi.";
                header("location:/kitaplar/ekle");
            }

            

    }
 }

 
