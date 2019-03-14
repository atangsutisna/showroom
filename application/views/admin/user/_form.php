<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div><hr/>
<?= form_open($form_action) ?>
<?= form_hidden('id_user', isset($user) ? $user->id_user : NULL) ?>
<div class="form-group">
<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo $user->nama ?>">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $user->email ?>" readonly>
</div>

<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $user->username ?>" readonly>
</div>
<div class="form-group">
<label>Level Hak Akses</label>
<select name="akses_level" class="form-control">
	<option value="Admin">Admin</option>
    <option value="User">User</option>
</select>
</div>
    

<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
</div>

<?php echo form_close() ?>