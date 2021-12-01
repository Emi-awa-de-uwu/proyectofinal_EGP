<?php 
    include("conexion.php");
    $con=conectar();

$registro=$_GET['registro'];

$sql="SELECT * FROM cliente WHERE registro='$registro'";
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
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="apellido" >
                                <input type="text" class="form-control mb-3" name="numero" placeholder="numero">
                                <input type="text" class="form-control mb-3" name="email" placeholder="email">
                                <input type="text" class="form-control mb-3" name="colonia" placeholder="colonia">
                                <input type="text" class="form-control mb-3" name="calle" placeholder="calle">
                                <input type="text" class="form-control mb-3" name="numerodecasa" placeholder="numerodecasa" >
                                <input type="text" class="form-control mb-3" name="idcliente" placeholder="idcliente">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>