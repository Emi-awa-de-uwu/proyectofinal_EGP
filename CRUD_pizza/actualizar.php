<?php 
    include("conexion.php");
    $con=conectar();

$numero_de_pizza=$_GET['numero_de_pizza'];

$sql="SELECT * FROM pizza WHERE numero_de_pizza='$numero_de_pizza'";
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
                    
                                <input type="hidden" name="numero_de_pizza" value="<?php echo $row['numero_de_pizza']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="tamaño" placeholder="tamaño" >
                                <input type="text" class="form-control mb-3" name="ingrediente1" placeholder="ingrediente1">
                                <input type="text" class="form-control mb-3" name="ingrediente2" placeholder="ingrediente2">
                                <input type="text" class="form-control mb-3" name="ingrediente3" placeholder="ingrediente3">
                                <input type="text" class="form-control mb-3" name="extras" placeholder="extras">
                                <input type="text" class="form-control mb-3" name="soda" placeholder="soda">
                                <input type="text" class="form-control mb-3" name="tipodesoda" placeholder="tipodesoda" >
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>