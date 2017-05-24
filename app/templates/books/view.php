<div class= "book-detail">
    <img src="<?= $book->resim ?>" alt="resim" align="left" />
    <div class="book-badge">
        <span><strong>Kitap Adı:</strong> <?= $book->ad; ?></span>
        <span><strong>Yazar:</strong> <?= $book->yazar_ad; ?></span>
        <span><strong>Yayın Evi:</strong> <?= $book->yayin_ad; ?></span>
        <span><strong>Basım Yılı:</strong> <?= $book->yil; ?></span>
        <span><strong>Kitap Yeri:</strong> <?php $arr = explode("-",$book->konum); echo "Blok : $arr[0]   Raf : $arr[1]"; ?></span>
        <span><strong>ISBN:</strong> <?= $book->isbn; ?></span>
    </div>
    <div class="book-summary">
        <?=$book->ozet ?>
    </div>
    <?php
        if($borrowed)
        {
            echo "<font color='red' size='5'>Kitap daha önce odünç alınmış.</font>";
        }
        else {
    ?>
    <div class="book-borrow">
        <form class='oduncform' action='/kitaplar/odunc?id=<?=$_GET["id"]?>' method='post'>
            <div class="form-group">
                <label>Öğrenci Numarası:</label>
                <input type="text" name="ogrenci" />
            </div>
            <div class="form-group">
                <label>Teslim Tarihi:</label>
                <input type="date" name="teslim" required min="<?=date('Y-m-d',time()+60*60*24)?>" />
            </div>
            <div class="form-group">
                <label></label>
                <input type="submit" class="buttonx" name="borrow" value="Ödünç Ver">
            </div>
            <div class="warningx">
                <div class="warning">
                    <p>
                    <script>var book = <?=json_encode($book); ?></script>
                    </p>
                    <div>
                        <input type="submit" value="Onayla">
                        <input type="submit" class = "cancel" value="İptal Et">
                    </div>
                </div>
            </div>
        </form>

    </div>
    <?php } ?>
</div>