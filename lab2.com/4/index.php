<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 4</title>
</head>

<body>
    <div>
        <h2>Problema 4</h2>
        <?php
        $horas = $_GET["horas"];
        $salario = $_GET["salario"];

        $salariobruto = $horas * $salario;
        define("descuento", 0.2);
        $desc = descuento * $salariobruto;
        $salarioneto = $salariobruto - $desc;

        echo "<h2>Trabajaste :  $horas </h2>";
        echo "<h2>Salario x hora:  $salario $</h2>";
        echo "<h2>Salario Bruto: $salariobruto $</h2>";
        echo "<h2>Salario Neto:  $salarioneto $</h2>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>