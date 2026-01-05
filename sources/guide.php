<?php
if (!defined('SOURCES')) die("Error");
$seopage = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1", array($type));
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

$guide_list = $d->rawQuery("select name$lang, id from #_news_list where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,2", array($type));
$msd = $d->rawQuery("select name$lang, desc$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,4", array("meosudung"));
$chtg = $d->rawQuery("select name$lang, desc$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array("chtg"));

if (!empty($titleMain)) $breadcr->set($com, $titleMain);
$breadcrumbs = $breadcr->get();