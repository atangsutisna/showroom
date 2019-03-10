<p><?php include ('tambah.php') ?></p>

<?= show_bootstrap_alert() ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Kategori</th>
        <th>Slug</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php 
    $row = 1;
    foreach($kategori_produk as $kategori_produk) : 
    ?>
    <tr class="odd gradeX">
        <td><?= $row ?></td>
        <td>
            <img src="<?= base_url($kategori_produk->image_path) ?>" width="100"/>
        </td>
        <td><?= $kategori_produk->nama_kategori_produk ?></td>
        <td><?= $kategori_produk->slug_kategori_produk ?></td>
        <td>
        <a href="<?= site_url('admin/kategori_produk/edit/'.$kategori_produk->id_kategori_produk) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        <?php include('delete.php') ?>
        
        </td>
    </tr>
    <?php 
    $row++;
    endforeach;
    ?>
</tbody>
</table>