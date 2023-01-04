<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstPage extends CI_Controller {
	public function index(){
		$data['produk'] = $this->model_produk->getData()->result();
		$this->load->view('tempsy/header');
		$this->load->view('tempsy/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('tempsy/footer');

	}
}
