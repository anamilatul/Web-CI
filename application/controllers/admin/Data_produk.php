<?php
    class Data_produk extends CI_Controller{
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
            $data['produk'] = $this->model_produk->getData()->result();
            $this->load->view('tempsy_admin/header');
            $this->load->view('tempsy_admin/sidebar');
            $this->load->view('admin/data_produk',$data);
            $this->load->view('tempsy_admin/footer');

        }

        public function tambah_aksi(){
            $nama_produk = $this->input->post('nama_produk');
            $deskripsi = $this->input->post('deskripsi');
            $category = $this->input->post('category');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $gambar = $_FILES['gambar']['name'];
            if($gambar=''){}else{
                $config['upload_path']='./uploads';
                $config['allowed_types']='.jpg|jpeg|png|gif';
                //call library upload
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('gambar')){
                    echo"Gambar gagal diupload!!";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }
            $data = array(
                'nama_produk'=> $nama_produk,
                'deskripsi' => $deskripsi,
                'category'=> $category,
                'harga' => $harga,
                'stok' => $stok,
                'gambar' => $gambar
            );
            //load produk
            $this->model_produk->tambah_produk($data,'tb_produk');
            redirect('admin/data_produk/index');
        }

        public function edit($id){
            $where = array('id_produk'=>$id);
            $data['produk'] = $this->model_produk->edit_produk($where,'tb_produk')->result();
            $this->load->view('tempsy_admin/header');
            $this->load->view('tempsy_admin/sidebar');
            $this->load->view('admin/edit_produk',$data);
            $this->load->view('tempsy_admin/footer');
        }

        public function update(){
            $id             = $this->input->post('id_produk');
            $nama_produk    = $this->input->post('nama_produk');
            $deskripsi      = $this->input->post('deskripsi');
            $category       = $this->input->post('category');
            $harga          = $this->input->post('harga');
            $stok           = $this->input->post('stok');

            $data=array(
                'nama_produk'=> $nama_produk,
                'deskripsi' => $deskripsi,
                'category'=> $category,
                'harga' => $harga,
                'stok' => $stok
            );

            $where = array (
                'id_produk' =>$id

            );

            $this->model_produk->update_data($where,$data,'tb_produk');
            redirect('admin/data_produk/index');
        }

        public function hapus($id){
            $where = array('id_produk'=>$id);
            $this->model_produk->hapus_data($where,'tb_produk');
            redirect('admin/data_produk/index');
        }
    }
?>