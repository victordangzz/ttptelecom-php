-- ============================================
-- MIGRATION V2 - TRANG GIỚI THIỆU (REFACTORED)
-- Giảm từ 9 modules → 6 modules
-- ============================================

-- XÓA CÁC RECORDS CŨ
DELETE FROM `table_static` WHERE `type` IN ('hero-about', 'profile-about', 'vision', 'mission', 'header-values', 'header-infra', 'cta-about');
DELETE FROM `table_news` WHERE `type` IN ('vision-mission', 'core-values', 'infrastructure');

-- ============================================
-- 1. HERO (Static)
-- ============================================
INSERT INTO `table_static` (`type`, `sloganvi`, `namevi`, `descvi`, `status`) VALUES
('hero-about',
 'Về chúng tôi',
 'Giới Thiệu TTP Telecom',
 'Đối tác tin cậy trong hành trình chuyển đổi số của doanh nghiệp Việt',
 'hienthi');

-- ============================================
-- 2. COMPANY PROFILE (Static)
-- ============================================
INSERT INTO `table_static` (`type`, `sloganvi`, `namevi`, `descvi`, `contentvi`, `status`) VALUES
('profile-about',
 'Hồ sơ công ty',
 'TTP Telecom - Tiên phong trong giải pháp hạ tầng số',
 '<p>Được thành lập từ năm 2013, TTP Telecom đã không ngừng phát triển và khẳng định vị thế là một trong những đơn vị hàng đầu cung cấp giải pháp hạ tầng số tại Việt Nam.</p>',
 '<p>Với đội ngũ hơn 200 chuyên gia công nghệ, chúng tôi đã triển khai thành công hơn 1700 dự án cho các doanh nghiệp từ SME đến Enterprise trong nhiều lĩnh vực khác nhau.</p>',
 'hienthi');

-- ============================================
-- 3. VISION & MISSION (News - 2 items)
-- ============================================
INSERT INTO `table_news` (`type`, `sloganvi`, `namevi`, `descvi`, `status`, `numb`) VALUES
('vision-mission',
 'Vision',
 'Tầm Nhìn',
 'Trở thành đơn vị hàng đầu Việt Nam trong lĩnh vực cung cấp giải pháp hạ tầng số và dịch vụ viễn thông, góp phần thúc đẩy chuyển đổi số quốc gia.',
 'hienthi', 1),
('vision-mission',
 'Mission',
 'Sứ Mệnh',
 'Cung cấp các giải pháp công nghệ tiên tiến, dịch vụ chất lượng cao, đồng hành cùng doanh nghiệp Việt trong hành trình chuyển đổi số, nâng cao năng lực cạnh tranh.',
 'hienthi', 2);

-- ============================================
-- 4. CORE VALUES (News - 1 header + 4 items)
-- ============================================
INSERT INTO `table_news` (`type`, `sloganvi`, `namevi`, `descvi`, `status`, `numb`) VALUES
('core-values', 'HEADER', 'Giá trị cốt lõi', 'Những giá trị định hướng mọi hoạt động của chúng tôi', 'hienthi', 1),
('core-values', '01', 'Chất lượng', 'Cam kết mang đến sản phẩm, dịch vụ chất lượng cao nhất', 'hienthi', 2),
('core-values', '02', 'Đổi mới', 'Không ngừng sáng tạo, áp dụng công nghệ tiên tiến', 'hienthi', 3),
('core-values', '03', 'Khách hàng', 'Đặt lợi ích khách hàng lên hàng đầu', 'hienthi', 4),
('core-values', '04', 'Trách nhiệm', 'Trách nhiệm với khách hàng, đối tác và cộng đồng', 'hienthi', 5);

-- ============================================
-- 5. INFRASTRUCTURE (News - 1 header + 3 items)
-- ============================================
INSERT INTO `table_news` (`type`, `sloganvi`, `namevi`, `descvi`, `status`, `numb`) VALUES
('infrastructure', 'HEADER', 'Hạ tầng công nghệ', 'Hệ thống hạ tầng hiện đại, đáp ứng mọi nhu cầu', 'hienthi', 1),
('infrastructure', '', 'Data Center Tier 3', 'Trung tâm dữ liệu đạt chuẩn quốc tế Tier 3, diện tích 2000m², đảm bảo uptime 99.982%', 'hienthi', 2),
('infrastructure', '', 'Network Infrastructure', 'Hạ tầng mạng kết nối đa nhà mạng, băng thông lớn, độ trễ thấp, kết nối quốc tế ổn định', 'hienthi', 3),
('infrastructure', '', 'Cloud Platform', 'Nền tảng cloud computing hiện đại, linh hoạt, bảo mật cao, hỗ trợ đa dạng công nghệ', 'hienthi', 4);

-- ============================================
-- 6. CTA (Static)
-- ============================================
INSERT INTO `table_static` (`type`, `namevi`, `descvi`, `status`) VALUES
('cta-about',
 'Sẵn sàng đồng hành cùng bạn',
 'Liên hệ ngay để được tư vấn giải pháp phù hợp nhất',
 'hienthi');

-- ============================================
-- TỔNG KẾT:
-- Static: 3 modules (hero, profile, cta)
-- News: 3 modules (vision-mission, core-values, infrastructure)
-- Total: 6 modules, 12 items
-- Giảm từ 9 modules → 6 modules (33%)
-- ============================================
