<?php

    $pass  = 'abc';
    $pHash = password_hash( $pass, PASSWORD_DEFAULT );

    echo 'clave: ', $pass;
    echo '<br>';
    echo 'hasheada: ', $pHash;