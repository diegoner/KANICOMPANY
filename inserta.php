<?php

$host_db = "127.0.0.1";
$user_db = "root";
$pass_db = "";
$db_name = "tienda";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$name = $_REQUEST['usuario'];

$password = $_REQUEST['clave'];

// INSERTO DATOS EN LA TABLA USUARIO
            
            $sql = <<<EOT
        INSERT INTO usuarios (usuario, clave) VALUE ('$name', '$password');
EOT;
        $resultado = mysqli_query($conexion, $sql);
            if(mysqli_errno($conexion)){
                die(mysqli_error($conexion)); 
            } else {
                echo "tabla actualizada";
                header("Location: revisar.php?usuario=$username&clave=$password");
}
 ?>