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
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/banner');
        $this->load->view('v_home', $data);
        $this->load->view('templates/footer');
    }

    public function Auriga()
    {
        $data['judul'] = 'Auriga';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_auriga');
        $this->load->view('templates/footer');
    }

    public function Kursus()
    {
        $data['judul'] = 'Kursus';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_kursus');
        $this->load->view('templates/footer');
    }

    public function Kalender()
    {
        $data['judul'] = 'Kalender';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_kalender');
        $this->load->view('templates/footer');
    }

    public function Diskusi()
    {
        $data['judul'] = 'Diskusi';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('forum/v_diskusiDiForum');
        $this->load->view('templates/footer');
    }

    public function Japri()
    {
        $data['judul'] = 'Japri';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('forum/v_japriTenagaAhli');
        $this->load->view('templates/footer');
    }

    public function Kontak()
    {
        $data['judul'] = 'Kontak';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_kontak');
        $this->load->view('templates/footer');
    }

    public function TenagaAhli()
    {
        $data['judul'] = 'Tenaga Ahli';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_tenagaAhli');
        $this->load->view('templates/footer');
    }
}