<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('nama','Nama','required',['required'=> 'Nama harus di isi']);
        $this->form_validation->set_rules('username','Username','required',['required'=> 'Username harus di isi']);
        $this->form_validation->set_rules('password_1','Password','required|matches[password_2]',['required'=> 'Password harus di isi', 'matches'=>'password tidak cocok']);
        $this->form_validation->set_rules('password_2','Password','required|matches[password_1]',['required'=> 'Password harus di isi']);
        if($this->form_validation->run() == FALSE)
        {
        $this->load->view('templates/header');
        $this->load->view('registrasi');
        $this->load->view('templates/footer');
        }   
        else
        {
            $data = array(
                'id'   => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'role_id'  => 2,
            );
            $this->db->insert('tb_user',$data);
            
            redirect('auth/login');
            
        }
    

  }
}

/* End of file Registrasi.php */
 
?>