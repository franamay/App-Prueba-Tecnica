<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once '../clase/con_db.php';
    $query="SELECT * FROM pqsf";
    $resultado=$mysql->query($query);
    if($mysql->affected_rows > 0){
        while($row=$resultado->fetch_array()){

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
                    <b>TELEFONO: </b> <?php echo $telefono;?><br>
                    <form name="form" action="../admin/mensaje_admin.php" method="post"><p>
                    <input type="number" placeholder="Ingrese el Id" name="id">
                    <textarea name="mensaje" rows="4" cols="50" placeholder="MENSAJE:"></textarea><p>
                    <input type="submit" value="ENVIAR RESPUESTA"><p>
                    </form>
                </p>
                </div>
            </div>

            <?php
            
            
            
        }
    }
   
    
    }


    ?>