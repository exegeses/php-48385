<?php
    include 'header.php';
?>
    <main class="container">
        <h1>Locaciones en tailandia</h1>
<?php
        $locaciones = [
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

?>
        <section class="row">
<?php
        foreach ( $locaciones as $locacion ){
?>
            <article class="col-2">
                <img src="tailandia/<?= $locacion ?>.jpg" alt="">
                <h2 class="fs-6"><?= $locacion ?></h2>
            </article>
<?php
        }
?>
        </section>

    </main>
<?php
    include 'footer.php';
?>