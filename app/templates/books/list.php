

<style>

body{
   margin:0;
}
.contents{
    width:300px;
    height:520px;
    background-color:#EB5757;
}

.contents img{
    width:254px;
    height:378px;
}

.button {
    line-height:50px;
    width:200px;
    height:50px;
    background-color:white;
    text-transform:uppercase;
    text-decoration:none;
    color:#EB5757;
    margin: auto;
    position: relative;
    top:20px;
    text-align:center;
    display: block;
}
.contents div {
    height: 520px;
    padding: 23px;
    box-sizing: border-box;

}
.contents span{
    color : white ; 
    font-size:17px ;
    white-space:nowrap;
}
.box{
    background:#3E3E3E;
    height:50px;
    font-size:36px;
    font-family:"roboto";
    color:#E2E2E2;
    padding-left:30px;
}

.books{
    padding:10 30 0 30;
}


</style>
<div class="box">
    <span> KÜTÜPHANE </span>
</div>
<div class="books">
<?php foreach($kitaplar as $kitap): ?>
    <div class="contents">
        <div>
            <img src="<?= $kitap->resim ?>" alt="RESİM">
            <center><span><?= $kitap->ad ?></span></center>
            <a class="button" href="kitaplar/detay?id=<?= $kitap->id?>">incele</a>
        </div>
    </div>
    
<?php endforeach; ?>

</div>