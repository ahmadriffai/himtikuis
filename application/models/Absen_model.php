<?php
class Absen_model extends CI_Model{

    public function add($peserta_id, $qr_code)
    {
        $data = array(
            'peserta_id' => $peserta_id,
            'qr_code' => $qr_code,
            'is_present' => 0
        );
    
        $this->db->insert('absen', $data);
    }

    public function getAllPresent()
    {
        $query = "SELECT peserta.*, absen.qr_code 
                    FROM absen JOIN peserta 
                    ON absen.peserta_id = peserta.id 
                    WHERE absen.is_present = 1 
                    GROUP BY id
                    " ;

        return $this->db->query($query)->result();
    }

    public function getIdAbsenById($id)
    {
        return $this->db->select('id')->where('peserta_id', $id)->get('absen')->result();
    }


    public function getAbsenById($id)
    {
        $query = "SELECT peserta.*, absen.qr_code 
                    FROM absen JOIN peserta 
                    ON absen.peserta_id = peserta.id 
                    WHERE peserta.id = '$id' LIMIT 1" ;

        return $this->db->query($query)->result();
    }

    public function updatePresent($id)
    {
        $this->db->set('present_at', date('Y-m-d H:i:s', time()));
        $this->db->set('is_present', 1);
        $this->db->where('peserta_id', $id);
        $this->db->update('absen');    
    }
}