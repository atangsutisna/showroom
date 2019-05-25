<!-- inner page banner -->
<?php 
$background_uri = base_url('assets/images/background/bg5.jpg');
?>
<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('<?= $background_uri ?>')">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Galery</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li>Galery</li>
        </ul>
    </div>
</div>

<div class="section-full p-t50 bg-white content-inner-1" >
    <div class="section-head text-center head-1">
        <h3 class="h3">Galery Mobil</h3>
    </div>
    <div class="container-fluid">
        <div class="row car-gallery masonry" id="lightgallery">
            <?php foreach ($galeries as $galery) : ?>
            <a href="<?= base_url($galery->file_path) ?>" class="card-container col-lg-2 col-md-3 col-sm-4 col-xs-6 interior">
                <img src="<?= base_url('files_uploaded/thumb/'. $galery->file_name.'_thumb'.$galery->file_type) ?>" alt="" />
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>