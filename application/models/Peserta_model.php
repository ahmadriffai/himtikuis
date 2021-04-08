<?php
class Peserta_model extends CI_Model{
 
    function get_all_peserta(){
        $hasil=$this->db->get('peserta');
        return $hasil->result();
    }

    function getPesertaById($id)
    {
        return $this->db->select('*')->from('peserta')->where('id', $id)->get()->result();
    }
     
    function simpan_peserta($nim,$nama,$email,$semester){
        $data = array(
            'nim'       => $nim,
            'nama'      => $nama,
            'email'     => $email, 
            'semester'   => $semester
        );
        $this->db->insert('peserta',$data);

        return $this->db->insert_id();
    }
}