<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG - TRANG CHỦ (ALL MODULES)
   Bao gồm: Static + News modules
   ===================================================== */

// =====================================================
// STATIC MODULES
// =====================================================

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

// =====================================================
// NEWS MODULES
// =====================================================

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

/* DỰ ÁN TIÊU BIỂU */
$nametype = "du-an-tieu-bieu";
$config['news'][$nametype]['title_main'] = "Dự án tiêu biểu";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Ảnh dự án
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;        // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;          // Tên dự án (hoặc title section nếu header)
$config['news'][$nametype]['desc'] = true;          // Mô tả ngắn dự án
$config['news'][$nametype]['desc_cke'] = false;
$config['news'][$nametype]['content'] = true;       // Mô tả chi tiết
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 800;
$config['news'][$nametype]['height'] = 600;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp';

/* ĐỐI TÁC */
$nametype = "doi-tac";
$config['news'][$nametype]['title_main'] = "Đối tác";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Logo đối tác
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;        // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;          // Tên đối tác (hoặc title section nếu header)
$config['news'][$nametype]['desc'] = true;         // Không cần mô tả
$config['news'][$nametype]['desc_cke'] = false;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 300;
$config['news'][$nametype]['height'] = 200;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';

/* NỀN TẢNG CÔNG NGHỆ */
$nametype = "nen-tang-cong-nghe";
$config['news'][$nametype]['title_main'] = "Nền tảng công nghệ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Icon/Logo công nghệ
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;        // "HEADER" hoặc để trống hoặc "primary"/"secondary" cho màu icon
$config['news'][$nametype]['name'] = true;          // Tên công nghệ (hoặc title section nếu header)
$config['news'][$nametype]['desc'] = true;          // Mô tả ngắn (hoặc subtitle nếu header)
$config['news'][$nametype]['desc_cke'] = false;
$config['news'][$nametype]['content'] = true;       // Mô tả chi tiết
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['options'] = true;       // JSON: features (array), applications (text)
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 200;
$config['news'][$nametype]['height'] = 200;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';

/* HẠ TẦNG VẬT LÝ */
$nametype = "ha-tang-vung-chac";
$config['news'][$nametype]['title_main'] = "Hạ tầng vật lý";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;   // Không cần ảnh, dùng icon SVG
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;        // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;          // Tên hạ tầng (hoặc title section nếu header)
$config['news'][$nametype]['desc'] = true;          // Mô tả ngắn
$config['news'][$nametype]['desc_cke'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['options'] = true;       // JSON: badge text (VD: "Tier 3 Uptime", "10Gbps+")

/* THẾ MẠNH TTP TELECOM */
$nametype = "the-manh-ttp";
$config['news'][$nametype]['title_main'] = "Thế mạnh TTP Telecom";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;   // Không cần ảnh, dùng icon SVG
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;        // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;          // Số liệu (VD: "10+", "100+")
$config['news'][$nametype]['desc'] = true;          // Label (VD: "Năm kinh nghiệm")
$config['news'][$nametype]['desc_cke'] = false;
$config['news'][$nametype]['content'] = true;       // Mô tả chi tiết (VD: "Dày dặn trong lĩnh vực IT")
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* CALL TO ACTION - LIÊN HỆ */
$nametype = "cta-lienhe";
$config['static'][$nametype]['title_main'] = "Call to Action - Liên hệ";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;      // Badge text: "Bắt đầu ngay hôm nay"
$config['static'][$nametype]['name'] = true;        // Tiêu đề chính
$config['static'][$nametype]['desc'] = true;        // Mô tả
$config['static'][$nametype]['desc_cke'] = true;
$config['static'][$nametype]['content'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;
$config['static'][$nametype]['options'] = true;     // JSON: button text & link, features list
