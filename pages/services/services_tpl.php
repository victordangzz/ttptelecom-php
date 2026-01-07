<!-- Service Hero -->
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
        </svg>

        <!-- Network nodes -->
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

        <!-- Glowing orbs -->
        <div class="glow-orb glow-orb-1"></div>
        <div class="glow-orb glow-orb-2"></div>

        <!-- Scan line -->
        <div class="scan-line-effect"></div>

        <div class="gradient-overlay"></div>
    </div>

    <div class="container">
        <div class="hero-content">
            <div class="badge">
                <span class="pulse"></span>
                <span><?= @$hero_services['sloganvi'] ?></span>
            </div>

            <h1 class="hero-title">
                <?= @$hero_services['namevi'] ?>
            </h1>

            <p class="hero-description" style="margin-bottom: 1rem;">
                <?= @$hero_services['descvi'] ?>
            </p>

            <?php if (!empty($hero_services['contentvi'])): ?>
                <p class="hero-description" style="font-size: 1rem; opacity: 0.7;">
                    <?= @$hero_services['contentvi'] ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- TTP Connect Section -->
<section class="services-detail" id="ttp-connect">
    <div class="container">
        <!-- Section Header -->
        <div class="service-detail-header">
            <div class="service-icon-header">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                    <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                    <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                    <line x1="12" y1="20" x2="12.01" y2="20"></line>
                </svg>
            </div>
            <div>
                <h2 class="section-title"><?= @$ttp_connect_header['namevi'] ?></h2>
                <p class="section-description"><?= @$ttp_connect_header['descvi'] ?></p>
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
                <div class="no-image-icon">🌐</div>
                <span class="no-image-text">Server Room Image</span>
            </div>

            <div class="scan-line-effect"></div>
        </div>

        <!-- Service Cards -->
        <div class="service-cards-grid">
            <?php if (!empty($ttp_connect_items)): foreach ($ttp_connect_items as $item):
                    $features = !empty($item['contentvi']) ? explode('|', $item['contentvi']) : [];
            ?>
                    <div class="service-detail-card">
                        <div class="corner-accent tl"></div>
                        <div class="corner-accent tr"></div>
                        <div class="corner-accent bl"></div>
                        <div class="corner-accent br"></div>

                        <h3 class="service-detail-title"><?= $item['namevi'] ?></h3>
                        <p class="service-detail-description">
                            <?= $item['descvi'] ?>
                        </p>

                        <?php if (!empty($features)): ?>
                            <ul class="service-features-list">
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

                        <button class="btn-outline">Xem chi tiết →</button>
                        <div class="pulse-dot"></div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- TTP Data Section -->
<section class="services-detail alt" id="ttp-data">
    <div class="container">
        <!-- Section Header -->
        <div class="service-detail-header">
            <div class="service-icon-header secondary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                    <line x1="6" y1="6" x2="6.01" y2="6"></line>
                    <line x1="6" y1="18" x2="6.01" y2="18"></line>
                </svg>
            </div>
            <div>
                <h2 class="section-title"><?= @$ttp_data_header['namevi'] ?></h2>
                <p class="section-description"><?= @$ttp_data_header['descvi'] ?></p>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="service-hero-image">
            <div class="tech-frame secondary"></div>
            <div class="corner-tl secondary"></div>
            <div class="corner-tr secondary"></div>
            <div class="corner-bl secondary"></div>
            <div class="corner-br secondary"></div>

            <div class="image-placeholder">
                <div class="no-image-icon">🖥️</div>
                <span class="no-image-text">Data Center Image</span>
            </div>

            <div class="scan-line-effect"></div>
        </div>

        <!-- Service Tabs -->
        <div class="service-tabs-grid">
            <?php if (!empty($ttp_data_items)): $first = true;
                foreach ($ttp_data_items as $item):
                    $features = !empty($item['contentvi']) ? explode('|', $item['contentvi']) : [];
            ?>
                    <div class="service-tab-card <?= $first ? 'active' : '' ?>">
                        <div class="corner-accent tl"></div>
                        <div class="corner-accent tr"></div>
                        <div class="corner-accent bl"></div>
                        <div class="corner-accent br"></div>

                        <div class="tab-indicator"></div>
                        <h3 class="service-detail-title"><?= $item['namevi'] ?></h3>
                        <p class="service-detail-description">
                            <?= $item['descvi'] ?>
                        </p>

                        <?php if (!empty($features)): ?>
                            <ul class="service-features-list">
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

                        <?php if (!empty($item['sloganvi'])): ?>
                            <div class="service-pricing">
                                <span class="pricing-label"><?= $item['sloganvi'] ?></span>
                                <button class="btn-primary">Đăng ký ngay</button>
                            </div>
                        <?php endif; ?>

                        <div class="pulse-dot"></div>
                    </div>
            <?php $first = false;
                endforeach;
            endif; ?>
        </div>

        <!-- Advantages -->
        <div class="advantages-box">
            <div class="corner-bracket tl"></div>
            <div class="corner-bracket tr"></div>
            <div class="corner-bracket bl"></div>
            <div class="corner-bracket br"></div>

            <div class="advantages-header">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                </svg>
                <h3>Ưu điểm Data Center TTP</h3>
            </div>

            <div class="advantages-grid">
                <?php if (!empty($data_center_advantages)): foreach ($data_center_advantages as $adv): ?>
                        <div class="advantage-item">
                            <div class="advantage-icon">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                            </div>
                            <p><?= $adv['namevi'] ?></p>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- TTP Cloud Section -->
<section class="services-detail" id="ttp-cloud">
    <div class="container">
        <!-- Section Header -->
        <div class="service-detail-header">
            <div class="service-icon-header">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>
                </svg>
            </div>
            <div>
                <h2 class="section-title"><?= @$ttp_cloud_header['namevi'] ?></h2>
                <p class="section-description"><?= @$ttp_cloud_header['descvi'] ?></p>
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
                <div class="no-image-icon">☁️</div>
                <span class="no-image-text">Cloud Infrastructure Image</span>
            </div>

            <div class="scan-line-effect"></div>
        </div>

        <!-- Cloud Services -->
        <div class="cloud-services-grid">
            <?php if (!empty($ttp_cloud_items)): foreach ($ttp_cloud_items as $item):
                    $specs = !empty($item['contentvi']) ? explode('|', $item['contentvi']) : [];
            ?>
                    <div class="cloud-service-card">
                        <div class="corner-accent tl"></div>
                        <div class="corner-accent tr"></div>
                        <div class="corner-accent bl"></div>
                        <div class="corner-accent br"></div>

                        <div class="cloud-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                <line x1="6" y1="18" x2="6.01" y2="18"></line>
                            </svg>
                        </div>

                        <h3 class="service-detail-title"><?= $item['namevi'] ?></h3>
                        <p class="service-detail-description">
                            <?= $item['descvi'] ?>
                        </p>

                        <?php if (!empty($specs)): ?>
                            <div class="cloud-specs">
                                <?php foreach ($specs as $spec):
                                    $parts = explode(':', $spec, 2);
                                    if (count($parts) == 2):
                                ?>
                                        <div class="spec-item">
                                            <span class="spec-label"><?= trim($parts[0]) ?></span>
                                            <span class="spec-value"><?= trim($parts[1]) ?></span>
                                        </div>
                                <?php endif;
                                endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <button class="btn-primary">Đăng ký ngay</button>
                        <div class="pulse-dot"></div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>

        <!-- Why Choose Cloud -->
        <div class="why-cloud-section">
            <div class="section-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <span>Lợi thế</span>
            </div>

            <h3 class="why-cloud-title">
                Tại sao chọn <span class="highlight">TTP Cloud?</span>
            </h3>
            <p class="why-cloud-description">
                Chúng tôi mang đến giải pháp tốt nhất cho doanh nghiệp của bạn
            </p>

            <div class="why-cloud-grid">
                <?php if (!empty($why_choose_cloud)): foreach ($why_choose_cloud as $why): ?>
                        <div class="why-cloud-card">
                            <div class="corner-bracket tl"></div>
                            <div class="corner-bracket tr"></div>
                            <div class="corner-bracket bl"></div>
                            <div class="corner-bracket br"></div>

                            <div class="why-cloud-icon">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                            <h4><?= $why['namevi'] ?></h4>
                            <p><?= $why['descvi'] ?></p>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- TTP Infra Section -->
<section class="services-detail alt" id="ttp-infra">
    <div class="container">
        <!-- Section Header -->
        <div class="service-detail-header">
            <div class="service-icon-header secondary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="9" y="7" width="6" height="6"></rect>
                    <line x1="9" y1="1" x2="9" y2="7"></line>
                    <line x1="15" y1="1" x2="15" y2="7"></line>
                    <line x1="9" y1="13" x2="9" y2="23"></line>
                    <line x1="15" y1="13" x2="15" y2="23"></line>
                    <line x1="1" y1="9" x2="9" y2="9"></line>
                    <line x1="15" y1="9" x2="23" y2="9"></line>
                    <line x1="1" y1="15" x2="9" y2="15"></line>
                    <line x1="15" y1="15" x2="23" y2="15"></line>
                </svg>
            </div>
            <div>
                <h2 class="section-title"><?= @$ttp_infra_header['namevi'] ?></h2>
                <p class="section-description"><?= @$ttp_infra_header['descvi'] ?></p>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="service-hero-image">
            <div class="tech-frame secondary"></div>
            <div class="corner-tl secondary"></div>
            <div class="corner-tr secondary"></div>
            <div class="corner-bl secondary"></div>
            <div class="corner-br secondary"></div>

            <div class="image-placeholder">
                <div class="no-image-icon">🔧</div>
                <span class="no-image-text">IT Infrastructure Image</span>
            </div>

            <div class="scan-line-effect"></div>
        </div>

        <!-- Infra Services -->
        <div class="infra-services-grid">
            <?php if (!empty($ttp_infra_items)): foreach ($ttp_infra_items as $item): ?>
                    <div class="infra-service-card">
                        <div class="corner-accent tl"></div>
                        <div class="corner-accent tr"></div>
                        <div class="corner-accent bl"></div>
                        <div class="corner-accent br"></div>

                        <div class="infra-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                                <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                                <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                                <line x1="12" y1="20" x2="12.01" y2="20"></line>
                            </svg>
                        </div>

                        <h3 class="service-detail-title"><?= $item['namevi'] ?></h3>
                        <p class="service-detail-description">
                            <?= $item['descvi'] ?>
                        </p>

                        <div class="pulse-dot"></div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<!-- Process Steps Section -->
<section class="process-steps">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="12" y1="18" x2="12" y2="2"></line>
                    <polyline points="6 12 12 18 18 12"></polyline>
                    <line x1="12" y1="2" x2="12" y2="18"></line>
                    <polyline points="6 6 12 2 18 6"></polyline>
                </svg>
                <span><?= @$header_process['sloganvi'] ?></span>
            </div>

            <h2 class="section-title">
                <?= @$header_process['namevi'] ?>
            </h2>
        </div>

        <div class="process-line"></div>

        <div class="process-grid">
            <?php if (!empty($process_steps)): $index = 0;
                foreach ($process_steps as $step): $index++;
                    $isEven = ($index % 2 == 0);
                    $colorClass = $isEven ? 'secondary' : 'primary';
                    $showDots = ($index < count($process_steps));
            ?>
                    <div class="process-step">
                        <div class="process-number <?= $colorClass ?>">
                            <?= $step['sloganvi'] ?>
                            <div class="pulse-ring"></div>
                        </div>
                        <h3 class="process-title"><?= $step['namevi'] ?></h3>
                        <p class="process-description"><?= $step['descvi'] ?></p>
                        <?php if ($showDots): ?>
                            <div class="process-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        <?php endif; ?>
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
                <?= @$cta_services['namevi'] ?>
            </h2>
            <p class="cta-description">
                <?= @$cta_services['descvi'] ?>
            </p>
            <?php if (!empty($cta_services['contentvi'])): ?>
                <p class="cta-description" style="font-size: 1rem; margin-bottom: 2rem;">
                    <?= $cta_services['contentvi'] ?>
                </p>
            <?php endif; ?>
            <div class="cta-buttons">
                <button class="btn-primary large">Nhận tư vấn miễn phí</button>
            </div>
        </div>
    </div>
</section>

</div>
</section>