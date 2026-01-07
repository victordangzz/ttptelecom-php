<?php
if (!defined('SOURCES')) die("Error");

/* =====================================================
   DATA RETRIEVAL - TRANG DỊCH VỤ
   File: sources/services.php
   Route: services (từ router/web.php)
   ===================================================== */

/* SEO - Thông tin SEO của trang */
$seo->set('type', 'article');
$favicon = $cache->get("SELECT photo FROM #_photo WHERE type = ? AND act = ? LIMIT 0,1", array('favicon', 'photo_static'), 'fetch', 7200);
$seo->set('favicon', $favicon['photo']);
$seo->set('url', $func->getPageURL());
$title_crumb = "Dịch vụ";
$seo->set('title', $title_crumb);
$seo->set('keywords', 'dịch vụ, internet doanh nghiệp, data center, cloud server, hạ tầng IT');
$seo->set('description', 'Các dịch vụ hạ tầng số toàn diện từ TTP Telecom: Internet, Data Center, Cloud, Hạ tầng IT');
$seo->set('photo', $func->getImgSize('assets/images/default-share.jpg', '1200x630x1'));

/* Breadcrumbs */
$breadcr->set($title_crumb, $func->getPageURL());
$breadcr->out();

/* =====================================================
   1. SERVICE HERO - BANNER
   ===================================================== */
$hero_services = $cache->get(
    "SELECT namevi, sloganvi, descvi, contentvi 
     FROM #_static 
     WHERE type = ? AND status = ? AND find_in_set('hienthi', status)
     LIMIT 0,1",
    array('hero-services', 'hienthi'),
    'fetch',
    7200
);

/* =====================================================
   2. TTP CONNECT - INTERNET & TRUYỀN DẪN
   ===================================================== */
$ttp_connect_header = $cache->get(
    "SELECT namevi, descvi, photo 
     FROM #_static 
     WHERE type = ? AND status = ? AND find_in_set('hienthi', status)
     LIMIT 0,1",
    array('ttp-connect-header', 'hienthi'),
    'fetch',
    7200
);

$ttp_connect_items = $cache->get(
    "SELECT namevi, descvi, contentvi 
     FROM #_news 
     WHERE type = ? AND status != ''
     AND find_in_set('hienthi', status)
     ORDER BY numb ASC, id DESC",
    array('ttp-connect-items'),
    'result',
    7200
);

/* =====================================================
   3. TTP DATA - MÁY CHỦ & DATA CENTER
   ===================================================== */
$ttp_data_header = $cache->get(
    "SELECT namevi, descvi, photo 
     FROM #_static 
     WHERE type = ? AND status = ? AND find_in_set('hienthi', status)
     LIMIT 0,1",
    array('ttp-data-header', 'hienthi'),
    'fetch',
    7200
);

$ttp_data_items = $cache->get(
    "SELECT namevi, sloganvi, descvi, contentvi 
     FROM #_news 
     WHERE type = ? AND status != ''
     AND find_in_set('hienthi', status)
     ORDER BY numb ASC, id DESC",
    array('ttp-data-items'),
    'result',
    7200
);

/* =====================================================
   4. TTP CLOUD - HẠ TẦNG ĐÁM MÂY
   ===================================================== */
$ttp_cloud_header = $cache->get(
    "SELECT namevi, descvi, photo 
     FROM #_static 
     WHERE type = ? AND status = ? AND find_in_set('hienthi', status)
     LIMIT 0,1",
    array('ttp-cloud-header', 'hienthi'),
    'fetch',
    7200
);

$ttp_cloud_items = $cache->get(
    "SELECT namevi, descvi, contentvi 
     FROM #_news 
     WHERE type = ? AND status != ''
     AND find_in_set('hienthi', status)
     ORDER BY numb ASC, id DESC",
    array('ttp-cloud-items'),
    'result',
    7200
);

/* =====================================================
   5. TTP INFRA - HẠ TẦNG CNTT
   ===================================================== */
$ttp_infra_header = $cache->get(
    "SELECT namevi, descvi, photo 
     FROM #_static 
     WHERE type = ? AND status = ? AND find_in_set('hienthi', status)
     LIMIT 0,1",
    array('ttp-infra-header', 'hienthi'),
    'fetch',
    7200
);

$ttp_infra_items = $cache->get(
    "SELECT namevi, descvi 
     FROM #_news 
     WHERE type = ? AND status != ''
     AND find_in_set('hienthi', status)
     ORDER BY numb ASC, id DESC",
    array('ttp-infra-items'),
    'result',
    7200
);

/* =====================================================
   6. PROCESS STEPS - QUY TRÌNH TRIỂN KHAI
   ===================================================== */
$header_process = $cache->get(
    "SELECT namevi, sloganvi 
     FROM #_static 
     WHERE type = ? AND status = ? AND find_in_set('hienthi', status)
     LIMIT 0,1",
    array('header-process', 'hienthi'),
    'fetch',
    7200
);

$process_steps = $cache->get(
    "SELECT namevi, sloganvi, descvi 
     FROM #_news 
     WHERE type = ? AND status != ''
     AND find_in_set('hienthi', status)
     ORDER BY numb ASC, id DESC",
    array('process-steps'),
    'result',
    7200
);

/* =====================================================
   7. DATA CENTER ADVANTAGES - ƯU ĐIỂM DATA CENTER
   ===================================================== */
$data_center_advantages = $cache->get(
    "SELECT namevi 
     FROM #_news 
     WHERE type = ? AND status != ''
     AND find_in_set('hienthi', status)
     ORDER BY numb ASC, id DESC",
    array('data-center-advantages'),
    'result',
    7200
);

/* =====================================================
   8. WHY CHOOSE CLOUD - TẠI SAO CHỌN TTP CLOUD
   ===================================================== */
$why_choose_cloud = $cache->get(
    "SELECT namevi, descvi 
     FROM #_news 
     WHERE type = ? AND status != ''
     AND find_in_set('hienthi', status)
     ORDER BY numb ASC, id DESC",
    array('why-choose-cloud'),
    'result',
    7200
);

/* =====================================================
   9. CTA SECTION - CALL TO ACTION
   ===================================================== */
$cta_services = $cache->get(
    "SELECT namevi, descvi, contentvi 
     FROM #_static 
     WHERE type = ? AND status = ? AND find_in_set('hienthi', status)
     LIMIT 0,1",
    array('cta-services', 'hienthi'),
    'fetch',
    7200
);

/* =====================================================
   RENDER VIEW - HIỂN THỊ TEMPLATE
   ===================================================== */
$template = "services/services";

