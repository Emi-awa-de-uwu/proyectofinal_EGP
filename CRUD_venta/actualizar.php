<?php 
    include("conexion.php");
    $con=conectar();

$registro=$_GET['registro'];

$sql="SELECT * FROM venta WHERE registro='$registro'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="registro" value="<?php echo $row['registro']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="idvendedor" placeholder="idvendedor" >
                                <input type="text" class="form-control mb-3" name="vendedor" placeholder="vendedor" >
                                <input type="text" class="form-control mb-3" name="tipodeventa" placeholder="tipoventa">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                <input type="text" class="form-control mb-3" name="fechaventa" placeholder="fechaventa">
                                <input type="text" class="form-control mb-3" name="productovendido" placeholder="productovendido">
                                <input type="text" class="form-control mb-3" name="idcliente" placeholder="idcliente" >
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>