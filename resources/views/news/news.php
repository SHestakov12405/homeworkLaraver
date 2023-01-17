<?php foreach ($news as $value) :?>
<div style="border:1px solid black">
    <h3><?=$value['title']?></h3>
    <p><?=$value['text']?></p>
    <p>Author: <?=$value['author']?> | <?=$value['created-at']?></p>
    <a href="<?=route('news.show', ['id'=> $value['id']])?>">Next</a>
</div>
<?php endforeach; ?>