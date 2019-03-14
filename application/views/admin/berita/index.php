<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div>
<p>
<a href="<?php echo base_url('admin/berita/new_form') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah Berita</a>
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
        <th>#</th>
        <th>Gambar</th>
        <th>Judul Berita</th>
        <th>Kategori</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php $i=1; foreach($berita as $berita) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$berita->gambar) ?>" class="img img-responsive" width="60">
        </td>
        <td><?php echo $berita->nama_berita ?></td>
        <td><?php echo $berita->nama_kategori_berita ?></td>
        <td><?php echo $berita->status ?></td>
        <td>
        <a href="<?php echo base_url('admin/berita/view/'.$berita->id_berita) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>