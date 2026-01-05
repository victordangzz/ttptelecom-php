<?php
include "config.php";
$type = "hesinhthai";
$id = (isset($_POST['id']) && !empty($_POST['id'])) ? htmlspecialchars($_POST['id']) : 0;
$color = (isset($_POST['color']) && !empty($_POST['color'])) ? htmlspecialchars($_POST['color']) : "oklch(52.7% 0.154 150.069)";
$bg = (isset($_POST['bg']) && !empty($_POST['bg'])) ? htmlspecialchars($_POST['bg']) : "oklch(96.2% .044 156.743)";
$colour = (isset($_POST['colour']) && !empty($_POST['colour'])) ? htmlspecialchars($_POST['colour']) : "green";
$fetch_data = $d->rawQueryOne("select slogan$lang, name$lang, desc$lang, photo from #_news where type = ? and id = ? and find_in_set('hienthi',status)", array($type, $id));
$thumbnail = "484x860x1";
?>
<div class="ecosys-main">
    <div class="ecosys-left animate__zoomIn wow" data-wow-iteration="1" data-wow-duration="0.8s">
        <span class="ecosys-slogan" style="color: <?= $color ?>; background-color: <?= $bg ?>;">
            <?= $fetch_data['slogan'.$lang] ?>
        </span>
        <div class="ecosys-info <?= $colour ?>">
            <?= htmlspecialchars_decode($fetch_data['desc'.$lang]) ?>
        </div>
    </div>
    <div class="ecosys-right animate__zoomIn wow" data-wow-iteration="1" data-wow-duration="0.8s">
        <a data-fancybox="ecosys-fancy" href="<?= UPLOAD_NEWS_L . $fetch_data['photo'] ?>" class="ecosys-thumbnail <?= $colour ?>" style="border: 2px solid <?= $bg ?>; text-decoration-none;">
            <?php if(!empty($fetch_data['photo'])): ?>
              <img class="lazy" data-src="<?= THUMBS ?>/<?= $thumbnail ?>/<?= UPLOAD_NEWS_L . $fetch_data['photo'] ?>" alt="<?= $fetch_data['name' . $lang] ?>" title="<?= $fetch_data['name' . $lang] ?>" />
            <?php else: ?>
              <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; background-color: oklch(96.7% .003 264.542); aspect-ratio: 9/16;">
                <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" stroke="#000" stroke-linejoin="round" opacity=".3" fill="none" stroke-width="3.7"><rect x="16" y="16" width="56" height="56" rx="6"/><path d="m16 58 16-18 32 32"/><circle cx="53" cy="35" r="7"/></svg>
              </div>
            <?php endif ?>
        </a>
    </div>
</div>