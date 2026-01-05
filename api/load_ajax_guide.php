<?php
include "config.php";
const THEM_DEFAULT = "HISTORY-DOM";
const TYPE = "huong-dan-su-dung";
$id = (isset($_POST['id']) && !empty($_POST['id'])) ? htmlspecialchars($_POST['id']) : 0;
$theme = (isset($_POST['theme']) && !empty($_POST['theme'])) ? htmlspecialchars($_POST['theme']) : THEM_DEFAULT;
$fetch_data = $d->rawQuery("select slogan$lang, name$lang, desc$lang, photo, icon from #_news where type = ? and id_list = ? and find_in_set('hienthi',status)", array(TYPE, $id));
$thumbnail1 = "24x24x1";
$thumbnail2 = "484x860x1";
?>

<?php if($theme == THEM_DEFAULT): ?>
   <div class="guide-card">
       <div class="guide-default-list">
        <?php foreach($fetch_data as $v): ?>
            <div class="guide-default-item">
                <div class="guide-default-left">
                    <div class="guide-left">
                        <picture class="guide-icon">
                            <img 
                                class="lazy" 
                                onerror="this.src='<?= THUMBS ?>/<?= $thumbnail1 ?>/assets/images/noimage.png';" 
                                data-src="<?= THUMBS ?>/<?= $thumbnail1 ?>/<?= UPLOAD_NEWS_L . $v['icon'] ?>" 
                                alt="<?= $v['name' . $lang] ?>" 
                            />
                        </picture>
                        <div class="guide-vertical"></div>
                    </div>
                    <div class="guide-right">
                        <div class="guide-info">
                            <span class="guide-step"><?= $v['slogan'.$lang] ?></span>
                            <p class="guide-name"><?= $v['name'.$lang] ?></p>
                        </div>
                        <div class="guide-desc"><?= htmlspecialchars_decode($v['desc'.$lang]) ?></div>
                    </div>
                </div>
                <a data-fancybox="guide-fancy" href="<?= UPLOAD_NEWS_L . $v['photo'] ?>" class="text-decoration-none guide-default-right" title="<?= $v['name' . $lang] ?>" >
                    <?php if(!empty($v['photo'])): ?>
                        <img class="lazy" data-src="<?= THUMBS ?>/<?= $thumbnail2 ?>/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                    <?php else: ?>
                        <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; background-color: oklch(96.7% .003 264.542); aspect-ratio: 9/16; object-fit: contain;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" stroke="#000" stroke-linejoin="round" opacity=".3" fill="none" stroke-width="3.7"><rect x="16" y="16" width="56" height="56" rx="6"/><path d="m16 58 16-18 32 32"/><circle cx="53" cy="35" r="7"/></svg>
                        </div>
                    <?php endif ?>
                </a>
            </div>
        <?php endforeach ?>
    </div>
   </div> 
<?php else: ?>
   <div class="guide-card">
        <div class="guide-other-list">
            <?php foreach($fetch_data as $v): ?>
                <div class="guide-other-item">
                    <div class="guide-other-left">
                        <div class="guide-other-head">
                            <picture class="guide-icon">
                                <img 
                                    class="lazy" 
                                    onerror="this.src='<?= THUMBS ?>/<?= $thumbnail1 ?>/assets/images/noimage.png';" 
                                    data-src="<?= THUMBS ?>/<?= $thumbnail1 ?>/<?= UPLOAD_NEWS_L . $v['icon'] ?>" 
                                    alt="<?= $v['name' . $lang] ?>" 
                                />
                            </picture>
                            <p class="guide-name"><?= $v['name'.$lang] ?></p>
                        </div>
                        <div class="guide-other-desc">
                            <?= htmlspecialchars_decode($v['desc'.$lang]) ?>
                        </div>
                    </div>
                    <a data-fancybox="guide-fancy" href="<?= UPLOAD_NEWS_L . $v['photo'] ?>" class="text-decoration-none guide-other-right" title="<?= $v['name' . $lang] ?>" >
                        <?php if(!empty($v['photo'])): ?>
                            <img class="lazy" data-src="<?= THUMBS ?>/<?= $thumbnail2 ?>/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        <?php else: ?>
                            <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; background-color: oklch(96.7% .003 264.542); aspect-ratio: 9/16; object-fit: contain;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" stroke="#000" stroke-linejoin="round" opacity=".3" fill="none" stroke-width="3.7"><rect x="16" y="16" width="56" height="56" rx="6"/><path d="m16 58 16-18 32 32"/><circle cx="53" cy="35" r="7"/></svg>
                            </div>
                        <?php endif ?>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
   </div> 
<?php endif ?>