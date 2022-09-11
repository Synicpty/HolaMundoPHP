<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 10</title>
    
</head>

<body>

    <div>
        <h2>Problema 10</h2>
        <form action="index.php" method="post" name="CreateForm">
            <h3>Rellene con 0 los espacios en blanco</h3>
            <div class="user-box">
                <input type="text" name="h" required="">
                <label>Horas</label>
            </div>
            <div class="user-box">
                <input type="text" name="m" required="">
                <label>Minuto</label>
            </div>
            <div class="user-box">
                <input type="text" name="s" required="">
                <label>Segundo</label>
            </div>
            <a href="#">
                <input type="submit" value="Submit" style="background:none; border-width:0px; color:black; text-decoration:none;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </a>
            <a href="index.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Reset
            </a>

            <?php

            if ($_POST) {
                $h = $_POST["h"];
                $m = $_POST["m"];
                $s = $_POST["s"];
                $totalh = $h * 3600;
                $totalm = $m * 60;
                $totals = $s * 1;
                $totalt = ($totalh + $totalm + $totals) * .25;
                echo "<h2>Total de paga: <br> $totalt </h2>";
            }

            ?>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>