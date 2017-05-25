
<style>
table th{
    background:#333333;
    color:white;
    padding:10px;
    text-transform:uppercase;
}
table td{
    background:#DDDDDD;
    color:#444;
    padding:10px;
}
table td:first-child {
    width:240px;
}
table a{
    display:block;
    background:#333333;
    color:white;
    padding:10px;
    text-transform:uppercase;
}
.odbutton{
        background:#EB5757;
        border:0;
        padding:10px;
        text-transform:uppercase;
        color:white;

    }
    .odunc{

        padding:10px;
        text-transform:uppercase;
        border:1px solid black;
        

    }
</style>
<form action="/odunc" method="post">
   <h4> OKUL NUMARASI <input type="text" name="numara" value="<?= @$_POST['numara'] ?>" class="odunc" required > </h4> 
   <input class="odbutton" type="submit" value = "ara">
</form>


<?php

if($_POST) {
    $where = " where odunc.ogrenci=" . $_POST["numara"];
} else {
    $where = "";
}

$query = $db->query(
"SELECT *,odunc.id as odid FROM odunc INNER JOIN kitap ON odunc.kitap = kitap.id" . $where,
PDO::FETCH_OBJ
);


if(!$query->rowCount()){
    echo "Gösterilecek veri bulunamadı.";
}

    else { 
        
        ?>


        <table cellpadding="0" cellspacing="0">
            <tr>
                <th>kitap adı</th>
                <th>Numarasi</th>
                <th>aldığınız tarih</th>
                <th>teslim tarihi</th>
                <th>teslim et</th>
            </tr>
            <?php foreach($query as $qu):?>
             <tr>
                <td><?=$qu->ad?></td>
                <td><?=$qu->ogrenci?></td>

                <td><?=$qu->tarih?></td>
                <td><?=$qu->teslim?></td>
                <td><a class="give" o-kitap="<?= $qu->ad ?>" o-numara="<?= $qu->ogrenci ?>" href="/odunc/teslim?id=<?=$qu->odid?>">teslim et</a></td>
            </tr>
            <?php endforeach;?>
            
            
        </table>
        <div class="warningx">
                <div class="warning">
                    <p>
                    </p>
                    <div>
                        <a class="accept" href="#">Onayla</a>
                        <a class = "cancel" href="#">İptal Et</a>
                    </div>
                </div>
            </div>


        <?php
    }

?>
