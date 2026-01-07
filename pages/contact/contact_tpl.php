<!-- Contact Hero -->
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
                <span>Kết nối với chúng tôi</span>
            </div>

            <h1 class="hero-title">
                Liên Hệ <span class="highlight">TTP Telecom</span>
            </h1>

            <p class="hero-description">
                Sẵn sàng hỗ trợ bạn 24/7
            </p>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
                <span>Liên hệ</span>
            </div>

            <h2 class="section-title">Thông tin liên hệ</h2>
        </div>

        <div class="contact-info-grid">
            <div class="contact-info-card">
                <div class="corner-bracket tl"></div>
                <div class="corner-bracket tr"></div>

                <div class="contact-icon primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>

                <h3 class="contact-info-title">Hotline</h3>
                <p class="contact-info-value"><?= (!empty($optsetting['hotline'])) ? $optsetting['hotline'] : '1900 8004' ?></p>

                <div class="pulse-dot"></div>
            </div>

            <div class="contact-info-card">
                <div class="corner-bracket tl"></div>
                <div class="corner-bracket tr"></div>

                <div class="contact-icon secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>

                <h3 class="contact-info-title">Email</h3>
                <p class="contact-info-value"><?= (!empty($optsetting['email'])) ? $optsetting['email'] : 'info@ttpgroupvn.com' ?></p>

                <div class="pulse-dot secondary"></div>
            </div>

            <div class="contact-info-card">
                <div class="corner-bracket tl"></div>
                <div class="corner-bracket tr"></div>

                <div class="contact-icon primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                    </svg>
                </div>

                <h3 class="contact-info-title">Website</h3>
                <p class="contact-info-value"><?= (!empty($optsetting['website'])) ? $optsetting['website'] : 'www.ttptelecom.vn' ?></p>

                <div class="pulse-dot"></div>
            </div>

            <div class="contact-info-card">
                <div class="corner-bracket tl"></div>
                <div class="corner-bracket tr"></div>

                <div class="contact-icon secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                </div>

                <h3 class="contact-info-title">Địa chỉ</h3>
                <p class="contact-info-value"><?= (!empty($optsetting['address' . $lang])) ? $optsetting['address' . $lang] : '297 Gò Dầu, P. Phú Thọ Hòa, TP.HCM' ?></p>

                <div class="pulse-dot secondary"></div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="container">
        <div class="contact-form-wrapper">
            <div class="tech-frame"></div>
            <div class="corner-tl"></div>
            <div class="corner-tr"></div>
            <div class="corner-bl"></div>
            <div class="corner-br"></div>

            <div class="contact-form-container">
                <div class="flow-line"></div>

                <div class="contact-form-header">
                    <div class="section-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>Liên hệ tư vấn</span>
                    </div>

                    <h2 class="contact-form-title">Gửi yêu cầu tư vấn</h2>
                </div>

                <?= $flash->getMessages("frontend") ?>

                <form class="contact-form validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fullname-contact" class="form-label">
                            <?= hoten ?> <span class="required">*</span>
                        </label>
                        <input
                            type="text"
                            id="fullname-contact"
                            name="dataContact[fullname]"
                            class="form-input fullname"
                            placeholder="Nhập họ tên của bạn"
                            value="<?= $flash->get('fullname') ?>"
                            required
                        />
                        <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                    </div>

                    <div class="form-group">
                        <label for="phone-contact" class="form-label">
                            <?= dienthoai ?> <span class="required">*</span>
                        </label>
                        <input
                            type="tel"
                            id="phone-contact"
                            name="dataContact[phone]"
                            class="form-input fullname"
                            placeholder="Số điện thoại của bạn"
                            value="<?= $flash->get('phone') ?>"
                            required
                        />
                        <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                    </div>

                    <div class="form-group">
                        <label for="email-contact" class="form-label">
                            Email <span class="required">*</span>
                        </label>
                        <input
                            type="email"
                            id="email-contact"
                            name="dataContact[email]"
                            class="form-input fullname"
                            placeholder="email@example.com"
                            value="<?= $flash->get('email') ?>"
                            required
                        />
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                    </div>

                    <div class="form-group">
                        <label for="address-contact" class="form-label">
                            <?= diachi ?> <span class="required">*</span>
                        </label>
                        <input
                            type="text"
                            id="address-contact"
                            name="dataContact[address]"
                            class="form-input fullname"
                            placeholder="Địa chỉ của bạn"
                            value="<?= $flash->get('address') ?>"
                            required
                        />
                        <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                    </div>

                    <div class="form-group">
                        <label for="subject-contact" class="form-label">
                            <?= chude ?> <span class="required">*</span>
                        </label>
                        <input
                            type="text"
                            id="subject-contact"
                            name="dataContact[subject]"
                            class="form-input fullname"
                            placeholder="Chủ đề liên hệ"
                            value="<?= $flash->get('subject') ?>"
                            required
                        />
                        <div class="invalid-feedback"><?= vuilongnhapchude ?></div>
                    </div>

                    <div class="form-group">
                        <label for="content-contact" class="form-label">
                            <?= noidung ?> <span class="required">*</span>
                        </label>
                        <textarea
                            id="content-contact"
                            name="dataContact[content]"
                            class="form-textarea fullname"
                            placeholder="Mô tả chi tiết nhu cầu của bạn..."
                            rows="5"
                            required
                        ><?= $flash->get('content') ?></textarea>
                        <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                    </div>

                    <button type="submit" class="btn-submit" name="submit-contact" disabled>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        <span>Gửi yêu cầu tư vấn</span>
                    </button>
                    <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Map Section -->
<?php if (!empty($optsetting['coords'])) { ?>
<section class="contact-map-section">
    <div class="container">
        <div class="contact-map-wrapper">
            <div class="section-header">
                <div class="section-badge">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>
                    </svg>
                    <span>Vị trí</span>
                </div>
            </div>

            <div class="map-container">
                <div class="tech-frame"></div>
                <div class="corner-tl"></div>
                <div class="corner-tr"></div>
                <div class="corner-bl"></div>
                <div class="corner-br"></div>

                <div class="map-wrapper">
                    <iframe
                        src="https://maps.google.com/maps?q=<?= $optsetting['coords'] ?>&amp;z=16&amp;output=embed"
                        width="100%"
                        height="100%"
                        style="border: 0"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="TTP Telecom Location"
                    ></iframe>

                    <div class="map-overlay">
                        <div class="map-address">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span><?= (!empty($optsetting['address' . $lang])) ? $optsetting['address' . $lang] : '297 Gò Dầu, P. Phú Thọ Hòa, Quận Tân Phú, TP.HCM' ?></span>
                        </div>
                    </div>

                    <div class="scan-line-effect"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
