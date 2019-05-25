<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-3 control-label">Tipe Mesin</label>
        <div class="col-lg-9 col-sm-9 col-9">
            <input type="text" name="tipe_mesin" placeholder="Contoh: 1.5 L SOHC 4 silinder segaris, 16 katup i-VTEC + DBW" 
                value="<?php echo set_value('tipe_mesin', isset($produk) ? $produk->tipe_mesin : '') ?>" 
                 class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Diameter x Langkah</label>
        <div class="col-lg-5 col-sm-5 col-5">
            <div class="input-group">
                <input type="text" name="diameter_langkah" placeholder="Contoh: 73,0 x 89,4 " 
                    value="<?php echo set_value('diameter_langkah', isset($produk) ? $produk->diameter_langkah : '') ?>" 
                     class="form-control">
                <div class="input-group-addon">mm</div>                    
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Perbandingan Kompresi</label>
        <div class="col-lg-4 col-sm-4 col-4">
            <input type="text" name="perbandingan_kompresi" placeholder="Contoh: 10,3 : 1" 
                value="<?php echo set_value('perbandingan_kompresi', isset($produk) ? $produk->perbandingan_kompresi : '') ?>" 
                 class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Daya Maksimum</label>
        <div class="col-lg-6 col-sm-6 col-6">
            <div class="input-group">
                <input type="text" name="daya_maksimum" placeholder="Contoh: 88 kW (118 PS) / 6.600" 
                    value="<?php echo set_value('daya_maksimum', isset($produk) ? $produk->daya_maksimum : '') ?>" 
                     class="form-control">
                <div class="input-group-addon">rpm</div>                    
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Torsi Maksimum</label>
        <div class="col-lg-6 col-sm-6 col-6">
            <div class="input-group">
                <input type="text" name="torsi_maksimum" placeholder="Contoh: 14,8 kg.m (145 Nm) / 4.600" 
                    value="<?php echo set_value('torsi_maksimum', isset($produk) ? $produk->torsi_maksimum : '') ?>" 
                     class="form-control">
                <div class="input-group-addon">rpm</div>                    
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Sistem Bahan Bakar</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="text" name="sistem_bahan_bakar" class="form-control" 
                placeholder="Contoh: Electronic Fuel Injection (PGM-FI)" value="<?= set_value('sistem_bahan_bakar', isset($produk) ? $produk->sistem_bahan_bakar : '') ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Sistem Transmisi</label>
        <div class="col-lg-8 col-sm-8 col-8">
            <input type="text" name="sistem_transmisi" class="form-control" 
                placeholder="Contoh: 5 Speed Manual / CVT with Earth Dreams Technology" value="<?= set_value('sistem_transmisi', isset($produk) ? $produk->sistem_transmisi : '') ?>">
        </div>
    </div>
</div>