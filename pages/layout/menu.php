<!-- Header -->
<header class="header" id="header">
  <div class="container">
    <div class="header-content">
      <!-- Logo -->
      <a href="<?= ASSET ?>" class="logo" title="<?= $setting['name' . $lang] ?? 'TTP Telecom' ?>">
        <span class="logo-ttp">TTP</span>
        <span class="logo-telecom">Telecom</span>
      </a>

      <!-- Desktop Navigation -->
      <nav class="nav-desktop">
        <a href="<?= ASSET ?>" class="nav-link <?= (!isset($source) || $source == '' || $source == 'index') ? 'active' : '' ?>">Trang Chủ</a>
        <a href="<?= ASSET ?>gioi-thieu" class="nav-link <?= (isset($source) && $source == 'gioi-thieu') ? 'active' : '' ?>">Giới Thiệu</a>
        <a href="<?= ASSET ?>dich-vu" class="nav-link <?= (isset($source) && $source == 'dich-vu') ? 'active' : '' ?>">Dịch Vụ</a>
        <a href="<?= ASSET ?>giai-phap" class="nav-link <?= (isset($source) && $source == 'giai-phap') ? 'active' : '' ?>">Giải Pháp</a>
        <a href="<?= ASSET ?>lien-he" class="nav-link <?= (isset($source) && $source == 'lien-he') ? 'active' : '' ?>">Liên Hệ</a>
      </nav>

      <!-- CTA Button -->
      <button class="btn-cta" onclick="window.location.href='<?= ASSET ?>lien-he'">Liên Hệ Ngay</button>

      <!-- Mobile Menu Button -->
      <button class="mobile-menu-btn" id="mobileMenuBtn">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <nav class="mobile-nav">
      <a href="<?= ASSET ?>" class="mobile-nav-link <?= (!isset($source) || $source == '' || $source == 'index') ? 'active' : '' ?>">Trang Chủ</a>
      <a href="<?= ASSET ?>gioi-thieu" class="mobile-nav-link <?= (isset($source) && $source == 'gioi-thieu') ? 'active' : '' ?>">Giới Thiệu</a>
      <a href="<?= ASSET ?>dich-vu" class="mobile-nav-link <?= (isset($source) && $source == 'dich-vu') ? 'active' : '' ?>">Dịch Vụ</a>
      <a href="<?= ASSET ?>giai-phap" class="mobile-nav-link <?= (isset($source) && $source == 'giai-phap') ? 'active' : '' ?>">Giải Pháp</a>
      <a href="<?= ASSET ?>lien-he" class="mobile-nav-link <?= (isset($source) && $source == 'lien-he') ? 'active' : '' ?>">Liên Hệ</a>
      <button class="btn-cta mobile" onclick="window.location.href='<?= ASSET ?>lien-he'">Liên Hệ Ngay</button>
    </nav>
  </div>
</header>

<!-- JavaScript cho Header -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const body = document.body;

    // Scroll effect cho header
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    // Toggle mobile menu
    if (mobileMenuBtn) {
      mobileMenuBtn.addEventListener('click', function() {
        mobileMenuBtn.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
      });
    }

    // Đóng menu khi click vào link
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    mobileNavLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        mobileMenuBtn.classList.remove('active');
        mobileMenu.classList.remove('active');
        body.style.overflow = '';
      });
    });

    // Đóng menu khi nhấn ESC
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        mobileMenuBtn.classList.remove('active');
        mobileMenu.classList.remove('active');
        body.style.overflow = '';
      }
    });
  });
</script>
