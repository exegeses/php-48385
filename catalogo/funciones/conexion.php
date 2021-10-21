<?php

    function conectar()
    {
        $link = mysqli_connect(
                    'localhost',
                    'id17808310_php48385',
                    'Dv~mq1E!Xsls})4q',
                    'id17808310_catalogo'
        );
        return $link;
    }
