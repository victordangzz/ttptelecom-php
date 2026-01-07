<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG STATIC - TRANG CHỦ (REFACTORED V2)
   Chỉ giữ Hero section, các phần khác chuyển sang NEWS
   ===================================================== */

/* HERO SECTION - BANNER TRANG CHỦ */
$nametype = "hero-trangchu";
$config['static'][$nametype]['title_main'] = "Hero trang chủ";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;      // Badge text: "Hạ tầng số cho doanh nghiệp"
$config['static'][$nametype]['name'] = true;        // Tiêu đề chính
$config['static'][$nametype]['desc'] = true;        // Mô tả
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;
$config['static'][$nametype]['options'] = true;     // JSON: button texts & links
$config['static'][$nametype]['img_type'] = '.jpg|.png|.webp';

