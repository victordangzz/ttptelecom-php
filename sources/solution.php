<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   QUERIES CHO TRANG SOLUTION (REFACTORED)
   ===================================================== */

/* HERO SECTION */
$hero_solution = $d->rawQueryOne("select name$lang, slogan$lang, desc$lang, content$lang from #_static where type = ? and find_in_set('hienthi',status) limit 0,1", array('hero-solution'));

/* SOFTWARE OUTSOURCING (header + items) */
$outsourcing_all = $d->rawQuery("select name$lang, slogan$lang, desc$lang, content$lang, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('outsourcing-solutions'));
$outsourcing_header = null;
$outsourcing_solutions = array();
foreach ($outsourcing_all as $item) {
	if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
		$outsourcing_header = $item;
	} else {
		$outsourcing_solutions[] = $item;
	}
}

/* DEV PROCESS STEPS (header + steps) */
$dev_process_all = $d->rawQuery("select name$lang, slogan$lang, desc$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('dev-process-steps'));
$dev_process_header = null;
$dev_process_steps = array();
foreach ($dev_process_all as $item) {
	if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
		$dev_process_header = $item;
	} else {
		$dev_process_steps[] = $item;
	}
}

/* DIGITAL TRANSFORMATION (header + items) */
$digital_all = $d->rawQuery("select name$lang, slogan$lang, desc$lang, content$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('digital-solutions'));
$digital_header = null;
$digital_solutions = array();
foreach ($digital_all as $item) {
	if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
		$digital_header = $item;
	} else {
		$digital_solutions[] = $item;
	}
}

/* INDUSTRY SOLUTIONS - RETAIL (header + items) */
$industry_retail_all = $d->rawQuery("select name$lang, slogan$lang, desc$lang, content$lang, options from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('industry-retail'));
$industry_header = null;
$industry_retail = array();
foreach ($industry_retail_all as $item) {
	if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
		$industry_header = $item;
	} else {
		$industry_retail[] = $item;
	}
}

/* INDUSTRY SOLUTIONS - HEALTHCARE (items only, share header with retail) */
$industry_healthcare = $d->rawQuery("select name$lang, desc$lang, content$lang, options from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('industry-healthcare'));

/* TECH PLATFORMS (header + items) */
$tech_platforms_all = $d->rawQuery("select name$lang, slogan$lang, desc$lang, content$lang, options from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('tech-platforms'));
$tech_platforms_header = null;
$tech_platforms = array();
foreach ($tech_platforms_all as $item) {
	if (strtoupper($item['slogan' . $lang]) === 'HEADER') {
		$tech_platforms_header = $item;
	} else {
		$tech_platforms[] = $item;
	}
}

/* CTA SECTION */
$cta_solution = $d->rawQueryOne("select name$lang, desc$lang, content$lang from #_static where type = ? and find_in_set('hienthi',status) limit 0,1", array('cta-solution'));

/* SEO */
$seopage = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1", array('giai-phap'));
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

/* breadCrumbs */
if (!empty($titleMain)) $breadcr->set($com, $titleMain);
$breadcrumbs = $breadcr->get();
?>
