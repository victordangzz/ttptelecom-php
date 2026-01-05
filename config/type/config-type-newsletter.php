<?php
/* Đăng ký nhận tin */
$nametype = "dangkynhantin";
$config['newsletter'][$nametype]['title_main'] = dangkynhantin;
$config['newsletter'][$nametype]['file'] = false;
$config['newsletter'][$nametype]['email'] = true;
$config['newsletter'][$nametype]['is_send'] = false;
$config['newsletter'][$nametype]['fullname'] = false;
$config['newsletter'][$nametype]['phone'] = false;
$config['newsletter'][$nametype]['address'] = false;
$config['newsletter'][$nametype]['subject'] = false;
$config['newsletter'][$nametype]['content'] = false;
$config['newsletter'][$nametype]['notes'] = false;
$config['newsletter'][$nametype]['confirm_status'] = array("1" => daxem, "2" => dalienhe, "3" => dathongbao);
$config['newsletter'][$nametype]['show_name'] = false;
$config['newsletter'][$nametype]['show_phone'] = false;
$config['newsletter'][$nametype]['show_date'] = true;
$config['newsletter'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif|.webp|.WEBP';
