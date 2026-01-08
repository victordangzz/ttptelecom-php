-- =====================================================
-- CLEANUP OLD MODULES - XÓA CÁC MODULE CŨ KHÔNG DÙNG
-- Ngày: 08/01/2026
-- =====================================================

-- =====================================================
-- BƯỚC 1: XÓA DATA TỪ TABLE_NEWS (OLD MODULES)
-- =====================================================

DELETE FROM `table_news` WHERE `type` IN (
  'he-sinh-thai-dich-vu',    -- Hệ sinh thái dịch vụ
  'dich-vu',                  -- Dịch vụ (old)
  'chien-dich-khuyen-mai',    -- Chiến dịch khuyến mãi
  'hesinhthai',               -- Hệ sinh thái
  'tieuchi',                  -- Tiêu chí
  'ho-tro',                   -- Hỗ trợ
  'chtg',                     -- Câu hỏi thường gặp
  'meosudung',                -- Mẹo sử dụng hiệu quả
  'tin-tuc',                  -- Tin tức
  'chinh-sach',               -- Chính sách
  'loiich',                   -- Lợi ích
  'ycdk',                     -- Yêu cầu đăng ký
  'qtdk',                     -- Quy trình đăng ký
  'tinh_nang_ud'              -- Tính năng ứng dụng
);

-- =====================================================
-- BƯỚC 2: XÓA DATA TỪ TABLE_STATIC (OLD MODULES)
-- =====================================================

DELETE FROM `table_static` WHERE `type` IN (
  'slogan_vc',                -- Về chúng tôi
  'slogan_dv',                -- Slogan dịch vụ
  'slogan_hst',               -- Slogan hệ sinh thái
  'slogan_tc'                 -- Slogan tiêu chí
);

-- =====================================================
-- BƯỚC 3: XÓA SEO DATA (NẾU CÓ)
-- =====================================================

-- Xóa SEO của các news modules cũ
DELETE FROM `table_seo` WHERE `com` = 'news' AND `type` IN (
  'he-sinh-thai-dich-vu',
  'dich-vu',
  'chien-dich-khuyen-mai',
  'hesinhthai',
  'tieuchi',
  'ho-tro',
  'chtg',
  'meosudung',
  'tin-tuc',
  'chinh-sach',
  'loiich',
  'ycdk',
  'qtdk',
  'tinh_nang_ud'
);

-- =====================================================
-- BƯỚC 4: XÓA GALLERY/IMAGES (NẾU CÓ)
-- =====================================================

-- Xóa gallery của các news modules cũ
DELETE FROM `table_gallery` WHERE `com` = 'news' AND `type` IN (
  'he-sinh-thai-dich-vu',
  'dich-vu',
  'chien-dich-khuyen-mai',
  'hesinhthai',
  'tieuchi',
  'ho-tro',
  'chtg',
  'meosudung',
  'tin-tuc',
  'chinh-sach',
  'loiich',
  'ycdk',
  'qtdk',
  'tinh_nang_ud'
);

-- =====================================================
-- BƯỚC 5: XÓA TAGS (NẾU CÓ)
-- =====================================================

-- Xóa tags của tin-tuc
DELETE FROM `table_tags` WHERE `type` = 'tin-tuc';
DELETE FROM `table_news_tags` WHERE `id_news` IN (
  SELECT id FROM `table_news` WHERE `type` = 'tin-tuc'
);

-- =====================================================
-- HOÀN THÀNH
-- =====================================================
-- Đã xóa:
-- - 14 news modules cũ
-- - 4 static modules cũ
-- - SEO data liên quan
-- - Gallery/Images liên quan
-- - Tags liên quan
