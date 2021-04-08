<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kuis_model');
        $this->load->model('absen_model');
        $this->load->model('peserta_model');

        if (!$this->session->userdata('username')) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('admin/index');
        $this->load->view('layouts/footer');
    }
    
    public function peserta_kuis()
    {
        $peserta = $this->peserta_model->getPesertaById(1);

        $data['peserta'] = $this->kuis_model->getpesertaKuisGrupById();
        $this->load->view('layouts/header');
        $this->load->view('admin/peserta_kuis',$data);
        $this->load->view('layouts/footer');
    }

    public function jawaban($id){
        $data['jawaban'] = $this->kuis_model->getJawabanById($id);
        $this->load->view('layouts/header');
        $this->load->view('admin/jawaban',$data);
        $this->load->view('layouts/footer');
    }

    public function savePoin()
    {
        $kuis_id = $_POST['id'];
        $poin  = $_POST['poin'];
        
        for ($i=0; $i < count($kuis_id); $i++) { 
            
            $this->db->set('poin', $poin[$i]);
            $this->db->where('id', $kuis_id[$i]);
            $this->db->update('kuis');

        }
        $this->session->set_flashdata('msg', 'Berhasil Submit Point');

        redirect('admin/peserta_kuis');
    }

    public function sendEmail($id){


        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$id. time() .'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = base_url('absen/present/') . $id; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 6;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
 
        $this->absen_model->add($id, $image_name);

        $peserta = $this->peserta_model->getPesertaById($id)[0];
        

        $this->_sendEmail($peserta);


        redirect('admin/peserta_kuis');
    }

    private function _sendEmail($peserta)
    {
        // var_dump($peserta->id);die;
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'arifai0850@gmail.com',
            'smtp_pass' => 'rifai160701',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        );

        $this->load->library('email', $config);
        $this->email->from('arifai0850@gmail.com', 'Himti Fastikom Unsiq');
        $this->email->to($peserta->email);
        $this->email->subject('Kuis Ramadhan In Campus Teknik Informatika Unsiq');
        $this->email->message("Salam ". $peserta->nama .",
        Selamat Anda Berhasil memenagkan Kuis Himti Ramadah in Campus, Acara akan berlangsung tanggal 1 Ramadhan 03:00.
        Kegiatan ini akan diselenggarakan di Masjid Unsiq
        Kami harap Anda dapat hadir tepat waktu.
        Dan untuk registrasi silakan download tiket di link berikut :
        ". base_url('/peserta/tiket/'). $peserta->id ."
        Semoga Kegiatan ini memberikan manfaat yang maksimal bagi Anda,
        
        Himti Unsiq");

        // $this->email->send();

        if ($this->email->send()) {

            $this->session->set_flashdata('msg', 'Berhasil mengirim email ke ' . $peserta->email);

            return true;
        }else{
            echo $this->email->print_debugger();
            die;
        }
    }
}
