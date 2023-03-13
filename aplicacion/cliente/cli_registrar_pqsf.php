<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../clase/con_db.php';
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $ciudad=$_POST['Ciudad'];
 $telefono=$_POST['telefono'];
 $fechayhora=$_POST['fecha_y_hora'];
 $estado=$_POST['estado'];
 $correo=$_POST['correo'];
 $descripcion=$_POST['descripcion'];
 $tipo=$_POST['Tipo'];
 $asunto=$_POST['asunto'];

 $query="INSERT INTO pqsf (nombre,apellido,
 ciudad,
 telefono,
 fecha_y_hora,estado,
 correo,descripcion,tipo,asunto) 
 VALUES('".$nombre."',
 '".$apellido."',
 '".$ciudad."','".$telefono."',
 '".$fechayhora."', '".$estado."','".$correo."','".$descripcion."','".$tipo."','".$asunto."')";
 $resultado=$mysql->query($query);
 if($resultado==true){
    echo "La " .$tipo. " fue enviada.";
 }else{
     echo "Error " .$tipo. " no fue enviada.";
 }
}
?>