<?php
/* Về chúng tôi */
$nametype = "ve-chung-toi";
$config['static'][$nametype]['title_main'] = "Về chúng tôi";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['images'] = true;
$config['static'][$nametype]['link'] = false;
$config['static'][$nametype]['video'] = false;
$config['static'][$nametype]['file'] = false;
$config['static'][$nametype]['name'] = true;
$config['static'][$nametype]['desc'] = false;
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content'] = true;
$config['static'][$nametype]['content_cke'] = true;
$config['static'][$nametype]['seo'] = true;
$config['static'][$nametype]['width'] = 300;
$config['static'][$nametype]['height'] = 200;
$config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
$config['static'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif';

/* SLOGAN HOẠT ĐỘNG */
$nametype = "slogan_hd";
$config['static'][$nametype]['title_main'] = "Slogan hoạt động";
$config['static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['static'][$nametype]['name'] = true;

/* ===== CÁC MODULE CŨ - ĐÃ XÓA ===== */
/*
$nametype = "slogan_dv"; // Slogan dịch vụ
$nametype = "slogan_hst"; // Slogan hệ sinh thái
$nametype = "slogan_tc"; // Slogan tiêu chí
// ... (đã comment out)
*/

/* Slogan */
$nametype = "slogan";
$config['static'][$nametype]['title_main'] = "Slogan";
$config['static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['static'][$nametype]['name'] = true;

/* Copyright */
$nametype = "copyright";
$config['static'][$nametype]['title_main'] = "Copyright";
$config['static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['static'][$nametype]['name'] = true;

/* Footer */
$nametype = "footer";
$config['static'][$nametype]['title_main'] = "Footer";
$config['static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['static'][$nametype]['name'] = true;
$config['static'][$nametype]['content'] = true;
$config['static'][$nametype]['content_cke'] = true;
