<?php
//require 'config/config.php';
require 'funciones/conexion.php';
require 'funciones/usuarios.php';
$chequeo= agregarUsuario();
include 'includes/header.html';
include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de un Usuario</h1>
        <?php
        if ($chequeo){
            ?>
            <div class = "alert alert-success col-7 mx-auto">
                Usuario agregado
                <a href="adminUsuarios.php" class="btn btn-light m-2">
                    Volver a panel de Usuarios </a>
            </div>
            <?php
        }else{
            ?>
            <div class = "alert alert-danger col-6 mx-auto">
                No se pudo agregar el usuario
                <a href="adminUsuarios.php" class="btn btn-light m-2">
                    Volver a panel de usuarios  </a>
            </div>
            <?php
        }
        ?>
    </main>

<?php  include 'includes/footer.php';  ?>