-- =====================================================
-- MIGRATION SERVICES PAGE V2 (REFACTORED)
-- Ngày: 08/01/2026
-- Mô tả: Dữ liệu chi tiết đúng theo thiết kế
-- =====================================================

-- =====================================================
-- BƯỚC 1: XÓA CÁC RECORDS CŨ
-- =====================================================
DELETE FROM `table_static` WHERE `type` IN (
  'hero-services',
  'cta-services',
  'ttp-connect-header',
  'ttp-data-header',
  'ttp-cloud-header',
  'ttp-infra-header',
  'header-process'
);

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
-- BƯỚC 2: STATIC MODULES (2 modules)
-- =====================================================

-- HERO SECTION
INSERT INTO `table_static` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `status`) 
VALUES (
  'hero-services',
  'Dịch Vụ TTP Telecom',
  'Dịch vụ hạ tầng số',
  'Giải pháp hạ tầng mạng và trung tâm dữ liệu toàn diện',
  'Từ kết nối Internet đến Data Center, Cloud và hạ tầng công nghệ',
  'hienthi'
);

-- CTA SECTION
INSERT INTO `table_static` (`type`, `namevi`, `descvi`, `contentvi`, `status`) 
VALUES (
  'cta-services',
  'Bạn đang cần giải pháp nào?',
  'Liên hệ với chúng tôi ngay hôm nay để được tư vấn giải pháp phù hợp nhất cho doanh nghiệp của bạn',
  'Đội ngũ chuyên gia của TTP Telecom luôn sẵn sàng hỗ trợ bạn 24/7',
  'hienthi'
);

-- =====================================================
-- BƯỚC 3: NEWS MODULES (BAO GỒM HEADERS)
-- =====================================================

-- ========== TTP CONNECT ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `photo`, `status`, `numb`) 
VALUES (
  'ttp-connect-items',
  'TTP Connect - Internet & Truyền dẫn doanh nghiệp',
  'HEADER',
  'Giải pháp kết nối Internet chuyên nghiệp cho doanh nghiệp với băng thông lớn, độ ổn định cao',
  '',
  '',
  'hienthi',
  1
);

-- Items (3 cards)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `status`, `numb`) 
VALUES 
(
  'ttp-connect-items',
  'Internet Leased Line',
  '',
  'Đường truyền Internet chuyên dụng, băng thông đối xứng, tốc độ cao',
  'Băng thông từ 10Mbps đến 10Gbps|Uptime 99.9% SLA|IP tĩnh miễn phí|Hỗ trợ kỹ thuật 24/7',
  'hienthi',
  2
),
(
  'ttp-connect-items',
  'MPLS VPN',
  '',
  'Kết nối an toàn giữa các chi nhánh trên toàn quốc',
  'Bảo mật cao chuẩn MPLS|QoS đảm bảo chất lượng|Quản lý tập trung dễ dàng|Mở rộng linh hoạt theo nhu cầu',
  'hienthi',
  3
),
(
  'ttp-connect-items',
  'SD-WAN',
  '',
  'Mạng diện rộng được định nghĩa bằng phần mềm, linh hoạt và hiệu quả',
  'Tối ưu hiệu suất đường truyền|Giảm chi phí vận hành|Quản lý thông minh tự động|Bảo mật tích hợp sẵn',
  'hienthi',
  4
);

-- ========== TTP DATA ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `photo`, `status`, `numb`) 
VALUES (
  'ttp-data-items',
  'TTP Data - Máy chủ & Trung tâm dữ liệu',
  'HEADER',
  'Data Center Tier 3 đạt chuẩn quốc tế, hạ tầng hiện đại, bảo mật tuyệt đối',
  '',
  '',
  'hienthi',
  1
);

-- Items (3 pricing cards)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `status`, `numb`) 
VALUES 
(
  'ttp-data-items',
  'Server Colocation',
  'Từ 5.000.000đ/tháng',
  'Đặt máy chủ của bạn tại Data Center chuẩn Tier 3 của chúng tôi',
  'Không gian rack linh hoạt (1U-42U)|Điện năng dự phòng N+1|Hệ thống làm mát chính xác|Bảo mật vật lý 24/7',
  'hienthi',
  2
),
(
  'ttp-data-items',
  'Dedicated Server',
  'Từ 8.000.000đ/tháng',
  'Máy chủ vật lý chuyên dụng, hiệu năng cao cho doanh nghiệp',
  'CPU Intel Xeon mới nhất|RAM DDR4 lên đến 512GB|Storage NVMe SSD tốc độ cao|Băng thông không giới hạn',
  'hienthi',
  3
),
(
  'ttp-data-items',
  'Backup & Disaster Recovery',
  'Từ 3.000.000đ/tháng',
  'Giải pháp sao lưu và phục hồi thảm họa toàn diện',
  'Sao lưu tự động hàng ngày|RPO < 1 giờ|RTO < 4 giờ|Lưu trữ an toàn tại 2 DC',
  'hienthi',
  4
);

-- ========== DATA CENTER ADVANTAGES ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES (
  'data-center-advantages',
  'Ưu điểm Data Center TTP',
  'HEADER',
  'Hạ tầng hiện đại, an toàn và tin cậy nhất Việt Nam',
  'hienthi',
  1
);

-- Items (4 advantages)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES 
(
  'data-center-advantages',
  'Tier 3 Certified',
  '',
  'Chứng nhận Tier 3 quốc tế từ Uptime Institute',
  'hienthi',
  2
),
(
  'data-center-advantages',
  'Uptime 99.982%',
  '',
  'Thời gian hoạt động liên tục cao nhất',
  'hienthi',
  3
),
(
  'data-center-advantages',
  'N+1 Redundancy',
  '',
  'Hệ thống dự phòng toàn diện cho mọi thành phần',
  'hienthi',
  4
),
(
  'data-center-advantages',
  '24/7 NOC',
  '',
  'Giám sát và hỗ trợ kỹ thuật 24/7/365',
  'hienthi',
  5
);

-- ========== TTP CLOUD ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `photo`, `status`, `numb`) 
VALUES (
  'ttp-cloud-items',
  'TTP Cloud - Hệ thống đám mây',
  'HEADER',
  'Nền tảng điện toán đám mây linh hoạt, bảo mật và mạnh mẽ cho doanh nghiệp Việt',
  '',
  '',
  'hienthi',
  1
);

-- Items (3 pricing cards)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `status`, `numb`) 
VALUES 
(
  'ttp-cloud-items',
  'Cloud VPS',
  'Từ 200.000đ/tháng',
  'Máy chủ ảo linh hoạt, dễ dàng mở rộng theo nhu cầu',
  'vCPU: 1-32 cores|RAM: 1GB-128GB|Storage: SSD NVMe 20GB-1TB|Snapshot: Miễn phí không giới hạn',
  'hienthi',
  2
),
(
  'ttp-cloud-items',
  'Kubernetes',
  'Từ 2.000.000đ/tháng',
  'Nền tảng container orchestration chuyên nghiệp',
  'Auto-scaling: Tự động|Load balancing: Tích hợp|Self-healing: Tự phục hồi|Rolling updates: Không downtime',
  'hienthi',
  3
),
(
  'ttp-cloud-items',
  'Object Storage',
  'Từ 150.000đ/100GB',
  'Lưu trữ đối tượng tương thích S3, dễ dàng tích hợp',
  'Capacity: Không giới hạn|API: S3 compatible|CDN: Tích hợp sẵn|Versioning: Hỗ trợ đầy đủ',
  'hienthi',
  4
);

-- ========== WHY CHOOSE CLOUD ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES (
  'why-choose-cloud',
  'Tại sao chọn TTP Cloud?',
  'HEADER',
  'Giải pháp cloud tối ưu nhất cho doanh nghiệp Việt Nam',
  'hienthi',
  1
);

-- Items (4 reasons)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES 
(
  'why-choose-cloud',
  'Giá cả cạnh tranh',
  '',
  'Chi phí tối ưu nhất cho doanh nghiệp Việt Nam',
  'hienthi',
  2
),
(
  'why-choose-cloud',
  'Hỗ trợ tiếng Việt',
  '',
  'Đội ngũ kỹ thuật Việt Nam, hỗ trợ 24/7',
  'hienthi',
  3
),
(
  'why-choose-cloud',
  'Data tại Việt Nam',
  '',
  'Dữ liệu lưu trữ tại Việt Nam, tuân thủ pháp luật',
  'hienthi',
  4
),
(
  'why-choose-cloud',
  'Tích hợp dễ dàng',
  '',
  'API và SDK đầy đủ, tài liệu chi tiết',
  'hienthi',
  5
);

-- ========== TTP INFRA ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `photo`, `status`, `numb`) 
VALUES (
  'ttp-infra-items',
  'TTP Infra - Hạ tầng CNTT',
  'HEADER',
  'Giải pháp hạ tầng công nghệ thông tin tổng thể cho doanh nghiệp',
  '',
  '',
  'hienthi',
  1
);

-- Items (3 cards)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `contentvi`, `status`, `numb`) 
VALUES 
(
  'ttp-infra-items',
  'Network Design & Implementation',
  '',
  'Thiết kế và triển khai hệ thống mạng chuyên nghiệp, tối ưu hiệu suất',
  'Thiết kế kiến trúc mạng|Triển khai thiết bị Cisco, Juniper|Tối ưu hóa hiệu suất|Đào tạo vận hành',
  'hienthi',
  2
),
(
  'ttp-infra-items',
  'Security Solutions',
  '',
  'Giải pháp bảo mật toàn diện, bảo vệ hệ thống của bạn',
  'Firewall thế hệ mới|IDS/IPS chống xâm nhập|VPN & Access Control|Security Audit & Pentest',
  'hienthi',
  3
),
(
  'ttp-infra-items',
  'Managed IT Services',
  '',
  'Dịch vụ quản trị hệ thống và bảo trì toàn diện',
  'Giám sát 24/7|Backup & Recovery|Patch Management|Incident Response',
  'hienthi',
  4
);

-- ========== PROCESS STEPS ==========
-- Header (numb=1, slogan="HEADER")
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES (
  'process-steps',
  'Quy trình triển khai dự án',
  'HEADER',
  'Quy trình chuyên nghiệp, nhanh chóng và hiệu quả',
  'hienthi',
  1
);

-- Steps (4 bước)
INSERT INTO `table_news` (`type`, `namevi`, `sloganvi`, `descvi`, `status`, `numb`) 
VALUES 
(
  'process-steps',
  'Tư vấn & Khảo sát',
  '01',
  'Phân tích nhu cầu chi tiết và đề xuất giải pháp phù hợp nhất',
  'hienthi',
  2
),
(
  'process-steps',
  'Thiết kế & Báo giá',
  '02',
  'Thiết kế chi tiết hệ thống và báo giá minh bạch, rõ ràng',
  'hienthi',
  3
),
(
  'process-steps',
  'Triển khai',
  '03',
  'Cài đặt và cấu hình hệ thống theo đúng tiêu chuẩn',
  'hienthi',
  4
),
(
  'process-steps',
  'Bàn giao & Hỗ trợ',
  '04',
  'Đào tạo sử dụng và hỗ trợ vận hành liên tục',
  'hienthi',
  5
);

-- =====================================================
-- HOÀN THÀNH MIGRATION
-- =====================================================
-- Tổng kết:
-- - Static modules: 2 (hero, cta)
-- - News modules: 7 (connect, data, advantages, cloud, why-cloud, infra, process)
-- - Tổng items: 29 records (bao gồm 7 headers + 22 items)
-- - Dữ liệu đã được điều chỉnh chi tiết theo thiết kế
