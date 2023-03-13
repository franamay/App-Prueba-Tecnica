<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once '../clase/con_db.php';
    require_once('../tcpdf/tcpdf.php'); //Llamando a la Libreria TCPDF


ob_end_clean(); //limpiar la memoria


class MYPDF extends TCPDF{
    


    function Header(){
      //  $html = get_header_welcome();
      //  $this->writeHTMLCell($w = 0, $h = 50, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = false, $align = 'C', $autopadding = true);
        $this->setPageMark();
        $this->SetFont('Helvetica','B',16);
        $this->Cell(60);
        $this->Cell(70,30,'INFORME PQSF',0,0,'C');
        $this->Ln(70);

        $this->Cell(8,10,'ID',1,0,'C',0);
        $this->Cell(30,10,'NOMBRE',1,0,'C',0);
        $this->Cell(30,10,'APELLIDO',1,0,'C',0);
        $this->Cell(30,10,'CIUDAD',1,0,'C',0);
        $this->Cell(50,10,'FECHA_Y_HORA',1,0,'C',0);
        $this->Cell(43,10,'ASUNTO',1,1,'C',0);
        $this->Ln(30);

        $this->Cell(40,10,'TIPO',1,0,'C',0);
        $this->Cell(28,10,'ESTADO',1,0,'C',0);
        $this->Cell(48,10,'CORREO',1,0,'C',0);
        $this->Cell(32,10,'TELFONO',1,0,'C',0);
        $this->Ln(20);
        $this->Cell(148,10,'DESCRIPCION',1,1,'C',0);
       

    }

}
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);




//Iniciando un nuevo pdf
 


//Armando la cabecera de la Tabla


$pdf->AddPage();
$idpqsf=$_GET['id'];
$query="SELECT * FROM pqsf WHERE id='".$idpqsf."'";
$resultado=$mysql->query($query);

//$pdf = new MYPDF(PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);

//$pdf->SetNbPages();
//$pdf->SetFont('Helvetica','B',10);


if($mysql->affected_rows > 0){




    while($row=$resultado->fetch_assoc()){
     //  $pdf->Cell(190,10,'INFORME PQSF',1,1,'C');
        $pdf->Ln(70);
       // $pdf->Cell(8,10,'ID',1,0,'C');
      //  $pdf->Ln(10);
      
        $pdf->Cell(8,10, $row['id'], 1, 0, 'C', 0);
         // $pdf->Cell(8,10,'NOMBRE',1,0,'C');
     // $pdf->Ln(10);
        $pdf->Cell(30,10, $row['nombre'], 1, 0, 'C', 0);
        $pdf->Cell(30,10, $row['apellido'], 1, 0, 'C', 0);
        $pdf->Cell(30,10, $row['ciudad'], 1, 0, 'C', 0);
        $pdf->Cell(50,10, $row['fecha_y_hora'], 1, 0, 'C', 0);
        $pdf->Cell(43,30, $row['asunto'], 1, 0, 'C', 0);
        $pdf->Ln(40); 
        $pdf->Cell(40,10, $row['tipo'], 1, 0, 'C', 0);
        $pdf->Cell(28,10, $row['estado'], 1, 0, 'C', 0);
        $pdf->Cell(48,10, $row['correo'], 1, 0, 'C', 0);
        $pdf->Cell(32,10, $row['telefono'], 1, 0, 'C', 0);
        $pdf->Ln(20);
        $pdf->Cell(148,40, $row['descripcion'], 1, 0, 'C', 0);
        
       

    
    }
$pdf->Output();

}
   
}

 
/** Eje de Coordenadas
 *          Y
 *          -
 *          - 
 *          -
 *  X ------------- X
 *          -
 *          -
 *          -
 *          Y
 * 
 * $pdf->SetXY(X, Y);
 */

 // MIO
/*$pdf->setFont('helvetica','B',15);
    $pdf->Cell(80);
    $pdf->Cell(30,10,'INFORME PQSF',1,0,'C');
    $pdf->Ln(20);      

//Posición: a 1,5 cm del final
$pdf->SetY(-15);
// Arial italic 8
$pdf->SetFont('helvetica','I',8);
// Número de página
$pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');
*/
// MIO

//Agregando la primera página



