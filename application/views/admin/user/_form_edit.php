<div class="row">
    <div class="col-md-12">
        <h2>User</h2>           
    </div>
</div><hr/>
<?= show_bootstrap_alert() ?>
<?= form_open($form_action) ?>
<?= form_hidden('id_user', isset($user) ? $user->id_user : NULL) ?>
<div class="form-horizontal">
    <div class="form-group">    
        <label class="col-sm-3 control-label">Nama Lengkap</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="text" name="nama" class="form-control" 
                placeholder="Nama lengkap" value="<?= isset($user) ? $user->nama : NULL ?>">
            <?= form_error('nama') ?>
        </div>
    </div>
    <div class="form-group">    
        <label class="col-sm-3 control-label">e-Mail</label>
        <div class="col-lg-6 col-sm-6 col-6">
            <input type="email" name="email" class="form-control" 
                placeholder="email" value="<?= isset($user) ? $user->email : NULL ?>">
            <?= form_error('email') ?>
        </div>
    </div>
    <div class="form-group">    
        <label class="col-sm-3 control-label">Username</label>
        <div class="col-lg-6 col-sm-6 col-6">
            <input type="text" name="username" class="form-control" 
                placeholder="username" value="<?= isset($user) ? $user->username : NULL ?>" readonly>
            <?= form_error('username') ?>        
        </div>
    </div>
    <div class="form-group">    
        <label class="col-sm-3 control-label">Role</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <?= form_dropdown('akses_level', $level_choices, 
                isset($user) ? $user->akses_level : NULL, 'class="form-control"') ?>        
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-4">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>    
</div> <!--/ end of form general information -->
<?= form_close() ?>

<div class="row">
    <div class="col-md-12">
        <h2>Ubah Password</h2>           
    </div>
</div><hr/>
<?= form_open(isset($form_uri_update_passwd) ? $form_uri_update_passwd : 'admin/user/do_update_passwd') ?>
    <?= form_hidden('id_user', isset($user) ? $user->id_user : NULL) ?>
    <div class="form-horizontal">
        <div class="form-group">    
            <label class="col-sm-3 control-label">Password</label>
            <div class="col-lg-6 col-sm-6 col-6">
                <input type="password" name="password" class="form-control" 
                    placeholder="password">
                <?= form_error('password') ?>        
            </div>
        </div>
        <div class="form-group">    
            <label class="col-sm-3 control-label">Retype Password</label>
            <div class="col-lg-6 col-sm-6 col-6">
                <input type="password" name="retype_password" class="form-control" 
                    placeholder="retype password">
                <?= form_error('retype_password') ?>        
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div> 
<?= form_close() ?>