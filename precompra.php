<?php

$host_db = "127.0.0.1";
$user_db = "root";
$pass_db = "";
$db_name = "tienda";
$tbl_name = "canis";

    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }
    
    $cani = $_REQUEST['cani'];
    $cantidad = 1;
    $id = $_REQUEST['id'];
    
    $sql = "select * from $tbl_name where id=$cani and cantidad>0";
    $result = $conexion->query($sql);
    
    if ($result->num_rows > 0) {
 
        header('Location: compra.php?cani='.$cani.'&id='.$id);
}
else{
    echo "De ese cani no me quedan loco";
}
    
    

?>