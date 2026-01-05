<div class="animated-gradient-subtitle-wp ">
  <span class="animated-gradient-subtitle">
  </span>
  <div class="animated-gradient-subtitle-flex">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path><path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path></svg>
      <span class="animated-gradient-subtitle-text">
          Ưu đãi đặc biệt
      </span>
  </div>
</div>
<div class="title-main">
  <span class="aurora">
    <?= $titleMain ?>
  </span>
</div>
<span class="sub-title-main" style="margin-bottom: 30px;">
    Đừng bỏ lỡ các chương trình ưu đãi hấp dẫn từ Fixhub
</span>

<div class="campaigns-ddr">
  <span class="campaigns-ddr-bar"></span>
  <h2 class="campaigns-ddr-title">Đang diễn ra</h2>
</div>

<?php if(!empty($data_dangdienra)): ?>
  <section class="ddr">
    <div class="owl-page owl-dangdienra owl-carousel owl-theme" data-items="screen:0|items:1|margin:10,screen:425|items:1|margin:10,screen:575|items:2|margin:10,screen:767|items:3|margin:10,screen:991|items:3|margin:20,screen:1199|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="500" data-autoplaytimeout="3500" data-dots="0" data-nav="0" data-navcontainer="">
      <?php foreach($data_dangdienra as $k => $v): 
        ?>
        <div class="ddr-item">
          <picture class="ddr-thumbnail scale-img">
            <?php if(!empty($v['photo'])): ?>
              <img class="lazy w-100" data-src="<?= THUMBS ?>/476x268x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
            <?php else: ?>
              <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; background-color: oklch(96.7% .003 264.542); aspect-ratio: 16/9;">
                <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" stroke="#000" stroke-linejoin="round" opacity=".3" fill="none" stroke-width="3.7"><rect x="16" y="16" width="56" height="56" rx="6"/><path d="m16 58 16-18 32 32"/><circle cx="53" cy="35" r="7"/></svg>
              </div>
            <?php endif ?>
          </picture>
          <?php 
            if(!empty($v['status'])): 
              $sst_arr = explode(",",$v['status']);
              $year = date('Y');
          ?>
            <span class="ddr-sst" style="color: <?= in_array('hot', $sst_arr, true) ? 'oklch(55.3% .195 38.402)' : (
              in_array('flashsale', $sst_arr, true) ? 'oklch(49.6% .265 301.924)' : 'oklch(50.5% .213 27.518)'
            ) ?>; background-color: <?= in_array('hot', $sst_arr, true) ? 'oklch(95.4% .038 75.164)' : (
              in_array('flashsale', $sst_arr, true) ? 'oklch(94.6% .033 307.174)' : 'oklch(93.6% .032 17.717)'
            ) ?>; border-color: <?= in_array('hot', $sst_arr, true) ? 'oklch(83.7% .128 66.29)' : (
              in_array('flashsale', $sst_arr, true) ? 'oklch(82.7% .119 306.383)' : 'oklch(80.8% .114 19.571)'
            ) ?>;">
              <?= in_array('hot', $sst_arr, true)
                ? 'Hot'
                : (
                in_array('tet', $sst_arr, true)
                  ? "Tết {$year}"
                  : (
                    in_array('flashsale', $sst_arr, true)
                      ? 'Flash Sale'
                      : ''
                  )
                ) 
              ?>
            </span>
            <?php endif ?>
  
            <?php if(!empty($v['percent'])):  ?>
              <span class="ddr-percent">
                <?= $v['percent'] ?>
              </span>
            <?php endif ?>
            <article class="ddr-info">
              <span class="ddr-slogan line-clamp">
                <?= $v['slogan'.$lang] ?>
              </span>
              <h3 class="ddr-name">
                <?= $v['name'.$lang] ?>
              </h3>
              <div class="ddr-desc truncate">
                <?= $v['desc'.$lang] ?>
              </div>
              <p class="ddr-date">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </span>
                <?= date("d/m/Y h:i A", $v['date_created']) ?>
              </p>
              <a href="<?= $v['slug'.$lang] ?>" class="ddr-slug text-decoration-none" title="Xem chi tiết">
                Xem chi tiết
              </a>
            </article>
  
        </div>
      <?php endforeach ?>
    </div>
  </section>
<?php endif ?>

<div class="campaigns-sdr">
  <span class="campaigns-sdr-bar"></span>
  <h2 class="campaigns-ddr-title">Sắp diễn ra</h2>
</div>

<?php if(!empty($data_sapdienra)): ?>
  <section class="ddr">
    <div class="owl-page owl-sapdienra owl-carousel owl-theme" data-items="screen:0|items:1|margin:10,screen:425|items:1|margin:10,screen:575|items:1|margin:10,screen:767|items:1|margin:10,screen:991|items:2|margin:20,screen:1199|items:2|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="500" data-autoplaytimeout="3500" data-dots="0" data-nav="0" data-navcontainer="">
      <?php foreach($data_sapdienra as $k => $v): 
        ?>
        <div class="ddr-item sdr-flex">
          <picture class="ddr-thumbnail sdr-pic scale-img">
            <?php if(!empty($v['photo'])): ?>
              <img class="lazy w-100" data-src="<?= THUMBS ?>/476x268x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
            <?php else: ?>
              <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; background-color: oklch(96.7% .003 264.542);">
                <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" stroke="#000" stroke-linejoin="round" opacity=".3" fill="none" stroke-width="3.7"><rect x="16" y="16" width="56" height="56" rx="6"/><path d="m16 58 16-18 32 32"/><circle cx="53" cy="35" r="7"/></svg>
              </div>
            <?php endif ?>
          </picture>
          <?php 
            if(!empty($v['status'])): 
              $sst_arr = explode(",",$v['status']);
              $year = date('Y');
          ?>
            <span class="ddr-sst" style="background-color: oklch(93.2% .032 255.585);
              border-color: oklch(80.9% .105 251.813);
              color: oklch(48.8% .243 264.376);">
              Sắp diễn ra
            </span>
            <?php endif ?>
            <article class="ddr-info sdr-info">
              <?php if(!empty($v['percent'])):  ?>
                <span class="sdr-percent">
                  <?= $v['percent'] ?>
                </span>
              <?php endif ?>
              <h3 class="sdr-name">
                <?= $v['name'.$lang] ?>
              </h3>
              <div class="sdr-desc truncate">
                <?= $v['desc'.$lang] ?>
              </div>
              <p class="ddr-date">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                </span>
                <?= date("d/m/Y h:i A", $v['date_created']) ?>
              </p>
              <a href="<?= $v['slug'.$lang] ?>" class="sdr-slug text-decoration-none" title="Đặt lịch nhắc">
                Đặt lịch nhắc
              </a>
            </article>
        </div>
      <?php endforeach ?>
    </div>
  </section>
<?php endif ?>

<!-- Promo Subscribe Card (HTML + CSS thuần) -->
<div class="promo-card">
  <div class="promo-inner">
    <svg
      class="promo-icon"
      xmlns="http://www.w3.org/2000/svg"
      width="48"
      height="48"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
      aria-hidden="true"
    >
      <rect x="3" y="8" width="18" height="4" rx="1"></rect>
      <path d="M12 8v13"></path>
      <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
      <path
        d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"
      ></path>
    </svg>

    <h2 class="promo-title">Không bỏ lỡ ưu đãi nào!</h2>
    <p class="promo-desc">
      Đăng ký nhận thông báo để cập nhật sớm nhất các chương trình khuyến mãi hấp dẫn
    </p>

    <form class="promo-form validation-newsletter" validation-newsletter action="" method="POST" novalidate>
      <label class="sr-only" for="promo-email">Email</label>
      <input
        id="promo-email"
        class="promo-input form-control"
        type="email"
        name="dataNewsletter[email]"
        placeholder="Nhập email của bạn"
        autocomplete="email"
        required
      />
      <input 
        type="submit"
        class="promo-btn"
        name="submit-newsletter"
        value="Đăng ký"
        disabled
      />
      <input type="hidden" name="dataNewsletter[type]" value="dangkynhantin"/>
      <input type="hidden" name="dataNewsletter[date_created]" value="<?= time() ?>"/>
      <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter"/>
    </form>
  </div>
</div>
