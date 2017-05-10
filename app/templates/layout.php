<html>
<head>
    <meta charset="UTF-8" />
    <title>Kütüphane</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<style>
body{
   margin:0;
}
    a{
    text-decoration:none;
}
.box{
    background:#3E3E3E;
    height:50px;
    font-size:36px;
    color:#E2E2E2;
    padding-left:30px;
    padding-top:10px;
}
.box a{
    color:#E2E2E2;
}

</style>
<body>
    <header>
        <div class="container">
            <div class="logo"><a href="/">KUTUPHANE</a></div>
            <nav>
                <a href="/kitaplar">Kitaplar</a>
                <a href="#">Odunc Listesi</a>
                <a href="#">Ogrenci Listesi</a>
                <a href="#">Yoneticiler</a>
            </nav>
        </div>
    </header>
    <div class="container main-content">
        <?php echo $content ?>
    </div>
    <footer class="container">
        Kutuphane Yonetim Sistemi &copy; Mehmet Cetin
    </footer>
</body>
</html>