<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 18</title>
    
</head>

<body>

        <div>
            <h2>Problema 18</h2>
            <table>
                <tr>
                    <th style="text-align: center;">Numero</th>
                    <th style="text-align: center;">Encriptado</th>
                    <th style="text-align: center;">Ver</th>
                </tr>
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo "<tr>
            <th><h3 style='text-align: center;'>$i</h3></th>
            <th><h3 style='text-align: center;'>";echo md5($i);echo "</h3></th>
            <th><h3 style='text-align: center;'><a href='cifrado.php?num=";echo $i;echo "' style='text-decoration:none'><button type='button' class='btn btn-dark'>Ver</button></a></h3></th>
        </tr>";
                }
                ?>
            </table>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>