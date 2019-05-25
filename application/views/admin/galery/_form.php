<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>   
    </div>
</div><hr />
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <?= show_bootstrap_alert() ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" method="post"
                    action="<?= site_url($form_action) ?>" enctype="multipart/form-data">
                    <?= form_hidden('id_kategori_produk', isset($galery) ? $galery->id_kategori_produk : '') ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-lg-8 col-sm-8 col-8">
                            <input type="text" name="name" placeholder="Nama kategori produk" 
                                value="<?= set_value('name', isset($galery) ? $galery->name : '') ?>" 
                                required class="form-control">
                            <span class="help-block"><?= form_error('name') ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Deskripsi</label>
                        <div class="col-lg-8 col-sm-8 col-8">
                            <textarea name="description" class="form-control" placeholder="description"><?= set_value('description', isset($galery) ? $galery->description : '') ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Gambar</label>
                        <div class="col-lg-8 col-sm-8 col-8">
                            <?php if (isset($galery)) : ?>
                            <img src="<?= base_url($galery->image_path) ?>" width="100"/>
                            <?php endif; ?>
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-lg-offset-3 col-offset-3 col-sm-5">
                            <input type="submit" name="submit" value="Simpan Data" 
                                class="btn btn-primary">                        
                            <a href="<?= site_url('admin/galery') ?>" class="btn btn-default">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>