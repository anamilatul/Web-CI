<?php
class Registrasi extends CI_Controller{
    public function index(){

        $this->form_validation->set_rules('nama', 'Nama', 'required',[
            'required ' => 'Nama Wajib diisi'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required',[
            'required ' => 'Username Wajib diisi'
        ]);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]',[
            'required ' => 'Password Wajib diisi',
            'matches' => 'Password tidak sesuai'
        ]);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('tempsy/header');
            $this->load->view('registrasi');
            $this->load->view('tempsy/footer');
        }else{
            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'as_id' => 2,
            );
            $this->db->insert('tb_user',$data);
            redirect('auth/login');
        }
    }
}

?>