<?php 
    include("conexion.php");
    $con=conectar();


$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$ventas=$_POST['ventas'];
$inventario=$_POST['inventario'];
$horas=$_POST['horas'];


$sql="SELECT FROM empleado ('$nombre','$apellidos','$ventas','$inventario' ,'$horas')";


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
                    
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="ventas" placeholder="ventas" value="<?php echo $row['ventas']  ?>">
                                <input type="text" class="form-control mb-3" name="inventario" placeholder="inventario" value="<?php echo $row['inventario']  ?>">
                                <input type="text" class="form-control mb-3" name="horas" placeholder="horas" value="<?php echo $row['horas']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>