<h2><?= esc($title) ?></h2>

<?php if (! empty($article) && is_array($article)): ?>

    <?php foreach ($article as $post): ?>

        <h3><?= esc($post['title']) ?></h3>

        <div class="main">
            <?= esc($post['text']) ?>
        </div>
        <p><a href="/news/<?= esc($post['keyword'], 'url') ?>">View post</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No blog posts</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>