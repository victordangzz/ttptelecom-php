<!-- Service Detail Hero Banner -->
<section class="service-detail-banner">
  <div class="service-detail-banner-bg">
    <img 
      class="service-detail-banner-image" 
      src="<?= THUMBS ?>/1920x400x1/<?= UPLOAD_NEWS_L . $rowDetail['photo'] ?>" 
      alt="<?= $rowDetail['name' . $lang] ?>"
      onerror="this.src='<?= THUMBS ?>/1920x400x1/assets/images/noimage.png';"
    />
    <div class="service-detail-banner-overlay"></div>
  </div>

  <div class="wrap-content">
    <div class="service-detail-banner-content">
      <div class="service-detail-breadcrumb">
        <a href="<?= $type ?>" title="Quay lại danh sách">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m12 19-7-7 7-7"></path>
            <path d="M19 12H5"></path>
          </svg>
          <span>Quay lại danh sách</span>
        </a>
      </div>

      <div class="service-detail-banner-text">
        <div class="service-detail-icon-inline">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
            <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
            <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
            <line x1="12" y1="20" x2="12.01" y2="20"></line>
          </svg>
        </div>
        <h1 class="service-detail-banner-title"><?= $rowDetail['name' . $lang] ?></h1>
        <p class="service-detail-banner-subtitle"><?= htmlspecialchars_decode($rowDetail['desc' . $lang]) ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Service Products Section -->
<section class="service-products">
  <div class="wrap-content">

    <div class="service-products-grid">

      <!-- Product 1: Internet Leased Line -->
      <div class="service-product-card animate__fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0s">
        <div class="service-product-header">
          <div class="service-product-image">
            <img src="assets/images/service-internet-leased.jpg" alt="Internet Leased Line" onerror="this.src='<?= THUMBS ?>/600x400x1/assets/images/noimage.png';" />
          </div>
        </div>

        <div class="service-product-content">
          <h3 class="service-product-title">Internet Leased Line / GIA / DIA</h3>
          <p class="service-product-desc">
            Cung cấp đường truyền Internet riêng biệt – đối xứng – băng thông cam kết 24/7, phù hợp cho các tổ chức, công ty cần ổn định trong nhu cầu server, camera, VPN, ERP/CRM.
          </p>

          <div class="service-product-tag">Lợi ích:</div>

          <ul class="service-product-features">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Băng thông không chia sẻ – đảm bảo tốc độ ổn định</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>IP tĩnh – bảo mật cao, dễ dàng cấu hình</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>SLA lên đến 99.99% - downtime tối thiểu</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Hỗ trợ kỹ thuật 24/7 – sẵn sàng xử lý sự cố</span>
            </li>
          </ul>

          <div class="service-product-footer">
            <span class="service-product-note">Phù hợp cho: Văn phòng, chi nhánh, data center, hệ thống camera, VPN</span>
          </div>
        </div>
      </div>

      <!-- Product 2: Dark Fiber -->
      <div class="service-product-card animate__fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.1s">
        <div class="service-product-header">
          <div class="service-product-image">
            <img src="assets/images/service-dark-fiber.jpg" alt="Dark Fiber" onerror="this.src='<?= THUMBS ?>/600x400x1/assets/images/noimage.png';" />
          </div>
        </div>

        <div class="service-product-content">
          <h3 class="service-product-title">Dark Fiber – Cáp quang trực tiếp</h3>
          <p class="service-product-desc">
            Giải pháp truyền dẫn băng thông qua đường trắng, cho phép doanh nghiệp toàn quyền điều khiển tốc độ và hạ tầng truyền dẫn.
          </p>

          <div class="service-product-tag">Lợi ích:</div>

          <ul class="service-product-features">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Phù hợp cho Data Center, DR site</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Camera, video streaming, chất lượng cao</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Kết nối chi nhánh với tốc độ không giới hạn</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Bảo mật tuyệt đối – mạng riêng hoàn toàn</span>
            </li>
          </ul>

          <div class="service-product-footer">
            <span class="service-product-note">Phù hợp cho: Chuyển đổi nghiệp vụ lớn, tập đoàn, ngân hàng, bệnh viện</span>
          </div>
        </div>
      </div>

      <!-- Product 3: MPLS L2/L3 -->
      <div class="service-product-card animate__fadeInUp wow" data-wow-duration="0.8s" data-wow-delay="0.2s">
        <div class="service-product-header">
          <div class="service-product-image">
            <img src="assets/images/service-mpls.jpg" alt="MPLS L2/L3" onerror="this.src='<?= THUMBS ?>/600x400x1/assets/images/noimage.png';" />
          </div>
        </div>

        <div class="service-product-content">
          <h3 class="service-product-title">MPLS L2/L3</h3>
          <p class="service-product-desc">
            Kết nối đa chi nhánh an toàn – ổn định – tối ưu độ trễ, hỗ trợ QoS cho các ứng dụng quan trọng như traffic, cho phép điều hành từ xa.
          </p>

          <div class="service-product-tag">Lợi ích:</div>

          <ul class="service-product-features">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Kết nối đa điểm – kết nối chi nhánh trung tâm</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Quản lý băng thông – ưu tiên traffic, cho cụng điều hành</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Bảo mật cao – traffic không đi qua Internet công cộng</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <span>Dễ dàng mở rộng – thêm chi nhánh mới không phức tạp</span>
            </li>
          </ul>

          <div class="service-product-footer">
            <span class="service-product-note">Phù hợp cho: Chuỗi cửa hàng, văn phòng đa chi nhánh, đơn thống phân tán</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<div class="btn-back-news" style="display: none;">
  <a class="link-btn-new" href="<?= $type ?>" title="Quay lại danh sách">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 14px;">
      <path d="m12 19-7-7 7-7"></path>
      <path d="M19 12H5"></path>
    </svg>
    Quay lại danh sách
  </a>
  <?php if (!empty($rowDetail['content' . $lang])): ?>
    <div class="meta-toc">
      <div class="box-readmore">
        <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
      </div>
    </div>
    <div class="new-detail">
      <div class="new-detail-left">
        <h1 class="new-title">
          <?= $rowDetail['name' . $lang] ?>
        </h1>
        <div class="new-content">
          <?= htmlspecialchars_decode($rowDetail['content' . $lang]) ?>
        </div>
        <div class="share sh-custom">
          <b><?= chiase ?>:</b>
          <div class="social-plugin w-clear">
            <?php
            $params = array();
            $params['oaid'] = $optsetting['oaidzalo'];
            echo $func->markdown('social/share', $params);
            ?>
          </div>
        </div>
      </div>
      <div class="new-detail-right">
        <h3 class="new-related">Bài viết liên quan</h3>
        <div class="new-related-list">
          <?php foreach ($news as $v): ?>
            <div class="new-related-item">
              <a href="<?= $v['slug' . $lang] ?>" class="new-related-thumb scale-img text-decoration-none" title="<?= $v['name' . $lang] ?>">
                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/100x70x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/100x70x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
              </a>
              <div class="new-related-art">
                <a href="<?= $v['slug' . $lang] ?>" class="new-related-name text-decoration-none" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  <?php else: ?>
    <div class="alert alert-warning w-100" role="alert">
      <strong><?= noidungdangcapnhat ?></strong>
    </div>
  <?php endif ?>
</div>