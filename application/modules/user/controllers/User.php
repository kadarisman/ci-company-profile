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
        $data['judul'] = 'User';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
}