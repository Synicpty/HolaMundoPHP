<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 8</title>
   
</head>

<body>

    <div>
        <h2>Problema 8</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="num1" required="">
                <label>Inversion 1: </label>
            </div>
            <div class="user-box">
                <input type="text" name="num2" required="">
                <label>Inversion 2: </label>
            </div>
            <div class="user-box">
                <input type="text" name="num3" required="">
                <label>Inversion 3: </label>
            </div>
            <a href="#">
                <input type="submit" value="Submit" style="background:none; border-width:0px; color:gray; text-decoration:none;">
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
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];

                $total = ($num1 + $num2 + $num3);

                $priinv = ($num1 * 100) / $total;
                $seginv = ($num2 * 100) / $total;
                $terinv = ($num3 * 100) / $total;

                echo "<h2>El porcentaje del inversionista 1 es de: " . $priinv . "%";
                echo "<br>" . "El porcentaje del inversionista 2 es de: " . $seginv . "%";
                echo "<br>" . "El porcentaje del inversionista 3 es de: " . $terinv . "%</h2>";
            }
            ?>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>