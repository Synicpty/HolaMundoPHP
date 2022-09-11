<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 14</title>
    
</head>

<body>

    <div>
        <h2>Problema 14</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="anios" required="">
                <label>Años de la tienda:</label>
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
                $anios = $_POST["anios"];
                if ($anios == 1) {
                    echo "<h3>Bono de 100$</h3>";
                } else if ($anios == 2) {
                    echo "<h3>Bono de 200$</h3>";
                } else if ($anios == 3) {
                    echo "<h3>Bono de 300$</h3>";
                } else if ($anios == 4) {
                    echo "<h3>Bono de 400$</h3>";
                } else if ($anios == 5) {
                    echo "<h3>Bono de 500$</h3>";
                } else {
                    echo "<h3>Bono de 1000$</h3>";
                }
            }

            ?>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>