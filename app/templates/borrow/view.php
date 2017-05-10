<form action="/odunc" method="post">
   <h4> OKUL NUMARANIZ <input type="text" name="numara" required> </h4> 
   <input type="submit">
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


        <table>
            <tr>
                <td>kitap adı</td>
                <td>öğrenci adı</td>
                <td>Numarasi</td>
                <td>Sınıfı</td>
                <td>aldığınız tarih</td>
                <td>teslim tarihi</td>
                <td>teslim et</td>
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
