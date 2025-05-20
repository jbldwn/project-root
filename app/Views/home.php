<?= $this->extend("layouts/default.php"); ?>

<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>

<?= $this->section("content") ?>
<h1><?= $title ?> Page</h1>
<p>This is the homepage.</p>



</body>

</html>
<?= $this->endSection(); ?>