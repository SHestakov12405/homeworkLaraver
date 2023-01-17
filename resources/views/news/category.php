<div>
    <ul>
        <?php foreach($category as $values): ?>
            <a href="<?=route('news.showCategory', ['id'=>$values['id']])?>">
                <li><?=$values['name']?> <?=$values['id']?></li>
            </a>
        <?php endforeach; ?>
    </ul>
</div>