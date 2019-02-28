<?php 
// cetak error kalau ada salah input
echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open('admin/user/do_update_passwd');
echo form_hidden('id_user', $user->id_user);
?>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="password">
</div>

<div class="form-group">
<label>Retype Password</label>
<input type="password" name="retype_password" class="form-control" placeholder="ketik lagi password">
</div>

<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan">
</div>

<?php echo form_close() ?>