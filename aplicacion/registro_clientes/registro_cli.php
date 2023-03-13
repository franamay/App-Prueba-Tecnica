<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../clase/con_db.php';
    $usuariocli=$_POST['usuario'];
    $clavecli=$_POST['clave'];

    $query="INSERT INTO cliente (usuario,clave) VALUES('".$usuariocli."','".$clavecli."')";
    $resultado=$mysql->query($query);
    if($resultado==true){
        echo "TE HAS REGISTRADO.";
    }else{
        echo "Error";
    }
   
    
    }
    
?>