<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-3 control-label">Dimensi Type 1</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <div class="input-group">
                <input type="text" name="dimensi_type_1" placeholder="Contoh: 4.398 x 1.683 x 1.603" 
                    value="<?php echo set_value('diameter_langkah', isset($produk) ? $produk->dimensi_type_1 : '') ?>" 
                    required class="form-control">
                <div class="input-group-addon">mm</div>                    
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Dimensi Type 2</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <div class="input-group">
                <input type="text" name="dimensi_type_2"
                    value="<?php echo set_value('dimensi_type_2', isset($produk) ? $produk->dimensi_type_2 : '') ?>" 
                    required class="form-control">
                <div class="input-group-addon">mm</div>                    
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Dimensi Type 3</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <div class="input-group">
                <input type="text" name="dimensi_type_3"
                    value="<?php echo set_value('diameter_langkah', isset($produk) ? $produk->dimensi_type_2 : '') ?>" 
                    required class="form-control">
                <div class="input-group-addon">mm</div>                    
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Jarak Pijak Depan</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <div class="input-group">
                <input type="text" name="jarak_pijak_depan"
                    value="<?php echo set_value('jarak_pijak_depan', isset($produk) ? $produk->jarak_pijak_depan : '') ?>" 
                    required class="form-control">
                <div class="input-group-addon">mm</div>                    
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Jarak Pijak Belakang</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <div class="input-group">
                <input type="text" name="jarak_pijak_belakang"
                    value="<?php echo set_value('jarak_pijak_belakang', isset($produk) ? $produk->jarak_pijak_belakang : '') ?>" 
                    required class="form-control">
                <div class="input-group-addon">mm</div>                    
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Jarak Sumbu Roda</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <div class="input-group">
                <input type="text" name="jarak_sumbu_roda"
                    value="<?php echo set_value('jarak_sumbu_roda', isset($produk) ? $produk->jarak_sumbu_roda : '') ?>" 
                    required class="form-control">
                <div class="input-group-addon">mm</div>                    
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Kapasitas Tangki</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <div class="input-group">
                <input type="text" name="kapasitas_tangki"
                    value="<?php echo set_value('kapasitas_tangki', isset($produk) ? $produk->kapasitas_tangki : '') ?>" 
                    required class="form-control">
                <div class="input-group-addon">Liter</div>                    
            </div>
        </div>
    </div>
</div>