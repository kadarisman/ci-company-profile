<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        checkLogin(); // this is a function in helper/H_login
    }

    public function index()
    {
        $data['judul'] = 'Nilai';
        $data['data_nilai_user'] = $this->M_user->getNilaiUser();
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        if (!$this->session->userdata('language') or $this->session->userdata('language') == 'id') {
            $this->load->view('templates/navbar');
        } else {
            $this->load->view('templates/navbar_eng');
        }
        $this->load->view('v_nilaiUser');
        $this->load->view('templates/footer');
    }
}