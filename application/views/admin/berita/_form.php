
<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div><hr/>
<?= validation_errors() ?>
<?= form_open_multipart($form_action); ?>
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label>Nama berita</label>
            <input type="text" name="nama_berita" placeholder="Nama berita" 
                value="<?php echo set_value('nama_berita', isset($berita) ? $berita->nama_berita : '') ?>" 
                required class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label>Kategori Berita</label>
            <?= form_dropdown('id_kategori_berita', $kategori_choices, 
                                isset($berita) ? $berita->id_kategori_berita : '', "class=\"form-control\" required"); ?>
        </div>
    </div> <!--/end of cat-berita -->
    <div class="col-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label>Status</label>
            <?= form_dropdown('status', $status_choices, 
                                isset($berita) ? $berita->status : '', "class=\"form-control\" required"); ?>
        </div>
    </div>
    <div class="col-4 col-md-4 col-lg-4">
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label>Upload gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="keterangan" class="form-control" placeholder="Keterangan" 
                id="keterangan"><?php echo set_value('keterangan', isset($berita) ? $berita->keterangan : '') ?></textarea>
        </div>
    </div>
</div>
<div class="form-group">
    <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
    <a href="<?= site_url('admin/berita') ?>" class="btn btn-default">Kembali</a>
</div>
<?= form_close() ?>
<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#keterangan",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>