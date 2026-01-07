<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG NEWS - TRANG CHỦ (REFACTORED V2)
   Gộp header vào mỗi section, dùng slogan để phân biệt
   ===================================================== */

/* GIỚI THIỆU TRANG CHỦ */
$nametype = "about-trangchu";
$config['news'][$nametype]['title_main'] = "Giới thiệu trang chủ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Ảnh giới thiệu
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;        // Badge text: "Về chúng tôi"
$config['news'][$nametype]['name'] = true;          // Tiêu đề: "Về TTP Telecom"
$config['news'][$nametype]['desc'] = true;          // Đoạn văn 1
$config['news'][$nametype]['desc_cke'] = true;
$config['news'][$nametype]['content'] = true;       // Đoạn văn 2
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 600;
$config['news'][$nametype]['height'] = 800;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp';
$config['news'][$nametype]['options'] = true;       // JSON: stats numbers & labels

/* DỊCH VỤ TRANG CHỦ */
$nametype = "dich-vu-trangchu";
$config['news'][$nametype]['title_main'] = "Dịch vụ trang chủ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = true;          // Link đến trang chi tiết
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Icon/ảnh dịch vụ
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;        // Dùng để phân biệt: "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;          // Tên dịch vụ (hoặc title nếu là header)
$config['news'][$nametype]['desc'] = true;          // Mô tả
$config['news'][$nametype]['desc_cke'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 200;
$config['news'][$nametype]['height'] = 200;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';

/* ƯU THẾ/TÍNH NĂNG - WHY CHOOSE US */
$nametype = "uu-the";
$config['news'][$nametype]['title_main'] = "Tại sao chọn chúng tôi";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Icon
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;        // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;          // Tên feature (hoặc title nếu header)
$config['news'][$nametype]['desc'] = true;          // Mô tả
$config['news'][$nametype]['desc_cke'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 200;
$config['news'][$nametype]['height'] = 200;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';
