<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div><hr/>
<p><a href="<?= site_url('admin/user/new_form') ?>" class="btn btn-success">
<i class="fa fa-plus"></i> Tambah</a></p>
<?= show_bootstrap_alert() ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Username</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($user as $user) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $user->nama ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->username ?></td>
        <td>
        <a href="<?php echo base_url('admin/user/view/'.$user->id_user) ?>" class="btn btn-primary btn-sm" title="edit user"><i class="fa fa-edit"></i></a>
        <a href="<?php echo base_url('admin/user/change_passwd/'.$user->id_user) ?>"class="btn btn-primary btn-sm" title="ganti password"><i class="fa fa-edit"></i></a>
        <a href="<?php echo base_url('admin/user/delete/'.$user->id_user) ?>"class="btn btn-primary btn-sm" onClick="return confirm('Yakin ingin menghapus user ini?')"><i class="fa fa-trash-o"></i></a>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>