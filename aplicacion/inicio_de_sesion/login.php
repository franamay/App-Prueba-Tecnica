
<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../clase/con_db.php';
    $usuariocli=$_POST['usuario'];
    $clavecli=$_POST['clave'];

    $query="SELECT * FROM cliente WHERE usuario = '".$usuariocli."' and clave = '".$clavecli."'";
    $resultado=$mysql->query($query);
    if($mysql->affected_rows > 0){
        while($row=$resultado->fetch_assoc()){
            $array=$row;
        }
        echo "HA INICIADO SESION";
        if($resultado==true){
         header('Location: ../cliente/cliente.html ');
        }
        
    }else{
        echo "Datos incorrectos";
    }
   
    
    }

    
?>


