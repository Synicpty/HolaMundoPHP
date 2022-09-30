<?php
$marca=$_GET["marca"];
$modelo=$_GET["modelo"];
$precio=$_GET["precio"];
$dias=$_GET["dias"];
$precio_a_pagar=$_GET["precio_a_pagar"];
$foto1=$_GET["foto1"];
$foto2=$_GET["foto2"];
$foto3=$_GET["foto3"];
$foto4=$_GET["foto4"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Vehículo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body background="img/f1.jpg">
    <div class="container-sm">

        <div class="row">
           
            <div class="card border-light mb-3" style="margin: 50px;">

                <div class="card-body text-secundary">
                    
                    
                </div>

                <center> <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a  class="nav-link active" aria-current="page" style="color: black;"  href="index.php" ><font face=Verdana size= 50>Informacion de auto seleccionado</font> </a>
                    </li></center>
                    <br>
                    <br>
                <table class= "table table-dark  table-hover table-responsive-sm">
                    <thead>
                        <tr> 
                            <th scope="col"><center>Marca</center></th>
                            <th scope="col"><center>Modelo</center></th>
                            <th scope="col"><center>Precio</center></th>
                            <th scope="col"><center>Dias de alquiler</center></th>
                            <th scope="col"><center>Precio a pagar</center></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><center> <?php echo $marca ?> </center></th>
                            <td><center> <?php echo $modelo ?> </center></td>
                            <td><center> <?php echo $precio ?> </center></td>
                            <td><center> <?php echo $dias ?> </center></td>
                            <td><center> <?php echo $precio_a_pagar ?> </center></td>
                       
                        </tr>
                    </tbody>
                </table>
                
                
                

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>