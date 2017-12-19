<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{
	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Laporan Pengaduan',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        //$pdf->Cell(10,7,'',0,1);
        //$pdf->SetFont('Arial','B',10);
        $pdf->Cell(50,6,'NAMA LAYANAN',1,0);
        $pdf->Cell(130,6,'DESKRIPSI',1,0);
        $pdf->Cell(50,6,'STATUS',1,0);
        $pdf->Cell(50,6,'TANGGAL',1,0);
        $pdf->Cell(190,7,'',0,1,'C');


        $query=$this->db->query('SELECT
            layanan.nama_layanan,
            `status`.`status`,
            aduan.date,
            aduan.deskripsi
            FROM
            aduan
            Inner Join layanan ON aduan.id_layanan = layanan.id_layanan
            Inner Join `status` ON aduan.id_status = `status`.id_status
            
            ');

        
        foreach ($query->result() as $row){
            $pdf->Cell(50,6,$row->nama_layanan ,1,0);
            $pdf->Cell(130,6,$row->deskripsi,1,0);
            $pdf->Cell(50,6, $row->status, 1,0);
            $pdf->Cell(50,6,$row->date,1,1);
            //$pdf->Cell(25,6,$row->tanggal_lahir,1,1); 
        }
        
        $pdf->Output();
    }
}
?>