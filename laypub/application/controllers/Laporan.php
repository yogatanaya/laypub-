<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{
	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Laporan Pelayanan Publik Kota Denpasar',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Daftar Laporan',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
   
        $pdf->Cell(85,6,'Deskripsi Keluhan',1,0);
        $pdf->Cell(85,6,'Nama Pelayanan',1,1);



        $pdf->SetFont('Arial','',10);
        $aduan = $this->db->query('SELECT
                        aduan.deskripsi,
                        aduan.id_layanan,
                        aduan.date,
                        layanan.nama_layanan
                        FROM
                        aduan
                        Inner Join layanan ON aduan.id_layanan = layanan.id_layanan
                        ')->result();
        foreach ($aduan as $row){
         
            $pdf->Cell(85,6,$row->deskripsi,1,0);
            $pdf->Cell(85,6,$row->nama_layanan,1,0);
         
        }
        $pdf->Output();
    }
}
?>