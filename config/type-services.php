<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG - TRANG DỊCH VỤ (ALL MODULES)
   Bao gồm: Static + News modules
   ===================================================== */

// =====================================================
// STATIC MODULES
// =====================================================

/* SERVICE HERO - BANNER TRANG DỊCH VỤ */
$nametype = "hero-services";
$config['static'][$nametype]['title_main'] = "Hero trang dịch vụ";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['slogan'] = true;      // Badge: "Dịch vụ hạ tầng số"
$config['static'][$nametype]['name'] = true;        // Tiêu đề: "Dịch Vụ TTP Telecom"
$config['static'][$nametype]['desc'] = true;        // Mô tả 1
$config['static'][$nametype]['content'] = true;     // Mô tả 2
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content_cke'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;

/* CTA SECTION - CALL TO ACTION */
$nametype = "cta-services";
$config['static'][$nametype]['title_main'] = "CTA trang dịch vụ";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['name'] = true;        // Tiêu đề CTA
$config['static'][$nametype]['desc'] = true;        // Mô tả 1
$config['static'][$nametype]['content'] = true;     // Mô tả 2
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content_cke'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 0;
$config['static'][$nametype]['height'] = 0;

// =====================================================
// NEWS MODULES
// =====================================================

/* TTP CONNECT - DỊCH VỤ KẾT NỐI (bao gồm header) */
$nametype = "ttp-connect-items";
$config['news'][$nametype]['title_main'] = "TTP Connect - Dịch vụ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;         // Ảnh header (cho item HEADER)
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;           // Tên dịch vụ (hoặc title nếu header)
$config['news'][$nametype]['desc'] = true;           // Mô tả
$config['news'][$nametype]['content'] = true;        // Các features (list)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 1200;
$config['news'][$nametype]['height'] = 600;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp';

/* TTP DATA - DỊCH VỤ DATA CENTER (bao gồm header) */
$nametype = "ttp-data-items";
$config['news'][$nametype]['title_main'] = "TTP Data - Dịch vụ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;         // Ảnh header
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc giá
$config['news'][$nametype]['name'] = true;           // Tên dịch vụ (hoặc title)
$config['news'][$nametype]['desc'] = true;           // Mô tả
$config['news'][$nametype]['content'] = true;        // Các features (list)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 1200;
$config['news'][$nametype]['height'] = 600;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp';

/* DATA CENTER ADVANTAGES - ƯU ĐIỂM DATA CENTER (bao gồm header) */
$nametype = "data-center-advantages";
$config['news'][$nametype]['title_main'] = "Ưu điểm Data Center";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;           // Tên ưu điểm (hoặc title)
$config['news'][$nametype]['desc'] = true;           // Mô tả (cho header)
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;

/* TTP CLOUD - DỊCH VỤ CLOUD (bao gồm header) */
$nametype = "ttp-cloud-items";
$config['news'][$nametype]['title_main'] = "TTP Cloud - Dịch vụ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;         // Ảnh header
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;           // Tên dịch vụ (hoặc title)
$config['news'][$nametype]['desc'] = true;           // Mô tả
$config['news'][$nametype]['content'] = true;        // Các specs (list)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 1200;
$config['news'][$nametype]['height'] = 600;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp';

/* WHY CHOOSE CLOUD - TẠI SAO CHỌN CLOUD (bao gồm header) */
$nametype = "why-choose-cloud";
$config['news'][$nametype]['title_main'] = "Tại sao chọn TTP Cloud";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;           // Tiêu đề
$config['news'][$nametype]['desc'] = true;           // Mô tả
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;

/* TTP INFRA - DỊCH VỤ HẠ TẦNG (bao gồm header) */
$nametype = "ttp-infra-items";
$config['news'][$nametype]['title_main'] = "TTP Infra - Dịch vụ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;         // Ảnh header
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc để trống
$config['news'][$nametype]['name'] = true;           // Tên dịch vụ (hoặc title)
$config['news'][$nametype]['desc'] = true;           // Mô tả
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 1200;
$config['news'][$nametype]['height'] = 600;
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.png|.webp';

/* PROCESS STEPS - QUY TRÌNH TRIỂN KHAI (bao gồm header) */
$nametype = "process-steps";
$config['news'][$nametype]['title_main'] = "Quy trình triển khai";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;         // "HEADER" hoặc số bước (1, 2, 3, 4)
$config['news'][$nametype]['name'] = true;           // Tên bước (hoặc title nếu header)
$config['news'][$nametype]['desc'] = true;           // Mô tả
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;
