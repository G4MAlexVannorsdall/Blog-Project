
<h2><?= esc($title) ?></h2>

<?php if (! empty($articles) && is_array($articles)): ?>

    <?php foreach ($article as $articles): ?>

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