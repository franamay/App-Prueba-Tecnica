<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once '../clase/con_db.php';

    $idpqsf=$_GET['id'];
    $query="SELECT * FROM pqsf WHERE id='".$idpqsf."'";
    $resultado=$mysql->query($query);
    if($mysql->affected_rows > 0){
       // while($row=$resultado->fetch_array()){ 

            if($mysql->affected_rows > 0){
                while($row=$resultado->fetch_assoc()){
                    $array=$row;
                    $id=$row['id'];
                    $nombre=$row['nombre'];
                    $apellido=$row['apellido'];
                    $ciudad=$row['ciudad'];
                    $fecha_y_hora=$row['fecha_y_hora'];
                    $asunto=$row['asunto'];
                    $descripcion=$row['descripcion'];
                    $tipo=$row['tipo'];
                    $estado=$row['estado'];
                    $correo=$row['correo'];
                    $telefono=$row['telefono'];
                    
               // echo json_encode($array);
               ?>
               <div>
               <h2><?php echo $id; ?></h2>
               <div>
                <p>
                   <b>NOMBRE: </b> <?php echo $nombre;?><br>
                   <b>APELLIDO: </b> <?php echo $apellido;?><br>
                   <b>CIUDAD: </b> <?php echo $ciudad;?><br>
                   <b>FECHA Y HORA: </b> <?php echo $fecha_y_hora;?><br>
                   <b>ASUNTO: </b> <?php echo $asunto;?><br>
                   <b>DESCRIPCION: </b> <?php echo $descripcion;?><br>
                   <b>TIPO: </b> <?php echo $tipo;?><br>
                   <b>ESTADO: </b> <?php echo $estado;?><br>
                   <b>CORREO: </b> <?php echo $correo;?><br>
                   <b>TELEFONO </b> <?php echo $telefono;?><br>
                </p>
               </div>
           </div>
           <?php
           
                }
            }else{
                echo "No hay registros";
            }
                    
        
            
        }
    }
   
    
    


    ?>