<?php 
class Model_invoice extends CI_Model{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $invoice = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pemesanan' => date('Y-m-d H:i:s'),
            'batas_pembayaran' => date('Y-m-d H:i:s', mktime(date('H'),date('i'),date('s'),date('m'),date('d')+1,date('Y'))),
        );
        $this->db->insert('tb_invoice',$invoice);
        $id_invoice  = $this->db->insert_id();

        foreach($this->cart->contents() as $item){
            $data = array(
                'id_invoice' => $id_invoice,
                'id_produk' => $item['id'],
                'nama_produk' => $item['name'],
                'harga' => $item['price'],
                'jumlah' => $item['qty'],
            );
            $this->db->insert('tb_pesanan',$data);
        }
        return TRUE;           
    }

    public function getData(){
        $result = $this->db->get('tb_invoice');
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function getIdInvoice($id_invoice){
        $result = $this->db->where('id',$id_invoice)->limit(1)->get('tb_invoice');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return false;
        }
    }

    public function getIdPesanan($id_invoice){
        $result = $this->db->where('id_invoice',$id_invoice)->get('tb_pesanan');
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false;
        }
    }
    
}
?>