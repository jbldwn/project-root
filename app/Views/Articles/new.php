<?= $this->extend("layouts/default.php"); ?>

<?= $this->section("title") ?>
New Article
<?= $this->endSection(); ?>

<?= $this->section("content") ?>
<h1>Add New Article</h1>
<?php
    helper('form');
    echo form_open('articles/publish');
?>
<?= form_label('Title:', 'title') ?>
<?= form_input('title', '', ['placeholder'=> 'Title...'], 'text')?>
<?= form_label('Content:', 'content') ?>
<?= form_textarea('content', '', ['placeholder' => 'Content...'], 'text') ?>
<?= form_submit("addArticle", 'Save') ?>
<?= form_close() ?>

<?= $this->endSection(); ?>