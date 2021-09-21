<?php

    function listarMarcas()
    {
        #conexion
        $link = conectar();
        #mensaje sql
        $sql = "SELECT idMarca, mkNombre 
                    FROM marcas";
        #ejecutar mensaje sql
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

    function verMarcaPorID()
    {}
    function agregarMarca()
    {}
    function modificarMarca()
    {}
    function eliminarMarca()
    {}