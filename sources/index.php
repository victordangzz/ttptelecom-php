<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   QUERIES CHO TRANG CHỦ (REFACTORED V2)
   Giảm số lượng queries, gộp header vào content
   ===================================================== */

/* HERO SECTION - Banner trang chủ (Static) */
$hero = $d->rawQueryOne("select name$lang, slogan$lang, desc$lang, options from #_static where type = ? and find_in_set('hienthi',status) limit 0,1", array('hero-trangchu'));

/* ABOUT SECTION - Giới thiệu (News - 1 item) */
$about_section = $d->rawQuery("select name$lang, slogan$lang, desc$lang, content$lang, photo, options from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,1", array('about-trangchu'));

/* SERVICES SECTION - Dịch vụ (News - header + cards) */
// Bao gồm cả header (slogan="HEADER") và service cards
$services = $d->rawQuery("select name$lang, slogan$lang, desc$lang, photo, slug$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu-trangchu'));

/* WHY CHOOSE SECTION - Ưu thế (News - header + features) */
// Bao gồm cả header (slogan="HEADER") và feature items
$features = $d->rawQuery("select name$lang, slogan$lang, desc$lang, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('uu-the'));

/* =====================================================
   QUERIES CŨ (Giữ lại nếu cần dùng)
   ===================================================== */
// $slider = $d->rawQuery("select name$lang, desc$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('slide'));
// $slogan_activity = $d->rawQueryOne("select name$lang from #_static where type = ? and find_in_set('hienthi',status)", array('slogan_hd'));
// $slogan_service = $d->rawQueryOne("select name$lang from #_static where type = ? and find_in_set('hienthi',status)", array('slogan_dv'));
// $slogan_ecosystem = $d->rawQueryOne("select name$lang from #_static where type = ? and find_in_set('hienthi',status)", array('slogan_hst'));
// $slogan_criteria = $d->rawQueryOne("select name$lang, desc$lang from #_static where type = ? and find_in_set('hienthi',status)", array('slogan_tc'));
// $activities = $d->rawQuery("select name$lang, desc$lang, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('cachhoatdong'));
// $ecosystems = $d->rawQuery("select name$lang, id from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,3", array('hesinhthai'));
// $criterias = $d->rawQuery("select name$lang, desc$lang, content$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,3", array('tieuchi'));
// $vuxs = $d->rawQuery("select name$lang, desc$lang, slogan$lang, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('vux'));
// $hesinhthaidichvus = $d->rawQuery("select name$lang, desc$lang, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('he-sinh-thai-dich-vu'));
/* SEO */
$seopage = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1", array('trang-chu'));
$seo->set('h1', $seopage['title' . $seolang]);
if (!empty($seopage['title' . $seolang])) $seo->set('title', $seopage['title' . $seolang]);
else $seo->set('title', $titleMain);
if (!empty($seopage['keywords' . $seolang])) $seo->set('keywords', $seopage['keywords' . $seolang]);
if (!empty($seopage['description' . $seolang])) $seo->set('description', $seopage['description' . $seolang]);
$seo->set('url', $func->getPageURL());
$imgJson = (!empty($seopage['options'])) ? json_decode($seopage['options'], true) : null;
if (!empty($seopage['photo'])) {
  if (empty($imgJson) || ($imgJson['p'] != $seopage['photo'])) {
    $imgJson = $func->getImgSize($seopage['photo'], UPLOAD_SEOPAGE_L . $seopage['photo']);
    $seo->updateSeoDB(json_encode($imgJson), 'seopage', $seopage['id']);
  }
  if (!empty($imgJson)) {
    $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_SEOPAGE_L . $seopage['photo']);
    $seo->set('photo:width', $imgJson['w']);
    $seo->set('photo:height', $imgJson['h']);
    $seo->set('photo:type', $imgJson['m']);
  }
}
