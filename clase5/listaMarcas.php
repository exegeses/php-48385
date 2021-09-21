<?php

    include 'conexion.php';
    include 'marcas.php';
    $resultado = listarMarcas();

    include 'header.php';
?>
    <main class="container">
        <h1> Listado de marcas </h1>

        <ul class="list-group">
<?php
        while( $fila = mysqli_fetch_assoc($resultado) ){
?>            
            <li class="list-group-item list-group-item-action">
                <?= $fila['idMarca']; ?>
                <?= $fila['mkNombre']; ?>
            </li>
<?php
        }
?>
        </ul>

    </main>
<?php
    include 'footer.php';
?>