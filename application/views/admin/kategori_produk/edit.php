<?php
// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open_multipart('admin/kategori_produk/do_update');
echo form_hidden('id_kategori_produk', $kategori_produk->id_kategori_produk);
?>

<div class="form-group">
<label>Nama</label>
<input type="text" name="nama_kategori_produk" placeholder="Nama kategori produk" 
    value="<?php echo $kategori_produk->nama_kategori_produk ?>" required class="form-control">
</div>
<div class="form-group">
<label>Gambar</label>
<input type="file" name="file" class="form-control">
</div>

<div class="form-group">
<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>


<?php echo form_close() ?>