<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div>
<p>
    <a href="<?= site_url('admin/produk/reg_form') ?>" class="btn btn-primary">
    <i class="fa fa-plus"></i> Tambah Mobil</a>
</p>
<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
// Error
echo validation_errors('<div class="alert alert-success">','</div>');
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>Gambar</th>
        <th>Produk/Kategori</th>
        <th>Harga/Kondisi</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php foreach($produk as $produk) : ?>
    <tr class="odd gradeX">
        <td>
            <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" class="img img-responsive" width="60">
        </td>
        <td>
            <?= $produk->nama_produk ?><br/>
            <small><?= $produk->nama_kategori_produk ?></small>
        </td>
        <td>
            <?= format_rupiah($produk->harga) ?>/<small><?= $produk->satuan ?></small><br/>
            <small><?= ucfirst($produk->kondisi) ?></small>
        </td>
        <td><?php echo $produk->status_produk ?></td>
        <td>
            <a href="<?php echo base_url('admin/produk/view/'.$produk->id_produk) ?>" title="edit produk">
                <i class="fa fa-edit"></i>
            </a>
            <?php include('delete.php') ?>

            <?php if ($produk->kondisi == 'baru') : ?>
            <a href="<?= site_url('admin/price/new_form/'. $produk->id_produk) ?>" title="price list">
                <i class="fa fa-money" aria-hidden="true"></i>
            </a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach ?>
</tbody>
</table>