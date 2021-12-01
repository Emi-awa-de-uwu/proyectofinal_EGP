<?php 

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Registro para empleados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registro Empleado</h1>
                                <form action="insertar.php" method="POST">
   
                                <input type="text" class="form-control mb-3" name="idempleado" placeholder="idempleado" >
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="apellido">
                                <input type="text" class="form-control mb-3" name="numero" placeholder="numero">
                                <input type="text" class="form-control mb-3" name="email" placeholder="email">
                                <input type="text" class="form-control mb-3" name="genero" placeholder="genero">
                                <input type="text" class="form-control mb-3" name="fechanacimiento" placeholder="fechanacimiento" >
                                
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Guerrero_Peralta_Pizza/index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>

                                        <th>idempleado</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Numero de telefono</th>
                                        <th>Email</th>
                                        <th>Genero</th>
                                        <th>Fecha de nacimiento</th>
                                        
                                    </tr>
                                </thead> 

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['registro']?></th>
                                                <th><?php echo $row['idempleado']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['numero']?></th>
                                                <th><?php echo $row['email']?></th>
                                                <th><?php echo $row['genero']?></th>  
                                                <th><?php echo $row['fechanacimiento']?></th>

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