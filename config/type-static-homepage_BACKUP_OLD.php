<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG STATIC - TRANG CHỦ
   ===================================================== */

/* HERO SECTION - BANNER TRANG CHỦ */
$nametype = "hero-trangchu";
$config['static'][$nametype]['title_main'] = "Hero trang chủ";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;      // Badge text: "Hạ tầng số cho doanh nghiệp"
$config['static'][$nametype]['name'] = true;        // Tiêu đề chính
$config['static'][$nametype]['desc'] = true;        // Mô tả
$config['static'][$nametype]['desc_cke'] = false;   // Không dùng CKEditor
$config['static'][$nametype]['content'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;
$config['static'][$nametype]['img_type'] = '.jpg|.png|.webp';

/* ABOUT SECTION - GIỚI THIỆU TRANG CHỦ */
$nametype = "about-trangchu";
$config['static'][$nametype]['title_main'] = "Giới thiệu trang chủ";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['images'] = true;      // Ảnh giới thiệu
$config['static'][$nametype]['slogan'] = true;      // Badge text: "Về chúng tôi"
$config['static'][$nametype]['name'] = true;        // Tiêu đề: "Về TTP Telecom"
$config['static'][$nametype]['desc'] = true;        // Đoạn văn 1
$config['static'][$nametype]['desc_cke'] = true;    // Dùng CKEditor
$config['static'][$nametype]['content'] = true;     // Đoạn văn 2
$config['static'][$nametype]['content_cke'] = true;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 600;
$config['static'][$nametype]['height'] = 800;
$config['static'][$nametype]['thumb'] = '100x100x2';
$config['static'][$nametype]['img_type'] = '.jpg|.png|.webp';

/* SERVICES HEADER - TIÊU ĐỀ SECTION DỊCH VỤ */
$nametype = "header-dichvu";
$config['static'][$nametype]['title_main'] = "Header dịch vụ";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;      // Badge: "Hệ sinh thái dịch vụ"
$config['static'][$nametype]['name'] = true;        // Tiêu đề
$config['static'][$nametype]['desc'] = true;        // Mô tả ngắn
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;

/* WHY CHOOSE HEADER - TIÊU ĐỀ TẠI SAO CHỌN CHÚNG TÔI */
$nametype = "header-uuthe";
$config['static'][$nametype]['title_main'] = "Header ưu thế";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;      // Badge
$config['static'][$nametype]['name'] = true;        // Tiêu đề
$config['static'][$nametype]['desc'] = true;        // Mô tả
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;

