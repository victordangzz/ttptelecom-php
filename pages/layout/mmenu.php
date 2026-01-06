<!-- Mobile Menu Sidebar -->
<div class="l-mobile-menu" id="mobileMenu">
  <div class="l-mobile-menu__overlay" id="menuOverlay"></div>

  <div class="l-mobile-menu__sidebar">
    <!-- Header của mobile menu -->
    <div class="l-mobile-menu__header">
      <div class="l-mobile-menu__title">Menu</div>
      <button class="l-mobile-menu__close" id="menuClose" aria-label="Close menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>

    <!-- Menu items -->
    <nav class="l-mobile-menu__nav">
      <ul class="l-mobile-menu__list">
        <li class="l-mobile-menu__item">
          <a href="<?= ASSET ?>" class="l-mobile-menu__link <?= (!isset($source) || $source == '' || $source == 'index') ? 'active' : '' ?>">
            Trang Chủ
          </a>
        </li>
        <li class="l-mobile-menu__item">
          <a href="<?= ASSET ?>dich-vu" class="l-mobile-menu__link <?= (isset($source) && $source == 'dich-vu') ? 'active' : '' ?>">
            Dịch Vụ
          </a>
        </li>
        <li class="l-mobile-menu__item">
          <a href="<?= ASSET ?>giai-phap" class="l-mobile-menu__link <?= (isset($source) && $source == 'giai-phap') ? 'active' : '' ?>">
            Giải Pháp
          </a>
        </li>
        <li class="l-mobile-menu__item">
          <a href="<?= ASSET ?>gioi-thieu" class="l-mobile-menu__link <?= (isset($source) && $source == 'gioi-thieu') ? 'active' : '' ?>">
            Giới Thiệu
          </a>
        </li>
        <li class="l-mobile-menu__item">
          <a href="<?= ASSET ?>lien-he" class="l-mobile-menu__link <?= (isset($source) && $source == 'lien-he') ? 'active' : '' ?>">
            Liên Hệ
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<!-- JavaScript cho Mobile Menu -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const menuClose = document.getElementById('menuClose');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuOverlay = document.getElementById('menuOverlay');
    const body = document.body;

    // Mở menu
    if (menuToggle) {
      menuToggle.addEventListener('click', function() {
        mobileMenu.classList.add('active');
        body.style.overflow = 'hidden';
      });
    }

    // Đóng menu khi click nút close
    if (menuClose) {
      menuClose.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        body.style.overflow = '';
      });
    }

    // Đóng menu khi click overlay
    if (menuOverlay) {
      menuOverlay.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        body.style.overflow = '';
      });
    }

    // Đóng menu khi click vào link
    const mobileMenuLinks = document.querySelectorAll('.l-mobile-menu__link');
    mobileMenuLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        body.style.overflow = '';
      });
    });

    // Đóng menu khi nhấn ESC
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        mobileMenu.classList.remove('active');
        body.style.overflow = '';
      }
    });
  });
</script>