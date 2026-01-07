<!-- Solution Hero -->
<section class="hero">
    <div class="hero-background">
        <div class="gradient-base"></div>
        <div class="tech-grid"></div>
        <div class="hexagon-pattern"></div>

        <svg class="circuit-lines" xmlns="http://www.w3.org/2000/svg">
            <line class="circuit-line" x1="10%" y1="20%" x2="40%" y2="60%" />
            <line class="circuit-line" x1="60%" y1="30%" x2="90%" y2="70%" />
            <line class="circuit-line" x1="20%" y1="80%" x2="50%" y2="40%" />
            <line class="circuit-line" x1="70%" y1="15%" x2="85%" y2="85%" />
            <line class="circuit-line" x1="15%" y1="50%" x2="45%" y2="25%" />
            <line class="circuit-line" x1="55%" y1="75%" x2="80%" y2="45%" />
        </svg>

        <div class="network-nodes">
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
            <div class="node"></div>
        </div>

        <div class="glow-orb glow-orb-1"></div>
        <div class="glow-orb glow-orb-2"></div>
        <div class="scan-line-effect"></div>
        <div class="gradient-overlay"></div>
    </div>

    <div class="container">
        <div class="hero-content">
            <div class="badge">
                <span class="pulse"></span>
                <span><?= @$hero_solution['sloganvi'] ?></span>
            </div>

            <h1 class="hero-title">
                <?= @$hero_solution['namevi'] ?>
            </h1>

            <p class="hero-description" style="margin-bottom: 1rem;">
                <?= @$hero_solution['descvi'] ?>
            </p>

            <?php if (!empty($hero_solution['contentvi'])): ?>
                <p class="hero-description" style="font-size: 1rem; opacity: 0.7;">
                    <?= $hero_solution['contentvi'] ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Software Outsourcing Section -->
<section class="services-detail" id="software-outsourcing">
    <div class="container">
        <!-- Section Header -->
        <div class="service-detail-header">
            <div class="service-icon-header">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="16 18 22 12 16 6"></polyline>
                    <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
            </div>
            <div>
                <h2 class="section-title"><?= @$outsourcing_header['namevi'] ?></h2>
                <p class="section-description"><?= @$outsourcing_header['descvi'] ?></p>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="service-hero-image">
            <div class="tech-frame"></div>
            <div class="corner-tl"></div>
            <div class="corner-tr"></div>
            <div class="corner-bl"></div>
            <div class="corner-br"></div>

            <div class="image-placeholder">
                <div class="no-image-icon">💻</div>
                <span class="no-image-text">Team Working Image</span>
            </div>

            <div class="scan-line-effect"></div>
        </div>

        <!-- Service Cards -->
        <div class="solution-cards-grid">
            <?php if (!empty($outsourcing_solutions)): foreach ($outsourcing_solutions as $sol):
                    $features = !empty($sol['contentvi']) ? explode('|', $sol['contentvi']) : [];
            ?>
                    <div class="solution-card">
                        <div class="corner-accent tl"></div>
                        <div class="corner-accent tr"></div>
                        <div class="corner-accent bl"></div>
                        <div class="corner-accent br"></div>

                        <h3 class="solution-card-title"><?= $sol['namevi'] ?></h3>
                        <p class="solution-card-description">
                            <?= $sol['descvi'] ?>
                        </p>

                        <div class="solution-badge">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                            <span><?= $sol['sloganvi'] ?></span>
                        </div>

                        <?php if (!empty($features)): ?>
                            <ul class="solution-features-list">
                                <?php foreach ($features as $feature): ?>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                        <span><?= trim($feature) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="pulse-dot"></div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- Dev Process Steps -->
<section class="dev-process-section">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="8" height="8" rx="1"></rect>
                    <path d="M4 8V6a2 2 0 0 1 2-2h2"></path>
                    <path d="M4 16v2a2 2 0 0 0 2 2h2"></path>
                    <path d="M16 4h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M16 20h2a2 2 0 0 0 2-2v-2"></path>
                </svg>
                <span><?= @$dev_process_header['sloganvi'] ?></span>
            </div>

            <h2 class="section-title">
                <?= @$dev_process_header['namevi'] ?>
            </h2>
        </div>

        <div class="dev-process-line"></div>

        <div class="dev-process-grid">
            <?php if (!empty($dev_process_steps)): $index = 0;
                foreach ($dev_process_steps as $step): $index++;
                    $isEven = ($index % 2 == 0);
                    $colorClass = $isEven ? 'secondary' : 'primary';
            ?>
                    <div class="dev-process-step">
                        <div class="dev-process-number <?= $colorClass ?>">
                            <?= $step['sloganvi'] ?>
                            <div class="pulse-ring"></div>
                            <div class="zap-icon">⚡</div>
                        </div>
                        <h3 class="dev-process-title"><?= $step['namevi'] ?></h3>
                        <p class="dev-process-description"><?= $step['descvi'] ?></p>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- Digital Transformation Section -->
<section class="services-detail" id="digital-transformation">
    <div class="container">
        <!-- Section Header -->
        <div class="service-detail-header">
            <div class="service-icon-header secondary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="23 4 23 10 17 10"></polyline>
                    <polyline points="1 20 1 14 7 14"></polyline>
                    <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                </svg>
            </div>
            <div>
                <h2 class="section-title"><?= @$digital_header['namevi'] ?></h2>
                <p class="section-description"><?= @$digital_header['descvi'] ?></p>
            </div>
        </div>

        <!-- Solution Cards -->
        <div class="digital-cards-grid">
            <?php if (!empty($digital_solutions)): foreach ($digital_solutions as $dig):
                    $features = !empty($dig['contentvi']) ? explode('|', $dig['contentvi']) : [];
            ?>
                    <div class="digital-card">
                        <div class="corner-accent tl secondary"></div>
                        <div class="corner-accent tr secondary"></div>
                        <div class="corner-accent bl secondary"></div>
                        <div class="corner-accent br secondary"></div>

                        <h3 class="solution-card-title"><?= $dig['namevi'] ?></h3>
                        <p class="solution-card-subtitle"><?= $dig['descvi'] ?></p>

                        <div class="solution-badge secondary">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M12 1v6m0 6v6"></path>
                                <path d="m4.2 4.2 4.2 4.2m5.6 5.6 4.2 4.2"></path>
                                <path d="M1 12h6m6 0h6"></path>
                                <path d="m4.2 19.8 4.2-4.2m5.6-5.6 4.2-4.2"></path>
                            </svg>
                            <span><?= $dig['sloganvi'] ?></span>
                        </div>

                        <?php if (!empty($features)): ?>
                            <ul class="solution-features-list">
                                <?php foreach ($features as $feature): ?>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                        <span><?= trim($feature) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="pulse-dot secondary"></div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- Industry Solutions Section -->
<section class="industry-solutions-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <div class="section-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
                <span><?= @$industry_header['sloganvi'] ?></span>
            </div>

            <h2 class="section-title">
                <?= @$industry_header['namevi'] ?>
            </h2>
            <p class="section-description-center">
                <?= @$industry_header['descvi'] ?>
            </p>
        </div>

        <!-- Tab Buttons -->
        <div class="industry-tabs">
            <button class="industry-tab-btn active" data-tab="retail">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>Bán lẻ & Chuỗi cửa hàng</span>
            </button>
            <button class="industry-tab-btn" data-tab="healthcare">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg>
                <span>Y tế & Giáo dục</span>
            </button>
        </div>

        <!-- Hero Image -->
        <div class="service-hero-image" style="margin-bottom: 3rem;">
            <div class="tech-frame"></div>
            <div class="corner-tl"></div>
            <div class="corner-tr"></div>
            <div class="corner-bl"></div>
            <div class="corner-br"></div>

            <div class="image-placeholder">
                <div class="no-image-icon">🏪</div>
                <span class="no-image-text industry-image-text">Retail Solutions Image</span>
            </div>

            <div class="scan-line-effect"></div>
        </div>

        <!-- Industry Cards -->
        <div class="industry-cards-container">
            <!-- Retail Cards -->
            <div class="industry-cards active" data-content="retail">
                <?php if (!empty($industry_retail)): foreach ($industry_retail as $item):
                        $features = !empty($item['contentvi']) ? explode('|', $item['contentvi']) : [];
                        $tags = !empty($item['options']) ? json_decode($item['options'], true) : [];
                ?>
                        <div class="industry-card">
                            <div class="corner-accent tl"></div>
                            <div class="corner-accent tr"></div>
                            <div class="corner-accent bl"></div>
                            <div class="corner-accent br"></div>

                            <div class="industry-card-header">
                                <div class="industry-icon secondary">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </div>
                                <h4 class="industry-card-title"><?= $item['namevi'] ?></h4>
                            </div>

                            <p class="industry-card-subtitle"><?= $item['descvi'] ?></p>

                            <?php if (!empty($features)): ?>
                                <ul class="solution-features-list">
                                    <?php foreach ($features as $feature): ?>
                                        <li>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                            <span><?= trim($feature) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <?php if (!empty($tags) && is_array($tags)): ?>
                                <div class="industry-tags">
                                    <?php foreach ($tags as $tag): ?>
                                        <span class="tag"><?= $tag ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <div class="pulse-dot secondary"></div>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>

            <!-- Healthcare Cards -->
            <div class="industry-cards" data-content="healthcare">
                <?php if (!empty($industry_healthcare)): foreach ($industry_healthcare as $item):
                        $features = !empty($item['contentvi']) ? explode('|', $item['contentvi']) : [];
                        $tags = !empty($item['options']) ? json_decode($item['options'], true) : [];
                ?>
                        <div class="industry-card">
                            <div class="corner-accent tl"></div>
                            <div class="corner-accent tr"></div>
                            <div class="corner-accent bl"></div>
                            <div class="corner-accent br"></div>

                            <div class="industry-card-header">
                                <div class="industry-icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>
                                </div>
                                <h4 class="industry-card-title"><?= $item['namevi'] ?></h4>
                            </div>

                            <p class="industry-card-subtitle"><?= $item['descvi'] ?></p>

                            <?php if (!empty($features)): ?>
                                <ul class="solution-features-list">
                                    <?php foreach ($features as $feature): ?>
                                        <li>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                            <span><?= trim($feature) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <?php if (!empty($tags) && is_array($tags)): ?>
                                <div class="industry-tags">
                                    <?php foreach ($tags as $tag): ?>
                                        <span class="tag"><?= $tag ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <div class="pulse-dot"></div>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Tech Platforms Section -->
<section class="tech-platforms-section">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                    <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                    <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                    <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                </svg>
                <span><?= @$tech_platforms_header['sloganvi'] ?></span>
            </div>

            <h2 class="section-title">
                <?= @$tech_platforms_header['namevi'] ?>
            </h2>
            <p class="section-description-center">
                <?= @$tech_platforms_header['descvi'] ?>
            </p>
        </div>

        <div class="tech-platforms-grid">
            <?php if (!empty($tech_platforms)): foreach ($tech_platforms as $platform):
                    $opts = !empty($platform['options']) ? json_decode($platform['options'], true) : [];
                    $features = isset($opts['features']) ? $opts['features'] : [];
                    $highlight = isset($opts['highlight']) ? $opts['highlight'] : '';
                    $platformType = !empty($platform['sloganvi']) ? $platform['sloganvi'] : 'primary';
            ?>
                    <div class="tech-platform-card <?= $platformType ?>">
                        <div class="platform-flow-line"></div>

                        <div class="corner-bracket tl"></div>
                        <div class="corner-bracket tr"></div>
                        <div class="corner-bracket bl"></div>
                        <div class="corner-bracket br"></div>

                        <div class="platform-header">
                            <div class="platform-icon">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                    <circle cx="12" cy="13" r="4"></circle>
                                </svg>
                                <div class="status-indicator"></div>
                            </div>
                            <div>
                                <h3 class="platform-title"><?= $platform['namevi'] ?></h3>
                                <p class="platform-subtitle">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg>
                                    <?= $platform['descvi'] ?>
                                </p>
                            </div>
                        </div>

                        <p class="platform-description">
                            <?= $platform['contentvi'] ?>
                        </p>

                        <?php if (!empty($features) && is_array($features)): ?>
                            <div class="platform-features">
                                <?php foreach ($features as $feat): ?>
                                    <div class="platform-feature">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                        <span><?= $feat ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($highlight)): ?>
                            <p class="platform-highlight">
                                <?= $highlight ?>
                            </p>
                        <?php endif; ?>

                        <div class="pulse-dot <?= $platformType == 'secondary' ? 'secondary' : '' ?>"></div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-background">
        <div class="tech-grid"></div>
    </div>

    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">
                <?= @$cta_solution['namevi'] ?>
            </h2>
            <p class="cta-description">
                <?= @$cta_solution['descvi'] ?>
            </p>
            <?php if (!empty($cta_solution['contentvi'])): ?>
                <p class="cta-description" style="font-size: 1rem; margin-bottom: 2rem;">
                    <?= $cta_solution['contentvi'] ?>
                </p>
            <?php endif; ?>
            <div class="cta-buttons">
                <button class="btn-primary large">Nhận tư vấn miễn phí</button>
            </div>
        </div>
    </div>
</section>