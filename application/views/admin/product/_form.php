<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>   
    </div>
</div><hr/>
<?= validation_errors() ?>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="panel panel-default">   
            <div class="panel-body">
                <?= form_open_multipart($form_action, 'class="form-horizontal"'); ?>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#general" data-toggle="tab">Informasi Umum</a>
                        </li>
                        <li class=""><a href="#spesification" data-toggle="tab">Spesifikasi Mesin</a>
                        </li>
                        <li class=""><a href="#interior_exterior" data-toggle="tab">Interior & Ekterior</a>
                        </li>
                        <li class=""><a href="#breaking_system" data-toggle="tab">Fitur Pengeraman</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="general">
                            <p>&nbsp;</p>
                            <?= $general_form ?>
                        </div>
                        <div class="tab-pane fade" id="spesification">
                            <p>&nbsp;</p>
                            <?= $performa_form ?>
                        </div>
                        <div class="tab-pane fade" id="interior_exterior">
                            <h4>interior_exterior Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="breaking_system">
                            <h4>Breaking system Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>                
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <hr/>
                            <div class="pull-right">
                                <input type="submit" name="submit" value="Simpan Data" 
                                        class="btn btn-primary">                        
                                <a href="<?= site_url('admin/produk') ?>" class="btn btn-default">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#keterangan",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>