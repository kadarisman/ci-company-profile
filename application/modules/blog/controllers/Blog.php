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
        if (!$this->session->userdata('language') or $this->session->userdata('language') == 'id') {
            $this->load->view('templates/navbar');
            $this->load->view('templates/banner');
            $this->load->view('v_home', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/eng/navbar_eng');
            $this->load->view('templates/eng/banner_eng');
            $this->load->view('eng/v_home_eng', $data);
            $this->load->view('templates/eng/footer_eng');
        }
    }

    public function Auriga()
    {
        $data['judul'] = 'Auriga';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        if (!$this->session->userdata('language') or $this->session->userdata('language') == 'id') {
            $this->load->view('templates/navbar');
            $this->load->view('v_auriga');
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/eng/navbar_eng');
            $this->load->view('eng/v_auriga_eng');
            $this->load->view('templates/eng/footer_eng');
        }
    }

    public function Kursus()
    {
        $data['judul'] = 'Kursus';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        if (!$this->session->userdata('language') or $this->session->userdata('language') == 'id') {
            $this->load->view('templates/navbar');
            $this->load->view('v_kursus');
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/eng/navbar_eng');
            $this->load->view('eng/v_kursus_eng');
            $this->load->view('templates/eng/footer_eng');
        }
    }

    public function Kalender()
    {
        $data['judul'] = 'Kalender';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        if (!$this->session->userdata('language') or $this->session->userdata('language') == 'id') {
            $this->load->view('templates/navbar');
            $this->load->view('v_kalender');
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/eng/navbar_eng');
            $this->load->view('eng/v_kalender_eng');
            $this->load->view('templates/eng/footer_eng');
        }
    }

    public function Diskusi()
    {
        $data['judul'] = 'Diskusi';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        if (!$this->session->userdata('language') or $this->session->userdata('language') == 'id') {
            $this->load->view('templates/navbar');
            $this->load->view('forum/v_diskusiDiForum');
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/eng/navbar_eng');
            $this->load->view('eng/v_diskusiDiForum_eng');
            $this->load->view('templates/eng/footer_eng');
        }
    }

    public function Japri()
    {
        $data['judul'] = 'Japri';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        if (!$this->session->userdata('language') or $this->session->userdata('language') == 'id') {
            $this->load->view('templates/navbar');
            $this->load->view('forum/v_japriTenagaAhli');
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/eng/navbar_eng');
            $this->load->view('eng/v_japriTenagaAhli_eng');
            $this->load->view('templates/eng/footer_eng');
        }
    }

    public function Kontak()
    {
        $data['judul'] = 'Kontak';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        if (!$this->session->userdata('language') or $this->session->userdata('language') == 'id') {
            $this->load->view('templates/navbar');
            $this->load->view('v_kontak');
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/eng/navbar_eng');
            $this->load->view('eng/v_kontak_eng');
            $this->load->view('templates/eng/footer_eng');
        }
    }

    public function TenagaAhli()
    {
        $data['judul'] = 'Tenaga Ahli';
        $data['data_user2'] = $this->M_user->getAllUser2();
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        if (!$this->session->userdata('language') or $this->session->userdata('language') == 'id') {
            $this->load->view('templates/navbar');
            $this->load->view('v_tenagaAhli', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/eng/navbar_eng');
            $this->load->view('eng/v_tenagaAhli_eng', $data);
            $this->load->view('templates/eng/footer_eng');
        }
    }
}