<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Beranda';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/banner');
        $this->load->view('v_home', $data);
        $this->load->view('templates/footer');
    }

    public function Auriga()
    {
        $data['judul'] = 'Auriga';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_auriga');
        $this->load->view('templates/footer');
    }

    public function Kursus()
    {
        $data['judul'] = 'Kursus';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_kursus');
        $this->load->view('templates/footer');
    }

    public function Kalender()
    {
        $data['judul'] = 'Kalender';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_kalender');
        $this->load->view('templates/footer');
    }

    public function Diskusi()
    {
        $data['judul'] = 'Diskusi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('forum/v_diskusiDiForum');
        $this->load->view('templates/footer');
    }

    public function Japri()
    {
        $data['judul'] = 'Japri';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('forum/v_japriTenagaAhli');
        $this->load->view('templates/footer');
    }

    public function Kontak()
    {
        $data['judul'] = 'Kontak';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_kontak');
        $this->load->view('templates/footer');
    }

    public function TenagaAhli()
    {
        $data['judul'] = 'Tenaga Ahli';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_tenagaAhli');
        $this->load->view('templates/footer');
    }
}