<div class="title-main">
  <span class="aurora">
    <?= $titleMain ?>
  </span>
</div>
<span class="sub-title-main">
    Hướng dẫn chi tiết cách đặt dịch vụ và sử dụng các tính năng của Fixhub
</span>

<?php if(!empty($guide_list)): ?>
    <div class="guide-tab-list">
        <?php 
            foreach($guide_list as $k => $v): 
            $themes = ["HISTORY-DOM", "GRID-DOM"];
        ?>
        <p class="guide-tab-item" data-id="<?= $v['id'] ?>" data-theme="<?= $themes[$k] ?>">
            <?= $v['name'.$lang] ?>     
        </p>
        <?php endforeach ?>
    </div>
    <div class="load_guide"></div>
<?php endif ?>

<?php if($msd): ?>
    <div class="msd">
        <p class="msd-title">Mẹo sử dụng hiệu quả</p>
        <div class="msd-list">
            <?php foreach($msd as $v): ?>
                <div class="msd-item">
                    <p class="msd-name line-clamp">
                        <?= $v['name'.$lang] ?>
                    </p>
                    <p class="msd-desc line-clamp">
                        <?= $v['desc'.$lang] ?>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>

<?php if($chtg): ?>
    <div class="chtg">
        <p class="chtg-title">Câu hỏi thường gặp</p>
        <div class="chtg-list">
            <?php foreach($chtg as $v): ?>
                <div class="chtg-item">
                    <p class="chtg-name line-clamp">
                        <?= $v['name'.$lang] ?>
                    </p>
                    <p class="chtg-desc line-clamp">
                        <?= $v['desc'.$lang] ?>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>

