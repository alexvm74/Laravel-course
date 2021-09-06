<h2>World Job News categories:</h2>
<?php foreach($categoryList as $category): ?>
<div>
    <h3><?=$category['id'].'. '?><a href="<?=route('news.news', ['id_category'=> $category['id']])?>"><?=$category['title']?></a></h3>
</div><br>
<?php endforeach; ?> 