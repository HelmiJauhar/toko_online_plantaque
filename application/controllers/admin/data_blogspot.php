<?php

class data_blogspot extends CI_Controller{
    public function index()
    {
        $data['blogspot'] = $this->model_blogspot->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_blogspot', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $nama_deskripsi    = $this->input->post('nama_deskripsi');
        $deskripsi    = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar ='') {}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload";
            }else{
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_deskripsi'    => $nama_deskripsi,
            'deskripsi'         => $deskripsi,
            'gambar'            => $gambar
        );

        $this->model_blogspot->tambah_blogspot($data, 'tb_blogspot');
        redirect('admin/data_blogspot/index');

    }
    public function edit($id_deskripsi)
    {
        $where = array('id_deskripsi' => $id_deskripsi);
        $data['blogspot'] = $this->model_blogspot->edit_blogspot($where,
        'tb_blogspot')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_blogspot', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update()
    {
        $id_deskripsi             = $this->input->post('id_deskripsi');
        $nama_deskripsi    = $this->input->post('nama_deskripsi');
        $deskripsi     = $this->input->post('deskripsi');

        $data = array(
            'nama_deskripsi'    => $nama_deskripsi,
            'deskripsi'         => $deskripsi,
        );

        $where = array(
            'id_deskripsi' => $id_deskripsi
        );
        $this->model_blogspot->update_data($where,$data,'tb_deskripsi');
        redirect('admin/data_blogspot/index');

    }
    public function hapus($id_deskripsi)
    {
        $where = array('id_deskripsi' => $id_deskripsi);
        $this->model_blogspot->hapus_data($where, ' tb_blogspot');
        redirect('admin/data_blogspot/index');
    }
    
}

?>