<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div><hr/>
<?= show_bootstrap_alert() ?>
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <form action="<?php echo base_url('admin/home/profil') ?>" method="post">
          <input type="hidden" name="id_user" value="<?php echo $user->id_user ?>">
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-tag"></i></span>
              <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required  value="<?php echo $user->nama ?>">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">@</span>
              <input type="text" name="email" class="form-control" placeholder="Alamat email" required value="<?php echo $user->email ?>">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $user->username ?>" readonly disabled>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="password" name="password" class="form-control" placeholder="Ketik password baru jika ingin diganti atau biarkan kosong">
            </div>
            <div class="form-group input-group">
                <input type="submit" name="submit" value="Simpan Data User" class="btn btn-primary">
            </div>
          </form>
      </div>
    </div>
  </div>
</div>