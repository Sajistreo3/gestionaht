<?php
//include connection file
ob_start();
include_once("connection.php");
include_once('fpdf182/fpdf.php');
class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('images/logo.png',10,-1,70);
        $this->SetFont('Arial','B',13);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(80,10,date("Y-m-d", 1606354205),1,0,'C');
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

//if ($_GET['type'] == 1){
    $display_heading = array('date'=> date("Y-m-d", $_GET['eval_id']), 'type'=> 'PROPRETE', 'question_number'=> 'Question Number','score'=> 'Score', 'comment'=> 'Comment');
//} elseif ($_GET['type'] == 2){
//    $display_heading = array('date'=> date("Y-m-d", $_GET['eval_id']), 'type'=> 'MARCHANDISE', 'question_number'=> 'Question Number','score'=> 'Score', 'comment'=> 'Comment');
//} elseif ($_GET['type'] == 3){
//    $display_heading = array('date'=> date("Y-m-d", $_GET['eval_id']), 'type'=> 'LAVE AUTO', 'question_number'=> 'Question Number','score'=> 'Score', 'comment'=> 'Comment');
//} elseif ($_GET['type'] == 4){
//    $display_heading = array('date'=> date("Y-m-d", $_GET['eval_id']), 'type'=> 'SECURITE', 'question_number'=> 'Question Number','score'=> 'Score', 'comment'=> 'Comment');
//}

$result = mysqli_query($connString, "SELECT q.question_number, q.question, CONCAT(i.score,'/', q.total_score) as score,  i.comment, i.image FROM tbl_inspection i JOIN tbl_questions q
ON q.question_number = i.question_number and q.type = i.type
WHERE i.tbl_evaluation_id = 1606354205") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM tbl_inspection");
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {

    $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
    $pdf->Ln();
    foreach($row as $column)
        $pdf->Cell(40,12,$column,1);
}
$pdf->Output();
?>
<?php
////include connection file
//include_once("connection.php");
//include_once('libs/fpdf.php');
//
//class PDF extends FPDF
//{
//// Page header
//    function Header()
//    {
//        // Logo
//        $this->Image('images/logo.png',10,-1,70);
//        $this->SetFont('Arial','B',13);
//        // Move to the right
//        $this->Cell(80);
//        // Title
//        $this->Cell(80,10,'Employee List',1,0,'C');
//        // Line break
//        $this->Ln(20);
//    }
//// Page footer
//    function Footer()
//    {
//        // Position at 1.5 cm from bottom
//        $this->SetY(-15);
//        // Arial italic 8
//        $this->SetFont('Arial','I',8);
//        // Page number
//        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
//    }
//}
//$db = new dbObj();
//$connString =  $db->getConnstring();
//$display_heading = array('id'=>'ID', 'type'=> 'Type', 'question_number'=> 'Question Number','score'=> 'Score', 'comment'=> 'Comment');
//$result = mysqli_query($connString, "SELECT id, type, question_number, score, comment FROM tbl_inspection") or die("database error:". mysqli_error($connString));
//$header = mysqli_query($connString, "SHOW columns FROM tbl_inspection");
//$pdf = new PDF();
////header
//$pdf->AddPage();
////foter page
//$pdf->AliasNbPages();
//$pdf->SetFont('Arial','B',12);
//foreach($header as $heading) {
//    $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
//}
//foreach($result as $row) {
//    $pdf->Ln();
//    foreach($row as $column)
//        $pdf->Cell(40,12,$column,1);
//}
//$pdf->Output();
//?>