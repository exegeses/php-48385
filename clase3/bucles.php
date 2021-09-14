<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Bucles en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="container">
        <h1>Bucles en PHP</h1>

        <div class="div alert alert-secondary">
<?php
        $n = 1;
        while ( $n < 15 ){
            echo $n, '<br>';
            $n++;
        }
?>
        </div>

        <div class="alert alert-secondary">
<?php
    $telefonos = [
        'Samsung', 'Motorola', 'LG',
        'Galaxy', 'Nokia', 'iPhone',
        'Huawei', 'Xiaomi'
    ];
    //contar elementos del array
    $cantidad = count($telefonos);
    $n = 0;
    while( $n < $cantidad ){
        echo $telefonos[ $n ], '<br>';
        $n++;
    }

?>
        </div>

</body>
</html>