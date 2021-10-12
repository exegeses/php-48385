<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = eliminarProducto();
    $css = 'danger';
    $mensaje = 'No se pudo eliminar el producto.';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Producto eliminado correctamente';
    }
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Baja de un producto</h1>

        <div class="alert alert-<?= $css ?> col-7 mx-auto">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-light m-2">
                Volver a panel de productos
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>