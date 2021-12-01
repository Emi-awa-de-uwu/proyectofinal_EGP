<?php
include("conexion.php");
$con=conectar();
 
$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numero=$_POST['numero'];
$email=$_POST['email'];
$genero=$_POST['genero'];
$fechanacimiento=$_POST['fechanacimiento'];

$sql="INSERT INTO empleado(idempleado, nombre, apellido, numero, email, genero, fechanacimiento ) VALUES ('$idempleado','$nombre','$apellido','$numero','$email','$genero','$fechanacimiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>