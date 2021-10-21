<?php

    ##############################
    ####### CRUD de productos  ######

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                       p.idMarca, mkNombre, 
                       p.idCategoria, catNombre, 
                       prdPresentacion, prdImagen
                    FROM productos p
                    JOIN marcas m
                    	ON p.idMarca = m.idMarca
                    JOIN categorias c
                    	ON p.idCategoria = c.idCategoria";
        /*
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                       p.idMarca, mkNombre,
                       p.idCategoria, catNombre,
                       prdPresentacion, prdImagen
                    FROM productos p, marcas m, categorias c
                    WHERE p.idMarca = m.idMarca
                    AND p.idCategoria = c.idCategoria";
         */
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error( $link ) );
        return $resultado;
    }

    function buscarProductos()
    {
        $link = conectar();
        $idCategoria = 0;
        $criterio = '';
        if ( isset( $_GET['idCategoria'] ) ){
            $idCategoria = $_GET['idCategoria'];
        }
        if ( isset( $_GET['criterio'] ) ){
            $criterio = $_GET['criterio'];
        }
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                           p.idMarca, mkNombre, 
                           p.idCategoria, catNombre, 
                           prdPresentacion, prdImagen
                        FROM productos p
                        JOIN marcas m
                            ON p.idMarca = m.idMarca
                        JOIN categorias c
                            ON p.idCategoria = c.idCategoria";
        $filtroCriterio = " WHERE prdNombre LIKE '%".$criterio."%'";
        $sql .= $filtroCriterio; // concatenamos filtro para buscar por nombre
        $filtroCategoria = "";
        if( $idCategoria != 0 ){
            $filtroCategoria = " AND p.idCategoria = ".$idCategoria;
        }
        $sql .= $filtroCategoria;

        $resultado = mysqli_query($link, $sql)
        or die( mysqli_error( $link ) );
        return $resultado;
    }


function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                       p.idMarca, mkNombre, 
                       p.idCategoria, catNombre, 
                       prdPresentacion, prdStock, prdImagen
                    FROM productos p
                    JOIN marcas m
                    	ON p.idMarca = m.idMarca
                    JOIN categorias c
                    	ON p.idCategoria = c.idCategoria
                    WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error( $link ) );
        $producto = mysqli_fetch_assoc( $resultado );
        return $producto;
    }

    function subirImagen()
    {
        //si no enviaron imagen en ALTA
        $prdImagen = 'noDisponible.jpg';

        //si no enviaron imagen en MODIFICACIÓN
        if( isset($_POST['imgActual']) ){
            $prdImagen = $_POST['imgActual'];
        }

        // enviaron imagen y está todo ok
        if( $_FILES['prdImagen']['error'] == 0 ){
            //ruta para guardar
            $path = 'productos/';
            //nombre y ubicación temporal
            $temp = $_FILES['prdImagen']['tmp_name'];
            // renombrar archivo
                //time() + extension
            $extension = pathinfo( $_FILES['prdImagen']['name'], PATHINFO_EXTENSION );
            $prdImagen = time().'.'.$extension;

            //movemos archivo
            move_uploaded_file( $temp, $path.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        //capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        //subir imagen *
        $prdImagen = subirImagen();

        $link = conectar();
        $sql = "INSERT INTO productos 
                        VALUES( 
                                DEFAULT, 
                               '".$prdNombre."',
                               ".$prdPrecio.", 
                               ".$idMarca.", 
                               ".$idCategoria.", 
                               '".$prdPresentacion."', 
                               ".$prdStock.", 
                               '".$prdImagen."'
                              )";
        $resultado = mysqli_query( $link, $sql )
                                or die( mysqli_error( $link ) );
        return $resultado;
    }
    function modificarProducto()
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirImagen();
        $idProducto = $_POST['idProducto'];

        $link= conectar();
        $sql = "UPDATE productos 
                    SET 
                        prdNombre       = '".$prdNombre."', 
                        prdPrecio       = ".$prdPrecio.", 
                        idMarca         = ".$idMarca.", 
                        idCategoria     = ".$idCategoria.",
                        prdPresentacion = '".$prdPresentacion."', 
                        prdStock        = ".$prdStock.", 
                        prdImagen       = '".$prdImagen."'
                    WHERE idProducto    = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        return $resultado;
    }
    function eliminarProducto()
    {
        $idProducto= $_POST['idProducto'];
        $link=conectar();
        $sql= "DELETE FROM productos 
                    WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }

