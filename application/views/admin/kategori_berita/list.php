<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div><hr/>
<p><a href="<?= site_url('admin/kategori_berita/new_form') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah</a></p>
<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

echo show_bootstrap_alert();
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Nama Kategori</th>
        <th>Keterangan</th>
        <th>Slug</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($kategori_berita as $kategori_berita) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $kategori_berita->nama_kategori_berita ?></td>
        <td><?php echo $kategori_berita->keterangan ?></td>
        <td><?php echo $kategori_berita->slug_kategori_berita ?></td>
        <td>
        <a href="<?php echo base_url('admin/kategori_berita/view/'.$kategori_berita->id_kategori_berita) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>