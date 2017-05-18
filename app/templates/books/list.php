<?php
    
?>



<div class="books">
<?php foreach($kitaplar as $kitap): ?>
    <div class="contents">
        <img src="<?= $kitap->resim ?>" alt="RESİM">
        <span><?= $kitap->ad ?></span>
    
    </div>
<?php endforeach; ?>

</div>