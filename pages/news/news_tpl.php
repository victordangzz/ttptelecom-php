<div class="title-main">
    <span class="aurora">
        <?= (!empty($titleCate)) ? $titleCate : @$titleMain ?>
    </span>
</div>
<span class="sub-title-main">
    Cập nhật tin tức mới nhất và kiến thức hữu ích về sửa chữa - bảo trì
</span>

<?php if(!empty($tags)): ?>
    <div class="news-tabs">
        <div class="news-tab" data-id="" data-tag="Tin tức">
            <span>
                Tất cả
            </span>
            <span>
                (<?= !empty($news) ? count($news) : 0 ?>)
            </span>
        </div>
        <?php 
            foreach($tags as $v): 
                $newsTags = $d->rawQuery("select id_tags from #_news_tags where id_tags = ?", array($v['id']));
        ?>
            <div class="news-tab" data-id="<?= $v['id'] ?>" data-tag="<?= $v['name'.$lang] ?>">
                <span>
                    <?= $v['name'.$lang] ?>
                </span>
                <span>
                    (<?= !empty($newsTags) ? count($newsTags) : 0 ?>)
                </span>
            </div>
        <?php endforeach ?>
    </div>
    <div class="load_news"></div>
<?php endif ?>