<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Problema 2</title>
</head>

<body>
  <div>
    <h2>Problema 2</h2>
    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo "<h2>Numero 1:  $num1 <br>Numero 2: $num2 <br><br></h2>";
    echo "<h2>Suma:  $suma </h2>";
    echo "<h2>Resta:  $resta </h2>";
    echo "<h2>Multiplicación:  $multiplicacion </h2>";
    echo "<h2>División:  $division </h2>";
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>