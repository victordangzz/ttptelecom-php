<?php if (count($slider)) : ?>
  <div class="slideshow">
    <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0" data-nav="1" data-navtext="<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>" data-navcontainer=".control-slideshow">
      <?php foreach ($slider as $v) : ?>
        <div class="slideshow-item">
          <div class="hero-foresta__overlay"></div>
          <div class="slideshow-image">
            <picture>
              <source media="(max-width: 768px)" srcset="thumbs/768x768x1/<?=UPLOAD_PHOTO_L.$v['photo']?>"/>
              <source media="(max-width: 576px)" srcset="thumbs/576x576x1/<?=UPLOAD_PHOTO_L.$v['photo']?>"/>
              <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1920x880x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/1920x880x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
            </picture>
          </div>
          <div class="hero-foresta__content wrap-content">
            <div class="hero-foresta__text animate__zoomIn wow" data-wow-iteration="1" data-wow-duration="0.8s">
              <p class="hero-foresta__title truncate"><?=$v['name'.$lang]?></p>
              <h1 class="hero-foresta__tagline truncate">
                <?=$v['desc'.$lang]?>
              </h1>
              <p class="hero-foresta__desc text-split">
                <?=$v['content'.$lang]?>
              </p>
              <div class="hero-foresta__actions">
                <a href="ve-chung-toi" class="btn btn-foresta-primary">Xem thêm về chúng tôi</a>
                <a href="<?= $optsetting['apple_store'] ?>" target="_blank" class="btn btn-foresta-outline">Tải ứng dụng</a>
              </div>
              <div class="mouse"><span></span></div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="control-slideshow control-owl transition"></div>
  </div>
<?php endif ?>