<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_kategori extends CI_Model {
public function data_tanaman_hias()
{
 return $this->db->get_where("tb_barang",array('kategori'=> 'tanaman_hias'));
}

public function data_tanaman_herbal()
{
 return $this->db->get_where("tb_barang",array('kategori'=> 'tanaman_herbal'));
}
public function data_tanaman_buah()
{
 return $this->db->get_where("tb_barang",array('kategori'=> 'tanaman_buah'));
}
    

}

/* End of file ModelName.php */
 
?>