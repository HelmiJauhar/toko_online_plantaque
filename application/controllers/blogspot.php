<?php

    class blogspot extends CI_Controller{

        public function index()
        {
        $data['blogspot'] = $this->model_blogspot->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('blogspot', $data);
        $this->load->view('templates/footer');
        }
        public function detail_blogspot($id_deskripsi)
        {
        $data['blogspot'] = $this->model_blogspot->detail_blogspot($id_deskripsi);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_blogspot',$data);
        $this->load->view('templates/footer');
        }


    }
        

?>