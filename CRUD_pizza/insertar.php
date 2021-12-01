<?php
include("conexion.php");
$con=conectar();
 
$tamaño=$_POST['tamaño'];
$ingrediente1=$_POST['ingrediente1'];
$ingrediente2=$_POST['ingrediente2'];
$ingrediente3=$_POST['ingrediente3'];
$extras=$_POST['extras'];
$soda=$_POST['soda'];
$tipodesoda=$_POST['tipodesoda'];


$sql="INSERT INTO pizza(tamaño, ingrediente1, ingrediente2, ingrediente3, extras, soda, tipodesoda ) VALUES ('$tamaño','$ingrediente1','$ingrediente2','$ingrediente3','$extras','$soda','$tipodesoda')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pizzas.php");
    
}else {
}
?>