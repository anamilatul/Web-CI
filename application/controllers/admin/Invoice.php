<?php 
class Invoice extends CI_Controller{
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
        $data['invoice'] = $this->model_invoice->getData();
        $this->load->view('tempsy_admin/header');
        $this->load->view('tempsy_admin/sidebar');
        $this->load->view('admin/invoice',$data);
        $this->load->view('tempsy_admin/footer');
    }

    public function detail($id_invoice){
        $data['invoice'] = $this->model_invoice->getIdInvoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->getIdPesanan($id_invoice);

        $this->load->view('tempsy_admin/header');
        $this->load->view('tempsy_admin/sidebar');
        $this->load->view('admin/detail_invoice',$data);
        $this->load->view('tempsy_admin/footer');
        
    }
}
?>