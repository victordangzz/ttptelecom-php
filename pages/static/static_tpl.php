<?php if (!empty($static)) { ?>
  <div class="title-main"><span class="aurora"><?= $static['name' . $lang] ?></span></div>
  <span class="sub-title-main">
    Fixhub Platform – Hệ sinh thái kết nối dịch vụ sửa chữa tại nhà toàn diện
  </span>
  <div class="content-main w-clear"><?= $func->decodeHtmlChars($static['content' . $lang]) ?></div>
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
<?php } else { ?>
  <div class="alert alert-warning w-100" role="alert">
    <strong><?= dangcapnhatdulieu ?></strong>
  </div>
<?php } ?>