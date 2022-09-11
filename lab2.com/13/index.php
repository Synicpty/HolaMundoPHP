<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 13</title>
    
</head>

<body>

    <div class="login-box">
        <h2>Problema 13</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="personas" required="">
                <label>Cuantas personas asistiran:</label>
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
                $personas = $_POST["personas"];
                if ($personas > 200 && $personas <= 300) {
                    echo "<h3>Costo por persona para el banquete es: 85.00$</h3>";
                } else if ($personas > 300) {
                    echo "<h3>Costo por persona para el banquete es: 75.00$</h3>";
                } else {
                    echo "<h3>Costo por persona para el banquete es: 95.00$</h3>";
                }
            }

            ?>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>