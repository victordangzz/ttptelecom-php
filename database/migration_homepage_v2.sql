-- ============================================
-- MIGRATION V2 - TRANG CHỦ (REFACTORED)
-- Giảm từ 6 modules → 4 modules
-- ============================================

-- XÓA CÁC RECORDS CŨ (nếu có)
DELETE FROM `table_static` WHERE `type` IN ('hero-trangchu', 'about-trangchu', 'header-dichvu', 'header-uuthe');
DELETE FROM `table_news` WHERE `type` IN ('about-trangchu', 'dich-vu-trangchu', 'uu-the');

-- ============================================
-- 1. HERO (Static - giữ nguyên)
-- ============================================
INSERT INTO `table_static` (`type`, `namevi`, `descvi`, `sloganvi`, `options`, `status`) VALUES
('hero-trangchu', 
 'Giải pháp hạ tầng số cho doanh nghiệp Việt', 
 'TTP Telecom cung cấp hệ sinh thái dịch vụ số toàn diện từ hạ tầng mạng, điện toán đám mây đến giải pháp phát triển phần mềm, giúp doanh nghiệp chuyển đổi số thành công.',
 'Hạ tầng số cho doanh nghiệp',
 '{"button1_text": "Tìm hiểu về chúng tôi", "button1_link": "gioi-thieu", "button2_text": "Liên hệ ngay", "button2_link": "lien-he"}',
 'hienthi');

-- ============================================
-- 2. ABOUT (News - 1 item duy nhất)
-- ============================================
INSERT INTO `table_news` (`type`, `namevi`, `descvi`, `contentvi`, `sloganvi`, `photo`, `options`, `status`, `numb`) VALUES
('about-trangchu',
 'Về TTP Telecom',
 '<p>TTP Telecom là đơn vị hàng đầu trong lĩnh vực cung cấp giải pháp hạ tầng số và dịch vụ viễn thông cho doanh nghiệp tại Việt Nam. Với hơn 10 năm kinh nghiệm, chúng tôi tự hào là đối tác tin cậy của hàng trăm doanh nghiệp trong và ngoài nước.</p>',
 '<p>Đội ngũ chuyên gia giàu kinh nghiệm cùng hạ tầng công nghệ hiện đại giúp chúng tôi mang đến những giải pháp tối ưu nhất cho từng khách hàng.</p>',
 'Về chúng tôi',
 '',
 '{"stat1_number": "10+", "stat1_label": "Năm kinh nghiệm", "stat2_number": "1700+", "stat2_label": "Dự án hoàn thành"}',
 'hienthi',
 1);

-- ============================================
-- 3. DỊCH VỤ (News - 7 items: 1 header + 6 cards)
-- ============================================
INSERT INTO `table_news` (`type`, `namevi`, `descvi`, `slugvi`, `sloganvi`, `status`, `numb`) VALUES
('dich-vu-trangchu', 'Hệ sinh thái dịch vụ', 'Dịch vụ toàn diện của TTP Telecom', '', 'HEADER', 'hienthi', 1),
('dich-vu-trangchu', 'TTP Connect', 'Giải pháp kết nối internet doanh nghiệp tốc độ cao, băng thông lớn, độ ổn định cao với SLA 99.9%', 'ttp-connect', '', 'noibat,hienthi', 2),
('dich-vu-trangchu', 'TTP Data', 'Trung tâm dữ liệu (Data Center) đạt chuẩn Tier 3, hạ tầng hiện đại, bảo mật tuyệt đối', 'ttp-data', '', 'noibat,hienthi', 3),
('dich-vu-trangchu', 'TTP Cloud', 'Dịch vụ điện toán đám mây linh hoạt, dễ dàng mở rộng, thanh toán theo nhu cầu sử dụng', 'ttp-cloud', '', 'noibat,hienthi', 4),
('dich-vu-trangchu', 'TTP Infra', 'Tư vấn và triển khai hạ tầng công nghệ thông tin toàn diện cho doanh nghiệp', 'ttp-infra', '', 'noibat,hienthi', 5),
('dich-vu-trangchu', 'Software Development', 'Phát triển phần mềm theo yêu cầu, ứng dụng web, mobile app, ERP, CRM...', 'software-development', '', 'noibat,hienthi', 6),
('dich-vu-trangchu', 'IT Consulting', 'Tư vấn chiến lược chuyển đổi số, tối ưu hóa quy trình, nâng cao hiệu quả vận hành', 'it-consulting', '', 'noibat,hienthi', 7);

-- ============================================
-- 4. ƯU THẾ (News - 7 items: 1 header + 6 features)
-- ============================================
INSERT INTO `table_news` (`type`, `namevi`, `descvi`, `sloganvi`, `status`, `numb`) VALUES
('uu-the', 'Ưu thế của chúng tôi', 'Tại sao chọn TTP Telecom?', 'HEADER', 'hienthi', 1),
('uu-the', 'Đội ngũ chuyên nghiệp', 'Đội ngũ kỹ sư giàu kinh nghiệm, được đào tạo bài bản từ các tập đoàn công nghệ hàng đầu', '', 'noibat,hienthi', 2),
('uu-the', 'Công nghệ hiện đại', 'Áp dụng công nghệ mới nhất, cập nhật xu hướng thế giới, đảm bảo hệ thống luôn tối ưu', '', 'noibat,hienthi', 3),
('uu-the', 'Hỗ trợ 24/7', 'Đội ngũ hỗ trợ kỹ thuật sẵn sàng phục vụ 24/7, giải quyết sự cố nhanh chóng, hiệu quả', '', 'noibat,hienthi', 4),
('uu-the', 'Bảo mật cao', 'Cam kết bảo mật thông tin khách hàng tuyệt đối, tuân thủ các tiêu chuẩn bảo mật quốc tế', '', 'noibat,hienthi', 5),
('uu-the', 'Chi phí tối ưu', 'Giải pháp phù hợp với mọi quy mô doanh nghiệp, chi phí hợp lý, ROI cao', '', 'noibat,hienthi', 6),
('uu-the', 'Linh hoạt mở rộng', 'Dễ dàng nâng cấp và mở rộng hệ thống theo nhu cầu phát triển của doanh nghiệp', '', 'noibat,hienthi', 7);
