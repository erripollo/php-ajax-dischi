<?php 
    require __DIR__ . '/database/db.php';
    require __DIR__ . '/templates/head.php'


?>

<!-- Site header -->
<header id="site_header">
    <div class="logo">
        <img width="60px" src="./dist/img/spotify-2015-logo.png" alt="">
    </div>
</header>
<!-- /Site header -->

<!-- Site main -->
<main id="site_main">

    <!-- card album -->
    <?php foreach ($discs as $disc) : ?>
    <div class="card">
        <img width="160px" src="<?= $disc['poster']; ?>" alt="album cover image">
        <div class="title"><?= $disc['title']; ?></div>
        <div class="author"><?= $disc['author']; ?></div>
        <div class="year"><?= $disc['year']; ?></div>
    </div>
    <?php endforeach; ?>
    <!-- /card album -->

</main>
<!-- /Site main -->

</body>

</html>