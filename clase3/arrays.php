<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Arrays en PHP</h1>

    <div class="alert alert-info">
<?php
        $nombres = [ 'Juan', 'Mateo', 'Lucas', 'Marcos' ];
        echo $nombres[1];
?>
    </div>

    <div class="alert alert-info">
<?php
    $telefonos = [
                    'Samsung', 'Motorola', 'LG',
                    'Galaxy', 'Nokia', 'iPhone',
                    'Huawei', 'Xiaomi'
                ];
    echo '<pre>';
    print_r( $telefonos );
    echo '</pre>';
?>
    </div>

    <div class="alert alert-info">
<?php
    $telefonos = [
        5 => 'Samsung', 'Motorola', 9 => 'LG',
        'Galaxy', 'Nokia', 'iPhone',
        'Huawei', 'Xiaomi'
    ];
    echo '<pre>';
    print_r( $telefonos );
    echo '</pre>';
?>
    </div>

    <div class="alert alert-info">
<?php
        //asociativo
        $telefonos = [
            'Samsung' => 'A30',
            'Motorola' => 'G9',
            'LG' => 'L40',
            'Galaxy' => 'S10',
            'Nokia' => '1100',
            'iPhone' => 'X12',
            'Huawei' => 'NOse',
            'Xiaomi' =>  'MI'
        ];
        echo '<pre>';
        print_r( $telefonos );
        echo '</pre>';
?>
    </div>

</body>
</html>
