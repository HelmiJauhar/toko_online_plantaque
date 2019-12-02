<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function tanaman_hias()
    {
        $data['tanaman_hias']= $this->model_kategori-> data_tanaman_hias()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tanaman_hias',$data);
        $this->load->view('templates/footer');
    }
    public function tanaman_herbal()
    {
        $data['tanaman_herbal']= $this->model_kategori-> data_tanaman_herbal()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tanaman_herbal',$data);
        $this->load->view('templates/footer');
    }
    public function tanaman_buah()
    {
        $data['tanaman_buah']= $this->model_kategori-> data_tanaman_buah()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tanaman_buah',$data);
        $this->load->view('templates/footer');
    }

}

/* End of file Controllername.php */
 
?>