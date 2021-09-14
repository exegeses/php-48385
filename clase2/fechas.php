<?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    echo date("D , F, y");
?>
<hr>
<?php
    $hoy = date("F j, Y, g:i a") ;
    echo $hoy;
    echo '<br>';
    echo date(DATE_RFC2822);



