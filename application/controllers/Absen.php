<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('absen_model');
        if (!$this->session->userdata('username')) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['presensi'] = $this->absen_model->getAllPresent();
        $this->load->view('layouts/header');
        $this->load->view('absen/index', $data);
        $this->load->view('layouts/footer');
    }

    public function present($id)
    {
        $data['present'] = $this->absen_model->getAbsenById($id);

        // var_dump($present);
        // die;

        if ($data['present']) {
            $this->absen_model->updatePresent($id);
            $this->session->set_flashdata('msg', 'Peserta Terdaftar Dalam Event');

            $this->load->view('layouts/header');
            $this->load->view('absen/terdaftar', $data);
            $this->load->view('layouts/footer');

        }else{
            $this->session->set_flashdata('msg', 'Peserta Tidak Terdaftar Dalam Event');
            
            $this->load->view('layouts/header');
            $this->load->view('absen/tidakTerdaftar', $data);
            $this->load->view('layouts/footer');

        }
    }
}