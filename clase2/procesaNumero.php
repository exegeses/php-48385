<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Proceso de dato</h1>
<?php
    $numero = $_POST['numero'];
    if( $numero < 100 ){
        echo 'es menor';
    }else{
        echo 'no es menor';
    }
?>


</body>
</html>