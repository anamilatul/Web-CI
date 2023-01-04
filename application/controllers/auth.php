<?php
class Auth extends CI_Controller{
    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tempsy/header');
            $this->load->view('form_login');
            $this->load->view('tempsy/footer');
        } else{
            $auth = $this->model_auth->cek_login();
            if($auth == FALSE){
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password salah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>');
                redirect('auth/login');
            }else{
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('as_id',$auth->as_id);
                switch($auth->as_id){
                    case 1 : redirect('admin/dashboard_admin');
                            break;
                    case 2 : redirect('firstPage');
                            break;
                    default : break;
                }
            }
        }
        
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

?>