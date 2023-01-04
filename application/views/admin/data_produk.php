<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3 " data-toggle="modal" data-target="#tambah_produk"><i class="fas fa-plus fa-sm"></i>Tambah Produk</button>
    <table class="table table-bordered">
        <tr>
            <th>No. </th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Category</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
            $no=1;
            foreach($produk as $pro) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pro->nama_produk ?></td>
                <td><?php echo $pro->deskripsi ?></td>
                <td><?php echo $pro->category ?></td>
                <td><?php echo $pro->harga ?></td>
                <td><?php echo $pro->stok ?></td>
                <td><div class="btn btn-success btn-sm "><i class="fas fa-search-plus"></i></div></td>
                <td><?php echo anchor('admin/data_produk/edit/'.$pro->id_produk,'<div class="btn btn-primary btn-sm "><i class="fas fa-edit"></i></div>')?></td>
                <td><?php echo anchor('admin/data_produk/hapus/'.$pro->id_produk,'<div class="btn btn-danger btn-sm "><i class="fas fa-trash"></i></div>')?></td>
            </tr>
            <?php endforeach;?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_produk/tambah_aksi'?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control">
                  <option>--Pilih--</option>
                  <option>Pakaian Wanita</option>
                  <option> Pakaian Pria</option>
                  <option>Sepatu</option>
                  <option>Peralatan Olahraga</option>
                  <option>Make Up</option>
                  <option>Elektronik</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar Produk</label><br>
                <input type="file" name="gambar" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>