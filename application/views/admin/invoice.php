<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>

        </tr>
        <?php foreach($invoice as $invo) : ?>
        <tr>
            <td><?php echo $invo->id ?></td>
            <td><?php echo $invo->nama ?></td>
            <td><?php echo $invo->alamat ?></td>
            <td><?php echo $invo->tgl_pemesanan ?></td>
            <td><?php echo $invo->batas_pembayaran ?></td>
            <td>
                <?php echo anchor('admin/invoice/detail/'.$invo->id,'<div class="btn btn-sm btn-primary">Detail Invoice</div>')?>
            </td>
        </tr>
        <?php endforeach;?>

    </table>
</div>