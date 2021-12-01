<?php

include("conexion.php");
$con=conectar();

$registro=$_POST['registro'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numero=$_POST['numero'];
$email=$_POST['email'];
$colonia=$_POST['colonia'];
$calle=$_POST['calle'];
$numerodecasa=$_POST['numerodecasa'];
$idcliente=$_POST['idcliente'];

$sql="UPDATE `cliente` SET `nombre`='$nombre',`apellido`='$apellido',`numero`='$numero',`email`='$email',`colonia`='$colonia',`calle`='$calle',`numerodecasa`='$numerodecasa',`idcliente`='$idcliente' WHERE registro = '$registro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>