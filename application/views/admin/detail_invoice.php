<div class="container-fuild m-3">
    <h4>Detail Pemesanan <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id ?></div></h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga/pcs</th>
            <th>Jumlah Pesanan</th>
            <th>Sub-Total</th>
        </tr>
        <?php 
        $total = 0;
        foreach($pesanan as $pesan):
            $subtotal = $pesan->jumlah*$pesan->harga;
            $total += $subtotal;
        ?>
        <tr>
            <td><?php echo $pesan->id_produk ?></td>
            <td><?php echo $pesan->nama_produk ?></td>
            <td><?php echo number_format($pesan->harga,0,',','.') ?></td>
            <td><?php echo $pesan->jumlah ?></td>
            <td><?php echo number_format($subtotal,0,',','.')?></td>
        </tr>

        <?php endforeach;?>
        <tr >
            <td colspan="4" align="right" >Total</td>
            <td align="right">Rp.<?php echo number_format($total,0,',','.')?></td>
        </tr>
    </table>
    <a href="<?php echo base_url('admin/invoice/index')?>"><div class="btn btn-sm btn-danger "><i class="fas fa-chevron-left mr-2"></i>Back</div></a>
</div>