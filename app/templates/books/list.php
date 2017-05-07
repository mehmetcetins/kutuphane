

<style>

body{
   margin:0;
}
a{
    text-decoration:none;
}
.contents{
    width:300px;
    height:520px;
    background-color:#EB5757;
    float:left;
    margin-left:20px;
    margin-bottom:30px;
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
    color:#E2E2E2;
    padding-left:30px;
    padding-top:10px;
}
.box a{
    color:#E2E2E2;
}

.books{
    padding:10 80 0 60;
}
.contents:nth-child(5n),.contents:first-child{
    margin-left:0;
}
.clear::after{
    content:"";
    clear:both;
    display:block;
}

</style>
<div class="box">
    <a href="/">
        <span> KÜTÜPHANE </span>
    </a>
</div>
<div class="books clear">
<?php foreach($kitaplar as $kitap): ?>
    <div class="contents">
        <div>
            <img src="<?= $kitap->resim ?>" alt="RESİM">
            <center> <span><?= $kitap->ad ?></span></center>
            <a class="button" href="kitaplar/detay?id=<?= $kitap->id?>">incele</a>
        </div>
    </div>
    
<?php endforeach; ?>

</div>