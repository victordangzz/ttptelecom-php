-- =====================================================
-- XÓA DỮ LIỆU CỦA SERVICES & SOLUTION PAGES
-- Ngày: 08/01/2026
-- Mục đích: Xóa dữ liệu nhập sai để nhập lại
-- =====================================================

-- =====================================================
-- SERVICES PAGE - XÓA TẤT CẢ MODULES
-- =====================================================

-- Xóa Static modules của Services
DELETE FROM `table_static` WHERE `type` IN (
  'hero-services',
  'cta-services'
);

-- Xóa News modules của Services
DELETE FROM `table_news` WHERE `type` IN (
  'ttp-connect-items',
  'ttp-data-items',
  'data-center-advantages',
  'ttp-cloud-items',
  'why-choose-cloud',
  'ttp-infra-items',
  'process-steps'
);

-- =====================================================
-- SOLUTION PAGE - XÓA TẤT CẢ MODULES
-- =====================================================

-- Xóa Static modules của Solution
DELETE FROM `table_static` WHERE `type` IN (
  'hero-solution',
  'cta-solution'
);

-- Xóa News modules của Solution
DELETE FROM `table_news` WHERE `type` IN (
  'outsourcing-solutions',
  'dev-process-steps',
  'digital-solutions',
  'industry-retail',
  'industry-healthcare',
  'tech-platforms'
);

-- =====================================================
-- HOÀN THÀNH
-- =====================================================
-- Sau khi chạy script này, bạn có thể chạy lại:
-- - migration_services_v2.sql
-- - migration_solution_v2.sql
-- để nhập dữ liệu mới.
