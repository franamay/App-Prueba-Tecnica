<?php
$mysql=new mysqli("localhost","root","","apptt");
if($mysql->connect_error){
    die("Error de conexion");

}
else{
//echo "conexion exitosa";
};