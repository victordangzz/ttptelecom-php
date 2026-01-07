<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG NEWS - TRANG GIẢI PHÁP
   ===================================================== */

/* SOFTWARE OUTSOURCING - SOLUTION CARDS */
$nametype = "outsourcing-solutions";
$config['news'][$nametype]['title_main'] = "Software Outsourcing - Giải pháp";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;        // Badge text (CÔNG NGHỆ, GIẢI PHÁP, ĐỘI NGŨ)
$config['news'][$nametype]['name'] = true;          // Card title
$config['news'][$nametype]['desc'] = true;          // Card description
$config['news'][$nametype]['content'] = true;       // Features list (phân tách bằng |)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* DEV PROCESS STEPS - QUY TRÌNH PHÁT TRIỂN */
$nametype = "dev-process-steps";
$config['news'][$nametype]['title_main'] = "Quy trình phát triển phần mềm";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;        // Step number (1, 2, 3, 4, 5)
$config['news'][$nametype]['name'] = true;          // Step title
$config['news'][$nametype]['desc'] = true;          // Step description
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;

/* DIGITAL TRANSFORMATION - SOLUTIONS */
$nametype = "digital-solutions";
$config['news'][$nametype]['title_main'] = "Digital Transformation - Giải pháp";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;        // Badge text (MODULES, TÍNH NĂNG)
$config['news'][$nametype]['name'] = true;          // Solution title
$config['news'][$nametype]['desc'] = true;          // Solution subtitle
$config['news'][$nametype]['content'] = true;       // Features list (phân tách bằng |)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* INDUSTRY SOLUTIONS - RETAIL */
$nametype = "industry-retail";
$config['news'][$nametype]['title_main'] = "Industry Solutions - Bán lẻ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['name'] = true;          // Card title
$config['news'][$nametype]['desc'] = true;          // Card subtitle
$config['news'][$nametype]['content'] = true;       // Features list (phân tách bằng |)
$config['news'][$nametype]['options'] = true;       // Tags JSON: ["Tag 1", "Tag 2"]
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* INDUSTRY SOLUTIONS - HEALTHCARE */
$nametype = "industry-healthcare";
$config['news'][$nametype]['title_main'] = "Industry Solutions - Y tế & Giáo dục";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['name'] = true;          // Card title
$config['news'][$nametype]['desc'] = true;          // Card subtitle
$config['news'][$nametype]['content'] = true;       // Features list (phân tách bằng |)
$config['news'][$nametype]['options'] = true;       // Tags JSON: ["Tag 1", "Tag 2"]
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* TECH PLATFORMS */
$nametype = "tech-platforms";
$config['news'][$nametype]['title_main'] = "Nền tảng công nghệ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;        // Platform type (primary, secondary)
$config['news'][$nametype]['name'] = true;          // Platform title
$config['news'][$nametype]['desc'] = true;          // Platform subtitle
$config['news'][$nametype]['content'] = true;       // Platform description (long)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['options'] = true;       // JSON: {"features": [...], "highlight": "text"}
$config['news'][$nametype]['seo'] = false;

