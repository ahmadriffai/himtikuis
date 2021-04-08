<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('peserta_model'); //pemanggilan model mahasiswa
        $this->load->model('absen_model'); //pemanggilan model mahasiswa
        
    }
 
    function index(){
        $data['peserta']=$this->peserta_model->get_all_peserta();
        $this->load->view('layouts/header');
        $this->load->view('peserta/index',$data);
        $this->load->view('layouts/footer');
    }
 
    function insert()
    {
        $this->load->view('layouts/header');
        $this->load->view('peserta/insert');
        $this->load->view('layouts/footer');
    }

    function simpan(){
        $nim=$this->input->post('nim');
        $nama=$this->input->post('nama');
        $email=$this->input->post('email');
        $semester=$this->input->post('semester');
       
        $peserta = $this->peserta_model->simpan_peserta($nim,$nama,$email,$semester); 
        
        $this->session->set_flashdata('msg', 'Berhasil menambahkan data peserta');
        redirect('kuis/index/'.$peserta); //redirect ke mahasiswa usai simpan data
    }

    public function absen()
    {
        $this->load->view('peserta/check');
    }

    public function tiket($id)
    {
        $data['tiket'] = $this->absen_model->getAbsenById($id)[0];

        if ($data['tiket'] == null) {
            redirect('welcome');
        }

        $this->load->view('layouts/header');
        $this->load->view('peserta/tiket', $data);
        $this->load->view('layouts/footer');
    }
}
