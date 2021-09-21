<?php

    #conexion
    $link = mysqli_connect(
                    'localhost',
                    'root',
                    'root',
                    'catalogo'
            );

    #mensaje sql
    $sql = "SELECT idMarca, mkNombre 
                FROM marcas";

    #ejecutar mensaje sql
    $resultado = mysqli_query($link, $sql);

    include 'header.php'
?>
    <main class="container">
        <h1> Listado de marcas </h1>

        <ul class="list-group">
<?php
        while( $fila = mysqli_fetch_assoc($resultado) ){  
?>            
            <li class="list-group-item list-group-item-action">
                <?= $fila['idMarca'] ?>
                <?= $fila['mkNombre'] ?>
            </li>
<?php
        }
?>
        </ul>

    </main>
<?php
    include 'footer.php';
?>