<body style="background-color:#355da1;">
    <div class="container mt-5">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block mx-auto my-auto ">
                                <img src="<?php echo base_url(); ?>assets/img/loginImg.jpg" width="100%" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>                                    
                                    <?php echo $this->session->flashdata('pesan')?>
                                    <form method="post" action="<?php echo base_url('auth/login')?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username..." name="username">
                                            <?php echo form_error('username','<div class="text-danger small ml-2">','</div>');?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                                <?php echo form_error('password','<div class="text-danger small ml-2">','</div>');?>
                                        </div>
                                        <button type="submit" class="btn btn-primary rounded-pill form-control">Login</button>
                                    </form>
                                    
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('registrasi/index');?>">Create Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</html>