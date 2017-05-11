
<style>
    .panel{

        margin:200px auto;
        width:500px;
        height:80px;
    }

    body{
        background:#333;
    }
    .kitap button a {
        text-decoration:none;
    }
        
    .sonuc {
        color:white;
        font-size:14px;
        text-transform:uppercase;
        position:relative;
        bottom:0;

    }
</style>

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