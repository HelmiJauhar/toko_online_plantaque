<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_kategori extends CI_Model {
public function data_tanaman_hias_outdoor()
{
 return $this->db->get_where("tb_barang",array('kategori'=> 'tanaman hias outdoor'));
}
public function data_tanaman_hias_indoor()
{
 return $this->db->get_where("tb_barang",array('kategori'=> 'tanaman hias indoor'));
}
    

}

/* End of file ModelName.php */
 
?>