<?php
defined('BASEPATH') or exit('No direct script access allowed');
//load library PHPSpreadsheeet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require 'vendor/vendor/autoload.php';
// require '../../vendor/autoload.php';

class Report extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_tanggapan');
        $this->load->model('M_pengaduan');
        $this->load->library('pdf');
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }
    }
    public function index()
    {
        $tgl_awal = $this->input->get('tgl_awal');
        $tgl_akhir = $this->input->get('tgl_akhir');
        $data['data'] = $this->M_pengaduan->getLap($tgl_awal, $tgl_akhir);
        $this->template->display_admin('admin/view_laporan.php', $data);
    }
    function pdf()
    {
        $tgl_awal = $this->input->get('tgl_awal');
        $tgl_akhir = $this->input->get('tgl_akhir');
        //instance library pdf
        $pdf = new FPDF();
        // membuat halaman baru tipe potrait
        $pdf->AddPage('P');
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);

        //kop atau judul
        $pdf->Cell(0, 7, 'Rekapitulasi', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 7, 'Data Pengaduan Masyarakat', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);

        //membuat garis
        $pdf->SetLineWidth(1);
        $pdf->Line(10, 30, 200, 30); //garis
        $pdf->SetLineWidth(0.5);

        $pdf->Ln(10);

        //membuat tabel header
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(35, 8, 'ID Pengaduan', 1, 0, 'C');
        $pdf->Cell(35, 8, 'Tanggal Pengaduan ', 1, 0, 'C');
        $pdf->Cell(20, 8, 'Nik', 1, 0, 'C');
        $pdf->Cell(75, 8, 'Isi Laporam', 1, 0, 'C');
        $pdf->Cell(20, 8, 'Status', 1, 1, 'C');


        //membuat isi tabel
        $pdf->SetFont('Arial', '', 10);
        //ambil data dari database
        $data = $this->M_pengaduan->getLap($tgl_awal, $tgl_akhir);
        foreach ($data->result_array() as $row) {
            $pdf->Cell(35, 8, $row['id_pengaduan'], 1, 0, 'C');
            $pdf->Cell(35, 8, $row['tgl_pengaduan'], 1, 0, 'C');
            $pdf->Cell(20, 8, $row['nik'], 1, 0, 'C');
            $pdf->Cell(75, 8, $row['isi_laporan'], 1, 0);
            $pdf->Cell(20, 8, $row['status'], 1, 1, 'R');
        }

        //generate pdf
        $pdf->Output();
    }
    function excel()
    {
        $tgl_awal = $this->input->get('tgl_awal');
        $tgl_akhir = $this->input->get('tgl_akhir');
        //instance library 
        $spreadsheet = new Spreadsheet();

        //membuat lembar kerja
        $sheet = $spreadsheet->getActiveSheet();

        //membuat kolom judul tabel pada baris ke-1
        $sheet->setCellValue('A1', 'ID PENGADUAN');
        $sheet->setCellValue('B1', 'TANGGAL PENGADUAN');
        $sheet->setCellValue('C1', 'NIK');
        $sheet->setCellValue('D1', 'ISI LAPORAN');
        $sheet->setCellValue('E1', 'STATUS');

        //menuliskan data mulai baris ke-2
        $baris = 2;

        //ambil data
        $dataPengaduan = $this->M_pengaduan->getLap($tgl_awal, $tgl_akhir);

        //parsing data dari model
        foreach ($dataPengaduan->result() as $row) {
            $sheet->setCellValue('A' . $baris, $row->id_pengaduan);
            $sheet->setCellValue('B' . $baris, $row->tgl_pengaduan);
            $sheet->setCellValue('C' . $baris, $row->nik);
            $sheet->setCellValue('D' . $baris, $row->isi_laporan);
            $sheet->setCellValue('E' . $baris, $row->status);
            $baris++;
        }

        //menuliskan data ke file
        $writer = new Xlsx($spreadsheet);

        //memberikan nama file
        $filename = 'Data-Pengaduan-' . date('Y-m-d');

        //generate excel
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }
}
