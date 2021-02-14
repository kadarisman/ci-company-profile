<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        checkLogin(); // this is a function in helper/H_login
    }

    public function index()
    {
        $data['judul'] = 'Admin';
        $data['data_user'] = $this->M_user->getAllUser();
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_allUser', $data);
        $this->load->view('templates/footer');
    }

    public function AllNilai()
    {
        $data['judul'] = 'Nilai';
        $data['data_nilai'] = $this->M_user->getAllNilai();
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('v_allNilai', $data);
        $this->load->view('templates/footer');
    }

    public function InputNilai()
    {
        $this->form_validation->set_rules('bidang_studi', 'Bidang_studi', 'required|trim', [
            'required' => 'Bidang Studi tidak boleh kosong..!'
        ]);
        $this->form_validation->set_rules('mata_pelajaran', 'Mata_pelajaran', 'required|trim', [
            'required' => 'Mata Pelajaran tidak boleh kosong..!'
        ]);
        $this->form_validation->set_rules('nilai', 'Nilai', 'required|trim', [
            'required' => 'Nilai tidak boleh kosong..!'
        ]);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim', [
            'required' => 'Keterangan tidak boleh kosong..!'
        ]);

        if ($this->form_validation->run() == false) {
            $errors = array(
                'bidang_studi_error' => form_error('bidang_studi'),
                'mata_pelajaran_error' => form_error('mata_pelajaran'),
                'nilai_error' => form_error('nilai'),
                'keterangan_error' => form_error('keterangan'),
            );
            echo json_encode(['error' => $errors]);
        } else {
            echo json_encode(['success' => 'Record added successfully.']);
            $data = [
                'id_user' => htmlspecialchars($this->input->post('id_user', true)),
                'bidang_studi' => htmlspecialchars($this->input->post('bidang_studi', true)),
                'mata_pelajaran' => htmlspecialchars($this->input->post('mata_pelajaran', true)),
                'nilai' => htmlspecialchars($this->input->post('nilai', true)),
                'tanggal_lulus' => htmlspecialchars($this->input->post('tanggal_lulus', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            ];
            $this->db->insert('nilai', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" id="msg">Berhasil di Tambah</div>');
        }
    }
}