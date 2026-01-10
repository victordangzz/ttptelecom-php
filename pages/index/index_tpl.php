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
            <img src="<?= THUMBS ?>/600x400x1/<?= UPLOAD_NEWS_L . $about['photo'] ?>"
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


        </div>
      </div>
    </div>
  </section>
<?php } ?>

<!-- Services Section -->
<?php if (!empty($services)) { ?>
  <section class="services" id="services">
    <div class="container">
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
          <span>Dịch Vụ Toàn Diện</span>
        </div>

        <h2 class="section-title">
          Dịch vụ toàn diện của TTP Telecom
        </h2>
      </div>

      <!-- Service cards -->
      <?php
      $services_count = count($services);
      $is_slider = $services_count > 4;
      ?>
      <?php if ($is_slider) { ?>
        <div class="services-slider-wrapper">
          <button class="slider-nav-btn slider-nav-prev" aria-label="Previous">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
          </button>
          <div class="services-grid services-grid-slider" id="services-slider">
            <?php
            $color_class = array('primary', 'secondary');
            $i = 0;
            foreach ($services as $service) {
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
            ?>
          </div>
          <button class="slider-nav-btn slider-nav-next" aria-label="Next">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>
        </div>
      <?php } else { ?>
        <div class="services-grid">
          <?php
          $color_class = array('primary', 'secondary');
          $i = 0;
          foreach ($services as $service) {
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
          ?>
        </div>
      <?php } ?>

      <div class="section-cta">
        <button class="btn-primary" onclick="window.location.href='<?= ASSET ?>dich-vu'">
          <span>Xem chi tiết dịch vụ</span>
          <span class="arrow">→</span>
        </button>
      </div>
    </div>
  </section>
<?php } ?>

<!-- Why Choose Us Section -->
<?php if (!empty($features)) { ?>
  <section class="why-choose" id="solutions">
    <div class="container">


      <!-- Header từ item có slogan="HEADER" -->
      <?php if ($features) { ?>
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
            <span>Ưu thế của chúng tôi</span>
          </div>

          <h2 class="section-title">
            Tại sao chọn chúng tôi
          </h2>
        </div>
      <?php } ?>

      <!-- Feature items -->
      <?php
      $features_count = !empty($features) ? count($features) : 0;
      $is_features_slider = $features_count > 4;
      ?>
      <?php if ($is_features_slider) { ?>
        <div class="features-slider-wrapper">
          <button class="slider-nav-btn slider-nav-prev" aria-label="Previous">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
          </button>
          <div class="features-grid features-grid-slider" id="features-slider">
            <?php
            if (!empty($features)) {
              foreach ($features as $feature) {
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
          <button class="slider-nav-btn slider-nav-next" aria-label="Next">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>
        </div>
      <?php } else { ?>
        <div class="features-grid">
          <?php
          if (!empty($features)) {
            foreach ($features as $feature) {
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
      <?php } ?>
    </div>
  </section>
<?php } ?>

<!-- Tech Platform Section -->
<?php if (!empty($tech_platforms)) { ?>
  <?php
  // Tách header và platform items
  $tech_header = null;
  $platform_items = array();

  foreach ($tech_platforms as $item) {
    if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
      $tech_header = $item;
    } else {
      $platform_items[] = $item;
    }
  }
  ?>
  <?php if (!empty($platform_items) || $tech_header) { ?>
    <section class="tech-platform-home" id="tech-platforms">
      <div class="container">
        <!-- Header -->
        <?php if ($tech_header) { ?>
          <div class="section-header">
            <div class="section-badge">
              <svg
                width="16"
                height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2">
                <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                <rect x="14" y="14" width="6" height="6" rx="1"></rect>
              </svg>
              <span><?= $tech_header['name' . $lang] ?></span>
            </div>

            <h2 class="section-title">
              <?= $tech_header['desc' . $lang] ?>
            </h2>

            <?php if (!empty($tech_header['content' . $lang])) { ?>
              <p class="section-description">
                <?= $tech_header['content' . $lang] ?>
              </p>
            <?php } ?>
          </div>
        <?php } ?>

        <!-- Platform Cards -->
        <?php if (!empty($platform_items)) { ?>
          <div class="tech-platform-grid">
            <?php
            $icon_colors = array('primary', 'secondary');
            $i = 0;
            foreach ($platform_items as $platform) {
              $icon_color = !empty($platform['slogan' . $lang]) && strtolower($platform['slogan' . $lang]) === 'secondary'
                ? 'secondary'
                : $icon_colors[$i % 2];

              // Parse options để lấy features và applications
              $platform_options = !empty($platform['options']) ? json_decode($platform['options'], true) : array();
              $features = !empty($platform_options['features']) ? $platform_options['features'] : array();
              $applications = !empty($platform_options['applications']) ? $platform_options['applications'] : '';

              // Nếu không có features trong options, thử parse từ content
              if (empty($features) && !empty($platform['content' . $lang])) {
                $content_lines = explode("\n", strip_tags($platform['content' . $lang]));
                $features = array_filter(array_map('trim', $content_lines));
              }
            ?>
              <div class="tech-platform-card">
                <div class="corner-bracket tl"></div>
                <div class="corner-bracket tr"></div>
                <div class="corner-bracket bl"></div>
                <div class="corner-bracket br"></div>

                <div class="tech-platform-icon <?= $icon_color ?>">
                  <?php if (!empty($platform['photo'])) { ?>
                    <img src="<?= UPLOAD_NEWS_L . $platform['photo'] ?>"
                      alt="<?= $platform['name' . $lang] ?>"
                      style="width: 32px; height: 32px; filter: brightness(0) invert(1);">
                  <?php } else { ?>
                    <!-- Default SVG icon -->
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                      <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                      <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                      <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                    </svg>
                  <?php } ?>
                </div>

                <div class="tech-platform-content">
                  <h3 class="tech-platform-title"><?= $platform['name' . $lang] ?></h3>

                  <?php if (!empty($platform['desc' . $lang])) { ?>
                    <p class="tech-platform-subtitle"><?= $platform['desc' . $lang] ?></p>
                  <?php } ?>

                  <?php if (!empty($platform['content' . $lang]) && empty($features)) { ?>
                    <p class="tech-platform-desc"><?= $platform['content' . $lang] ?></p>
                  <?php } else { ?>
                    <?php if (!empty($platform['content' . $lang])) { ?>
                      <p class="tech-platform-desc"><?= $platform['content' . $lang] ?></p>
                    <?php } ?>

                    <?php if (!empty($features) && is_array($features)) { ?>
                      <ul class="tech-platform-features">
                        <?php foreach ($features as $feature) { ?>
                          <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span><?= trim($feature) ?></span>
                          </li>
                        <?php } ?>
                      </ul>
                    <?php } ?>
                  <?php } ?>

                  <?php if (!empty($applications)) { ?>
                    <div class="tech-platform-footer">
                      <span>Ứng dụng: <?= $applications ?></span>
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php
              $i++;
            }
            ?>
          </div>
        <?php } ?>
      </div>
    </section>
  <?php } ?>

  <!-- Projects Section -->
  <?php if (!empty($projects)) { ?>
    <?php
    // Tách header và project items
    $projects_header = null;
    $project_items = array();

    foreach ($projects as $item) {
      if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
        $projects_header = $item;
      } else {
        $project_items[] = $item;
      }
    }
    ?>
    <?php if (!empty($project_items) || $projects_header) { ?>
      <section class="projects" id="projects">
        <div class="container">
          <!-- Header -->
          <?php if ($projects_header) { ?>
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
                <span><?= $projects_header['name' . $lang] ?></span>
              </div>

              <h2 class="section-title">
                <?= $projects_header['desc' . $lang] ?>
              </h2>

              <?php if (!empty($projects_header['content' . $lang])) { ?>
                <p class="section-description">
                  <?= $projects_header['content' . $lang] ?>
                </p>
              <?php } ?>
            </div>
          <?php } ?>

          <!-- Project Cards -->
          <?php if (!empty($project_items)) { ?>
            <div class="projects-grid">
              <?php foreach ($project_items as $project) { ?>
                <div class="project-card">
                  <div class="project-image-wrapper">
                    <?php if (!empty($project['photo'])) { ?>
                      <img src="<?= THUMBS ?>/600x400x1/<?= UPLOAD_NEWS_L . $project['photo'] ?>"
                        alt="<?= $project['name' . $lang] ?>"
                        class="project-image"
                        title="<?= $project['name' . $lang] ?>">
                    <?php } else { ?>
                      <div class="project-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 3rem;">
                        📁
                      </div>
                    <?php } ?>

                    <div class="project-overlay">
                      <div class="project-info">
                        <h3 class="project-title"><?= $project['name' . $lang] ?></h3>
                        <?php if (!empty($project['desc' . $lang])) { ?>
                          <p class="project-desc"><?= $project['desc' . $lang] ?></p>
                        <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="project-details">
                    <?php if (!empty($project['content' . $lang])) { ?>
                      <?php
                      // Parse content - có thể là HTML list hoặc text
                      $content = $project['content' . $lang];
                      // Nếu là HTML list, giữ nguyên, nếu là text thì tạo list
                      if (strpos($content, '<ul>') === false && strpos($content, '<li>') === false) {
                        $lines = array_filter(array_map('trim', explode("\n", strip_tags($content))));
                        if (!empty($lines)) {
                          echo '<ul>';
                          foreach ($lines as $line) {
                            if (!empty($line)) {
                              echo '<li>' . htmlspecialchars($line) . '</li>';
                            }
                          }
                          echo '</ul>';
                        } else {
                          echo '<p style="color: #6b7280; font-size: 0.875rem; line-height: 1.6;">' . $content . '</p>';
                        }
                      } else {
                        echo $content;
                      }
                      ?>
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </section>
    <?php } ?>
  <?php } ?>

  <!-- Partners Section -->
  <?php if (!empty($partners)) { ?>
    <?php
    // Tách header và partner items
    $partners_header = null;
    $partner_items = array();

    foreach ($partners as $item) {
      if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
        $partners_header = $item;
      } else {
        $partner_items[] = $item;
      }
    }
    ?>
    <?php if (!empty($partner_items) || $partners_header) { ?>
      <section class="partners" id="partners">
        <div class="container">
          <!-- Header -->
          <?php if ($partners_header) { ?>
            <div class="section-header">
              <div class="section-badge">
                <svg
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span><?= $partners_header['name' . $lang] ?></span>
              </div>

              <h2 class="section-title">
                <?= $partners_header['desc' . $lang] ?>
              </h2>

              <?php if (!empty($partners_header['content' . $lang])) { ?>
                <p class="section-description">
                  <?= $partners_header['content' . $lang] ?>
                </p>
              <?php } ?>
            </div>
          <?php } ?>

          <!-- Partner Logos -->
          <?php if (!empty($partner_items)) { ?>
            <div class="partners-grid">
              <?php foreach ($partner_items as $partner) { ?>
                <div class="partner-card">
                  <div class="partner-logo-wrapper">
                    <?php if (!empty($partner['photo'])) { ?>
                      <img src="<?= UPLOAD_NEWS_L . $partner['photo'] ?>"
                        alt="<?= $partner['name' . $lang] ?>"
                        class="partner-logo"
                        title="<?= $partner['name' . $lang] ?>">
                    <?php } else { ?>
                      <div class="no-logo">🏢</div>
                    <?php } ?>
                  </div>
                  <?php if (!empty($partner['name' . $lang])) { ?>
                    <h3 class="partner-name"><?= $partner['name' . $lang] ?></h3>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </section>
    <?php } ?>
  <?php } ?>
<?php } ?>