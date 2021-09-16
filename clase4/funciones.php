<?php
    //declaracion
    function textoEnNegrita( $frase )
    {
        echo '<b>', $frase, '</b><br>';
    }

    include 'header.php';
?>
<main class="container">
        <h1>Funciones en php</h1>

    <div class="alert shadow">
        <?php
            textoEnNegrita('PHP y mySQL');
            textoEnNegrita('Funciones en PHP');
            textoEnNegrita('untexto más');
        ?>
    </div>

</main>
<?php
    include 'footer.php';
?>
