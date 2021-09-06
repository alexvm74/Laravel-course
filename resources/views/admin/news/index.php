<h1>Панель администратора</h1>
<h2>Новости:</h2>

<?php foreach ($newsList as $news) : ?>
    <div>
        <!--    <h2><a href="<?= route('admin.news.index') ?>"><?= $news['title'] ?></a></h2> -->
        <h2><?=$news['id'].'. '?><?= $news['title'] ?></h2>
        <p><b>Description: </b><?= $news['description'] ?></p>
        <p><b>Author: </b><?= $news['author'] ?></p>
        <p><b>Created: </b><?= $news['created_at'] ?></p>

    </div><br>
<?php endforeach; ?>