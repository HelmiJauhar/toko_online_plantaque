<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function tanaman_hias_outdoor()
    {
        $data['tanaman_hias_outdoor']= $this->model_kategori-> data_tanaman_hias_outdoor()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tanaman_hias_outdoor',$data);
        $this->load->view('templates/footer');
    }
    public function tanaman_hias_indoor()
    {
        $data['tanaman_hias_indoor']= $this->model_kategori-> data_tanaman_hias_indoor()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tanaman_hias_indoor',$data);
        $this->load->view('templates/footer');
    }

}

/* End of file Controllername.php */
 
?>