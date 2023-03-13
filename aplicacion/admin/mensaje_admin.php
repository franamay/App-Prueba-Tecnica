<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../clase/con_db.php';
 $idpqsf=$_POST['id'];
 $mensaje=$_POST['mensaje'];

 $query="INSERT INTO mensaje_admin (id_pqsf,mensaje) 
 VALUES('".$idpqsf."','".$mensaje."')";
 $resultado=$mysql->query($query);
 if($resultado==true){
    echo "La RESPUESTA fue enviada.";
 }else{
     echo "Error no fue enviada";
 }
}
?>