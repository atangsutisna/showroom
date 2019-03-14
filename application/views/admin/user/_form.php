<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div><hr/>
<?= form_open($form_action) ?>
<?= form_hidden('id_user', isset($user) ? $user->id_user : NULL) ?>
<div class="form-group">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" class="form-control" 
        placeholder="Nama lengkap" value="<?= isset($user) ? $user->nama : NULL ?>">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" 
        placeholder="email" value="<?= isset($user) ? $user->email : NULL ?>">
</div>

<div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" 
        placeholder="username" value="<?= isset($user) ? $user->username : NULL ?>">
</div>

<div class="form-group">
    <label>Level Hak Akses</label>
    <?= form_dropdown('akses_level', $level_choices, isset($user) ? $user->akses_level : NULL, 'class="form-control"') ?>
</div>
    

<div class="form-group">
    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
    <?= anchor('admin/user', 'Kembali', 'class="btn btn-default"') ?>
</div>

<?php echo form_close() ?>