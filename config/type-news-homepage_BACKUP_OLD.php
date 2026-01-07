<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG NEWS - TRANG CHỦ
   ===================================================== */

/* DỊCH VỤ TRANG CHỦ */
$nametype = "dich-vu-trangchu";
$config['news'][$nametype]['title_main'] = "Dịch vụ trang chủ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = true;          // Link đến trang chi tiết dịch vụ
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Icon/ảnh dịch vụ
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = false;
$config['news'][$nametype]['desc'] = true;          // Mô tả ngắn dịch vụ
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 200;
$config['news'][$nametype]['height'] = 200;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';

/* ƯU THẾ/TÍNH NĂNG */
$nametype = "uu-the";
$config['news'][$nametype]['title_main'] = "Ưu thế/Tính năng";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = false;         // Không cần slug
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Icon ưu thế
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = false;
$config['news'][$nametype]['desc'] = true;          // Mô tả
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 200;
$config['news'][$nametype]['height'] = 200;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';
