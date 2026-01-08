<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG - TRANG GIẢI PHÁP (ALL MODULES)
   Bao gồm: Static + News modules
   ===================================================== */

// =====================================================
// STATIC MODULES
// =====================================================

/* HERO SECTION - BANNER TRANG GIẢI PHÁP */
$nametype = "hero-solution";
$config['static'][$nametype]['title_main'] = "Hero trang Giải pháp";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;        // Badge text
$config['static'][$nametype]['name'] = true;          // Hero title
$config['static'][$nametype]['desc'] = true;          // Hero description (short)
$config['static'][$nametype]['content'] = true;       // Hero description (long)
$config['static'][$nametype]['content_cke'] = false;
$config['static'][$nametype]['seo'] = false;

/* CTA SECTION */
$nametype = "cta-solution";
$config['static'][$nametype]['title_main'] = "CTA Section - Giải pháp";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['name'] = true;          // CTA title
$config['static'][$nametype]['desc'] = true;          // CTA description (short)
$config['static'][$nametype]['content'] = true;       // CTA description (long)
$config['static'][$nametype]['content_cke'] = false;
$config['static'][$nametype]['seo'] = false;

// =====================================================
// NEWS MODULES
// =====================================================

/* SOFTWARE OUTSOURCING - SOLUTION CARDS (bao gồm header) */
$nametype = "outsourcing-solutions";
$config['news'][$nametype]['title_main'] = "Software Outsourcing - Giải pháp";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;         // Ảnh header
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc badge (CÔNG NGHỆ, GIẢI PHÁP, ĐỘI NGŨ)
$config['news'][$nametype]['name'] = true;           // Card title (hoặc section title nếu header)
$config['news'][$nametype]['desc'] = true;           // Card description
$config['news'][$nametype]['content'] = true;        // Features list (phân tách bằng |)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 1200;
$config['news'][$nametype]['height'] = 600;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp';

/* DEV PROCESS STEPS - QUY TRÌNH PHÁT TRIỂN (bao gồm header) */
$nametype = "dev-process-steps";
$config['news'][$nametype]['title_main'] = "Quy trình phát triển phần mềm";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc step number (1, 2, 3, 4, 5)
$config['news'][$nametype]['name'] = true;           // Step title (hoặc section title nếu header)
$config['news'][$nametype]['desc'] = true;           // Step description
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;

/* DIGITAL TRANSFORMATION - SOLUTIONS (bao gồm header) */
$nametype = "digital-solutions";
$config['news'][$nametype]['title_main'] = "Digital Transformation - Giải pháp";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc badge (MODULES, TÍNH NĂNG)
$config['news'][$nametype]['name'] = true;           // Solution title (hoặc section title nếu header)
$config['news'][$nametype]['desc'] = true;           // Solution subtitle
$config['news'][$nametype]['content'] = true;        // Features list (phân tách bằng |)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* INDUSTRY SOLUTIONS - RETAIL (bao gồm header) */
$nametype = "industry-retail";
$config['news'][$nametype]['title_main'] = "Industry Solutions - Bán lẻ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;           // Card title (hoặc section title nếu header)
$config['news'][$nametype]['desc'] = true;           // Card subtitle
$config['news'][$nametype]['content'] = true;        // Features list (phân tách bằng |)
$config['news'][$nametype]['options'] = true;        // Tags JSON: ["Tag 1", "Tag 2"]
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* INDUSTRY SOLUTIONS - HEALTHCARE (không có header riêng) */
$nametype = "industry-healthcare";
$config['news'][$nametype]['title_main'] = "Industry Solutions - Y tế & Giáo dục";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;         // Để trống (không dùng header)
$config['news'][$nametype]['name'] = true;           // Card title
$config['news'][$nametype]['desc'] = true;           // Card subtitle
$config['news'][$nametype]['content'] = true;        // Features list (phân tách bằng |)
$config['news'][$nametype]['options'] = true;        // Tags JSON: ["Tag 1", "Tag 2"]
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* TECH PLATFORMS (bao gồm header) */
$nametype = "tech-platforms";
$config['news'][$nametype]['title_main'] = "Nền tảng công nghệ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc platform type (primary, secondary)
$config['news'][$nametype]['name'] = true;           // Platform title (hoặc section title nếu header)
$config['news'][$nametype]['desc'] = true;           // Platform subtitle
$config['news'][$nametype]['content'] = true;        // Platform description (long)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['options'] = true;        // JSON: {"features": [...], "highlight": "text"}
$config['news'][$nametype]['seo'] = false;
