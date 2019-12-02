<?php

class dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '2')
        {
           $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Harus Login</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>'); 
         redirect('auth/login');
         
        }
    }
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);
        $data = array(
            'id'    => $barang->id_barang,
            'qty'   => 1,
            'price' => $barang->harga,
            'name'  => $barang->nama_barang,
        );
        $this->cart->insert($data);
        redirect('welcome'); 
    }
    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }
    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }
    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('templates/footer');
        } else{
            echo "Maaf pesanan anda gagal diproses!";
        }
        
    }
    public function detail($id_barang)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_barang);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang',$data);
        $this->load->view('templates/footer');
    }

}

?>