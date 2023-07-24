<h2><?= $title = 'Posts'; ?></h2>

<?php if (! empty($article) && is_array($article)): ?>

    <?php foreach ($article as $anArticle): ?>

        <h3><?= esc($anArticle['Title']) ?></h3>

        <div class="main">
            <?= esc($anArticle['Text']) ?>
        </div>
        <a href="/article/<?= esc($anArticle['Title'], 'url') ?>"></a>
        <a href="/article/delete?id=<?= esc($anArticle['Id'], 'url') ?>">Delete</a>

    <?php endforeach ?>

<?php else: ?>

    <h3>No blog posts</h3>

    <p>Unable to find any posts for you.</p>

<?php endif ?>