<?php

    //capturamos el input['file']
    $prdImagen = $_FILES['prdImagen'];
    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';

    //movemos archivo desde tmp a /productos
    $temporal = $_FILES['prdImagen']['tmp_name'];
    $prdImagen = $prdImagen['name'];
    $path = 'productos/';
    move_uploaded_file($temporal, $path.$prdImagen);
