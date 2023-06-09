<?php

use Config\Database;

?>

<?php
$db = Database::connect();

if (!empty($db) && is_array($db)): ?>

    <?php foreach ($db as $article): ?>

        <h3><?= esc($article['title']) ?></h3>

        <div class="main">
            <?= esc($article['text']) ?>
        </div>
        <p><a href="/article/<?= esc($article['keyword'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No blog posts</h3>

    <p>Could not find any blog posts for you.</p>

<?php endif ?>