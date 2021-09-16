<?php
    include 'header.php';
?>
    <main class="container">
        <h1>Locaciones en tailandia</h1>
<?php
        $locacion = [
                "chinatown",
                "floating-market",
                "hat-laem",
                "wat-arun",
                "khao-san-road",
                "ko-khai-beach",
                "kwai-river",
                "limestone",
                "longtail-boat",
                "maya-bay",
                "pra-nang",
                "rai-leh-beach",
                "rawai",
                "sirocco",
                "tuk-tuk",
                "wat-saket"
            ];
        $cantidad = count($locacion);
?>
        <section class="row">
<?php
        for( $n=0; $n<$cantidad; $n++ ){
?>
            <article class="col-2">
                <img src="tailandia/<?= $locacion[$n]; ?>.jpg" alt="">
                <h2 class="fs-6"><?= $locacion[$n]; ?></h2>
            </article>
<?php
        }
?>
        </section>

    </main>
<?php
    include 'footer.php';
?>