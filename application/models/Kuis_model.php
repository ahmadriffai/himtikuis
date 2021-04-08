<?php
class Kuis_model extends CI_Model{

    public function getpesertaKuisGrupById()
    {
        $query = "SELECT peserta.*, sum(kuis.poin) as total_poin
                    FROM kuis LEFT JOIN peserta
                    ON kuis.peserta_id = peserta.id
                    GROUP BY peserta.id 
                    ORDER BY poin DESC ";

        return $this->db->query($query)->result();
    }

    public function getJawabanById($id)
    {
        $query = "SELECT kuis.id, pertanyaan.pertanyaan, kuis.jawaban, kuis.poin
                    from kuis left join peserta
                    on kuis.peserta_id = peserta.id
                    left join pertanyaan 
                    on pertanyaan.id = kuis.pertanyaan_id
                    where peserta.id = $id";
        
        return $this->db->query($query)->result();
    }
}