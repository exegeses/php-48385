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
        echo '<img src="imagenes/ok.png">';
    }else{
        echo '<img src="imagenes/error.png">';
    }
?>
<hr>
<?php
    $numero = $_POST['numero'];
    if( $numero < 100 ){
?>
       <img src="imagenes/ok.png">
<?php
    }else{
?>
       <img src="imagenes/error.png">
<?php
    }
?>
<hr>
<?php
    $numero = $_POST['numero'];
    $img = 'error'; // predeterminado
    if( $numero < 100 ){
        $img = 'ok';
    }
?>
    <img src="imagenes/<?= $img; ?>.png">

</body>
</html>