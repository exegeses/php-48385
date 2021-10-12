<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = modificarUsuario();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Modificación de un usuario</h1>
        <?php
        if ($chequeo){
            ?>
            <div class = "alert alert-success col-7 mx-auto">
                Usuario modificado
                <a href="adminUsuarios.php" class="btn btn-light m-2">
                    Volver a panel de Usuarios </a>
            </div>
            <?php
        }else{
            ?>
            <div class = "alert alert-danger col-6 mx-auto">
                No se pudo modificar el usuario
                <a href="adminUsuarios.php" class="btn btn-light m-2">
                    Volver a panel de usuarios  </a>
            </div>
            <?php
        }
        ?>
    </main>

<?php  include 'includes/footer.php';  ?>