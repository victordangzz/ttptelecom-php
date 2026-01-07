<?php
require_once 'type/config-type-newsletter.php';
require_once 'type/config-type-tags.php';
require_once 'type/config-type-news.php';
require_once 'type/config-type-static.php';
require_once 'type/config-type-photo.php';

/* Config cho trang chủ */
require_once 'type-static-homepage.php';
require_once 'type-news-homepage.php';

/* Config cho trang About */
require_once 'type-static-about.php';
require_once 'type-news-about.php';

/* Config cho trang Services */
require_once 'type-static-services.php';
require_once 'type-news-services.php';

/* Config cho trang Solution */
require_once 'type-static-solution.php';
require_once 'type-news-solution.php';

/* Seo page */
$config['seopage']['page'] = array(
  "trang-chu" => trangchu,
  "tin-tuc" => tintuc,
  "huong-dan-su-dung" => "Hướng dẫn sử dụng",
  "huong-dan-dang-ky-tho" => "Hướng dẫn đăng ký thợ",
  "chien-dich-khuyen-mai" => "Chiến dịch khuyến mãi",
  "dich-vu" => "Dịch vụ",
  "lien-he" => lienhe
);
$config['seopage']['width'] = 300;
$config['seopage']['height'] = 200;
$config['seopage']['thumb'] = '300x200x1';
$config['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Setting */
$config['setting']['address'] = true;
$config['setting']['phone'] = true;
$config['setting']['google_play'] = true;
$config['setting']['apple_store'] = true;
$config['setting']['hotline'] = true;
$config['setting']['zalo'] = true;
$config['setting']['oaidzalo'] = false;
$config['setting']['email'] = true;
$config['setting']['website'] = true;
$config['setting']['fanpage'] = true;
$config['setting']['fanpage_tiktok'] = true;
$config['setting']['coords'] = true;
$config['setting']['coords_iframe'] = true;
$config['setting']['worktime'] = false;
$config['setting']['link_googlemaps'] = true;

/* Quản lý import */
$config['import']['images'] = true;
$config['import']['thumb'] = '100x100x1';
$config['import']['img_type'] = ".jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP";

/* Quản lý export */
$config['export']['category'] = false;

/* Quản lý tài khoản */
$config['user']['active'] = false;
$config['user']['admin'] = false;
$config['user']['check_admin'] = array("hienthi" => kichhoat);
$config['user']['member'] = false;
$config['user']['check_member'] = array("hienthi" => kichhoat);

/* Quản lý phân quyền */
$config['permission']['active'] = false;
$config['permission']['check'] = array("hienthi" => kichhoat);

/* Quản lý liên lệ */
$config['contact']['active'] = true;
$config['contact']['check'] = array("hienthi" => xacnhan);

/* Quản lý địa điểm */
$config['places']['active'] = false;
$config['places']['check_city'] = array("hienthi" => hienthi);
$config['places']['check_district'] = array("hienthi" => hienthi);
$config['places']['check_ward'] = array("hienthi" => hienthi);
$config['places']['placesship'] = false;

/* Quản lý giỏ hàng */
$config['order']['active'] = false;
$config['order']['search'] = false;
$config['order']['excel'] = false;
$config['order']['word'] = false;
$config['order']['excelall'] = false;
$config['order']['wordall'] = false;
$config['order']['thumb'] = '100x100x1';

/* Quản lý thông báo đẩy */
$config['onesignal'] = false;

if ($config['website']['linkredirect'] == true) {
  $config['photo']['man_photo']['dieuhuonglink']['title_main_photo'] = linkredirect;
  $config['photo']['man_photo']['dieuhuonglink']['check_photo'] = array("hienthi" => hienthi);
  $config['photo']['man_photo']['dieuhuonglink']['number_photo'] = 5;
  $config['photo']['man_photo']['dieuhuonglink']['loaidieuhuong_photo'] = true;
  $config['photo']['man_photo']['dieuhuonglink']['link_photo'] = true;
  $config['photo']['man_photo']['dieuhuonglink']['link2_photo'] = true;
}
