<?php
include("conexion.php");
$con=conectar();
 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numero=$_POST['numero'];
$email=$_POST['email'];
$colonia=$_POST['colonia'];
$calle=$_POST['calle'];
$numerodecasa=$_POST['numerodecasa'];
$idcliente=$_POST['idcliente'];


$sql="INSERT INTO cliente(nombre, apellido, numero, email, colonia, calle, numerodecasa, idcliente) VALUES ('$nombre','$apellido','$numero','$email','$colonia','$calle','$numerodecasa','$idcliente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>