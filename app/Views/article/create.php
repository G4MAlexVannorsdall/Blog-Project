<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/article/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('Title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="text" cols="45" rows="4"><?= set_value('Text') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create post">
</form>
