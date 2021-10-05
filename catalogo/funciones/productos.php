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

    function verProductoPorID()
    {}

    function subirImagen()
    {
        //si no enviaron imagen
        $prdImagen = 'noDisponible.jpg';

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
    {}
    function eliminarProducto()
    {}

