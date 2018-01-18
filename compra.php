<?php

$host_db = "127.0.0.1";
$user_db = "root";
$pass_db = "";
$db_name = "tienda";
$tbl_name = "compra";

    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }
    
    $cani = $_REQUEST['cani'];
    $cantidad = 1;
    $id = $_REQUEST['id'];
    
    $sql = "INSERT INTO `tienda`.`compra` (`usuario`, `cani`, `cantidad`) VALUES ('$id', '$cani', '$cantidad');";
    $result = $conexion->query($sql);
    
    header("Location: home.php?id=$id");
    
    

?>