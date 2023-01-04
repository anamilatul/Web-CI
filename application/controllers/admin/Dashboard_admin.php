<?php
class Dashboard_admin extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        if($this->session->userdata('as_id') != '1'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password salah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>');
          redirect('auth/login');
        }
    }

    public function index(){
        $this->load->view('tempsy_admin/header');
        $this->load->view('tempsy_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('tempsy_admin/footer');

    }
}

?>