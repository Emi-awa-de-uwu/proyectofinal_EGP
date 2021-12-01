<?php

include("conexion.php");
$con=conectar();

$registro=$_POST['registro'];
$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numero=$_POST['numero'];
$email=$_POST['email'];
$genero=$_POST['genero'];
$fechanacimiento=$_POST['fechanacimiento'];



$sql="UPDATE `empleado` SET `idempleado`='$idempleado',`nombre`='$nombre',`apellido`='$apellido',`numero`='$numero',`email`='$email',`genero`='$genero',`fechanacimiento`='$fechanacimiento' WHERE registro = '$registro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>