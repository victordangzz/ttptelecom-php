<?php
/* Parse options từ JSON */
$profile_options = !empty($profile['options']) ? json_decode($profile['options'], true) : array();
$cta_options = !empty($cta['options']) ? json_decode($cta['options'], true) : array();
?>

<!-- Page Hero -->
<?php if (!empty($hero)) { ?>
  <section class="page-hero">
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
      </svg>

      <!-- Network nodes -->
      <div class="network-nodes">
        <?php for ($i = 0; $i < 12; $i++) { ?>
          <div class="node"></div>
        <?php } ?>
      </div>

      <!-- Glowing orbs -->
      <div class="glow-orb glow-orb-1"></div>
      <div class="glow-orb glow-orb-2"></div>

      <!-- Scan line -->
      <div class="scan-line-effect"></div>

      <div class="gradient-overlay"></div>
    </div>

    <div class="container">
      <div class="page-hero-content">
        <div class="badge">
          <span class="pulse"></span>
          <span><?= $hero['slogan' . $lang] ?></span>
        </div>

        <h1 class="page-title">
          <?= $hero['name' . $lang] ?>
        </h1>

        <p class="page-description">
          <?= $hero['desc' . $lang] ?>
        </p>
      </div>
    </div>
  </section>
<?php } ?>
<!-- Company Profile -->
<?php if (!empty($profile)) { ?>
  <section class="company-profile">
    <div class="container">
      <div class="profile-grid">
        <div class="profile-content">
          <div class="section-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            <span><?= $profile['slogan' . $lang] ?></span>
          </div>

          <h2 class="section-title">
            <?= $profile['name' . $lang] ?>
          </h2>

          <div class="text-content">
            <?= htmlspecialchars_decode($profile['desc' . $lang]) ?>
          </div>

          <?php if (!empty($profile['content' . $lang])) { ?>
            <div class="text-content">
              <?= htmlspecialchars_decode($profile['content' . $lang]) ?>
            </div>
          <?php } ?>
        </div>

        <div class="profile-stats">
          <?php if (!empty($profile_options['stat1_value'])) { ?>
            <div class="stat-box large">
              <div class="stat-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <div class="stat-value"><?= $profile_options['stat1_value'] ?></div>
              <div class="stat-label"><?= $profile_options['stat1_label'] ?></div>
            </div>
          <?php } ?>

          <?php if (!empty($profile_options['stat2_value'])) { ?>
            <div class="stat-box large">
              <div class="stat-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                </svg>
              </div>
              <div class="stat-value"><?= $profile_options['stat2_value'] ?></div>
              <div class="stat-label"><?= $profile_options['stat2_label'] ?></div>
            </div>
          <?php } ?>

          <?php if (!empty($profile_options['stat3_value'])) { ?>
            <div class="stat-box large">
              <div class="stat-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
              </div>
              <div class="stat-value"><?= $profile_options['stat3_value'] ?></div>
              <div class="stat-label"><?= $profile_options['stat3_label'] ?></div>
            </div>
          <?php } ?>

          <?php if (!empty($profile_options['stat4_value'])) { ?>
            <div class="stat-box large">
              <div class="stat-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                  <path d="M2 17l10 5 10-5"></path>
                  <path d="M2 12l10 5 10-5"></path>
                </svg>
              </div>
              <div class="stat-value"><?= $profile_options['stat4_value'] ?></div>
              <div class="stat-label"><?= $profile_options['stat4_label'] ?></div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
<?php } ?>


<!-- About Stats Section -->
<?php if (!empty($about_stats)) {
  // Tách header và stat items
  $stats_header = null;
  $stat_items = array();

  foreach ($about_stats as $item) {
    if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
      $stats_header = $item;
    } else {
      $stat_items[] = $item;
    }
  }
?>
  <section class="about-stats-section">
    <div class="container">
      <?php if ($stats_header) { ?>
        <div class="section-header">
          <div class="section-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="18" y1="20" x2="18" y2="10"></line>
              <line x1="12" y1="20" x2="12" y2="4"></line>
              <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
            <span><?= $stats_header['name' . $lang] ?></span>
          </div>
          <h2 class="section-title">
            <?= !empty($stats_header['desc' . $lang]) ? $stats_header['desc' . $lang] : 'Con số ấn tượng' ?>
          </h2>
        </div>
      <?php } ?>

      <div class="stats-grid">
        <?php
        if (!empty($stat_items)) {
          $icons = array(
            '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
            '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>',
            '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>',
            '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>'
          );

          $i = 0;
          foreach ($stat_items as $stat) {
            $style_class = (strtolower($stat['slogan' . $lang]) == 'secondary') ? 'secondary' : 'primary';
            $icon = isset($icons[$i]) ? $icons[$i] : $icons[0];
        ?>
            <div class="stat-card <?= $style_class ?>">
              <div class="corner-bracket tl"></div>
              <div class="corner-bracket tr"></div>
              <div class="corner-bracket bl"></div>
              <div class="corner-bracket br"></div>

              <div class="stat-icon <?= $style_class ?>">
                <?= $icon ?>
              </div>

              <div class="stat-value <?= $style_class ?>"><?= $stat['name' . $lang] ?></div>
              <div class="stat-label"><?= $stat['desc' . $lang] ?></div>

              <div class="pulse-dot <?= $style_class == 'secondary' ? 'secondary' : '' ?>"></div>
            </div>
        <?php
            $i++;
          }
        }
        ?>
      </div>
    </div>
  </section>
<?php } ?>

<!-- Vision & Mission -->
<?php if (!empty($vision_mission)) { ?>
  <section class="vision-mission">
    <div class="container">
      <div class="vm-grid">
        <?php foreach ($vision_mission as $item) {
          $icon_type = strtolower($item['slogan' . $lang]);
        ?>
          <div class="vm-card">
            <div class="vm-icon">
              <?php if ($icon_type == 'vision') { ?>
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              <?php } else { ?>
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path d="M12 16v-4"></path>
                  <path d="M12 8h.01"></path>
                </svg>
              <?php } ?>
            </div>
            <h3 class="vm-title"><?= $item['name' . $lang] ?></h3>
            <p class="vm-description">
              <?= $item['desc' . $lang] ?>
            </p>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>

<!-- Core Values -->
<?php if (!empty($core_values)) {
  // Tách header và items
  $values_header = null;
  $value_items = array();

  foreach ($core_values as $item) {
    if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
      $values_header = $item;
    } else {
      $value_items[] = $item;
    }
  }
?>
  <section class="core-values">
    <div class="container">
      <?php if ($values_header) { ?>
        <div class="section-header">
          <div class="section-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg>
            <span><?= $values_header['name' . $lang] ?></span>
          </div>

          <h2 class="section-title">
            <?= $values_header['desc' . $lang] ?>
          </h2>
        </div>
      <?php } ?>

      <!-- Team Image -->
      <?php if (!empty($core_values_image) && !empty($core_values_image['photo'])) { ?>
        <div class="team-image-wrapper">
          <div class="tech-frame-large"></div>
          <div class="corner-large tl"></div>
          <div class="corner-large tr"></div>
          <div class="corner-large bl"></div>
          <div class="corner-large br"></div>

          <div class="team-image">
            <img src="<?= THUMBS ?>/1200x500x1/<?= UPLOAD_PHOTO_L . $core_values_image['photo'] ?>"
              alt="TTP Telecom Team Meeting">
          </div>

          <div class="scan-line-effect"></div>
        </div>
      <?php } ?>

      <!-- Values Grid -->
      <div class="values-grid">
        <?php foreach ($value_items as $value) { ?>
          <div class="value-card">
            <div class="value-number"><?= $value['slogan' . $lang] ?></div>
            <div class="value-icon">
              <?php if (!empty($value['photo'])) { ?>
                <img src="<?= UPLOAD_NEWS_L . $value['photo'] ?>"
                  alt="<?= $value['name' . $lang] ?>"
                  style="width: 32px; height: 32px; filter: brightness(0) invert(1);">
              <?php } else { ?>
                <!-- Default SVG icon -->
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                  <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
              <?php } ?>
            </div>
            <h3 class="value-title"><?= $value['name' . $lang] ?></h3>
            <p class="value-description">
              <?= $value['desc' . $lang] ?>
            </p>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>

<!-- Infrastructure -->
<?php if (!empty($infrastructure)) {
  // Tách header và items
  $infra_header = null;
  $infra_items = array();

  foreach ($infrastructure as $item) {
    if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
      $infra_header = $item;
    } else {
      $infra_items[] = $item;
    }
  }
?>
  <section class="infrastructure">
    <div class="container">
      <?php if ($infra_header) { ?>
        <div class="section-header">
          <div class="section-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
              <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
              <line x1="6" y1="6" x2="6.01" y2="6"></line>
              <line x1="6" y1="18" x2="6.01" y2="18"></line>
            </svg>
            <span><?= $infra_header['name' . $lang] ?></span>
          </div>

          <h2 class="section-title">
            <?= $infra_header['desc' . $lang] ?>
          </h2>
        </div>
      <?php } ?>

      <div class="infra-grid">
        <?php foreach ($infra_items as $infra) { ?>
          <div class="infra-card">
            <div class="infra-image">
              <?php if (!empty($infra['photo'])) { ?>
                <img src="<?= UPLOAD_NEWS_L . $infra['photo'] ?>"
                  alt="<?= $infra['name' . $lang] ?>"
                  style="width: 80px; height: 80px;">
              <?php } else { ?>
                <!-- Default SVG icon -->
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
              <?php } ?>
            </div>
            <h3 class="infra-title"><?= $infra['name' . $lang] ?></h3>
            <p class="infra-description">
              <?= $infra['desc' . $lang] ?>
            </p>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>

<!-- CTA Section -->
<?php if (!empty($cta)) { ?>
  <section class="cta-section">
    <div class="container">
      <div class="cta-content">
        <h2 class="cta-title"><?= $cta['name' . $lang] ?></h2>
        <p class="cta-description">
          <?= $cta['desc' . $lang] ?>
        </p>
        <div class="cta-buttons">
          <button class="btn-primary large" onclick="window.location.href='<?= ASSET ?><?= !empty($cta_options['button1_link']) ? $cta_options['button1_link'] : 'lien-he' ?>'">
            <?= !empty($cta_options['button1_text']) ? $cta_options['button1_text'] : 'Liên Hệ Ngay' ?>
          </button>
          <button class="btn-outline large" onclick="window.location.href='<?= ASSET ?><?= !empty($cta_options['button2_link']) ? $cta_options['button2_link'] : '#' ?>'">
            <?= !empty($cta_options['button2_text']) ? $cta_options['button2_text'] : 'Tải Brochure' ?>
          </button>
        </div>
      </div>
    </div>
  </section>
<?php } ?>