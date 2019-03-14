<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>           
    </div>
</div><hr/>
<?= show_bootstrap_alert() ?>
<?= form_open('admin/video/do_insert'); ?>
<div class="form-horizontal">
    <div class="form-group">    
        <label class="col-sm-3 control-label">Judul</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="text" name="judul" class="form-control" 
                placeholder="Judul video" value="<?php echo set_value('judul') ?>">        
            <?= form_error('judul') ?>
        </div>
    </div>
    <div class="form-group">    
        <label class="col-sm-3 control-label">Video Code (from Youtube)</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <div class="input-group">
                <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
                <input type="text" name="video" class="form-control" placeholder="Kode video Youtube" value="<?php echo set_value('video') ?>"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-4">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?= anchor('admin/video', 'Kembali', 'class="btn btn-default"') ?>
        </div>
    </div>    
</div> <!--/end of form-horizontal -->
<?= form_close() ?>