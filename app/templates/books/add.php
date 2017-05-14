<form action="/kitaplar/eklePost" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label>Kitap Adı:</label>
                <input type="text" name="k_ad" required>
            </div>
            <div class="form-group">
                <label>Yazarı:</label>
                <input type="text" name="yazar" required>
            </div>
            <div class="form-group">
                <label>Yayıncısı:</label>
                <input type="text" name="yayinci" required>
            </div>
            <div class="form-group">
                <label>ISBN:</label>
                <input type="text" name="isbn" required>
            </div>
            
            <div class="form-group">
                <label>Baskı Yılı:</label>
                <input type="number" name="yili" required>
            </div>
            <div class="form-group">
                <label>Nereden Geldi:</label>
                <input type="text" name="kaynak" required>
            </div>
            <div class="form-group">
                <label>Raf Yeri:</label>
                <input type="text" name="konum" placeholder="Lütfen HARF-SAYI formatında giriniz" required>
            </div>
            <div class="form-group">
                <label>Kapağı:</label>
                <input type="file" name="kapak" required>
            </div>
            <div class="form-group">
                <label>Özeti:</label>
                <textarea name="ozet"  cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label></label>
                <input type="submit" value="EKLE">
            </div>

                <?php
                if(isset($kitap))
                    echo "<font color='red'>$kitap</font>";
                
                ?>



</form>