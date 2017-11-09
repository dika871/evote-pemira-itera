<?php
include("../functions/functions.php");
require ('fpdf/fpdf.php');
$db = new PDO('mysql:host=localhost;dbname=pemira2017','root','');
$prodi = $_GET['prodi'];
$angkatan = $_GET['angkatan'];
$sql = "select nim,nama,prodi,angkatan,DATE_FORMAT(lastlogin, '%d-%m-%Y %T') as lastlogin from absensi where prodi='$prodi' and angkatan='$angkatan'";
$nama = "Presensi Pemira 2017 $prodi - $angkatan.pdf";

class myPDF extends FPDF
{

    public function header()
    {
        $this->SetFont('Arial', 'B', '14');
        $this->Cell(176, 10, 'Presensi Pemilih', 0, 0, 'C');
        $this->Ln();
        $this->SetFont('Times', '', '12');
        $this->Cell(176, 10, 'Pemira KM-ITERA 2017', 0, 0, 'C');
        $this->Ln();
        $this->SetFont('Times', '', '12');
        $this->Cell(176, 5, 'Program Studi: '.$_GET['prodi'], 0, 0, 'C');
        $this->Ln();
        $this->Cell(176, 5, 'Angkatan: '.$_GET['angkatan'], 0, 0, 'C');
        $this->Ln(10);
    }

    public function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', '', '8');
        $this->Cell(0, 10, 'Halaman '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }

    public function headerTable()
    {
        $this->SetFont('Times', 'B', 10);
        $this->Cell(30, 7, 'NIM', 1, 0, 'C');
        $this->Cell(50, 7, 'Nama', 1, 0, 'C');
        $this->Cell(40, 7, 'Program Studi', 1, 0, 'C');
        $this->Cell(30, 7, 'Angkatan', 1, 0, 'C');
        $this->Cell(40, 7, 'Waktu Voting', 1, 0, 'C');
        $this->Ln();
    }

    public function viewTable($db,$sql){
      $this->SetFont('Times', '', 10);
      $stmt = $db->query($sql);
      while($data= $stmt->fetch(PDO::FETCH_OBJ)){
        $this->Cell(30, 7, $data->nim, 1, 0, 'C');
        $this->Cell(50, 7, $data->nama, 1, 0, 'C');
        $this->Cell(40, 7, $data->prodi, 1, 0, 'C');
        $this->Cell(30, 7, $data->angkatan, 1, 0, 'C');
        $this->Cell(40, 7, $data->lastlogin, 1, 0, 'C');
        $this->Ln();
      }
    }

}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P', 'A4', 0);
$pdf->headerTable();
$pdf->viewTable($db,$sql);
$pdf->Output($nama, 'D');
?>
