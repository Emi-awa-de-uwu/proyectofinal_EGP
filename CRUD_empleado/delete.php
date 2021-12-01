<?php

include("conexion.php");
$con=conectar();

$registro=$_GET['registro'];

$sql="DELETE FROM `empleado` WHERE registro='$registro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>
