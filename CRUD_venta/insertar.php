<?php
include("conexion.php");
$con=conectar();
 
$idvendedor=$_POST['idvendedor'];
$vendedor=$_POST['vendedor'];
$tipodeventa=$_POST['tipodeventa'];
$precio=$_POST['precio'];
$fechaventa=$_POST['fechaventa'];
$productovendido=$_POST['productovendido'];
$idcliente=$_POST['idcliente'];


$sql="INSERT INTO venta(idvendedor, vendedor, tipodeventa, precio, fechaventa, productovendido, idcliente) VALUES ('$idvendedor','$vendedor','$tipodeventa','$precio','$fechaventa','$productovendido','$idcliente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: venta.php");
    
}else {
}
?>