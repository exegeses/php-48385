<?php

    ##############################
    ####### CRUD de categorías  ######

    function listarCategorias()
    {
        //conexión
        $link = conectar();
        //mensaje SQL
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias";
        //ejecución
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }