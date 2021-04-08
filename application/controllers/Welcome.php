<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
		$this->load->model('peserta_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
		$this->form_validation->set_rules('nim', 'Nim','required|is_unique[peserta.nim]', array(
			'required' => 'Form %s tidak boleh kosong',
			'is_unique' => '%s sudah terdaftar'
		));
		$this->form_validation->set_rules('email', 'Email','required|is_unique[peserta.email]',array(
			'required' => 'Form %s tidak boleh kosong',
			'is_unique' => '%s sudah terdaftar'
		));
		$this->form_validation->set_rules('nama', 'Nama','required',array(
			'required' => 'Form %s tidak boleh kosong'
		));
		$this->form_validation->set_rules('semester', 'Semester','required',array(
			'required' => 'Form %s tidak boleh kosong'
		));

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/header');
            $this->load->view('kuis/daftar');
            $this->load->view('layouts/footer');   
        } else {
			$nim=$this->input->post('nim');
			$nama=$this->input->post('nama');
			$email=$this->input->post('email');
			$semester=$this->input->post('semester');
		   
			$peserta = $this->peserta_model->simpan_peserta($nim,$nama,$email,$semester); 
			
			$this->session->set_flashdata('msg', 'Berhasil menambahkan data peserta');
			redirect('kuis/index/'.$peserta); //redirect ke mahasiswa usai simpan data
		}
	}
}
