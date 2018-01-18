<?php

?>

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

$username = $_REQUEST['usuario'];
$password = $_REQUEST['clave'];
 
$sql = "SELECT * FROM $tbl_name WHERE usuario = '$username' and clave = '$password'";
$result = $conexion->query($sql);




if ($result->num_rows > 0) {
 
 if ($password==$password) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>";
    
    header("Location: home.php?id=$username");

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
}
else{
    echo "Username o Password estan incorrectos.";
    echo "<br><a href='login.html'>Volver a Intentarlo</a>";
    header('Location: index.php?error=true');
}
 mysqli_close($conexion);
?>

