<?php
include "config.php";
const TYPE = "tin-tuc";
$id = (isset($_POST['id']) && !empty($_POST['id'])) ? htmlspecialchars($_POST['id']) : "";
$tag = (isset($_POST['tag']) && !empty($_POST['tag'])) ? htmlspecialchars($_POST['tag']) : "Tin tức";
$where = "";
if(!empty($id)) {
    $idTags = $d->rawQuery("select id_parent from #_news_tags where id_tags = ?",array($id));
    $idTags = (!empty($idTags)) ? $func->joinCols($idTags, 'id_parent') : '';
    $where .= " and id in ($idTags)";
}
$items = $d->rawQuery("select photo, name$lang, slug$lang, desc$lang, content$lang, date_created, id from #_news where type = ? $where and find_in_set('hienthi',status) order by numb,id desc", array(TYPE));
$thumb1 = "751x422x1";
$thumb2 = "478x268x1";
?>

<?php if(!empty($items)): ?>
    <div class="nw-top">
        <div class="nw-first animate__zoomIn wow" data-wow-iteration="1" data-wow-duration="0.8s">
            <a class="nw-first-thumbnail hover_sang2 text-decoration-none scale-img" href="<?= $items[0]['slug'. $lang] ?>" title="<?= $items[0]['name' . $lang] ?>">
                <?php if(!empty($items[0]['photo'])): ?>
                    <img class="lazy w-100" data-src="<?= THUMBS ?>/<?= $thumb1 ?>/<?= UPLOAD_NEWS_L . $items[0]['photo'] ?>" alt="<?= $items[0]['name' . $lang] ?>" title="<?= $items[0]['name' . $lang] ?>" />
                <?php else: ?>
                    <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; background-color: oklch(96.7% .003 264.542); aspect-ratio: 16/9; object-fit: contain;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" stroke="#000" stroke-linejoin="round" opacity=".3" fill="none" stroke-width="3.7"><rect x="16" y="16" width="56" height="56" rx="6"/><path d="m16 58 16-18 32 32"/><circle cx="53" cy="35" r="7"/></svg>
                    </div>
                <?php endif ?>
            </a>
            <div class="nw-first-info animate__zoomIn wow" data-wow-iteration="1" data-wow-duration="0.8s">
                <div class="nw-first-box-time">
                    <p class="nw-first-time mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path><circle cx="7.5" cy="7.5" r=".5" fill="currentColor" style="width: 14px;"></circle></svg>
                        <span>
                            <?= $tag ?>
                        </span>
                    </p>
                    <div class="nw-first-date">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 14px;"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                        </span>
                        <span>
                            <?= date("d/m/Y", $items[0]['date_created']) ?>
                        </span>
                    </div>
                </div>
                <h3 class="nw-first-name">
                    <?= $items[0]['name' . $lang] ?>
                </h3>
                <div class="nw-first-desc">
                    <?= $items[0]['desc' . $lang] ?>
                </div>
                <a class="nw-first-btn" href="<?= $items[0]['slug'. $lang] ?>" title="<?= $items[0]['name' . $lang] ?>">
                    <span>
                        Đọc thêm
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="nw-list">
        <?php foreach($items as $k => $v): 
            if($k > 0):
        ?>
            <div class="nw-item animate__zoomIn wow" data-wow-iteration="1" data-wow-duration="0.8s">
                <a class="nw-thumbnail hover_sang2 text-decoration-none scale-img" href="<?= $v['slug'. $lang] ?>" title="<?= $v['name' . $lang] ?>">
                    <?php if(!empty($v['photo'])): ?>
                        <img class="lazy w-100" data-src="<?= THUMBS ?>/<?= $thumb2 ?>/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                    <?php else: ?>
                        <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; background-color: oklch(96.7% .003 264.542); aspect-ratio: 16/9; object-fit: contain;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" stroke="#000" stroke-linejoin="round" opacity=".3" fill="none" stroke-width="3.7"><rect x="16" y="16" width="56" height="56" rx="6"/><path d="m16 58 16-18 32 32"/><circle cx="53" cy="35" r="7"/></svg>
                        </div>
                    <?php endif ?>
                </a>
                <div class="nw-info">
                    <div class="nw-box-time">
                        <p class="nw-time mb-0">
                            <svg style="animation: ring_phone 1.4s infinite;" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path><circle cx="7.5" cy="7.5" r=".5" fill="currentColor" style="width: 14px;"></circle></svg>
                            <span>
                                <?= $tag ?>
                            </span>
                        </p>
                        <div class="nw-date">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 14px;"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                            </span>
                            <span>
                                <?= date("d/m/Y", $v['date_created']) ?>
                            </span>
                        </div>
                    </div>
                    <h3 class="nw-name">
                        <?= $v['name' . $lang] ?>
                    </h3>
                    <div class="nw-desc">
                        <?= $v['desc' . $lang] ?>
                    </div>
                    <a class="nw-btn" href="<?= $v['slug'. $lang] ?>" title="<?= $v['name' . $lang] ?>">
                        <span>
                            Đọc thêm
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        <?php 
            endif;
            endforeach; 
        ?>
    </div>
<?php endif ?>

