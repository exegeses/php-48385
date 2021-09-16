<?php
    //declaración
    function multiplicar( $num1, $num2 )
    {
        if( is_numeric($num1) && is_numeric($num2) ){
            $resultado = $num1 * $num2;
            return $resultado;
        }
           return 'Ambos deben ser números';
    }




    include 'header.php';
?>
<main class="container">
        <h1>Funciones en php</h1>

    <div class="alert shadow">
        <?=  multiplicar(3, 'hjtf') ?>
    </div>


</main>
<?php
    include 'footer.php';
?>
