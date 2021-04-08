<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuis extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('pertanyaan_model');
        $this->load->library('form_validation');
    }

    public function index($id)
    {
        $data['id_peserta'] = $id;
        $data['pertanyaan'] = $this->pertanyaan_model->getAllPertanyaan();
        $this->load->view('layouts/header');
        $this->load->view('kuis/index', $data);
        $this->load->view('layouts/footer');
    }

    public function save(){

        $pertanyaan = count($_POST['pertanyaan']);
        
        for ($i=0; $i < $pertanyaan; $i++) { 
            
            $data = array(
                'peserta_id' => $this->input->post('peserta_id'),
                'pertanyaan_id' => $_POST['pertanyaan'][$i],
                'jawaban' => $_POST['jawaban'][$i]
            );

            $this->db->insert('kuis', $data);

        }

        $this->session->set_flashdata('msg', 'Jawaban anda berhasil terkirim');
        redirect('kuis/info');
    }

    public function info()
    {
        $this->load->view('layouts/header');
        $this->load->view('kuis/info');
        $this->load->view('layouts/footer');
    }
}