<?php

class Home {
    public function index() {
        global $db;
        $countk = $db->query("SELECT COUNT(id) as sayi from kitap ")->fetch()['sayi'];
        $county = $db->query("SELECT COUNT(id) as sayi from yazar ")->fetch()['sayi'];
        $countya = $db->query("SELECT COUNT(id) as sayi from yayin ")->fetch()['sayi'];
        $counto = $db->query("SELECT COUNT(id) as sayi from odunc ")->fetch()['sayi'];
        session_start();
        if(isset($_SESSION["sonuc"])){
            render('home',["sonuc" => "Hiçbir Sonuç Bulunamadı.","sayilar" => [
                "yazar" => $county,
                "yayin" => $countya,
                "kitap" => $countk,
                "odunc" => $counto
            ]]);
            unset($_SESSION["sonuc"]);
        }
        
        else render('home',["sayilar" => [
                "yazar" => $county,
                "yayin" => $countya,
                "kitap" => $countk,
                "odunc" => $counto
            ]]);

    }
}
