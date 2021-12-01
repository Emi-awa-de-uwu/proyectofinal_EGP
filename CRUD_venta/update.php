<?php

include("conexion.php");
$con=conectar();

$registro=$_POST['registro'];
$idvendedor=$_POST['idvendedor'];
$vendedor=$_POST['vendedor'];
$tipodeventa=$_POST['tipodeventa'];
$precio=$_POST['precio'];
$fechaventa=$_POST['fechaventa'];
$productovendido=$_POST['productovendido'];
$idcliente=$_POST['idcliente'];


$sql="UPDATE `venta` SET `vendedor`='$vendedor',`tipodeventa`='$tipodeventa',`tipodeventa`='$tipodeventa',`precio`='$precio',`fechaventa`='$fechaventa',`productovendido`='$productovendido',`idcliente`='$idcliente' WHERE registro = '$registro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>