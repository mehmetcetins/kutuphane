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
            <h4> YAZAR : <?= $det->yazar_ad; ?> </h4>
            <h4> YAYIN EVİ : <?= $det->yayin_ad; ?> </h4>
            <h4> BASIM YILI : <?= $det->yil;?> </h4>
            <h4> ISBN : <?= $det->isbn ?></h4>
            <h4> KITAP YERİ : <?php
                $arr = explode("-",$det->konum); 
                echo "Blok : $arr[0]   Raf : $arr[1]";
            ?>
            <h4> KAYNAK : <?=$det->kaynak?></h4>
            <form class='oduncform' action='/kitaplar/odunc?id=<?=$_GET["id"]?>' method='post'>
                <h4>OKUL NUMARANIZ <input type="text" name="ogrenci" required></h4>
                <h4>TESLiM TARİHİ <input type="date" name="teslim" required min="<?=date('Y-m-d',time()+60*60*24)?>"></h4>
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