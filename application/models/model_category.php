<?php
    class Model_category extends CI_Model{
        public function data_pakaian_wanita(){
            return $this->db->get_where("tb_produk",array(
                'category'=>'pakaian wanita'
            ));
        }
        public function data_pakaian_pria(){
            return $this->db->get_where("tb_produk",array(
                'category'=>'pakaian pria'
            ));
        }
        public function data_sepatu(){
            return $this->db->get_where("tb_produk",array('
            category'=>'sepatu'
            ));
        }
        public function data_makeup(){
            return $this->db->get_where("tb_produk",array(
                'category'=>'make up'
            ));
        }       
        public function data_elektronik(){
            return $this->db->get_where("tb_produk",array(
                'category'=>'elektronik'
            ));
        }
        public function data_peralatan_olahraga(){
            return $this->db->get_where("tb_produk",array(
                'category'=>'peralatan olahraga'
            ));
        }
    }


?>