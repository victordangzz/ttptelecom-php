<div class="title-main">
  <span class="aurora">
    <?= $titleMain ?>
  </span>
</div>
<span class="sub-title-main">Chúng tôi luôn sẵn sàng lắng nghe và hỗ trợ bạn</span>

<?= $flash->getMessages("frontend") ?>

<?php if(!empty($lienhevoichungtoi)): ?>
  <div class="lhvct">
    <?php 
      foreach($lienhevoichungtoi as $k => $v): 
      $colors = ["oklch(62.7% .194 149.214)", "oklch(54.6% .245 262.881)","oklch(55.8% .288 302.321)", "oklch(64.6% .222 41.116)"];
      $backgrounds = ["oklch(96.2% .044 156.743)", "oklch(93.2% .032 255.585)", "oklch(94.6% .033 307.174)", "oklch(95.4% .038 75.164)"];
    ?>
      <div class="lhvct-item">
        <picture class="lhvct-icon" style="background-color: <?= $backgrounds[$k] ?>;">
          <img 
            class="lazy" 
            onerror="this.src='<?= THUMBS ?>/24x24x1/assets/images/noimage.png';" 
            data-src="<?= THUMBS ?>/24x24x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" 
            alt="<?= $v['name' . $lang] ?>" 
          />
        </picture>
        <p class="lhvct-name"><?= $v['name'.$lang] ?></p>
        <p class="lhvct-desc" style="color: <?= $colors[$k] ?>;"><?= $v['desc'.$lang] ?></p>
        <p class="lhvct-content"><?= $v['content'.$lang] ?></p>
      </div>
    <?php endforeach ?>
  </div>
<?php endif ?>

<div class="content-main">
  <div class="contact-article">
    <div class="box-contact-form">
      <h3 class="contact-form-title">Gửi tin nhắn cho chúng tôi</h3>
      <form class="contact-form validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
        <div class="row-20 row">
          <div class="contact-input col-sm-6 col-20">
            <div class="form-floating form-floating-cus">
              <input type="text" name="dataContact[fullname]" class="form-control fullname text-sm" id="fullname-contact" placeholder="<?= hoten ?>" value="<?= $flash->get('fullname') ?>" required>
              <label for="fullname-contact">
                <?= hoten ?>
              </label>
            </div>
            <div class="invalid-feedback">
              <?= vuilongnhaphoten ?>
            </div>
          </div>
          <div class="contact-input col-sm-6 col-20">
            <div class="form-floating form-floating-cus">
              <input type="number" name="dataContact[phone]" class="form-control fullname text-sm" id="phone-contact" placeholder="<?= dienthoai ?>" value="<?= $flash->get('phone') ?>" required>
              <label for="phone-contact">
                <?= dienthoai ?>
              </label>
            </div>
            <div class="invalid-feedback">
              <?= vuilongnhapsodienthoai ?>
            </div>
          </div>
          <div class="contact-input col-sm-6 col-20">
            <div class="form-floating form-floating-cus">
              <input type="text" class="form-control fullname text-sm" id="address-contact" name="dataContact[address]" placeholder="<?= diachi ?>" value="<?= $flash->get('address') ?>" required />
              <label for="address-contact">
                <?= diachi ?>
              </label>
            </div>
            <div class="invalid-feedback">
              <?= vuilongnhapdiachi ?>
            </div>
          </div>
          <div class="contact-input col-sm-6 col-20">
            <div class="form-floating form-floating-cus">
              <input type="email" class="form-control fullname text-sm" id="email-contact" name="dataContact[email]" placeholder="Email" value="<?= $flash->get('email') ?>" required />
              <label for="email-contact">Email</label>
            </div>
            <div class="invalid-feedback">
              <?= vuilongnhapdiachiemail ?>
            </div>
          </div>
        </div>
        <div class="contact-input">
          <div class="form-floating form-floating-cus">
            <input type="text" class="form-control fullname text-sm" id="subject-contact" name="dataContact[subject]" placeholder="<?= chude ?>" value="<?= $flash->get('subject') ?>" required />
            <label for="subject-contact">
              <?= chude ?>
            </label>
          </div>
          <div class="invalid-feedback">
            <?= vuilongnhapchude ?>
          </div>
        </div>
        <div class="contact-input">
          <div class="form-floating form-floating-cus">
            <textarea class="form-control fullname text-sm" id="content-contact" name="dataContact[content]" placeholder="<?= noidung ?>" required><?= $flash->get('content') ?></textarea>
            <label for="content-contact">
              <?= noidung ?>
            </label>
          </div>
  
          <div class="invalid-feedback">
            <?= vuilongnhapnoidung ?>
          </div>
        </div>
        <input type="submit" class="btn mr-2 text-white" style="background-color: #28a745;" name="submit-contact" value="Gửi tin nhắn" disabled />
        <input type="reset" class="btn btn-secondary" value="<?= nhaplai ?>" />
        <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
      </form>
    </div>
  </div>
</div>