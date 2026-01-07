<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   CONFIG NEWS - TRANG DỊCH VỤ
   ===================================================== */

/* TTP CONNECT - DỊCH VỤ KẾT NỐI */
$nametype = "ttp-connect-items";
$config['news'][$nametype]['title_main'] = "TTP Connect - Dịch vụ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['name'] = true;           // Tên dịch vụ
$config['news'][$nametype]['desc'] = true;           // Mô tả
$config['news'][$nametype]['content'] = true;        // Các features (list)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* TTP DATA - DỊCH VỤ DATA CENTER */
$nametype = "ttp-data-items";
$config['news'][$nametype]['title_main'] = "TTP Data - Dịch vụ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;        // Giá (optional)
$config['news'][$nametype]['name'] = true;          // Tên dịch vụ
$config['news'][$nametype]['desc'] = true;          // Mô tả
$config['news'][$nametype]['content'] = true;       // Các features (list)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* TTP CLOUD - DỊCH VỤ CLOUD */
$nametype = "ttp-cloud-items";
$config['news'][$nametype]['title_main'] = "TTP Cloud - Dịch vụ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['name'] = true;          // Tên dịch vụ
$config['news'][$nametype]['desc'] = true;          // Mô tả
$config['news'][$nametype]['content'] = true;       // Các specs (list)
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;

/* TTP INFRA - DỊCH VỤ HẠ TẦNG */
$nametype = "ttp-infra-items";
$config['news'][$nametype]['title_main'] = "TTP Infra - Dịch vụ";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['name'] = true;          // Tên dịch vụ
$config['news'][$nametype]['desc'] = true;          // Mô tả
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;

/* PROCESS STEPS - QUY TRÌNH TRIỂN KHAI */
$nametype = "process-steps";
$config['news'][$nametype]['title_main'] = "Quy trình triển khai";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['slogan'] = true;        // Số bước (1, 2, 3, 4)
$config['news'][$nametype]['name'] = true;          // Tên bước
$config['news'][$nametype]['desc'] = true;          // Mô tả
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;

/* DATA CENTER ADVANTAGES - ƯU ĐIỂM DATA CENTER */
$nametype = "data-center-advantages";
$config['news'][$nametype]['title_main'] = "Ưu điểm Data Center";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['name'] = true;          // Tên ưu điểm
$config['news'][$nametype]['desc'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;

/* WHY CHOOSE CLOUD - TẠI SAO CHỌN CLOUD */
$nametype = "why-choose-cloud";
$config['news'][$nametype]['title_main'] = "Tại sao chọn TTP Cloud";
$config['news'][$nametype]['view'] = false;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = false;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = false;
$config['news'][$nametype]['show_images'] = false;
$config['news'][$nametype]['name'] = true;          // Tiêu đề
$config['news'][$nametype]['desc'] = true;          // Mô tả
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['seo'] = false;

