<?php

    //define('NOMBRE', 'John');
    //define('APELLIDO', 'Galt');
    const NOMBRE = 'John';
    const APELLIDO = 'Galt';
    $numero = 0;
    echo $numero;
?>
<hr>
<?php
    //const NOMBRE = 'jgfd'; //no se puede redeclarar
    $numero = 23;
    echo $numero;
?>
<hr>
<?php
    echo $numero * 3;
    echo '<br>';
    echo NOMBRE, ' ', APELLIDO;
?>
