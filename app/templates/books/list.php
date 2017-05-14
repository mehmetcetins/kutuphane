<div class="books-list">
    <?php foreach($kitaplar as $kitap): ?>
        <a href="kitaplar/detay?id=<?= $kitap->katid?>" class="books-item">
            <img src="<?= $kitap->resim ?>" alt="RESİM">
            <span class="name"><?= $kitap->ad ?>
        </a>
    <?php endforeach; ?>
</div>