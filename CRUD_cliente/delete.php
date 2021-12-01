<?php

include("conexion.php");
$con=conectar();

$registro=$_GET['registro'];

$sql="DELETE FROM `cliente` WHERE registro='$registro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
