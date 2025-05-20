<?= $this->extend("layouts/default.php"); ?>

<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>

<?= $this->section("content") ?>

<h1><?= $title ?> Page</h1>
<p>This is ALL article information.</p>
<!-- Loops through $data -->
<?php foreach ($articles as $article): ?>
<article>
    <!-- <a href="/articles/<?= $article['id'] ?>">
        <h2><?= $article['title'] ?></h2>
    </a> -->
    <a href="<?= site_url('articles/'. $article['id'] )  ?>">
        <h2><?= $article['title'] ?></h2>
    </a>
    <p><?= $article['content'] ?></p>
</article>
<?php endforeach; ?>

</body>

</html>
<?= $this->endSection(); ?>