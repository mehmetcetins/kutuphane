<style>
.detail {
    margin:auto 150px;

}
.detailb img{
    float:left;
}
.author{
    float:left;
}
.clear::after{
    content:"";
    clear:both;
    display:block;
}

</style>

<div class= "detail">

    <div class="detailb clear">
    <?php foreach ($detail as $det) :?>
        <img src="<?= $det->resim ?>" alt="resim">
        <div class="author">
            <h4> YAZAR : <?= $det->ad; ?> </h4>
            <h4> YAYIN EVİ : <?= $det->y_ad; ?> </h4>
            <h4> ISBN : <?= $det->isbn ?></h4>
            <h4> KITAP YERİ : <?php
                $arr = explode("-",$det->konum); 
                echo "Blok : $arr[0]   Raf : $arr[1]";
            ?>
            <form class='oduncform' action='/kitaplar/odunc?id=<?=$_GET["id"]?>' method='post'>
                <h4>OKUL NUMARANIZ <input type="text" name="ogrenci"></h4>
                <h4>TESLiM TARİHİ <input type="date" name="teslim" ></h4>
                <input type="submit" name "borrow" value="ÖDÜNÇ AL">
            </form>
        </div>
    </div>
    <div class="brief clear">
        <p>
        
            <?=$det->ozet ?>
        
        </p>
    </div>

    <?php endforeach; ?>
</div>