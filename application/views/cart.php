<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Sub Total</th>
        </tr>

        <?php 
        $no=1;
        foreach($this->cart->contents() as $items) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name']?></td>
                <td align="right">Rp.<?php echo number_format( $items['price'], 0, ',','.')?></td>
                <td><?php echo $items['qty']?></td>
                <td align="right">Rp.<?php echo number_format( $items['subtotal'], 0, ',','.')?></td>
            </tr>
            
        <?php endforeach;?>
             <tr>
                <td colspan="4">Total</td>
                <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',','.')?>
                </td>
            </tr>
    </table>
    <div class="float-right">
        <a href="<?php echo base_url('dashboard/delete_cart')?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
        <a href="<?php echo base_url('dashboard/index')?>"><div class="btn btn-sm btn-primary">Lanjut Belanja</div></a>
        <a href="<?php echo base_url('dashboard/pembayaran')?>"><div class="btn btn-sm btn-success">Checkout</div></a>

    </div>
</div>