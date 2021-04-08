<?php
class Pertanyaan_model extends CI_Model{

    function getAllPertanyaan(){
        $hasil=$this->db->get('pertanyaan');
        return $hasil->result();
    }

    function simpan_pertanyaan($pertanyaan){
        $data = array(
            'pertanyaan'       => $pertanyaan,
        );
        $this->db->insert('pertanyaan',$data);
    }
    function edit_pertanyaan($id, $pertanyaan)
    {
        $this->db->set('pertanyaan', $pertanyaan );
        $this->db->where('id', $id);
        $this->db->update('pertanyaan');      
    }
}