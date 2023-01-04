<?php
class Category extends CI_Controller{
    public function pakaian_wanita(){
        $data['pakaian_wanita']=$this->model_category->data_pakaian_wanita()->result();
        $this->load->view('tempsy/header');
        $this->load->view('tempsy/sidebar');
        $this->load->view('pakaian_wanita',$data);
        $this->load->view('tempsy/footer');
    }

    public function pakaian_pria(){
        $data['pakaian_pria']=$this->model_category->data_pakaian_pria()->result();
        $this->load->view('tempsy/header');
        $this->load->view('tempsy/sidebar');
        $this->load->view('pakaian_pria',$data);
        $this->load->view('tempsy/footer');
    }

    public function sepatu(){
        $data['sepatu']=$this->model_category->data_sepatu()->result();
        $this->load->view('tempsy/header');
        $this->load->view('tempsy/sidebar');
        $this->load->view('sepatu',$data);
        $this->load->view('tempsy/footer');
    }

    public function makeup(){
        $data['makeup']=$this->model_category->data_makeup()->result();
        $this->load->view('tempsy/header');
        $this->load->view('tempsy/sidebar');
        $this->load->view('makeup',$data);
        $this->load->view('tempsy/footer');
    }
    public function elektronik(){
        $data['elektronik']=$this->model_category->data_elektronik()->result();
        $this->load->view('tempsy/header');
        $this->load->view('tempsy/sidebar');
        $this->load->view('elektronik',$data);
        $this->load->view('tempsy/footer');
    }
    
    public function peralatan_olahraga(){
        $data['peralatan_olahraga']=$this->model_category->data_peralatan_olahraga()->result();
        $this->load->view('tempsy/header');
        $this->load->view('tempsy/sidebar');
        $this->load->view('peralatan_olahraga',$data);
        $this->load->view('tempsy/footer');
    }
}

?>