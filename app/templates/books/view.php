<style>
.detail {
    margin:auto 150px;

}
.detailb img{
    float:left;
}
.author{
    float:left;
}

</style>

<div class= "detail">

    <div class="detailb">
    <?php foreach ($detail as $det) :?>
        <img src="<?= $det->resim ?>" alt="resim">
        <div class="author">
            <h4> YAZAR : </h4>
        </div>
    </div>

    <?php endforeach; ?>
</div>