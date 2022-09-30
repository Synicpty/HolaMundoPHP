<?php

require_once("controller/alquila_controllers.php");


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial 1 / Problema 4</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="bodyprincipal">

               <center> <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="titulo" class="nav-link active" aria-current="page" style="color: black;"  href="index.php"><font face=Verdana size= 50>Pagina Principal tabla Autos</font></a>
                    </li></center>
                    
    



    <div class="container-sm">
    <br><br><br>
        <div class="row">
           

            
            <div class="card d-block mx-auto" style="width:auto";>
                <div class="card-body">
                <center><h1>Tabla Autos</h1></center>
                    <a >
                            <table  class="table table-dark  table-hover table-responsive-sm">
                                

                                <thead>
                                    <tr>
                                        <th scope="col"><center>ID</center></th>
                                        <th scope="col"><center>Marca</center></th>
                                        <th scope="col"><center>Modelo</center></th>
                                        <th scope="col"><center>Costo</center></th>
                                        <th scope="col"><center>Días  Alquiler</center></th>
                                        <th scope="col"><center>Precio por pagar</center></th>
                                        <th scope="col"><center>Imagen</center></th>
                                        <th scope="col"><center>Ver</center></th>
                                    </tr>
                                </thead>
                                    

                                <tbody>
                                    <?php
                                        $i=0;
                                        foreach(alquila_controllers::Mostrar() as $autos){
                                            
                                        ?>
                                    <tr> 
                                            <th scope="row"><center> <?php echo $autos->getId() ?> </center></th>
                                            <td><center><?php echo $autos->getMarca() ?></center></td>
                                            <td><center><?php echo $autos->getModelo() ?></center></td>
                                            <td><center><?php echo $autos->getPrecio() ?></center></td>
                                            <td><center><?php echo $autos->getDias_de_alquiler() ?></center></td>
                                            <td><center><?php echo $autos->getPrecio_a_pagar() ?></center></td>
                                            <td><center><img src="<?php echo $autos->getFoto() ?>" class="img-fluid"  style="border-radius:10px"; width="150" height="100" alt="..."></center></td>
                                           
                                            <td><center><div class="d-grid gap-2 d-md-block">
                                                <a href="<?php echo $autos->getLinkbtn() ."?marca=". $autos->getMarca() . "&modelo=". $autos->getModelo() ."&precio=". $autos->getPrecio()."&dias=".$autos->getDias_de_alquiler()."&precio_a_pagar=". $autos->getPrecio_a_pagar()."&foto1=". $autos->getFoto1()."&foto2=".$autos->getFoto2()."&foto3=".$autos->getFoto3()."&foto4=".$autos->getFoto4() ?>"><button class="btn btn-primary" type="submit">Detalles</button></a>
                                            </div></center></td>
                                    </tr>
                                    <?php       
                                            }?>    
                                </tbody>


                            </table>
                    </a>
                </div>
            </div>
           


        </div>
    </div>
    <br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>