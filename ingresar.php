<?php
 
 try{
     $conn = new PDO('mysql:host=oraclepr.uco.es;dbname=i42masaj','i42masaj','i42masaj');
     echo 'Conexion realizada';
    }            
catch (PDOException $ex) {
       echo $ex->getMessage();
       exit;
    }
 
/* @var $_POST type */
$nombre= $_POST["txtusuario"];
$pass= $_POST["txtusuario"];

 
 $query=("SELECT Usuario, Password FROM `Administradores` "
         . "WHERE `Usuario`='".mysql_real_escape_string($nombre)."' and "
         . "`Password`='".mysql_real_escape_string($pass)."'"); 

$rs= mysql_query($query); 
$row=mysql_fetch_object($rs); 
$nr = mysql_num_rows($rs);


if($nr == 1){ 
   
echo 'Error'; 
} 

else if($nr == 0) {    
     
     header("uco.es"); 
}   

?>
