<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once '../clase/con_db.php';
    $nombrecli=$_GET['nombre'];
    $query="SELECT * FROM pqsf WHERE nombre='".$nombrecli."'";
    $resultado=$mysql->query($query);
    if($mysql->affected_rows > 0){
       // while($row=$resultado->fetch_array()){ 

            if($mysql->affected_rows > 0){
                while($row=$resultado->fetch_assoc()){
                    $array=$row;
                    $idpqsf=$row['id'];
                    $nombrecli=$row['nombre'];
               // echo json_encode($array);
               ?>
               <div>
               <h1><?php echo $nombrecli; ?></h1>
               <div>
                <p>
                   <b>EL ID DE LA PQSF ENVIADA ES: </b> <?php echo $idpqsf;?><br>
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
   
