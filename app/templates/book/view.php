<form action="/kitap/ekle" method="post">

    <table border='1'>
        <tr>
            <td>Kitap Adı </td><td><input type="text" name="k_ad"></td>
        </tr>
        <tr>
            <td>Yazarı</td><td><input type="text" name="yazar"></td>
        </tr>
        <tr>
            <td>Yayıncısı</td><td><input type="text" name="yayinci"></td>
        </tr>
        <tr>
            <td>ISBN</td><td><input type="text" name="isbn"></td>
        </tr>
        <tr>
            <td>Özeti</td><td><textarea name="ozet" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Baskı Yılı</td><td><input type="text" name="yili"></td>
        </tr>
        <tr>
            <td>Nereden Geldi</td><td><input type="text" name="kaynak"></td>
        </tr>
        <tr>
            <td>Raf Yeri</td><td><input type="text" name="konum"></td>
        </tr>
        <tr>
            <td>Kapağı</td><td><input type="text" name="kapak"></td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" value="EKLE"></center>
                <?php
                if(isset($kitap))
                    echo "<font color='red'>$kitap</font>";
                
                ?>
            </td>

        </tr>
    </table>


</form>