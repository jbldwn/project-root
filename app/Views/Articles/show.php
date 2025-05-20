<?= $this->extend("layouts/default.php"); ?>

<?= $this->section("title") ?>
Article
<?= $this->endSection(); ?>

<?= $this->section("content") ?>
<h1><?= $article['title'] ?></h1>
<p><?= $article['content'] ?></p>
<a href="/articles">
    <h6>Back</h6>
</a>


</body>

</html>
<?= $this->endSection(); ?>