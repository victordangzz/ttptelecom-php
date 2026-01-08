<?php
/* CÁCH HOẠT ĐỘNG */
$nametype = "cachhoatdong";
$config['news'][$nametype]['title_main'] = "Cách hoạt động";
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;  
$config['news'][$nametype]['width'] = 45;
$config['news'][$nametype]['height'] = 45;
$config['news'][$nametype]['thumb'] = '45x45x2';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';



/* Hero Section*/
$nametype = "hero-section";
$config['news'][$nametype]['title_main'] = "Hero Section";
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['slogan'] = true;
$config['news'][$nametype]['desc'] = true;  
$config['news'][$nametype]['width'] = 45;
$config['news'][$nametype]['height'] = 45;
$config['news'][$nametype]['thumb'] = '45x45x2';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';


/* ===== MODULE CŨ - ĐÃ XÓA ===== */
/*
$nametype = "he-sinh-thai-dich-vu";
$config['news'][$nametype]['title_main'] = "Hệ sinh thái dịch vụ";
// ... (đã comment out)
*/


/* ===== MODULE CŨ - ĐÃ XÓA ===== */
/*
$nametype = "dich-vu";
$config['news'][$nametype]['title_main'] = "Dịch vụ";
// ... (đã comment out)
*/

/* ===== CÁC MODULE CŨ - ĐÃ XÓA ===== */
/*
$nametype = "chien-dich-khuyen-mai"; // Chiến dịch khuyến mãi
$nametype = "hesinhthai"; // Hệ sinh thái
$nametype = "tieuchi"; // Tiêu chí
$nametype = "ho-tro"; // Hỗ trợ
// ... (đã comment out)
*/

/* LIÊN HỆ VỚI CHÚNG TÔI */
$nametype = "lienhevoichungtoi";
$config['news'][$nametype]['title_main'] = "Liên hệ với chúng tôi";
$config['news'][$nametype]['check'] = array("hienthi" => hienthi);
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['width'] = 24;
$config['news'][$nametype]['height'] = 24;
$config['news'][$nametype]['thumb'] = '24x24x2';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* ===== CÁC MODULE CŨ - ĐÃ XÓA ===== */
/*
$nametype = "chtg"; // Câu hỏi thường gặp
$nametype = "meosudung"; // Mẹo sử dụng hiệu quả
// ... (đã comment out)
*/

/* HƯỚNG DẪN SỬ DỤNG */
$nametype = "huong-dan-su-dung";
$config['news'][$nametype]['title_main'] = "Hướng dẫn sử dụng";
$config['news'][$nametype]['dropdown'] = true;
$config['news'][$nametype]['list'] = true;
$config['news'][$nametype]['slogan'] = true;
$config['news'][$nametype]['icon'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['desc_cke'] = true;
$config['news'][$nametype]['width'] = 484;
$config['news'][$nametype]['height'] = 860;
$config['news'][$nametype]['width_icon'] = 24;
$config['news'][$nametype]['height_icon'] = 24;
$config['news'][$nametype]['thumb_icon'] = '24x24x1';
$config['news'][$nametype]['thumb'] = '100x100x2';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* HƯỚNG DẪN SỬ DỤNG DANH MỤC CẤP 1 */
$config['news'][$nametype]['title_main_list'] = danhmuccap1;
$config['news'][$nametype]['check_list'] = array("hienthi" => hienthi);

/* ===== CÁC MODULE CŨ - ĐÃ XÓA ===== */
/*
$nametype = "tin-tuc"; // Tin tức
$nametype = "chinh-sach"; // Chính sách
$nametype = "loiich"; // Lợi ích
$nametype = "ycdk"; // Yêu cầu đăng ký
$nametype = "qtdk"; // Quy trình đăng ký
$nametype = "tinh_nang_ud"; // Tính năng ứng dụng
// ... (đã comment out)
*/

/* Quản lý mục (Không cấp) */
if (isset($config['news'])) {
  foreach ($config['news'] as $key => $value) {
    if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
      $config['shownews'] = 1;
      break;
    }
  }
}
