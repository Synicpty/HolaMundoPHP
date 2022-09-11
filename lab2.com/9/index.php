<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 9</title>
    
</head>

<body>

    <div class="login-box">
        <h2>Problema 9</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="ninos" required="">
                <label>Ingrese la cantidad de Niños</label>
            </div>
            <div class="user-box">
                <input type="text" name="ninas" required="">
                <label>Ingrese la cantidad de Niñas</label>
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
                $ninos = $_POST["ninos"];
                $ninas = $_POST["ninas"];
                $cantidad = $ninas + $ninos;
                $resultadoninos = ($ninos / $cantidad)*100;
                $resultadoninas = ($ninas / $cantidad)*100;
        ?>
                <table>
                    <tr>
                        <th>Niñas</th><br>
                        <th>Niños</th>
                    </tr>
                    <tr>
                        <th><h2><?php echo round($resultadoninas, 2) ?></h2></th><br>
                        <th><h2><?php echo round($resultadoninos, 2) ?></h2></th>
                    </tr>
                </table>
        <?php
            }

        ?>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>