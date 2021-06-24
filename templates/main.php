<!-- Site main -->
<main id="site_main">

    <!-- cards album -->
    <?php foreach ($discs as $disc) : ?>
    <div class="card">
        <img width="160px" src="<?= $disc['poster']; ?>" alt="album cover image">
        <div class="title"><?= $disc['title']; ?></div>
        <div class="author"><?= $disc['author']; ?></div>
        <div class="year"><?= $disc['year']; ?></div>
    </div>
    <?php endforeach; ?>
    <!-- /cards album -->

</main>
<!-- /Site main -->