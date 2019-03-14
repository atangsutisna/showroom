<div class="row">
    <div class="col-md-12">
        <h2>General Config</h2>           
    </div>
</div><hr/>
<?= show_bootstrap_alert() ?>
<?= form_open('admin/site_config/do_update') ?>
<?= form_hidden('id_konfigurasi', isset($site) ? $site['id_konfigurasi'] : NULL) ?>
<div class="form-horizontal">
    <div class="form-group">    
        <label class="col-sm-3 control-label">Nama Website</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="text" name="namaweb" placeholder="Nama organisasi/perusahaan" 
                    value="<?php echo $site['namaweb'] ?>" required class="form-control">
        </div>
    </div>
    <div class="form-group">    
        <label class="col-sm-3 control-label">Tagline/motto</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="text" name="tagline" placeholder="Company tagline/motto" 
                    value="<?php echo $site['tagline'] ?>" class="form-control">
        </div>
    </div> 
    <div class="form-group">    
        <label class="col-sm-3 control-label">Deskripsi</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <textarea name="tentang" rows="3" class="form-control" 
                placeholder="Summary of the company"><?php echo $site['tentang'] ?></textarea>        
        </div>
    </div> 
    <div class="form-group">    
        <label class="col-sm-3 control-label">Email</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <input type="email" name="email" placeholder="youremail@address.com" 
                    value="<?php echo $site['email'] ?>" class="form-control" required>
        </div>
    </div> 
    <div class="form-group">    
        <label class="col-sm-3 control-label">Alamat</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <textarea name="alamat" rows="3" class="form-control" 
                placeholder="Alamat perusahaan/organisasi"><?php echo $site['alamat'] ?></textarea>        
        </div>
    </div> 
    <div class="form-group">    
        <label class="col-sm-3 control-label">Telepon</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <input type="text" name="telepon" placeholder="021-000000" 
                    value="<?php echo $site['telepon'] ?>" class="form-control">
        </div>
    </div> 
    <div class="form-group">    
        <label class="col-sm-3 control-label">Handphone</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <input type="text" name="hp" placeholder="08000000" 
                    value="<?php echo $site['hp'] ?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-4" style="margin-left: 24%;">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?= anchor('admin/user', 'Kembali', 'class="btn btn-default"') ?>
        </div>
    </div>
</div>
<?= form_close() ?>
<!-- / end of form general -->
<div class="row">
    <div class="col-md-12">
        <h2>Search Engine Optiomation</h2>           
    </div>
</div><hr/>
<?= form_open('admin/site_config/do_update_seo') ?>
<?= form_hidden('id_konfigurasi', isset($site) ? $site['id_konfigurasi'] : NULL) ?>
<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-3 control-label">Keywords</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <textarea name="keywords" rows="3" class="form-control" 
                placeholder="Kata kunci / keywords"><?php echo $site['keywords'] ?></textarea>        
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Meta Description</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <textarea name="metatext" rows="5" class="form-control" 
                placeholder="Kode metatext"><?php echo $site['metatext'] ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-4" style="margin-left: 24%;">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?= anchor('admin/user', 'Kembali', 'class="btn btn-default"') ?>
        </div>
    </div>
</div>
<?= form_close() ?>
<!-- / end of search engine optimation -->

<div class="row">
    <div class="col-md-12">
        <h2>Social Media</h2>           
    </div>
</div><hr/>
<?= form_open('admin/site_config/do_update_social_network') ?>
<?= form_hidden('id_konfigurasi', isset($site) ? $site['id_konfigurasi'] : NULL) ?>
<div class="form-horizontal">
    <div class="form-group">    
        <label class="col-sm-3 control-label">Facebook</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="url" name="facebook" placeholder="http://facebook.com/namakamu" 
                    value="<?php echo $site['facebook'] ?>" class="form-control">
        </div>
    </div>
    <div class="form-group">    
        <label class="col-sm-3 control-label">Twitter</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="url" name="twitter" placeholder="http://twitter.com/namakamu" 
                    value="<?php echo $site['twitter'] ?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Instagram <i class="fa fa-instagram"></i></label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="url" name="instagram" placeholder="http://instagram.com/namakamu" 
                value="<?php echo $site['instagram'] ?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-4" style="margin-left: 24%;">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?= anchor('admin/user', 'Kembali', 'class="btn btn-default"') ?>
        </div>
    </div>
</div>
<?= form_close() ?>
<!-- / end of social media -->
<div class="row">
    <div class="col-md-12">
        <h2>Google Map</h2>           
    </div>
</div><hr/>
<?= form_open('admin/site_config/do_update_gmap') ?>
<?= form_hidden('id_konfigurasi', isset($site) ? $site['id_konfigurasi'] : NULL) ?>
<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-3 control-label">Paste Code Here</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <textarea name="google_map" rows="5" class="form-control" 
                placeholder="Kode dari Google Map"><?php echo $site['google_map'] ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-8">
            <?php echo $site['google_map'] ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-4" style="margin-left: 24%;">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?= anchor('admin/user', 'Kembali', 'class="btn btn-default"') ?>
        </div>
    </div>
</div>
<?= form_close() ?>