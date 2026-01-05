<?php
/* Validate URL */
$func->checkUrl($config['website']['index']);

/* Check login */
$func->checkLoginMember();

if (!empty($config['website']['linkredirect'])) {
  $func->checkRedirect();
}

/* Mobile detect */
$deviceType = ($detect->isMobile() || $detect->isTablet()) ? 'mobile' : 'computer';
define('PAGES', ($deviceType == 'computer') ? './pages/' : './pages/');

/* Router */
$router->setBasePath($config['database']['url']);
$router->map('GET', ADMIN . '/', function () {
  global $func, $config;
  $func->redirect($config['database']['url'] . ADMIN . "/index.php");
  exit;
});
$router->map('GET', ADMIN, function () {
  global $func, $config;
  $func->redirect($config['database']['url'] . ADMIN . "/index.php");
  exit;
});
$router->map('GET|POST', '', 'index', 'home');
$router->map('GET|POST', 'index.php', 'index', 'index');
$router->map('GET|POST', 'sitemap.xml', 'sitemap', 'sitemap');
$router->map('GET|POST', '[a:com]', 'allpage', 'show');
$router->map('GET|POST', '[a:com]/[a:lang]/', 'allpagelang', 'lang');
$router->map('GET|POST', '[a:com]/[a:action]', 'account', 'account');
$router->map('GET', THUMBS . '/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
  global $func;
  $infoWebp = $func->webpinfo($src);
  if (isset($infoWebp['Animation']) && $infoWebp['Animation'] === true) {
    $contentWebp = file_get_contents($src);
    header('Content-Type: image/webp');
    echo $contentWebp;
  } else {
    $func->createThumb($w, $h, $z, $src, null, THUMBS);
  }
}, 'thumb');
$router->map('GET', WATERMARK . '/product/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
  global $func, $d;
  $wtm = $d->rawQueryOne("select status, photo, options from #_photo where type = ? and act = ? limit 0,1", array('watermark', 'photo_static'));
  $func->createThumb($w, $h, $z, $src, $wtm, "product");
}, 'watermark');

$router->map('GET', WATERMARK . '/news/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
  global $func, $d;
  $wtm = $d->rawQueryOne("select status, photo, options from #_photo where type = ? and act = ? limit 0,1", array('watermark-news', 'photo_static'));
  $func->createThumb($w, $h, $z, $src, $wtm, "news");
}, 'watermarkNews');


/* Router match */
$match = $router->match();

/* Router check */
if (is_array($match)) {
  if (is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
  } else {
    $com = (!empty($match['params']['com'])) ? htmlspecialchars($match['params']['com']) : htmlspecialchars($match['target']);
    $getPage = !empty($_GET['p']) ? htmlspecialchars($_GET['p']) : 1;
  }
} else {
  header('HTTP/1.0 404 Not Found', true, 404);
  include("404.php");
  exit;
}

/* Setting */
$sqlCache = "select * from #_setting";
$setting = $cache->get($sqlCache, null, 'fetch', 7200);
$optsetting = (!empty($setting['options'])) ? json_decode($setting['options'], true) : null;

/* Lang */
if (!empty($match['params']['lang'])) $_SESSION['lang'] = $match['params']['lang'];
else if (empty($_SESSION['lang']) && empty($match['params']['lang'])) $_SESSION['lang'] = $optsetting['lang_default'];
$lang = $_SESSION['lang'];

/* Check lang */
$weblang = (!empty($config['website']['lang'])) ? array_keys($config['website']['lang']) : array();

if (!in_array($lang, $weblang)) {
  $_SESSION['lang'] = 'vi';
  $lang = $_SESSION['lang'];
}

/* Slug lang */
$sluglang = 'slug' . $lang;

/* SEO Lang */
$seolang = $lang;

/* Require datas lang */
require_once LIBRARIES . "lang/web/$lang.php";

$requick = array(
  array("tbl" => "news", "field" => "id", "source" => "service", "com" => "dich-vu", "type" => "dich-vu", "menu" => true),
  array("tbl" => "news", "field" => "id", "source" => "news", "com" => "tin-tuc", "type" => "tin-tuc", "menu" => true),
  array("tbl" => "news", "field" => "id", "source" => "news", "com" => "chien-dich-khuyen-mai", "type" => "chien-dich-khuyen-mai", "menu" => true),
  array("tbl" => "news", "field" => "id", "source" => "guide", "com" => "huong-dan-su-dung", "type" => "huong-dan-su-dung", "menu" => true),
  array("tbl" => "news", "field" => "id", "source" => "partner_guide", "com" => "huong-dan-dang-ky-tho", "type" => "huong-dan-dang-ky-tho", "menu" => true),
  array("tbl" => "news", "field" => "id", "source" => "news", "com" => "chinh-sach", "type" => "chinh-sach", "menu" => false),
  array("tbl" => "news", "field" => "id", "source" => "news", "com" => "ho-tro", "type" => "ho-tro", "menu" => false),
  array("tbl" => "static", "field" => "id", "source" => "static", "com" => "ve-chung-toi", "type" => "ve-chung-toi", "menu" => true),
  array("tbl" => "", "field" => "id", "source" => "", "com" => "lien-he", "type" => "", "menu" => true),
);

/* Find data */
if (!empty($com) && !in_array($com, ['tim-kiem', 'account', 'sitemap'])) {
  foreach ($requick as $k => $v) {
    $urlTbl = (!empty($v['tbl'])) ? $v['tbl'] : '';
    $urlTblTag = (!empty($v['tbltag'])) ? $v['tbltag'] : '';
    $urlType = (!empty($v['type'])) ? $v['type'] : '';
    $urlField = (!empty($v['field'])) ? $v['field'] : '';
    $urlCom = (!empty($v['com'])) ? $v['com'] : '';

    if (!empty($urlTbl) && !in_array($urlTbl, ['static', 'photo'])) {
      $row = $d->rawQueryOne("select id from #_$urlTbl where (slugvi = ? or slugen = ?) and type = ? and find_in_set('hienthi',status) limit 0,1", array($com, $com, $urlType));

      if (!empty($row['id'])) {
        $_GET[$urlField] = $row['id'];
        $com = $urlCom;
        break;
      }
    }
  }
}

/* Switch coms */
switch ($com) {
  case 'lien-he':
    $source = "contact";
    $page = "contact/contact";
    $seo->set('type', 'object');
    $titleMain = "Liên hệ với chúng tôi";
    break;

  case 'huong-dan-su-dung':
    $source = "guide";
    $page = "guide/guide";
    $seo->set('type', "object");
    $type = $com;
    $titleMain = "Hướng dẫn sử dụng Fixhub";
    break;

  case 'huong-dan-dang-ky-tho':
    $source = "partner_guide";
    $page = "guide/partner_guide";
    $seo->set('type', "object");
    $type = $com;
    $titleMain = "Hướng dẫn trở thành thợ Fixhub";
    break;

  case 'chien-dich-khuyen-mai':
    $source = "campaigns";
    $isListPage = true;
    $page = isset($_GET['id']) ? "news/news_detail" : "campaigns/campaigns";
    $seo->set('type', isset($_GET['id']) ? "article" : "object");
    $type = $com;
    $titleMain = "Chiến dịch khuyến mãi";
    break;

  case 'tin-tuc':
    $source = "news";
    $isListPage = true;
    $page = isset($_GET['id']) ? "news/news_detail" : "news/news";
    $seo->set('type', isset($_GET['id']) ? "article" : "object");
    $type = $com;
    $titleMain = "Tin tức & Kiến thức";
    break;

  case 'dich-vu':
    $source = "service";
    $page = isset($_GET['id']) ? "services/service_detail" : "services/services";
    $seo->set('type', isset($_GET['id']) ? "article" : "object");
    $type = $com;
    $titleMain = "Dịch vụ";
    break;

  case 'chinh-sach':
    $source = "news";
    $isListPage = false;
    $page = isset($_GET['id']) ? "news/news_detail" : "";
    $seo->set('type', 'article');
    $type = $com;
    $titleMain = null;
    break;

  case 'ho-tro':
    $source = "news";
    $isListPage = false;
    $page = isset($_GET['id']) ? "news/news_detail" : "";
    $seo->set('type', 'article');
    $type = $com;
    $titleMain = null;
    break;

  case 've-chung-toi':
    $source = "static";
    $page = "static/static";
    $type = $com;
    $seo->set('type', 'article');
    $titleMain = "Về chúng tôi";
    break;

  case 'sitemap':
    include_once LIBRARIES . "sitemap.php";
    exit();

  case '':
  case 'index':
    $source = "index";
    $page = "index/index";
    $seo->set('type', 'website');
    break;

  default:
    header('HTTP/1.0 404 Not Found', true, 404);
    include("404.php");
    exit();
}

/* Require datas for all page */
require_once SOURCES . "allpage.php";

/* Include sources */
if (!empty($source)) {
  include SOURCES . $source . ".php";
}

/* Include sources */
if (empty($page)) {
  header('HTTP/1.0 404 Not Found', true, 404);
  include("404.php");
  exit();
}
