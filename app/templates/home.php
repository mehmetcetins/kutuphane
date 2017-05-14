<style>

    body{
        background:#333;
    }
</style>

<div class="stats">
    <div><?= $sayilar['yazar'] ?> <span>YAZAR</span></div>
    <div><?= $sayilar['yayin'] ?> <span>YAYIN</span></div>
    <div><?= $sayilar['kitap'] ?> <span>KİTAP</span></div>
    <div><?= $sayilar['odunc'] ?> <span>ÖDÜNÇ</span></div>
</div>

<div class="panel">
    <div class="search">
        <form action="/kitaplar" method="get">
            <input type="text" placeholder= "Kitap Adı, Yazar, Yayıncı, ISBN" name="ara" class="ara">
            <input type="submit" class="arbutton" value="ara">
        </form>
        <?php
            if(isset($sonuc)) {echo "<span class='sonuc'>$sonuc</span>";}
            ?>
    </div> 

</div>