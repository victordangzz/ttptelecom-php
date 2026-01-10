<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG - TRANG GIỚI THIỆU (ALL MODULES)
   Bao gồm: Static + News modules
   ===================================================== */

// =====================================================
// STATIC MODULES
// =====================================================

/* PAGE HERO - BANNER TRANG GIỚI THIỆU */
$nametype = "hero-about";
$config['static'][$nametype]['title_main'] = "Hero trang giới thiệu";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;      // Badge text: "Về chúng tôi"
$config['static'][$nametype]['name'] = true;        // Tiêu đề: "Giới Thiệu TTP Telecom"
$config['static'][$nametype]['desc'] = true;        // Mô tả ngắn
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;

/* COMPANY PROFILE - HỒ SƠ CÔNG TY */
$nametype = "profile-about";
$config['static'][$nametype]['title_main'] = "Hồ sơ công ty";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;      // Badge: "Hồ sơ công ty"
$config['static'][$nametype]['name'] = true;        // Tiêu đề
$config['static'][$nametype]['desc'] = true;        // Đoạn văn 1
$config['static'][$nametype]['desc_cke'] = true;
$config['static'][$nametype]['content'] = true;     // Đoạn văn 2
$config['static'][$nametype]['content_cke'] = true;
$config['static'][$nametype]['options'] = true;     // JSON: stats (stat1_value, stat1_label, stat2_value, stat2_label, stat3_value, stat3_label, stat4_value, stat4_label)
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;

/* CTA SECTION - CALL TO ACTION */
$nametype = "cta-about";
$config['static'][$nametype]['title_main'] = "CTA trang giới thiệu";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['name'] = true;        // Tiêu đề CTA
$config['static'][$nametype]['desc'] = true;        // Mô tả CTA
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;

// =====================================================
// NEWS MODULES
// =====================================================

/* TẦM NHÌN & SỨ MỆNH */
$nametype = "vision-mission";
$config['news'][$nametype]['title_main'] = "Tầm nhìn & Sứ mệnh";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['slogan'] = true;        // "Vision" hoặc "Mission"
$config['news'][$nametype]['name'] = true;          // Tiêu đề
$config['news'][$nametype]['desc'] = true;          // Nội dung
$config['news'][$nametype]['desc_cke'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 0;
$config['news'][$nametype]['height'] = 0;

/* GIÁ TRỊ CỐT LÕI (bao gồm header) */
$nametype = "core-values";
$config['news'][$nametype]['title_main'] = "Giá trị cốt lõi";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Icon giá trị
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;        // "HEADER" hoặc số (01, 02, 03, 04)
$config['news'][$nametype]['name'] = true;          // Tên giá trị (hoặc title nếu header)
$config['news'][$nametype]['desc'] = true;          // Mô tả giá trị (hoặc desc nếu header)
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 200;
$config['news'][$nametype]['height'] = 200;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';

/* HẠ TẦNG CÔNG NGHỆ (bao gồm header) */
$nametype = "infrastructure";
$config['news'][$nametype]['title_main'] = "Hạ tầng công nghệ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Icon/ảnh hạ tầng
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;        // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;          // Tên hạ tầng (hoặc title nếu header)
$config['news'][$nametype]['desc'] = true;          // Mô tả (hoặc desc nếu header)
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 400;
$config['news'][$nametype]['height'] = 400;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';

// =====================================================
// MODULES MỚI (Theo thiết kế mới)
// =====================================================

/* ABOUT INTRO - GIỚI THIỆU CÔNG TY (với ảnh) */
$nametype = "about-intro";
$config['static'][$nametype]['title_main'] = "Giới thiệu công ty";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['images'] = true;      // Ảnh team/office
$config['static'][$nametype]['show_images'] = true;
$config['static'][$nametype]['slogan'] = true;      // Badge text: "Giới thiệu"
$config['static'][$nametype]['name'] = true;        // Tiêu đề: "Về TTP Telecom"
$config['static'][$nametype]['desc'] = true;        // Đoạn văn 1
$config['static'][$nametype]['desc_cke'] = true;
$config['static'][$nametype]['content'] = true;     // Đoạn văn 2 & 3
$config['static'][$nametype]['content_cke'] = true;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 800;
$config['static'][$nametype]['height'] = 600;
$config['static'][$nametype]['thumb'] = '400x300x1';
$config['static'][$nametype]['img_type'] = '.jpg|.png|.webp';

/* ABOUT STATS - SỐ LIỆU NỔI BẬT */
$nametype = "about-stats";
$config['news'][$nametype]['title_main'] = "Số liệu nổi bật";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['slogan'] = true;        // "HEADER" hoặc "primary"/"secondary"
$config['news'][$nametype]['name'] = true;          // Value: "50+", "3", "100+", "99.9%"
$config['news'][$nametype]['desc'] = true;          // Label: "Đội ngũ nhân sự chuyên nghiệp"
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['options'] = true;       // JSON: icon type

/* CORE VALUES IMAGE - ẢNH ĐỘI NGŨ */
$nametype = "core-values-image";
$config['static'][$nametype]['title_main'] = "Ảnh đội ngũ (Core Values)";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['images'] = true;      // Ảnh team meeting lớn
$config['static'][$nametype]['show_images'] = true;
$config['static'][$nametype]['name'] = false;
$config['static'][$nametype]['desc'] = false;
$config['static'][$nametype]['content'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 1200;
$config['static'][$nametype]['height'] = 500;
$config['static'][$nametype]['thumb'] = '600x250x1';
$config['static'][$nametype]['img_type'] = '.jpg|.png|.webp';
