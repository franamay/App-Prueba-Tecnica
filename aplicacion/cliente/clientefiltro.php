<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once '../clase/con_db.php';
    $idpqsf=$_GET['id_pqsf'];
    $query="SELECT * FROM mensaje_admin WHERE id_pqsf='".$idpqsf."'";
    $resultado=$mysql->query($query);
    if($mysql->affected_rows > 0){
       // while($row=$resultado->fetch_array()){ 

            if($mysql->affected_rows > 0){
                while($row=$resultado->fetch_assoc()){
                    $array=$row;
                    $idpqsf=$row['id_pqsf'];
                    $mensaje=$row['mensaje'];
               // echo json_encode($array);
               ?>
               <div>
               <h2><?php echo $idpqsf; ?></h2>
               <div>
                <p>
                   <b>RESPUESTA: </b> <?php echo $mensaje;?><br>
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