<div class="container-fluid">
    <h3>
        <i class="fas fa-edit">Edit Data Produk</i>
    </h3>
    <?php foreach($produk as $pro) : ?>
        <form method="post" action="<?php echo base_url().'admin/data_produk/update' ?>">
            <div class="for-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="<?php echo $pro->nama_produk ?>">
            </div>
            <div class="for-group mt-2">
                <label>Deskripsi</label>
                <input type="hidden" name="id_produk" class="form-control" value="<?php echo $pro->id_produk ?>">
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $pro->deskripsi ?>">
            </div>
            <div class="for-group mt-2">
                <label>Category</label>
                <input type="text" name="category" class="form-control" value="<?php echo $pro->category ?>">
            </div>
            <div class="for-group mt-2">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $pro->harga ?>">
            </div>
            <div class="for-group mt-2">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $pro->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary mt-3 btn-sm ">Save</button>

        </form>

    <?php endforeach; ?>

</div>