<?php
    include 'header.php';
?>
    <main class="container">
        <h1>Listado de marcas</h1>
<?php
    $marcas = [
                'Zara', 'UniQlo', 'Puma',
                'Adidas', 'Levis', 'Markova',
                'Lacoste', 'Nike', 'Armani'
    ];
    $cantidad = count($marcas);
?>

        <ul class="list-group">
    <?php
        for( $n = 0; $n < $cantidad; $n++ ){
    ?>
            <li class="list-group-item list-group-item-action">
                <?= $marcas[$n]; ?>
            </li>
    <?php
        }
    ?>
        </ul>

    </main>
<?php
    include "footer.php";
?>