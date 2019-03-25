<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div><hr/>
<p><a href="<?= site_url('admin/galery/new_form') ?>" class="btn btn-success">
<i class="fa fa-plus"></i> Tambah</a></p>
<?= show_bootstrap_alert() ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>Tanggal</th>
        <th>Gambar</th>
        <th>name</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
</tbody>
</table>