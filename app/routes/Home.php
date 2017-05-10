<?php

class Home {
    public function index() {
        session_start();
        if(isset($_SESSION["sonuc"])){
            render('home',["sonuc" => "Hiçbir Sonuç Bulunamadı."]);
            unset($_SESSION["sonuc"]);
        }
        
        else render('home');
    }
}
