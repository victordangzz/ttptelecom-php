<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG NEWS - TRANG GIỚI THIỆU
   ===================================================== */

/* GIÁ TRỊ CỐT LÕI */
$nametype = "core-values";
$config['news'][$nametype]['title_main'] = "Giá trị cốt lõi";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Icon giá trị
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;        // Số thứ tự (01, 02, 03, 04)
$config['news'][$nametype]['desc'] = true;          // Mô tả giá trị
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 200;
$config['news'][$nametype]['height'] = 200;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';

/* HẠ TẦNG CÔNG NGHỆ */
$nametype = "infrastructure";
$config['news'][$nametype]['title_main'] = "Hạ tầng công nghệ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;        // Icon/ảnh hạ tầng
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = false;
$config['news'][$nametype]['desc'] = true;          // Mô tả
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 400;
$config['news'][$nametype]['height'] = 400;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp|.svg';

