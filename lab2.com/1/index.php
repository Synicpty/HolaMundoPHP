<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 1</title>
</head>

<body>
    <div>
        <h1>Problema 1</h1>
        <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        $r = $n1 + $n2;
       
        echo "<h2> Resultado: " . $r . "</h2>";
        ?>

    </div>

</body>

</html>