<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once '../clases/con_db.php';
    require_once '../fpdf/fpdf.php';

    $idpqsf=$_GET['id'];
    $query="SELECT * FROM pqsf WHERE id='".$idpqsf."'";
    $resultado=$mysql->query($query);
    //class PDF extends FPDF{}

    
    //$pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SentFont('Arial','B',16);
    if($mysql->affected_rows > 0){
        while($row=$resultado->fetch_assoc()){
            $pdf->Cell(30,10, $row['id'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['nombre'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['apellido'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['ciudad'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['fecha_y_hora'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['asunto'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['descripcion'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['tipo'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['estado'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['correo'], 1, 0, 'C', 0);
            $pdf->Cell(30,10, $row['telefono'], 1, 1, 'C', 0);

        
        }
    $pdf->Output();
    }
    
        function Header()
        {
            $this->setFont('Arial','B',15);
            $this->Cell(80);
            $this->Cell(30,10,'INFORME PQSF',1,0,'C');
            $this->Ln(20);      
       }
       function Footer(){
    //Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
       }
    
    
    
    
    }

?>