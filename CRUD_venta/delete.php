<?php

include("conexion.php");
$con=conectar();

$registro=$_GET['registro'];

$sql="DELETE FROM `venta` WHERE registro='$registro'";
$query=mysqli_query($con,$sql);

    if($quesry){
        Header("Location: venta.php");
    }
?>
