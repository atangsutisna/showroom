<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>   
    </div>
</div><hr/>
<?= validation_errors() ?>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="panel panel-default">   
            <div class="panel-body">
                <?= form_open_multipart($form_action, 'class="form-horizontal"'); ?>
                    <?= form_hidden('id_produk', isset($produk) ? $produk->id_produk : '') ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-lg-8 col-sm-8 col-8">
                            <input type="text" name="nama_produk" placeholder="Nama produk" 
                                value="<?php echo set_value('nama_produk', isset($produk) ? $produk->nama_produk : '') ?>" 
                                required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Kategori/Tahun</label>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <?= form_dropdown('id_kategori_produk', $cat_choices, 
                                isset($produk) ? $produk->id_kategori_produk : '', "class=\"form-control\""); ?>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <input type="number" name="tahun" class="form-control" 
                                placeholder="Tahun" value="<?= set_value('tahun', isset($produk) ? $produk->tahun : '') ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Transmisi/BBM</label>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <?= form_dropdown('transmisi', $transmisi_choices, 
                                isset($produk) ? $produk->transmisi : NULL, "class=\"form-control\""); ?>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <?= form_dropdown('tipe_bahan_bakar', $bbm_choices, 
                                isset($produk) ? $produk->tipe_bahan_bakar : NULL, "class=\"form-control\""); ?>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Kapasitas Mesin</label>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <div class="input-group">
                                <input type="number" name="kapasitas_mesin" class="form-control" 
                                    placeholder="Contoh 1.200" value="<?= set_value('tahun', isset($produk) ? $produk->kapasitas_mesin : '') ?>" required>
                                <div class="input-group-addon">CC</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Deskripsi</label>
                        <div class="col-lg-8 col-sm-8 col-8">
                            <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="keterangan"><?= set_value('keterangan', isset($produk) ? $produk->keterangan : '') ?></textarea>
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Gambar</label>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <input type="file" name="gambar" class="form-control">                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Status</label>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <?= form_dropdown('status_produk', $status_choices, 
                                isset($produk) ? $produk->status_produk : '', "class=\"form-control\""); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga/Satuan</label>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <input type="number" name="harga" class="form-control" 
                                placeholder="Harga produk" value="<?= set_value('harga', isset($produk) ? $produk->harga : '') ?>" required>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <?= form_dropdown('satuan', $unit_choices, 
                                isset($produk) ? $produk->satuan : '', "class=\"form-control\""); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Stok</label>
                        <div class="col-lg-4 col-sm-4 col-4">
                            <input type="number" name="stok" class="form-control" 
                                placeholder="Stok produk" value="<?= set_value('stok', isset($produk) ? $produk->stok : '') ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-lg-offset-3 col-offset-3 col-sm-5">
                            <input type="submit" name="submit" value="Simpan Data" 
                                class="btn btn-primary">                        
                            <a href="<?= site_url('admin/produk') ?>" class="btn btn-default">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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