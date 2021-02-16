<?php
class Laporanpdf extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        checkLogin(); // this is a function in helper/H_login
        $this->load->library('pdf');
    }

    function index()
    {
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 14);
        // mencetak string 
        $pdf->Cell(190, 7, 'TRANSKRIP NILAI', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(190, 7, 'KURSUS PENINGKATAN KAPASITAS', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(190, 7, 'TENAGA PENYIDIK TINDAK PIDANA PELANGGARAN HUKUM LINGKUNGAN', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(30, 6, 'Bidang Studi', 1, 0);
        $pdf->Cell(30, 6, 'Mata Pelajaran', 1, 0);
        $pdf->Cell(15, 6, 'Nilai', 1, 0);
        $pdf->Cell(30, 6, 'Tanggal Lulus', 1, 0);
        $pdf->Cell(60, 6, 'Keterangan', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $tim = date('d F Y');

        $data_nilai_user = $this->M_user->getNilaiUser();
        foreach ($data_nilai_user as $row) {
            $pdf->Cell(30, 6, $row->bidang_studi, 1, 0);
            $pdf->Cell(30, 6, $row->mata_pelajaran, 1, 0);
            $pdf->Cell(15, 6, $row->nilai, 1, 0);
            $pdf->Cell(30, 6, $row->tanggal_lulus, 1, 0);
            $pdf->Cell(60, 6, $row->keterangan, 1, 1);
        }
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(190, 7, 'Agent ' . $tim, 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, $row->nama, 0, 1, 'C');

        $pdf->Output('D', $row->nama . '.pdf');
    }
}