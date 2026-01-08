-- =====================================================
-- INSERT SEO PAGE DATA
-- Ngày: 08/01/2026
-- Mô tả: Tạo dữ liệu SEO mặc định cho các trang
-- =====================================================

-- XÓA CÁC RECORDS CŨ (nếu có)
DELETE FROM `table_seopage` WHERE `type` IN ('trang-chu', 'gioi-thieu', 'dich-vu', 'giai-phap', 'tin-tuc', 'lien-he');

-- =====================================================
-- TRANG CHỦ (Homepage)
-- =====================================================
INSERT INTO `table_seopage` (`type`, `titlevi`, `keywordsvi`, `descriptionvi`) VALUES
('trang-chu',
 'TTP Telecom - Giải pháp hạ tầng số cho doanh nghiệp Việt',
 'TTP Telecom, hạ tầng số, internet doanh nghiệp, data center, cloud computing, giải pháp công nghệ, chuyển đổi số',
 'TTP Telecom cung cấp hệ sinh thái dịch vụ số toàn diện từ hạ tầng mạng, điện toán đám mây đến giải pháp phát triển phần mềm, giúp doanh nghiệp chuyển đổi số thành công.');

-- =====================================================
-- TRANG GIỚI THIỆU (About)
-- =====================================================
INSERT INTO `table_seopage` (`type`, `titlevi`, `keywordsvi`, `descriptionvi`) VALUES
('gioi-thieu',
 'Giới thiệu TTP Telecom - Đối tác tin cậy trong chuyển đổi số',
 'giới thiệu TTP Telecom, về chúng tôi, tầm nhìn sứ mệnh, giá trị cốt lõi, hạ tầng công nghệ, data center tier 3',
 'TTP Telecom - Đối tác tin cậy trong hành trình chuyển đổi số của doanh nghiệp Việt. Với hơn 10 năm kinh nghiệm, chúng tôi tự hào là đơn vị tiên phong trong giải pháp hạ tầng số.');

-- =====================================================
-- TRANG DỊCH VỤ (Services)
-- =====================================================
INSERT INTO `table_seopage` (`type`, `titlevi`, `keywordsvi`, `descriptionvi`) VALUES
('dich-vu',
 'Dịch vụ TTP Telecom - Hạ tầng số toàn diện cho doanh nghiệp',
 'dịch vụ internet, TTP Connect, TTP Data, TTP Cloud, TTP Infra, data center, cloud computing, hạ tầng mạng',
 'Giải pháp hạ tầng mạng và trung tâm dữ liệu toàn diện từ TTP Telecom. Từ kết nối Internet đến Data Center, Cloud và hạ tầng công nghệ cho mọi quy mô doanh nghiệp.');

-- =====================================================
-- TRANG GIẢI PHÁP (Solution)
-- =====================================================
INSERT INTO `table_seopage` (`type`, `titlevi`, `keywordsvi`, `descriptionvi`) VALUES
('giai-phap',
 'Giải pháp công nghệ TTP Telecom - Chuyển đổi số & Phát triển phần mềm',
 'giải pháp chuyển đổi số, phát triển phần mềm, software outsourcing, digital transformation, ERP, CRM, web app, mobile app',
 'Giải pháp công nghệ toàn diện từ TTP Telecom: Software Outsourcing, Digital Transformation, giải pháp theo ngành nghề. Chuyển đổi số và phát triển phần mềm chuyên nghiệp.');

-- =====================================================
-- TRANG TIN TỨC (News)
-- =====================================================
INSERT INTO `table_seopage` (`type`, `titlevi`, `keywordsvi`, `descriptionvi`) VALUES
('tin-tuc',
 'Tin tức & Cập nhật - TTP Telecom',
 'tin tức công nghệ, tin tức viễn thông, cập nhật TTP Telecom, bài viết công nghệ, blog TTP',
 'Tin tức và cập nhật mới nhất từ TTP Telecom về công nghệ, viễn thông, chuyển đổi số và các giải pháp dành cho doanh nghiệp.');

-- =====================================================
-- TRANG LIÊN HỆ (Contact)
-- =====================================================
INSERT INTO `table_seopage` (`type`, `titlevi`, `keywordsvi`, `descriptionvi`) VALUES
('lien-he',
 'Liên hệ TTP Telecom - Tư vấn giải pháp công nghệ',
 'liên hệ TTP Telecom, tư vấn giải pháp, hotline, email, địa chỉ, hỗ trợ khách hàng',
 'Liên hệ với TTP Telecom để được tư vấn giải pháp công nghệ phù hợp nhất cho doanh nghiệp của bạn. Đội ngũ chuyên gia sẵn sàng hỗ trợ 24/7.');
