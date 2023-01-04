<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo base_url('assets/img/bann1.jpg')?>" class="d-block w-100" style="height: 450px" >
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/bann2.jpg')?>" class="d-block w-100" style="height: 450px" >
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/bann3.jpg')?>" class="d-block w-100" style="height: 450px" >
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row text-center mt-4">
        <?php foreach ($sepatu as $pro) :?>
            <div class="card ml-4 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/produk/'.$pro->gambar?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $pro->nama_produk?></h5>
                    <small ><?php echo $pro->deskripsi?></small><br>
                    <span class="badge badge-pill badge-info mb-3 ">Rp. <?php echo number_format($pro->harga, 0,',','.') ?></span><br>
                    <?php echo anchor('dashboard/add_to_cart/'.$pro->id_produk,'<div class="btn btn-sm btn-primary px-2"><i class="fas fa-shopping-cart px-1"></i> Add to Cart</div>') ?>
                    <?php echo anchor('dashboard/detail/'.$pro->id_produk,'<div class="btn btn-sm btn-success px-2"> Detail</div>') ?>
                </div>
            </div>
            <?php endforeach?>
    </div>
</div>