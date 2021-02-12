<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('v_login', $data);
    }

    public function Registrasi()
    {
        $data['judul'] = 'Daftar';
        $this->load->view('templates/header', $data);
        $this->load->view('v_registrasi', $data);
    }
}