<!DOCTYPE html>
<html lang="<?= $config['website']['lang-doc'] ?>">

<head>
  <?php include PAGES . LAYOUT . "header.php"; ?>
  <?php include PAGES . LAYOUT . "css.php"; ?>
</head>

<body style="background-color: <?= ($source == 'index') ? 'white' : 'oklch(98.5% .002 247.839)' ?>;">
  <?php
  include PAGES . LAYOUT . "seo.php";
  // if ($deviceType !== 'mobile') {
  //   include PAGES . LAYOUT . "menu.php";
  // }
  // include PAGES . LAYOUT . "mmenu.php";
  // if ($source == 'index')
  //   include PAGES . LAYOUT . "slide.php";
  // else
  //   include PAGES . LAYOUT . "breadcrumb.php";
  if ($source == 'index')
    include PAGES . LAYOUT . "slide.php";

  ?>

  <div class="<?= ($source == 'index') ? 'wrap-home' : 'wrap-content padding-top-bottom' ?>">
    <?php include PAGES . $page . "_tpl.php"; ?>
  </div>
  <?php
  include PAGES . LAYOUT . "footer.php";
  include PAGES . LAYOUT . "modal.php";
  include PAGES . LAYOUT . "js.php";
  ?>
</body>

</html>