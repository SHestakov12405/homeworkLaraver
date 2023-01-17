<?php foreach ($show as $value) :?>
<div style="border:1px solid black">
    <h3><?=$value['title']?></h3>
    <p><?=$value['text']?></p>
    <p>Author: <?=$value['author']?> | <?=$value['created-at']?></p>
</div>
<?php endforeach; ?>