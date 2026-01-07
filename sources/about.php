<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   QUERIES - TRANG GIỚI THIỆU
   ===================================================== */

/* Page Hero */
$hero = $d->rawQueryOne("select slogan$lang, name$lang, desc$lang from #_static where type = ? limit 0,1", array('hero-about'));

/* Company Profile */
$profile = $d->rawQueryOne("select slogan$lang, name$lang, desc$lang, content$lang, options from #_static where type = ? limit 0,1", array('profile-about'));
$profile_options = !empty($profile['options']) ? json_decode($profile['options'], true) : array();

/* Vision */
$vision = $d->rawQueryOne("select name$lang, desc$lang from #_static where type = ? limit 0,1", array('vision'));

/* Mission */
$mission = $d->rawQueryOne("select name$lang, desc$lang from #_static where type = ? limit 0,1", array('mission'));

/* Core Values Header */
$values_header = $d->rawQueryOne("select slogan$lang, name$lang, desc$lang from #_static where type = ? limit 0,1", array('header-values'));

/* Core Values List */
$core_values = $d->rawQuery("select slogan$lang, name$lang, desc$lang, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id asc", array('core-values'));

/* Infrastructure Header */
$infra_header = $d->rawQueryOne("select slogan$lang, name$lang, desc$lang from #_static where type = ? limit 0,1", array('header-infra'));

/* Infrastructure List */
$infrastructure = $d->rawQuery("select name$lang, desc$lang, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id asc", array('infrastructure'));

/* CTA Section */
$cta = $d->rawQueryOne("select name$lang, desc$lang, options from #_static where type = ? limit 0,1", array('cta-about'));
$cta_options = !empty($cta['options']) ? json_decode($cta['options'], true) : array();

/* =====================================================
   SEO
   ===================================================== */
$seopage = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1", array($com));
$seo->set('h1', $titleMain);
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

/* breadCrumbs */
if (!empty($titleMain)) $breadcr->set($com, $titleMain);
$breadcrumbs = $breadcr->get();
