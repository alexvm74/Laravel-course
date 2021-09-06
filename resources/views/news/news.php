<h2>Job News category: #ID <?=$id_category?>.</h2>

<?php foreach($newsList as $news): ?>
<div>
    <h3><?=$news['id'].'. '?><a href="<?=route('news.show', ['id_category' => $id_category, 'id_news'=> $news['id']])?>"><?=$news['title']?></a></h3>
    <p><?=$news['description']?></p>
</div><br>
<?php endforeach; ?> 