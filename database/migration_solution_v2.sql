-- =====================================================
-- MIGRATION SOLUTION PAGE V2 (REFACTORED)
-- Ngày: 08/01/2026
-- Mô tả: Dữ liệu chi tiết đúng theo thiết kế
-- =====================================================

-- =====================================================
-- BƯỚC 1: XÓA CÁC RECORDS CŨ
-- =====================================================
DELETE FROM `table_static` WHERE `type` IN (
  'hero-solution',
  'cta-solution',
  'outsourcing-header',
  'dev-process-header',
  'digital-header',
  'industry-header',
  'tech-platforms-header'
);

DELETE FROM `table_news` WHERE `type` IN (
  'outsourcing-solutions',
  'dev-process-steps',
  'digital-solutions',
  'industry-retail',
  'industry-healthcare',
  'tech-platforms'
);

-- =====================================================
-- BƯỚC 2: STATIC MODULES (2 modules)
-- =====================================================

-- HERO SECTION
INSERT INTO `table_static` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `status`) 
VALUES (
  'hero-solution',
  'Giải Pháp TTP Telecom',
  'Giải pháp số',
  'Giải pháp phần mềm toàn diện cho doanh nghiệp Việt',
  'Từ phát triển phần mềm đến chuyển đổi số, chúng tôi đồng hành cùng bạn',
  'hienthi'
);

-- CTA SECTION
INSERT INTO `table_static` (`type`, `namevi`, `descvi`, `contentvi`, `status`) 
VALUES (
  'cta-solution',
  'Bạn đang cần một đối tác hạ tầng & công nghệ đáng tin cậy?',
  'Liên hệ TTP Telecom ngay hôm nay để được tư vấn giải pháp phù hợp nhất cho doanh nghiệp của bạn',
  'Đội ngũ chuyên gia của chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7',
  'hienthi'
);

-- =====================================================
-- BƯỚC 3: NEWS MODULES (BAO GỒM HEADERS)
-- =====================================================

-- ========== SOFTWARE OUTSOURCING ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `photo`, `status`, `numb`) 
VALUES (
  'outsourcing-solutions',
  'Giải pháp phần mềm & Outsourcing',
  'HEADER',
  'Dịch vụ phát triển phần mềm theo yêu cầu, outsourcing nhân lực IT chuyên nghiệp',
  '',
  'hienthi',
  1
);

-- Items (3 cards)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `status`, `numb`) 
VALUES 
(
  'outsourcing-solutions',
  'Phát triển phần mềm theo yêu cầu',
  'GIẢI PHÁP',
  'Xây dựng ứng dụng web, mobile, desktop theo đúng nhu cầu',
  'Web Application (React, Vue.js, Angular)|Mobile App (iOS, Android, Flutter)|Desktop Software (.NET, Java, Python)|API & Microservices',
  'hienthi',
  2
),
(
  'outsourcing-solutions',
  'Công nghệ & Nền tảng hiện đại',
  'CÔNG NGHỆ',
  'Sử dụng công nghệ tiên tiến nhất, đảm bảo hiệu suất cao',
  'React, Angular, Vue.js cho Frontend|Node.js, Python, Java cho Backend|AWS, Azure, GCP cho Cloud|Docker, Kubernetes cho DevOps',
  'hienthi',
  3
),
(
  'outsourcing-solutions',
  'Đội ngũ kỹ sư giàu kinh nghiệm',
  'ĐỘI NGŨ',
  'Kỹ sư được đào tạo bài bản, kinh nghiệm từ các dự án lớn',
  'Senior Developers (5-10 năm kinh nghiệm)|Solution Architects|DevOps Engineers|QA Specialists|Project Managers',
  'hienthi',
  4
);

-- ========== DEV PROCESS STEPS ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES (
  'dev-process-steps',
  'Quy trình phát triển phần mềm',
  'HEADER',
  'Quy trình chuyên nghiệp, minh bạch và hiệu quả',
  'hienthi',
  1
);

-- Steps (5 bước)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES 
(
  'dev-process-steps',
  'Discovery & Planning',
  '1',
  'Phân tích yêu cầu chi tiết, lập kế hoạch dự án và ước lượng chi phí',
  'hienthi',
  2
),
(
  'dev-process-steps',
  'Design & Prototype',
  '2',
  'Thiết kế UI/UX, xây dựng prototype và xác nhận với khách hàng',
  'hienthi',
  3
),
(
  'dev-process-steps',
  'Development',
  '3',
  'Phát triển sản phẩm theo sprint, review code và unit testing',
  'hienthi',
  4
),
(
  'dev-process-steps',
  'Testing & QA',
  '4',
  'Kiểm thử toàn diện (functional, performance, security testing)',
  'hienthi',
  5
),
(
  'dev-process-steps',
  'Deployment & Support',
  '5',
  'Triển khai lên production, đào tạo và hỗ trợ vận hành',
  'hienthi',
  6
);

-- ========== DIGITAL TRANSFORMATION ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES (
  'digital-solutions',
  'Giải pháp Chuyển đổi số',
  'HEADER',
  'Giải pháp số toàn diện cho doanh nghiệp, giúp tăng hiệu quả vận hành',
  'hienthi',
  1
);

-- Items (3 cards)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `status`, `numb`) 
VALUES 
(
  'digital-solutions',
  'ERP / CRM System',
  'MODULES',
  'Hệ thống quản lý doanh nghiệp tích hợp',
  'Quản lý tài chính kế toán|Quản lý nhân sự & lương|Quản lý kho vận & sản xuất|Quản lý khách hàng (CRM)|Báo cáo & phân tích dữ liệu',
  'hienthi',
  2
),
(
  'digital-solutions',
  'Giải pháp bán hàng đa kênh',
  'TÍNH NĂNG',
  'Tích hợp bán hàng online & offline',
  'Website thương mại điện tử|Mobile App bán hàng|POS system|Quản lý đơn hàng tập trung|Tích hợp vận chuyển & thanh toán',
  'hienthi',
  3
),
(
  'digital-solutions',
  'Ứng dụng doanh nghiệp',
  'MODULES',
  'Phần mềm quản lý theo yêu cầu riêng',
  'Phần mềm quản lý dự án|Hệ thống workflow approval|Document management|Asset management|Custom business apps',
  'hienthi',
  4
);

-- ========== INDUSTRY SOLUTIONS - RETAIL ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES (
  'industry-retail',
  'Giải pháp theo ngành',
  'HEADER',
  'Giải pháp chuyên biệt cho từng lĩnh vực kinh doanh',
  'hienthi',
  1
);

-- Retail Items (2 cards)
INSERT INTO `table_news` (`type`, `namevi`, `descvi`, `contentvi`, `options`, `status`, `numb`) 
VALUES 
(
  'industry-retail',
  'Retail Management',
  'Quản lý bán lẻ & chuỗi cửa hàng',
  'POS system đa điểm|Quản lý kho multi-location|Chương trình khách hàng thân thiết|Đồng bộ online & offline|Báo cáo bán hàng real-time',
  '["POS", "Inventory", "CRM", "Analytics"]',
  'hienthi',
  2
),
(
  'industry-retail',
  'Restaurant & F&B Management',
  'Quản lý nhà hàng, quán cafe, chuỗi F&B',
  'Quản lý bàn & đặt bàn|Kitchen Display System|Online ordering & delivery|Menu management|Báo cáo doanh thu chi tiết',
  '["F&B", "POS", "Delivery", "Reports"]',
  'hienthi',
  3
);

-- ========== INDUSTRY SOLUTIONS - HEALTHCARE ==========
-- Healthcare Items (2 cards, không có header riêng - dùng chung header với retail)
INSERT INTO `table_news` (`type`, `namevi`, `descvi`, `contentvi`, `options`, `status`, `numb`) 
VALUES 
(
  'industry-healthcare',
  'Hospital Management System',
  'Quản lý bệnh viện & phòng khám',
  'Hồ sơ bệnh án điện tử (EMR)|Quản lý lịch khám & phòng|Quản lý thuốc & vật tư y tế|Kết nối thiết bị xét nghiệm|Thanh toán & bảo hiểm',
  '["Healthcare", "HIS", "EMR", "Billing"]',
  'hienthi',
  1
),
(
  'industry-healthcare',
  'School Management System',
  'Quản lý trường học & đào tạo',
  'Portal học sinh & phụ huynh|Quản lý điểm & học bạ|Điểm danh & theo dõi học tập|Lịch học & thời khóa biểu|Học online (LMS)',
  '["Education", "LMS", "Portal", "Communication"]',
  'hienthi',
  2
);

-- ========== TECH PLATFORMS ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES (
  'tech-platforms',
  'Nền tảng công nghệ',
  'HEADER',
  'Công nghệ tiên tiến để xây dựng giải pháp mạnh mẽ và bền vững',
  'hienthi',
  1
);

-- Platforms (3 cards)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `options`, `status`, `numb`) 
VALUES 
(
  'tech-platforms',
  'Multi - AI Content Platform',
  'primary',
  'Microservices Architecture',
  'Nền tảng xây dựng ứng dụng AI đa dụng với khả năng mở rộng cao và hiệu năng tối ưu',
  '{"features": ["Kubernetes orchestration", "Auto-scaling", "Service Mesh", "API Gateway"], "highlight": "Scalable & Resilient"}',
  'hienthi',
  2
),
(
  'tech-platforms',
  'Firebase - Nền tảng ứng dụng di động từ Google',
  'secondary',
  'Intelligent Solutions',
  'Platform Firebase giúp phát triển ứng dụng mobile nhanh chóng với realtime database và analytics',
  '{"features": ["Realtime Database", "Cloud Functions", "Authentication", "Analytics"], "highlight": "Fast & Real-time"}',
  'hienthi',
  3
),
(
  'tech-platforms',
  'Mobile First',
  'primary',
  'Cross-platform Development',
  'Phát triển ứng dụng di động đa nền tảng với Flutter, React Native, hiệu suất native',
  '{"features": ["React Native", "Flutter", "iOS Native", "Android Native"], "highlight": "Fast & Native"}',
  'hienthi',
  4
);

-- =====================================================
-- HOÀN THÀNH MIGRATION
-- =====================================================
-- Tổng kết:
-- - Static modules: 2 (hero, cta)
-- - News modules: 6 (outsourcing, dev-process, digital, industry-retail, industry-healthcare, tech-platforms)
-- - Tổng items: 23 records (bao gồm 5 headers + 18 items)
-- - Dữ liệu đã được điều chỉnh chi tiết theo thiết kế
