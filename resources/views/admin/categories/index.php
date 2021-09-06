<h1>Панель администратора</h1>
<h2>Категории новостей:</h2>

<?php foreach($categoryList as $category): ?>
<div>
    <h3><?=$category['id'].'. '?><a href="<?=route('admin.news.index')?>"><?=$category['title']?></a></h3>
</div><br>
<?php endforeach; ?> 