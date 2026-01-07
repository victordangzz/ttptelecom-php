<?php
/* Parse options từ JSON */
$hero_options = !empty($hero['options']) ? json_decode($hero['options'], true) : array();

// About section - lấy item đầu tiên
$about = !empty($about_section) && count($about_section) > 0 ? $about_section[0] : null;
$about_options = !empty($about['options']) ? json_decode($about['options'], true) : array();
?>

<!-- Hero Section -->
<?php if (!empty($hero)) { ?>
  <section class="hero">
    <div class="hero-background">
      <!-- Base gradient -->
      <div class="gradient-base"></div>

      <!-- Grid pattern -->
      <div class="tech-grid"></div>

      <!-- Hexagon pattern -->
      <div class="hexagon-pattern"></div>

      <!-- Circuit lines (SVG) -->
      <svg class="circuit-lines" xmlns="http://www.w3.org/2000/svg">
        <line class="circuit-line" x1="10%" y1="20%" x2="40%" y2="60%" />
        <line class="circuit-line" x1="60%" y1="30%" x2="90%" y2="70%" />
        <line class="circuit-line" x1="20%" y1="80%" x2="50%" y2="40%" />
        <line class="circuit-line" x1="70%" y1="15%" x2="85%" y2="85%" />
        <line class="circuit-line" x1="15%" y1="50%" x2="45%" y2="25%" />
        <line class="circuit-line" x1="55%" y1="75%" x2="80%" y2="45%" />
        <line class="circuit-line" x1="30%" y1="10%" x2="65%" y2="55%" />
        <line class="circuit-line" x1="75%" y1="60%" x2="95%" y2="20%" />
      </svg>

      <!-- Network nodes -->
      <div class="network-nodes">
        <?php for ($i = 0; $i < 20; $i++) { ?>
          <div class="node"></div>
        <?php } ?>
      </div>

      <!-- Glowing orbs -->
      <div class="glow-orb glow-orb-1"></div>
      <div class="glow-orb glow-orb-2"></div>

      <!-- Data flow particles -->
      <div class="data-flow">
        <?php for ($i = 0; $i < 8; $i++) { ?>
          <div class="flow-particle"></div>
        <?php } ?>
      </div>

      <!-- Scan line -->
      <div class="scan-line-effect"></div>

      <div class="gradient-overlay"></div>
    </div>

    <div class="container">
      <div class="hero-content">
        <div class="badge">
          <span class="pulse"></span>
          <span><?= $hero['slogan' . $lang] ?></span>
        </div>

        <h1 class="hero-title">
          <?= nl2br($hero['name' . $lang]) ?>
        </h1>

        <p class="hero-description">
          <?= $hero['desc' . $lang] ?>
        </p>

        <div class="hero-buttons">
          <button class="btn-outline" onclick="window.location.href='<?= ASSET ?><?= !empty($hero_options['button1_link']) ? $hero_options['button1_link'] : 'gioi-thieu' ?>'">
            <?= !empty($hero_options['button1_text']) ? $hero_options['button1_text'] : 'Tìm Hiểu về chúng tôi' ?>
          </button>
          <button class="btn-primary" onclick="window.location.href='<?= ASSET ?><?= !empty($hero_options['button2_link']) ? $hero_options['button2_link'] : 'lien-he' ?>'">
            <?= !empty($hero_options['button2_text']) ? $hero_options['button2_text'] : 'Liên hệ ngay' ?>
          </button>
        </div>

        <div class="scroll-indicator">
          <div class="chevron-down">▼</div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<!-- About Section -->
<?php if (!empty($about)) { ?>
  <section class="about" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-image">
          <div class="tech-frame"></div>
          <div class="tech-frame-inner"></div>
          <div class="corner-tl"></div>
          <div class="corner-tr"></div>
          <div class="corner-bl"></div>
          <div class="corner-br"></div>

          <?php if (!empty($about['photo'])) { ?>
            <img src="<?= THUMBS ?>/600x800x1/<?= UPLOAD_NEWS_L . $about['photo'] ?>"
              alt="<?= $about['name' . $lang] ?>"
              title="<?= $about['name' . $lang] ?>"
              style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
          <?php } else { ?>
            <div class="image-placeholder">
              <div class="no-image-icon">📷</div>
              <span class="no-image-text">NO IMAGE</span>
              <p class="no-image-subtext">AVAILABLE</p>
            </div>
          <?php } ?>

          <div class="floating-badge">
            <svg
              width="32"
              height="32"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2">
              <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
              <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
              <line x1="6" y1="6" x2="6.01" y2="6"></line>
              <line x1="6" y1="18" x2="6.01" y2="18"></line>
            </svg>
          </div>

          <div class="dot dot-1"></div>
          <div class="dot dot-2"></div>
        </div>

        <div class="about-content">
          <div class="section-badge">
            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2">
              <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
              <rect x="9" y="9" width="6" height="6"></rect>
              <line x1="9" y1="1" x2="9" y2="4"></line>
              <line x1="15" y1="1" x2="15" y2="4"></line>
              <line x1="9" y1="20" x2="9" y2="23"></line>
              <line x1="15" y1="20" x2="15" y2="23"></line>
              <line x1="20" y1="9" x2="23" y2="9"></line>
              <line x1="20" y1="14" x2="23" y2="14"></line>
              <line x1="1" y1="9" x2="4" y2="9"></line>
              <line x1="1" y1="14" x2="4" y2="14"></line>
            </svg>
            <span><?= $about['slogan' . $lang] ?></span>
          </div>

          <h2 class="section-title">
            <?= $about['name' . $lang] ?>
          </h2>

          <div class="text-content">
            <?= htmlspecialchars_decode($about['desc' . $lang]) ?>
          </div>

          <?php if (!empty($about['content' . $lang])) { ?>
            <div class="text-content">
              <?= htmlspecialchars_decode($about['content' . $lang]) ?>
            </div>
          <?php } ?>

          <div class="stats-grid">
            <div class="stat-card stat-primary">
              <div class="stat-number"><?= !empty($about_options['stat1_number']) ? $about_options['stat1_number'] : '10+' ?></div>
              <p class="stat-label"><?= !empty($about_options['stat1_label']) ? $about_options['stat1_label'] : 'Năm kinh nghiệm' ?></p>
            </div>
            <div class="stat-card stat-secondary">
              <div class="stat-number"><?= !empty($about_options['stat2_number']) ? $about_options['stat2_number'] : '1700+' ?></div>
              <p class="stat-label"><?= !empty($about_options['stat2_label']) ? $about_options['stat2_label'] : 'Dự án hoàn thành' ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<!-- Services Section -->
<section class="services" id="services">
  <div class="container">
    <?php
    // Tách header và service cards
    $services_header = null;
    $service_cards = array();

    if (!empty($services)) {
      foreach ($services as $item) {
        if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
          $services_header = $item;
        } else {
          $service_cards[] = $item;
        }
      }
    }
    ?>

    <!-- Header từ item có slogan="HEADER" -->
    <?php if ($services_header) { ?>
      <div class="section-header">
        <div class="section-badge">
          <svg
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2">
            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
            <polyline points="2 17 12 22 22 17"></polyline>
            <polyline points="2 12 12 17 22 12"></polyline>
          </svg>
          <span><?= $services_header['name' . $lang] ?></span>
        </div>

        <h2 class="section-title">
          <?= $services_header['desc' . $lang] ?>
        </h2>
      </div>
    <?php } ?>

    <!-- Service cards -->
    <div class="services-grid">
      <?php
      if (!empty($service_cards)) {
        $color_class = array('primary', 'secondary');
        $i = 0;
        foreach ($service_cards as $service) {
          $class = $color_class[$i % 2];
      ?>
          <div class="service-card <?= $class ?>">
            <div class="corner-accent tl"></div>
            <div class="corner-accent tr"></div>
            <div class="corner-accent bl"></div>
            <div class="corner-accent br"></div>

            <div class="service-icon">
              <?php if (!empty($service['photo'])) { ?>
                <img src="<?= UPLOAD_NEWS_L . $service['photo'] ?>"
                  alt="<?= $service['name' . $lang] ?>"
                  style="width: 28px; height: 28px; filter: brightness(0) invert(1);">
              <?php } else { ?>
                <!-- Default SVG icon -->
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2">
                  <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                  <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                  <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                  <line x1="12" y1="20" x2="12.01" y2="20"></line>
                </svg>
              <?php } ?>
            </div>
            <h3 class="service-title"><?= $service['name' . $lang] ?></h3>
            <p class="service-description">
              <?= $service['desc' . $lang] ?>
            </p>
            <div class="pulse-dot"></div>
          </div>
      <?php
          $i++;
        }
      }
      ?>
    </div>

    <div class="section-cta">
      <button class="btn-primary" onclick="window.location.href='<?= ASSET ?>dich-vu'">
        <span>Xem chi tiết dịch vụ</span>
        <span class="arrow">→</span>
      </button>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose" id="solutions">
  <div class="container">
    <?php
    // Tách header và feature items
    $why_header = null;
    $feature_items = array();

    if (!empty($features)) {
      foreach ($features as $item) {
        if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
          $why_header = $item;
        } else {
          $feature_items[] = $item;
        }
      }
    }
    ?>

    <!-- Header từ item có slogan="HEADER" -->
    <?php if ($why_header) { ?>
      <div class="section-header">
        <div class="section-badge">
          <svg
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
            <line x1="9" y1="9" x2="9.01" y2="9"></line>
            <line x1="15" y1="9" x2="15.01" y2="9"></line>
          </svg>
          <span><?= $why_header['name' . $lang] ?></span>
        </div>

        <h2 class="section-title">
          <?= $why_header['desc' . $lang] ?>
        </h2>
      </div>
    <?php } ?>

    <!-- Feature items -->
    <div class="features-grid">
      <?php
      if (!empty($feature_items)) {
        foreach ($feature_items as $feature) {
      ?>
          <div class="feature-card">
            <div class="corner-bracket tl"></div>
            <div class="corner-bracket tr"></div>
            <div class="corner-bracket bl"></div>
            <div class="corner-bracket br"></div>
            <div class="scan-line"></div>

            <div class="feature-icon">
              <?php if (!empty($feature['photo'])) { ?>
                <img src="<?= UPLOAD_NEWS_L . $feature['photo'] ?>"
                  alt="<?= $feature['name' . $lang] ?>"
                  style="width: 32px; height: 32px; filter: brightness(0) invert(1);">
              <?php } else { ?>
                <!-- Default SVG icon -->
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2">
                  <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                  <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                  <line x1="6" y1="6" x2="6.01" y2="6"></line>
                  <line x1="6" y1="18" x2="6.01" y2="18"></line>
                </svg>
              <?php } ?>
              <div class="pulse-ring"></div>
            </div>
            <h3 class="feature-title"><?= $feature['name' . $lang] ?></h3>
            <p class="feature-description">
              <?= $feature['desc' . $lang] ?>
            </p>
            <div class="connection-dots">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
</section>