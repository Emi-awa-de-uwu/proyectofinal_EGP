<?php 

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM venta";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Registro de ventas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registro de venta</h1>
                                <form action="insertar.php" method="POST">

                                <input type="text" class="form-control mb-3" name="idvendedor" placeholder="idvendedor" >
                                <input type="text" class="form-control mb-3" name="vendedor" placeholder="vendedor" >
                                <input type="text" class="form-control mb-3" name="tipodeventa" placeholder="tipoventa">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                <input type="text" class="form-control mb-3" name="fechaventa" placeholder="fechaventa">
                                <input type="text" class="form-control mb-3" name="productovendido" placeholder="productovendido">
                                <input type="text" class="form-control mb-3" name="idcliente" placeholder="idcliente" >
                                
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Guerrero_Peralta_Pizza/index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>

                                        <th>id del vendedor</th>
                                        <th>Nombre del vendedor</th>
                                        <th>tipo de venta</th>
                                        <th>precio</th>
                                        <th>fecha de la venta</th>
                                        <th>producto vendido</th>
                                        <th>id del cliente</th>
                                        
                                    </tr>
                                </thead> 

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                             
                                                <th><?php echo $row['idvendedor']?></th>
                                                <th><?php echo $row['vendedor']?></th>
                                                <th><?php  echo $row['tipodeventa']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['fechaventa']?></th>
                                                <th><?php echo $row['productovendido']?></th>  
                                                <th><?php echo $row['idcliente']?></th>

                                                <th><a href="actualizar.php?registro=<?php echo $row['registro'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?registro=<?php echo $row['registro'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>