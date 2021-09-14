<?php
    date_default_timezone_set('America/Buenos_Aires');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Trabajo con la fecha</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Trabajo con la fecha</h1>
<?php
    //hoy es Martes
    $diaSemana = date('l');
    switch ( $diaSemana ){
        case 'Sunday':
            echo 'Domingo';
            break;
        case 'Monday':
            echo 'Lunes';
            break;
        case 'Tuesday':
            echo 'Martes';
            break;
        case 'Wednesday':
            echo 'Miércoles';
            break;
        case 'Thursday':
            echo 'Jueves';
            break;
        case 'Friday':
            echo 'Viernes';
            break;
        default:
            echo 'Sábado';
            break;
    }
?>
    <hr>
<?php
    $nDiaSemana = date('w');
    $semana = [
                'Domingo', 'Lunes', 'Martes', 'Miércoles',
                'Jueves', 'Viernes', 'Sábado'
              ];
    echo $semana[ $nDiaSemana ];
?>

</body>
</html>
