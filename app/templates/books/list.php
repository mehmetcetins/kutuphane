

<style>

.contents{
    width:100%;
    height:260px;
    background-color:#EB5757;
    margin-bottom:30px;
}

.button {
    display:block;
}

.contents img{
    width:146px;
    height:220px;
    float:left;
}

.contents > div {
    padding: 20px;
    box-sizing: border-box;

}
.contents span{
    color : white ; 
    font-size:17px ;
    white-space:nowrap;
}
.contents h4{
    color:white;
}
.contents div div {
    margin-left:30px;
    float:left;
    height:220px;
}
.contents div div span{
    font-weight:normal;
    font-size:17px;
}

.books{
    padding:10 80 0 60;
}
.clear::after{
    content:"";
    clear:both;
    display:block;
}

</style>

<div class="books clear">
<?php foreach($kitaplar as $kitap): ?>
<a class="clear button" href="kitaplar/detay?id=<?= $kitap->id?>">
    <div class="contents">
        <div class="clear">
            <img src="<?= $kitap->resim ?>"  class="clear"  alt="RESİM">
            <div >
                <h4>KİTAP ADI : <span><?= $kitap->ad ?></span></h4>
                <h4>YAZAR : <span><?= $kitap->yazar_ad ?></span></h4>
                <h4>YAYINCI : <span><?= $kitap->yayin_ad ?></span></h4>
                <h4>KONUM : <span><?php
                $arr = explode("-", $kitap->konum); 
                echo "Blok : $arr[0]   Raf : $arr[1]";
                ?></span></h4>
                <h4>ISBN : <span><?= $kitap->isbn ?></span></h4>
               
            </div>
        </div>
    </div>
    </a>
    
<?php endforeach; ?>

</div>