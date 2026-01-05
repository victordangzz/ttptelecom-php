<?php
if (!defined('SOURCES')) die("Error");
@$id = htmlspecialchars($_GET['id']);
if($id!='') {
    /* Lấy bài viết detail */
		$rowDetail = $d->rawQueryOne("select id, view, date_created, type, name$lang, slug$lang, desc$lang, content$lang, photo, options from #_news where id = ? and type = ? and find_in_set('hienthi',status) limit 0,1",array($id,$type));

		/* Lấy bài viết cùng loại */
		$where = "";
		$where = "id <> ? and type = ? and find_in_set('hienthi',status)";
		$params = array($id,$type);
		$sql = "select id, name$lang, slug$lang, photo, date_created, desc$lang from #_news where $where order by numb,id desc";
		$news = $d->rawQuery($sql,$params);

		/* SEO */
		$seoDB = $seo->getOnDB($rowDetail['id'],'news','man',$rowDetail['type']);
		$seo->set('h1',$rowDetail['name'.$lang]);
		if(!empty($seoDB['title'.$seolang])) $seo->set('title',$seoDB['title'.$seolang]);
		else $seo->set('title',$rowDetail['name'.$lang]);
		if(!empty($seoDB['keywords'.$seolang])) $seo->set('keywords',$seoDB['keywords'.$seolang]);
		if(!empty($seoDB['description'.$seolang])) $seo->set('description',$seoDB['description'.$seolang]);
		$seo->set('url',$func->getPageURL());
		$imgJson = (!empty($rowDetail['options'])) ? json_decode($rowDetail['options'],true) : null;
		if(empty($imgJson) || ($imgJson['p'] != $rowDetail['photo']))
		{
			$imgJson = $func->getImgSize($rowDetail['photo'],UPLOAD_NEWS_L.$rowDetail['photo']);
			$seo->updateSeoDB(json_encode($imgJson),'news',$rowDetail['id']);
		}
		if(!empty($imgJson))
		{
			$seo->set('photo',$configBase.THUMBS.'/'.$imgJson['w'].'x'.$imgJson['h'].'x2/'.UPLOAD_NEWS_L.$rowDetail['photo']);
			$seo->set('photo:width',$imgJson['w']);
			$seo->set('photo:height',$imgJson['h']);
			$seo->set('photo:type',$imgJson['m']);
		}

		/* breadCrumbs */
		if(!empty($titleMain)) $breadcr->set($com,$titleMain);
		$breadcr->set($rowDetail[$sluglang],$rowDetail['name'.$lang]);
		$breadcrumbs = $breadcr->get();
} else {
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
    $data_dangdienra = $d->rawQuery("select date_created, name$lang, slug$lang, desc$lang, content$lang, photo, percent, slogan$lang, status from #_news where type = ? and find_in_set('dangdienra',status) and find_in_set('hienthi',status) order by numb,id desc", array($type));
    $data_sapdienra = $d->rawQuery("select date_created, name$lang, slug$lang, desc$lang, content$lang, photo, percent, slogan$lang, status from #_news where type = ? and find_in_set('sapdienra',status) and find_in_set('hienthi',status) order by numb,id desc", array($type));
    if (!empty($titleMain)) $breadcr->set($com, $titleMain);
    $breadcrumbs = $breadcr->get();
}