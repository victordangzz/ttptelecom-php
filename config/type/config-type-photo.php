<?php
/* Logo */
$nametype = "logo";
$config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 142;
$config['photo']['photo_static'][$nametype]['height'] = 32;
$config['photo']['photo_static'][$nametype]['thumb'] = '142x32x2';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Favicon */
$nametype = "favicon";
$config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 48;
$config['photo']['photo_static'][$nametype]['height'] = 48;
$config['photo']['photo_static'][$nametype]['thumb'] = '48x48x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Slideshow */
$nametype = "slide";
$config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
$config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => hienthi);
$config['photo']['man_photo'][$nametype]['number_photo'] = 2;
$config['photo']['man_photo'][$nametype]['images_photo'] = true;
$config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
$config['photo']['man_photo'][$nametype]['link_photo'] = true;
$config['photo']['man_photo'][$nametype]['name_photo'] = true;
$config['photo']['man_photo'][$nametype]['desc_photo'] = true;
$config['photo']['man_photo'][$nametype]['width_photo'] = 1920;
$config['photo']['man_photo'][$nametype]['height_photo'] = 880;
$config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
$config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';
