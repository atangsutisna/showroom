<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div><hr/>
<?= show_bootstrap_alert() ?>
<?= form_open($form_action) ?>
<div class="form-horizontal">
    <?= form_hidden('id_kategori_berita', isset($kategori_berita) ? $kategori_berita->id_kategori_berita : NULL) ?>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama kategori</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="text" name="nama_kategori_berita" placeholder="Nama kategori berita" 
                value="<?= isset($kategori_berita) ? $kategori_berita->nama_kategori_berita : '' ?>" required class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Keterangan</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <textarea name="keterangan" class="form-control" 
                placeholder="Keterangan"><?= isset($kategori_berita) ? $kategori_berita->keterangan : '' ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-4" style="margin-left: 24%;">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?= anchor('admin/kategori_berita', 'Kembali', 'class="btn btn-default"') ?>
        </div>
    </div>
</div>
<?php echo form_close() ?>