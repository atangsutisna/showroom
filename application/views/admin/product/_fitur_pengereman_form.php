<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-3 control-label">Rangka Body</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <input type="text" name="rangka_body"
                value="<?php echo set_value('rangka_body', isset($produk) ? $produk->rangka_body : '') ?>" 
                required class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Suspensi Depan</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <input type="text" name="suspensi_depan"
                value="<?php echo set_value('suspensi_depan', isset($produk) ? $produk->suspensi_depan : '') ?>" 
                required class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Suspensi Belakang</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <input type="text" name="suspensi_belakang"
                value="<?php echo set_value('suspensi_belakang', isset($produk) ? $produk->suspensi_belakang : '') ?>" 
                required class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Rem Depan</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <input type="text" name="rem_depan"
                value="<?php echo set_value('rem_depan', isset($produk) ? $produk->rem_depan : '') ?>" 
                required class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Rem Belakang</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <input type="text" name="rem_belakang"
                value="<?php echo set_value('rem_belakang', isset($produk) ? $produk->rem_belakang : '') ?>" 
                required class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Sistem Pengereman</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <input type="text" name="sistem_pengereman"
                value="<?php echo set_value('sistem_pengereman', isset($produk) ? $produk->sistem_pengereman : '') ?>" 
                required class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Ukuran Ban</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <input type="text" name="ukuran_ban"
                value="<?php echo set_value('ukuran_ban', isset($produk) ? $produk->ukuran_ban : '') ?>" 
                required class="form-control">
        </div>
    </div>
</div>