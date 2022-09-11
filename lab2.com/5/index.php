<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2</title>
</head>

<body>
    <div class="login-box">
        <h2>Problema 5</h2>
        <?php
        $nom = $_GET["name"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];
        $nota4 = $_GET["nota4"];
        $nota55 = $_GET["nota5"];

        $promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;


        echo "<h2>Alumno:  $name</h2>";
        echo "<h2>Su Promedio es:  $promedio </h2>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>