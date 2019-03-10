<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>   
    </div>
</div><hr />
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" method="post"
                    action="<?= site_url('admin/kategori_produk/do_reg') ?>">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama kategori</label>
                        <div class="col-lg-8 col-sm-8 col-8">
                            <input type="text" name="nama_kategori_produk" placeholder="Nama kategori produk" value="<?php echo set_value('nama_kategori_produk') ?>" 
                                required class="form-control">
                            <span class="help-block"><?= form_error('nama_kategori') ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Keterangan</label>
                        <div class="col-lg-8 col-sm-8 col-8">
                            <textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo set_value('keterangan') ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-lg-offset-3 col-offset-3 col-sm-5">
                            <input type="submit" name="submit" value="Simpan Data" 
                                class="btn btn-primary">                        
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>