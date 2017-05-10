<div class= "book-detail">
    <?php foreach ($detail as $det) :?>
        <img src="<?= $det->resim ?>" alt="resim" align="left" />
        <div class="book-badge">
            <span><strong>Yazar:</strong> <?= $det->ad; ?></span>
            <span><strong>Yayın Evi:</strong> <?= $det->y_ad; ?></span>
            <span><strong>Basım Yılı:</strong> <?= $det->yil; ?></span>
            <span><strong>Kitap Yeri:</strong> <?php $arr = explode("-",$det->konum); echo "Blok : $arr[0]   Raf : $arr[1]"; ?></span>
            <span><strong>ISBN:</strong> <?= $det->isbn; ?></span>
        </div>
        <div class="book-summary">
            <?=$det->ozet ?>
        </div>
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
                    <input type="submit" name "borrow" value="Ödünç Ver">
                </div>
            </form>
        </div>
    <?php endforeach; ?>
</div>