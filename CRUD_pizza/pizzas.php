<?php 

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM pizza";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Compre pizzas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Compra pizza</h1>
                                <form action="insertar.php" method="POST">

                                <input type="text" class="form-control mb-3" name="tamaño" placeholder="tamaño">
                                <input type="text" class="form-control mb-3" name="ingrediente1" placeholder="ingrediente1" >
                                <input type="text" class="form-control mb-3" name="ingrediente2" placeholder="ingrediente2">
                                <input type="text" class="form-control mb-3" name="ingrediente3" placeholder="ingrediente3">
                                <input type="text" class="form-control mb-3" name="extras" placeholder="extras">
                                <input type="text" class="form-control mb-3" name="soda" placeholder="soda">
                                <input type="text" class="form-control mb-3" name="tipodesoda" placeholder="tipodesoda" >
                                
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Guerrero_Peralta_Pizza/index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>

                                        <th>Numero de pizza</th>
                                        <th>Tamaño</th>
                                        <th>Ingrediente1</th>
                                        <th>Ingrediente2</th>
                                        <th>Ingrediente3</th>
                                        <th>Extras</th>
                                        <th>Soda</th>
                                        <th>Tipo de soda</th>
                                    </tr>
                                </thead> 

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['numero_de_pizza']?></th>
                                                <th><?php echo $row['tamaño']?></th>
                                                <th><?php  echo $row['ingrediente1']?></th>
                                                <th><?php  echo $row['ingrediente2']?></th>
                                                <th><?php  echo $row['ingrediente3']?></th>
                                                <th><?php echo $row['extras']?></th>
                                                <th><?php echo $row['soda']?></th>  
                                                <th><?php echo $row['tipodesoda']?></th>

                                                <th><a href="actualizar.php?numero_de_pizza=<?php echo $row['numero_de_pizza'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?numero_de_pizza=<?php echo $row['numero_de_pizza'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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