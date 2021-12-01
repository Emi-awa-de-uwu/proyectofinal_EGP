<?php

include("conexion.php");
$con=conectar();

$numero_de_pizza=$_POST['numero_de_pizza'];
$tamaño=$_POST['tamaño'];
$ingrediente1=$_POST['ingrediente1'];
$ingrediente2=$_POST['ingrediente2'];
$ingrediente3=$_POST['ingrediente3'];
$extras=$_POST['extras'];
$soda=$_POST['soda'];
$tipodesoda=$_POST['tipodesoda'];


$sql="UPDATE `pizza` SET `tamaño`='$tamaño',`ingrediente1`='$ingrediente1',`ingrediente2`='$ingrediente2',`ingrediente3`='$ingrediente3',`extras`='$extras',`soda`='$soda',`tipodesoda`='$tipodesoda' WHERE numero_de_pizza = '$numero_de_pizza'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pizzas.php");
    }
?>