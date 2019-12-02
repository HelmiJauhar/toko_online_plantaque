<?php

class Model_blogspot extends CI_model{
    public function tampil_data()
    {
        return $this->db->get('tb_blogspot');
    }
    public function tambah_blogspot($data, $table)
    {
        $this->db->insert($table,$data);
    }
    public function edit_blogspot($where,$table)
    {
        return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id_deskripsi)
    {
        $result = $this->db->where('id_deskripsi', $id_deskripsi)
                           ->limit(1)
                           ->get('tb_blogspot');
        if ($result->num_rows()>0) {
            return $result->row();
        }else{
            return array();
        }
    }
    public function detail_blogspot($id_deskripsi)
    {
        $result = $this->db->where('id_deskripsi',$id_deskripsi)->get('tb_blogspot');
        if($result->num_rows() > 0)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    }
}

?>