<?php

    ################################
    ####### CRUD de usuarios  ######

    function listarUsuarios()
    {
        $link = conectar();
        $sql  = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                        FROM usuarios";
        $resultado = mysqli_query( $link, $sql )
                    or die(mysqli_error( $link ));
        return $resultado;
    }

    function agregarUsuario()
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];// clave enviada sin hash
        $pHash = password_hash($usuPass, PASSWORD_DEFAULT);
        $link = conectar();
        $sql = "INSERT INTO usuarios 
                    VALUE 
                        (
                            DEFAULT, 
                            '".$usuNombre."', '".$usuApellido."',
                            '".$usuEmail."', '".$pHash."', 1  
                        )";
        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error( $link ));
        return $resultado;
    }

    function verUsuarioPorId()
    {
        $idUsuario = $_GET['idUsuario'];
        $link = conectar();
        $sql  = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                    FROM usuarios
                    WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error( $link ));
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

    function modificarUsuario()
    {
        $usuNombre= $_POST['usuNombre'];
        $usuApellido= $_POST['usuApellido'];
        $usuEmail= $_POST['usuEmail'];
        $idUsuario= $_POST['idUsuario'];

        $link=conectar();
        $sql="UPDATE usuarios 
                SET usuNombre = '".$usuNombre."', 
                    usuApellido = '".$usuApellido."', 
                    usuEmail = '".$usuEmail."'
                WHERE idUsuario = ".$idUsuario;

        $resultado= mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        return $resultado;
    }

    function modificarClave()
    {
        //clave actual sin encriptar
        $usuPass = $_POST['usuPass'];
        /** obtenemos clave encriptada de la bdd **/
        $link = conectar();
        $sql = "SELECT usuPass 
                    FROM usuarios
                    WHERE idUsuario = ".$_SESSION['idUsuario'];
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        //clave encriptada en bdd
        $pHash = mysqli_fetch_assoc( $resultado );
        if ( password_verify( $usuPass, $pHash['usuPass'] ) ){
            // si coinciden:
                //encriptar nueva clave newPass
            $newPass = $_POST['newPass'];
            $newPassHash = password_hash($newPass, PASSWORD_DEFAULT);
                //hacer update
            $sql = "UPDATE usuarios
                        SET usuPass = '".$newPassHash."'
                        WHERE idUsuario = ".$_SESSION['idUsuario'];
            $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
            return $resultado;
        }
        //si no coinciden
        header('location: formModificarClave.php?error=1');
        return;
    }