<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        }else{
            $username = $this->input->post('username');
            $pass = $this->input->post('password');

            if ($username == "himti" AND $pass == "himtiunsiq") {

                $data = [
                    'username' => $username
                ];

                $this->session->set_userdata($data);

                $this->session->set_flashdata('msg', 'Berhasil Login');
                redirect('admin');
            }else {
                $this->session->set_flashdata('msg', 'Masukan Username dan Password dengan Benar');
                redirect('auth/login');
            }

        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('auth/login');
    }
   

}