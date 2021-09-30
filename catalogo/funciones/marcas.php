<?php

    ##############################
    ####### CRUD de marcas  ######

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre 
                    FROM marcas";
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );

        return $resultado;
    }

    function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre 
                    FROM marcas
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }

    function agregarMarca()
    {
        //capturamos datos enviados por el form
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas 
                        ( mkNombre ) 
                    VALUE 
                        ( '".$mkNombre."' )";
        $resultado = mysqli_query($link, $sql)
                                or die( mysqli_error( $link ) );
        return $resultado;
    }
    function modificarMarca()
    {
        $mkNombre = $_POST['mkNombre'];
        $idMarca  = $_POST['idMarca'];
        $link = conectar();
        $sql = "UPDATE marcas
                    SET mkNombre = '".$mkNombre."'
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error( $link ) );
        return $resultado;
    }

    /**
     * función para chequear si hay productos
     * asignados a una marca
     */
    function verificarProdPorMarca()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT 1 
	                FROM productos
	                WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                            or die( mysqli_error( $link ) );
        $cantidad = mysqli_num_rows( $resultado );
        return $cantidad;
    }

    function eliminarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "DELETE FROM marcas
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error( $link ) );
        return $resultado;
    }