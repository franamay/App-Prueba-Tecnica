<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include_once '../clase/con_db.php';
    $idpqsf=$_POST['id'];
    $estadopqsf=$_POST['estado'];

    $query = "UPDATE pqsf SET estado = '".$estadopqsf."' WHERE id = '".$idpqsf."'";
    $resultado=$mysql->query($query);
    if($resultado==true){
        echo "La PQSF se actualiz&oacute; exitosamente.";
    } else {
        echo "Error al actualizar";
    }

}
?>