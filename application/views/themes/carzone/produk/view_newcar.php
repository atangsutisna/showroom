<?php 
$background_uri = base_url('assets/images/background/bg5.jpg');
?>
<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('<?= $background_uri ?>')">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white"><?= $product->nama_produk ?></h1>
        </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="<?= base_url('produk') ?>">Produk</a></li>
            <li><?= $product->nama_produk ?></li>
        </ul>
    </div>
</div>
