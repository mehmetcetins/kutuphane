
<style>
    .panel{

        margin:auto auto;
        margin-top:300px;
        width:500px;

    }

    body{
        background:#333;
    }
    .kitap button a {
        text-decoration:none;
    }
    .arbutton{
        background:#EB5757;
        border:0;
        padding:10px;
        text-transform:uppercase;
        color:white;
    }
    .ara{

        padding:10px;
        text-transform:uppercase;
        border:0;

    }
</style>

<div class="panel">
    <div class="search">
        <form action="/kitaplar" method="get">
            <input type="text" placeholder= "Kitap Adı, Yazar, Yayıncı, ISBN" name="ara" class="ara">
            <input type="submit" class="arbutton" value="ara">
        </form>
    </div> 
    <div class="kitap">
        <button><a href="/kitaplar">KİTAPLAR</a></button>
        <button><a href="/odunc">ÖDÜNÇ ALDIKLARIM</a></button>
    </div>
</div>