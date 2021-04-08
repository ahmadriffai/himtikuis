<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('pertanyaan_model');
    }

    public function index()
    {
        $data['pertanyaan'] = $this->pertanyaan_model->getAllPertanyaan();
        $this->load->view('layouts/header');
        $this->load->view('pertanyaan/index', $data);
        $this->load->view('layouts/footer');
    }

    public function insert()
    {
        $this->load->view('layouts/header');
        $this->load->view('pertanyaan/insert');
        $this->load->view('layouts/footer');
    }

    public function save()
    {
        $pertanyaan = $this->input->post('pertanyaan');
        $this->pertanyaan_model->simpan_pertanyaan($pertanyaan); //simpan ke database
        redirect('pertanyaan');
    }

    public function edit()
    {
        $this->load->view('layouts/header');
        $this->load->view('pertanyaan/edit');
        $this->load->view('layouts/footer');    
    }
}