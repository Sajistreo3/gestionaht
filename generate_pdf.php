
<?php
//include connection file 
ob_start();
session_start();
include_once("connection.php");
include_once('fpdf182/fpdf.php');

header('Content-type: application/download;filename="example.pdf"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');


class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('images/iconnewblack.png',70,3,70);
    $this->SetFont('Arial','B',13);
    $this->Ln(5);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(70,10,'Inspection List',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbObj();
$connString =  $db->getConnstring();
//$display_heading = array('question_number'=> 'Question Number', ,'score'=> 'Score');

$result = mysqli_query($connString, "SELECT tbl_inspection.question_number, tbl_questions.question, tbl_inspection.score, tbl_questions.total_score  FROM tbl_inspection INNER JOIN tbl_questions ON tbl_inspection.id = tbl_questions.id WHERE tbl_inspection.tbl_evaluation_id = ". $_SESSION['evalresult']['tbl_evaluation_id']) or die("database error:". mysqli_error($connString));
//$header = mysqli_query($connString, "SHOW columns FROM tbl_inspection");
$_SESSION['evalresult'] = $header;
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',12);
//foreach($header as $heading) {
////$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
//}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,0);
}
$pdf->Output();
ob_flush();
?>


