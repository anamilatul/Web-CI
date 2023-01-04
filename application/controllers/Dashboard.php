<?php
    class Dashboard extends CI_Controller{
        public function __construct(){
            parent:: __construct();
            if($this->session->userdata('as_id') != '2'){
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password salah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              </div>');
              redirect('auth/login');
            }
        }

        public function add_to_cart($id){
            $produk = $this->model_produk->find($id);
            $data = array(
                'id'      => $produk->id_produk,
                'qty'     => 1,
                'price'   => $produk->harga,
                'name'    => $produk->nama_produk,
                );
                $this->cart->insert($data);
                redirect('firstPage');
        }

        public function detail_cart(){
            $this->load->view('tempsy/header');
            $this->load->view('tempsy/sidebar');
            $this->load->view('cart');
            $this->load->view('tempsy/footer');
        }

        public function delete_cart(){
            $this->cart->destroy();
            redirect('firstPage');
        }

        public function pembayaran(){
            $this->load->view('tempsy/header');
            $this->load->view('tempsy/sidebar');
            $this->load->view('checkout');
            $this->load->view('tempsy/footer');
        }

        public function pemesanan(){
            //agar data pada form pembayaran masuk ke invoice
            $data_processed = $this->model_invoice->index();
            if($data_processed){
                $this->cart->destroy();
                $this->load->view('tempsy/header');
                $this->load->view('tempsy/sidebar');
                $this->load->view('pemesanan');
                $this->load->view('tempsy/footer');
            }
            else{
                echo "Mohon Maaf, pesanan anda gagal di proses! ";
            }
            
        }

        public function detail($id_produk){
            $data['produk'] = $this->model_produk->detail_produk($id_produk);
            $this->load->view('tempsy/header');
            $this->load->view('tempsy/sidebar');
            $this->load->view('detail_produk', $data);
            $this->load->view('tempsy/footer');
        }

    }

?>