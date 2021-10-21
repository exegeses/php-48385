<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    require 'funciones/categorias.php';
    $productos = buscarProductos();
    $categorias = listarCategorias();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de productos</h1>

        <form action="buscador.php" method="get">
            <input type="text" name="criterio">
            <select name="idCategoria">
                <option value="0">Todas</option>
<?php
            while(  $categoria = mysqli_fetch_assoc( $categorias ) ){
?>
                <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
<?php
            }
?>
            </select>
            <button>Buscar</button>
        </form>

        <a href="admin.php" class="btn btn-outline-secondary btn-sm my-2">
            <i class="bi bi-chevron-left"></i>
            Volver a dashboard
        </a>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Presentación</th>
                    <th>Imagen</th>
                    <th colspan="2">
                        <a href="formAgregarProducto.php" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-plus-square"> </i>
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
            while( $producto = mysqli_fetch_assoc($productos) ) {
?>
                <tr>
                    <td><?= $producto['prdNombre'] ?></td>
                    <td>$<?= $producto['prdPrecio'] ?></td>
                    <td><?= $producto['mkNombre'] ?></td>
                    <td><?= $producto['catNombre'] ?></td>
                    <td><?= $producto['prdPresentacion'] ?></td>
                    <td><img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail"></td>
                    <td>
                        <a href="formModificarProducto.php?idProducto=<?= $producto['idProducto'] ?>" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-pencil-square"> </i>
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarProducto.php?idProducto=<?= $producto['idProducto'] ?>" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-dash-square"> </i>
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php
            }
?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary btn-sm my-2">
            <i class="bi bi-chevron-left"></i>
            Volver a dashboard
        </a>

    </main>

<?php  include 'includes/footer.php';  ?>