<header class="l-header" id="header">
  <div class="l-header__inner">
    <!-- Logo bên trái -->
    <div class="l-header__left">
      <a class="l-header__logo" href="<?= ASSET ?>" title="<?= $setting['name' . $lang] ?? 'TTP Telecom' ?>">
        <img onerror="this.src='<?= THUMBS ?>/99x70x1/assets/images/noimage.png';"
             src="<?= THUMBS ?>/99x70x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>"
             alt="<?= $setting['name' . $lang] ?>"
             title="<?= $setting['name' . $lang] ?>" />
      </a>
    </div>

    <!-- Menu bên phải -->
    <nav class="l-header__nav">
      <ul class="l-header__nav-list">
        <li class="l-header__nav-item">
          <a href="<?= ASSET ?>" class="l-header__nav-link <?= (!isset($source) || $source == '' || $source == 'index') ? 'active' : '' ?>">Trang Chủ</a>
        </li>
        <li class="l-header__nav-item">
          <a href="<?= ASSET ?>dich-vu" class="l-header__nav-link <?= (isset($source) && $source == 'dich-vu') ? 'active' : '' ?>">Dịch Vụ</a>
        </li>
        <li class="l-header__nav-item">
          <a href="<?= ASSET ?>giai-phap" class="l-header__nav-link <?= (isset($source) && $source == 'giai-phap') ? 'active' : '' ?>">Giải Pháp</a>
        </li>
        <li class="l-header__nav-item">
          <a href="<?= ASSET ?>gioi-thieu" class="l-header__nav-link <?= (isset($source) && $source == 'gioi-thieu') ? 'active' : '' ?>">Giới Thiệu</a>
        </li>
        <li class="l-header__nav-item">
          <a href="<?= ASSET ?>lien-he" class="l-header__nav-link <?= (isset($source) && $source == 'lien-he') ? 'active' : '' ?>">Liên Hệ</a>
        </li>
      </ul>
    </nav>
  </div>
</header>