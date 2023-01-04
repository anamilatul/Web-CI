<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $total_All = 0;
                if($keranjang = $this->cart->contents()){
                    foreach ($keranjang as $item){
                        $total_All = $total_All + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja : Rp. ".number_format($total_All,0,',','.');
                
                ?>
            </div>
            <h3 class="mt-3">Form Pembayaran</h3>
            <form action="<?php echo base_url()?>dashboard/pemesanan" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda...">
                </div>
                
                <div class="form-group">
                    <label for="no_telp">No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat...">
                </div>
                <div class="form-group">
                    <label for="">Jenis Pembayaran</label>
                    <select class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="">BCA - 12131309402</option>
                        <option value="">BRI - 0233-023923-331</option>
                        <option value="">BNI - 9209-32930-32</option>
                        <option value="">Mandiri - 09210-923-323</option>
                        <option value="">Dana -  08198976721</option>
                        <option value="">Ovo -  08198976721</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Jasa Pengirirman</label>
                    <select class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="">JNT</option>
                        <option value="">JNE</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                        <option value="">SICPAT</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Checkout</button>
            </form>
            <?php }else{
                echo "Keranjang Belanja Anda masih Kosong";
            } ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>