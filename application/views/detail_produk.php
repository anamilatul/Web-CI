<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <?php foreach($produk as $pro) : ?>
            <div class="row">
                <div class="col-md-4"><img src="<?php echo base_url().'/produk/'.$pro->gambar?>" class="card-img-top"></div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $pro->nama_produk?></strong></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><strong><?php echo $pro->deskripsi?></strong></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td><strong><?php echo $pro->category?></strong></td>
                        </tr>
                        <tr>
                            <td>Stok Produk</td>
                            <td><strong><?php echo $pro->stok?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($pro->harga,0,',','.') ?></div></strong></td>
                        </tr>
                    </table>
                    <?php echo anchor('dashboard/add_to_cart/'.$pro->id_produk,'<div class="btn btn-sm btn-primary px-2"><i class="fas fa-shopping-cart px-1"></i> Add to Cart</div>') ?>
                    <?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-danger px-2"> <i class="fas fa-chevron-left mr-2"></i>Back</div>') ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>