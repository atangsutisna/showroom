<div class="form-horizontal">
    <?= form_hidden('id_produk', isset($produk) ? $produk->id_produk : '') ?>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="text" name="nama_produk" placeholder="Nama produk" 
                value="<?php echo set_value('nama_produk', isset($produk) ? $produk->nama_produk : '') ?>" 
                required class="form-control">
            <?= form_error('nama_produk') ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Kategori/Tahun</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <?= form_dropdown('id_kategori_produk', $cat_choices, 
                isset($produk) ? $produk->id_kategori_produk : '', "class=\"form-control\" required"); ?>
        </div>
        <div class="col-lg-4 col-sm-4 col-4">
            <input type="number" name="tahun" class="form-control" 
                placeholder="Tahun" value="<?= set_value('tahun', isset($produk) ? $produk->tahun : '') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Transmisi/Bahan Bakar</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <?= form_dropdown('transmisi', $transmisi_choices, 
                isset($produk) ? $produk->transmisi : NULL, "class=\"form-control\" required"); ?>
        </div>
        <div class="col-lg-4 col-sm-4 col-4">
            <?= form_dropdown('tipe_bahan_bakar', $bbm_choices, 
                isset($produk) ? $produk->tipe_bahan_bakar : NULL, "class=\"form-control\" required"); ?>
        </div>
    </div>           
    <div class="form-group">
        <label class="col-sm-3 control-label">Body/Kapasitas Mesin</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <?= form_dropdown('id_body_type', $body_type_choices, 
                isset($produk) ? $produk->id_body_type : NULL, "class=\"form-control\" required"); ?>
        </div>
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
            <?php if (isset($produk)) : ?>
                <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" 
                    class="img img-responsive" width="250">
            <?php endif; ?>
            <input type="file" name="gambar" class="form-control">                        
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Status</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <?= form_dropdown('status_produk', $status_choices, 
                isset($produk) ? $produk->status_produk : '', "class=\"form-control\" required"); ?>
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
                isset($produk) ? $produk->satuan : '', "class=\"form-control\" required"); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Stok</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <input type="number" name="stok" class="form-control" 
                placeholder="Stok produk" value="<?= set_value('stok', isset($produk) ? $produk->stok : '') ?>" required>
        </div>
    </div>    
</div>