<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }
    function index()
    { // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('Pdfgenerator');

        // title dari pdf
        $this->data['title_pdf'] = 'Transkrip Nilai';

        // filename dari pdf ketika didownload
        $data['data_nilai_user'] = $this->M_user->getNilaiUser();
        $file_pdf = 'transkrip_nilai';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $html = $this->load->view('v_laporan', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}