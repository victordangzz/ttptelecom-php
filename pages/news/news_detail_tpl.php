<div class="btn-back-news">
  <?php if(isset($isListPage) && $isListPage === true): ?>
    <a class="link-btn-new" href="<?= $type == 'ho-tro' ? '' : $type ?>" title="Quay lại">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 14px;"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg>
      Quay lại danh sách
    </a>
  <?php endif ?>
  <?php if(!empty($rowDetail['content'.$lang])): ?>
    <div class="meta-toc">
      <div class="box-readmore">
        <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
      </div>
    </div>
    <div class="new-detail">
      <div class="new-detail-left">
        <h1 class="new-title">
          <?= $rowDetail['name'.$lang] ?>
        </h1>
        <div class="new-content">
          <?= htmlspecialchars_decode($rowDetail['content'.$lang]) ?>
        </div>
        <div class="share sh-custom">
          <b><?=chiase?>:</b>
          <div class="social-plugin w-clear">
            <?php
              $params = array();
              $params['oaid'] = $optsetting['oaidzalo'];
              echo $func->markdown('social/share', $params);
            ?>
          </div>
        </div>
      </div>
      <div class="new-detail-right">
        <h3 class="new-related">Bài viết liên quan</h3>
        <div class="new-related-list">
          <?php foreach($news as $v): ?>
            <div class="new-related-item">
              <a href="<?= $v['slug'.$lang] ?>" class="new-related-thumb scale-img text-decoration-none" title="<?= $v['name'.$lang] ?>">
                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/100x70x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/100x70x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
              </a>
              <div class="new-related-art">
                <a href="<?= $v['slug'.$lang] ?>" class="new-related-name text-decoration-none" title="<?= $v['name'.$lang] ?>"><?= $v['name'.$lang] ?></a>
                <p class="new-related-desc truncate"><?= $v['desc'.$lang] ?></p>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  <?php else: ?>
    <div class="alert alert-warning w-100" role="alert">
      <strong><?=noidungdangcapnhat?></strong>
    </div>
  <?php endif ?>
</div>