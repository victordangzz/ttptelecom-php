<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG STATIC - TRANG GIẢI PHÁP
   ===================================================== */

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

/* SOFTWARE OUTSOURCING - HEADER */
$nametype = "outsourcing-header";
$config['static'][$nametype]['title_main'] = "Software Outsourcing - Header";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['name'] = true;          // Section title
$config['static'][$nametype]['desc'] = true;          // Section description
$config['static'][$nametype]['photo'] = true;         // Hero image
$config['static'][$nametype]['images'] = true;
$config['static'][$nametype]['show_images'] = true;
$config['static'][$nametype]['width'] = 1200;
$config['static'][$nametype]['height'] = 600;
$config['static'][$nametype]['thumb'] = '1200x600x1';
$config['static'][$nametype]['img_type'] = '.jpg|.png|.webp';
$config['static'][$nametype]['seo'] = false;

/* DEV PROCESS - HEADER */
$nametype = "dev-process-header";
$config['static'][$nametype]['title_main'] = "Dev Process - Header";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;        // Badge text
$config['static'][$nametype]['name'] = true;          // Section title
$config['static'][$nametype]['seo'] = false;

/* DIGITAL TRANSFORMATION - HEADER */
$nametype = "digital-header";
$config['static'][$nametype]['title_main'] = "Digital Transformation - Header";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['name'] = true;          // Section title
$config['static'][$nametype]['desc'] = true;          // Section description
$config['static'][$nametype]['seo'] = false;

/* INDUSTRY SOLUTIONS - HEADER */
$nametype = "industry-header";
$config['static'][$nametype]['title_main'] = "Industry Solutions - Header";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;        // Badge text
$config['static'][$nametype]['name'] = true;          // Section title
$config['static'][$nametype]['desc'] = true;          // Section description
$config['static'][$nametype]['seo'] = false;

/* TECH PLATFORMS - HEADER */
$nametype = "tech-platforms-header";
$config['static'][$nametype]['title_main'] = "Tech Platforms - Header";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;        // Badge text
$config['static'][$nametype]['name'] = true;          // Section title
$config['static'][$nametype]['desc'] = true;          // Section description
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

