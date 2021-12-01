<?php

include("conexion.php");
$con=conectar();

$numero_de_pizza=$_GET['numero_de_pizza'];

$sql="DELETE FROM `pizza` WHERE numero_de_pizza='$numero_de_pizza'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pizzas.php");
    }
?>
