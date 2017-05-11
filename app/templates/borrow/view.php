
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
   <h4> OKUL NUMARANIZ <input type="text" name="numara" class="odunc" required > </h4> 
   <input type="submit" class="odbutton" value = "ara">
</form>


<?php

if($_POST)
{
    $query = $db->query(
    "SELECT *,odunc.id as odid FROM odunc INNER JOIN kitap ON odunc.kitap = kitap.id 
    INNER JOIN ogrenci on odunc.ogrenci = ogrenci.numara
    where odunc.ogrenci=".$_POST["numara"],
    PDO::FETCH_OBJ
    );
    if(!$query->rowCount()){
        echo "teslim aldığınız kitap bulunamamaktadır.";
    }

    else {
        ?>


        <table cellpadding="0" cellspacing="0">
            <tr>
                <th>kitap adı</th>
                <th>öğrenci adı</th>
                <th>Numarasi</th>
                <th>Sınıfı</th>
                <th>aldığınız tarih</th>
                <th>teslim tarihi</th>
                <th>teslim et</th>
            </tr>
            <?php foreach($query as $qu):?>
             <tr>
                <td><?=$qu->ad?></td>
                <td><?=$qu->ogrenci_ad." ".$qu->soyad?></td>
                <td><?=$qu->numara?></td>
                <td><?=$qu->sinif?></td>
                <td><?=$qu->tarih?></td>
                <td><?=$qu->teslim?></td>
                <td><a href="/odunc/teslim?id=<?=$qu->odid?>">teslim et</a></td>
            </tr>
            <?php endforeach;?>
            
            
        </table>



        <?php
    }


}

?>
