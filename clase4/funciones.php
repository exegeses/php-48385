<?php
    //declaracion
    function textoEnNegrita( $frase )
    {
        $mensaje = '<b>'.$frase.'</b><br>';
        //echo $mensaje;
        return $mensaje;
    }
    function sumar( $num1, $num2 )
    {
        $resultado = $num1 + $num2;
        //echo  $resultado;
        return $resultado;
    }

    include 'header.php';
?>
<main class="container">
        <h1>Funciones en php</h1>

    <div class="alert shadow">
        <?php
            echo textoEnNegrita('PHP y mySQL');
            echo textoEnNegrita('Funciones en PHP');
            echo textoEnNegrita('untexto más');
        ?>
    </div>

    <div class="alert shadow">
        <?php
             echo sumar( 5, 10 );
        ?>
    </div>
    <div class="alert shadow">
        <?php
             echo textoEnNegrita( sumar( 25, 10 ) );
        ?>
    </div>

</main>
<?php
    include 'footer.php';
?>
