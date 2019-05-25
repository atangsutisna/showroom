<div class="row">
    <div class="col-md-12">
        <h2><?= $title ?></h2>   
    </div>
</div><hr />
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?= show_bootstrap_alert() ?>
                <form class="form-horizontal" method="post"
                    action="<?= site_url($form_action) ?>">
                    <?= form_hidden('id_product', isset($product) ? $product->id_produk : '') ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tipe</label>
                        <div class="col-lg-8 col-sm-8 col-8">
                            <input type="text" name="product_type" placeholder="Variant" 
                                value="<?= set_value('product_type') ?>" 
                                required class="form-control">
                            <span class="help-block"><?= form_error('product_type') ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Price</label>
                        <div class="col-lg-3 col-sm-3 col-3">
                            <input type="text" name="price"
                                value="<?= set_value('price') ?>" 
                                required class="form-control">
                            <span class="help-block"><?= form_error('price') ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-lg-offset-3 col-offset-3 col-sm-5">
                            <input type="submit" name="submit" value="Simpan" 
                                class="btn btn-primary">                        
                            <a href="<?= site_url('admin/produk') ?>" class="btn btn-default">Kembali</a>
                        </div>
                    </div>
                </form> <!--/ end form -->

                <table class="table">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Type</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product_prices as $product_price) : ?>
                        <tr>
                            <td><?= $product_price->nama_produk ?></td>
                            <td><?= $product_price->product_type ?></td>
                            <td><?= format_rupiah($product_price->price) ?></td>
                            <td>
                                [<?= anchor('admin/price/do_delete/'. $product_price->id_produk.'/'. $product_price->id, 
                                    'Delete', 'onclick="return confirm(\'Anda Yakin\')"') ?>]
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>