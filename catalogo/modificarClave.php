<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = modificarClave();
    $css = 'danger';
    $mensaje = 'No se pudo modificar la contraseña.';
    if( $chequeo ) {
        $css = 'success';
        $mensaje = 'Contraseña modificada correctamente.';
    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de contraseña</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>