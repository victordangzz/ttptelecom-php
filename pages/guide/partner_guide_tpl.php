<div class="title-main">
  <span class="aurora">
    <?= $titleMain ?>
  </span>
</div>
<span class="sub-title-main" style="margin-bottom: 30px;">
    Gia nhập đội ngũ thợ chuyên nghiệp, tăng thu nhập và phát triển sự nghiệp
</span>
<div class="partner-guide-btn">
    <a href="lien-he" class="magic-button" title="Đăng ký ngay">
        Đăng ký ngay
    </a>
</div>
<?php if(!empty($loiich)): ?>
    <h2 class="loiich-title">Lợi ích khi làm thợ Fixhub</h2>
    <section class="lhvct">
        <?php 
        foreach($loiich as $k => $v): 
        $backgrounds = ["oklch(96.2% .044 156.743)", "oklch(93.2% .032 255.585)", "oklch(94.6% .033 307.174)", "oklch(95.4% .038 75.164)"];
        $svgs = ['<svg xmlns="http://www.w3.org/2000/svg" style="color: oklch(62.7% .194 149.214);" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: oklch(54.6% .245 262.881);"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: oklch(55.8% .288 302.321);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: oklch(64.6% .222 41.116);"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>'];
        ?>
        <div class="lhvct-item">
            <picture class="lhvct-icon" style="background-color: <?= $backgrounds[$k] ?>;">
            <?= $svgs[$k] ?>
            </picture>
            <p class="lhvct-name"><?= $v['name'.$lang] ?></p>
            <p class="lhvct-content"><?= $v['desc'.$lang] ?></p>
        </div>
        <?php endforeach ?>
    </section>
<?php endif ?>


<?php if(!empty($yeu_cau_dk)): ?>
    <h2 class="loiich-title">Yêu cầu đăng ký</h2>
    <section class="ycdk">
        <?php 
        foreach($yeu_cau_dk as $k => $v): 
            $svgs = ['<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><polyline points="16 11 18 13 22 9"></polyline></svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg>'];

        ?>
            <div class="ycdk-item">
                <div class="ycdk-head">
                    <picture class="ycdk-icon">
                        <?= $svgs[$k] ?>
                    </picture>
                    <p class="ycdk-title mb-0">
                        <?= $v['name'.$lang] ?>
                    </p>
                </div>
                <div class="ycdk-desc-wp">
                    <?= htmlspecialchars_decode($v['desc'.$lang]) ?>
                </div>
            </div>
        <?php endforeach ?>
    </section>
<?php endif ?>

<?php if(!empty($qtdk)): ?>
    <h2 class="loiich-title mb-0">Quy trình đăng ký</h2>
    <section class="qtdk">
        <?php foreach($qtdk as $k => $v): ?>
            <div class="qtdk-item">
                <span class="qtdk-number"><?= $k + 1 ?></span>
                <p class="qtdk-title mb-0">
                    <?= $v['name'.$lang] ?>
                </p>
                <div class="qtdk-desc truncate">
                    <?= $v['desc'.$lang] ?>
                </div>
            </div>
        <?php endforeach ?>
    </section>
<?php endif ?>

<?php if(!empty($tinh_nang_ud)): ?>
    <h2 class="loiich-title mb-0">
        Tính năng ứng dụng Fixhub Partner
    </h2>
    <section class="tinh_nang_ud">
        <?php foreach($tinh_nang_ud as $k => $v): ?>
            <div class="tinh_nang_ud-item">
                <p class="tinh_nang_ud-title mb-0">
                    <?= $v['name'.$lang] ?>
                </p>
                <div class="tinh_nang_ud-desc-wp">
                    <?= htmlspecialchars_decode($v['desc'.$lang]) ?>
                </div>
            </div>
        <?php endforeach ?>
    </section>
<?php endif ?>

<?php if(!empty($cshh)): ?>
    <section class="cshh">
        <h2 class="cshh-name">
            Chính sách hoa hồng
        </h2>
        <div class="cshh-list">
            <?php foreach($cshh as $k => $v): ?>
                <div class="cshh-item">
                    <p class="cshh-percent mb-0">
                        <?= $v['percent'] ?>
                    </p>
                    <p class="cshh-title">
                        <?= $v['title'] ?>
                    </p>
                    <div class="cshh-desc">
                        <?= $v['desc'] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <article class="cshh-art">
            <p class="cshh-sub-content">
                + Thưởng thêm 5-10% cho thợ 5 sao hoặc đạt KPI xuất sắc
            </p>
            <p class="cshh-sub-content mb-0">
                + 100% tiền tips từ khách hàng
            </p>
        </article>
    </section>
<?php endif ?>

<div class="cta-card">
  <h2 class="cta-title">Sẵn sàng gia nhập Fixhub?</h2>
  <p class="cta-desc">
    Đăng ký ngay hôm nay để bắt đầu nhận việc và tăng thu nhập
  </p>
  <a class="cta-btn" href="lien-he" title="Đăng ký làm thợ ngay">Đăng ký làm thợ ngay</a>
  <p class="cta-note">
    Có thắc mắc? Liên hệ:
    <a href="lien-he" class="cta-link" title="support@fixhub.vn">support@fixhub.vn</a> hoặc 1900 xxxx
  </p>
</div>



