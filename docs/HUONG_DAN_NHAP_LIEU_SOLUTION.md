# HƯỚNG DẪN NHẬP LIỆU - TRANG GIẢI PHÁP

> **Mục đích:** Hướng dẫn admin nhập nội dung cho trang Giải pháp (`/giai-phap`) thông qua admin panel.

---

## 📋 TỔNG QUAN CÁC MODULE

Trang Giải pháp gồm **14 modules** cần nhập liệu:

### **Modules Tĩnh (Static)** - Nhập 1 lần duy nhất
1. ✅ Hero section (Banner chính)
2. ✅ Software Outsourcing - Header  
3. ✅ Dev Process - Header
4. ✅ Digital Transformation - Header
5. ✅ Industry Solutions - Header
6. ✅ Tech Platforms - Header
7. ✅ CTA Section (Kêu gọi hành động)

### **Modules Danh sách (News)** - Có thể thêm nhiều items
8. ✅ Software Outsourcing Cards (3 items)
9. ✅ Dev Process Steps (5 items)
10. ✅ Digital Transformation Cards (3 items)
11. ✅ Industry Retail Cards (3 items)
12. ✅ Industry Healthcare Cards (3 items)
13. ✅ Tech Platform Cards (2 items)

---

## 🎯 CÁCH TÌM MODULES TRONG ADMIN

### **Static Modules:**
**Admin** → **Quản lý Trang tĩnh** → Tìm các modules có tên:
- `Hero trang giải pháp`
- `Software Outsourcing Header`
- `Dev Process Header`
- `Digital Transformation Header`
- `Industry Solutions Header`
- `Tech Platforms Header`
- `CTA trang giải pháp`

### **News Modules:**
**Admin** → **Quản lý Bài viết** → Tìm các modules có tên:
- `Software Outsourcing Cards`
- `Dev Process Steps`
- `Digital Transformation Cards`
- `Industry Retail Cards`
- `Industry Healthcare Cards`
- `Tech Platform Cards`

---

## 📝 CHI TIẾT TỪNG MODULE

---

## 1️⃣ HERO SECTION (Static)

**Đường dẫn:** Admin → Quản lý Trang tĩnh → **Hero trang giải pháp**

### Các trường cần nhập:

| Trường | Giá trị mẫu | Ghi chú |
|--------|-------------|---------|
| **Slogan** | `SOLUTION` | Chữ màu xanh phía trên tiêu đề |
| **Tên (Name)** | `Giải pháp công nghệ toàn diện cho doanh nghiệp` | Tiêu đề chính |
| **Mô tả (Description)** | `Từ phát triển phần mềm outsourcing, chuyển đổi số đến các nền tảng công nghệ đặc thù cho từng ngành hàng. TTP Telecom đồng hành cùng bạn trong hành trình số hóa.` | Mô tả ngắn |
| **Hiển thị** | ✅ Bật | Bắt buộc check |

---

## 2️⃣ SOFTWARE OUTSOURCING HEADER (Static)

**Đường dẫn:** Admin → Quản lý Trang tĩnh → **Software Outsourcing Header**

| Trường | Giá trị mẫu |
|--------|-------------|
| **Slogan** | `OUTSOURCING` |
| **Tên** | `Software Outsourcing` |
| **Mô tả** | `Cung cấp dịch vụ thuê ngoài phát triển phần mềm chuyên nghiệp, đội ngũ dev giàu kinh nghiệm, quy trình chuẩn quốc tế.` |
| **Hiển thị** | ✅ |

---

## 3️⃣ SOFTWARE OUTSOURCING CARDS (News - 3 items)

**Đường dẫn:** Admin → Quản lý Bài viết → **Software Outsourcing Cards**

### **Card 1: Ứng dụng web**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Ứng dụng web` |
| **Mô tả** | `Phát triển web app theo yêu cầu` |
| **Nội dung (Content)** | Nhập chuỗi features, phân tách bằng dấu `\|` <br>VD: `Responsive design\|SPA/SSR (React, Vue, Next.js)\|RESTful API & GraphQL\|Cloud-ready & scalable` |
| **Nổi bật** | ✅ (nếu muốn hiển thị) |
| **Hiển thị** | ✅ Bắt buộc |

### **Card 2: Mobile app**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Mobile app` |
| **Mô tả** | `iOS & Android native/cross-platform` |
| **Nội dung** | `Flutter, React Native\|Native iOS (Swift) / Android (Kotlin)\|Push notification & offline mode\|Payment integration` |
| **Nổi bật** | ✅ |
| **Hiển thị** | ✅ |

### **Card 3: Hệ thống ERP, CRM**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Hệ thống ERP, CRM` |
| **Mô tả** | `Giải pháp quản lý tổng thể doanh nghiệp` |
| **Nội dung** | `Quản lý quy trình kinh doanh\|Tích hợp đa hệ thống\|Báo cáo & BI dashboard\|Tùy biến theo ngành` |
| **Nổi bật** | ✅ |
| **Hiển thị** | ✅ |

> **💡 Lưu ý:** Field **Nội dung** dùng dấu `|` để phân tách các features. Mỗi feature sẽ hiển thị thành 1 dòng có icon tick.

---

## 4️⃣ DEV PROCESS HEADER (Static)

**Đường dẫn:** Admin → Quản lý Trang tĩnh → **Dev Process Header**

| Trường | Giá trị |
|--------|---------|
| **Slogan** | `PROCESS` |
| **Tên** | `Quy trình phát triển chuẩn` |
| **Mô tả** | `Quy trình Agile linh hoạt, minh bạch, đảm bảo chất lượng và tiến độ từng sprint.` |
| **Hiển thị** | ✅ |

---

## 5️⃣ DEV PROCESS STEPS (News - 5 items)

**Đường dẫn:** Admin → Quản lý Bài viết → **Dev Process Steps**

### Nhập 5 steps theo thứ tự (dùng field Số thứ tự để sắp xếp):

| STT | Tên Step | Mô tả |
|-----|----------|-------|
| 1 | `Requirement` | `Phân tích yêu cầu, lập kế hoạch` |
| 2 | `Design` | `Thiết kế UI/UX, kiến trúc hệ thống` |
| 3 | `Development` | `Sprint coding, code review, testing` |
| 4 | `Deployment` | `CI/CD, triển khai lên môi trường thực tế` |
| 5 | `Maintenance` | `Hỗ trợ & nâng cấp liên tục` |

> **💡 Lưu ý:** Đặt **Số thứ tự** từ 1-5 để đảm bảo thứ tự hiển thị đúng.

---

## 6️⃣ DIGITAL TRANSFORMATION HEADER (Static)

**Đường dẫn:** Admin → Quản lý Trang tĩnh → **Digital Transformation Header**

| Trường | Giá trị |
|--------|---------|
| **Slogan** | `TRANSFORMATION` |
| **Tên** | `Chuyển đổi số doanh nghiệp` |
| **Mô tả** | `Tư vấn và triển khai các giải pháp chuyển đổi số toàn diện, từ quy trình nội bộ đến trải nghiệm khách hàng.` |
| **Hiển thị** | ✅ |

---

## 7️⃣ DIGITAL TRANSFORMATION CARDS (News - 3 items)

**Đường dẫn:** Admin → Quản lý Bài viết → **Digital Transformation Cards**

### **Card 1: Tư vấn chiến lược**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Tư vấn chiến lược` |
| **Mô tả** | `Đánh giá hiện trạng & xây dựng lộ trình` |
| **Nội dung** | `Digital maturity assessment\|Technology roadmap\|Change management\|ROI analysis` |
| **Nổi bật** | ✅ |
| **Hiển thị** | ✅ |

### **Card 2: Tự động hóa quy trình**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Tự động hóa quy trình` |
| **Mô tả** | `RPA, workflow automation` |
| **Nội dung** | `Phân tích quy trình hiện tại\|Xây dựng workflow tự động\|Tích hợp AI/ML\|Monitoring & optimization` |
| **Nổi bật** | ✅ |
| **Hiển thị** | ✅ |

### **Card 3: Cloud Migration**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Cloud Migration` |
| **Mô tả** | `Di chuyển lên cloud an toàn, hiệu quả` |
| **Nội dung** | `Cloud readiness assessment\|Migration strategy & planning\|Data migration\|Post-migration support` |
| **Nổi bật** | ✅ |
| **Hiển thị** | ✅ |

---

## 8️⃣ INDUSTRY SOLUTIONS HEADER (Static)

**Đường dẫn:** Admin → Quản lý Trang tĩnh → **Industry Solutions Header**

| Trường | Giá trị |
|--------|---------|
| **Slogan** | `INDUSTRY` |
| **Tên** | `Giải pháp theo ngành` |
| **Mô tả** | `Các giải pháp được tối ưu hóa cho từng lĩnh vực: Bán lẻ, Y tế, Giáo dục...` |
| **Hiển thị** | ✅ |

---

## 9️⃣ INDUSTRY RETAIL CARDS (News - 3 items)

**Đường dẫn:** Admin → Quản lý Bài viết → **Industry Retail Cards**

### **Card 1: Quản lý chuỗi**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Quản lý chuỗi` |
| **Mô tả** | `Hệ thống quản lý toàn diện cho chuỗi cửa hàng` |
| **Nội dung** | `POS system, inventory management, multi-location\|Real-time sync, báo cáo tập trung\|Quản lý nhân viên, ca làm việc` |
| **Options (JSON)** | `["POS tích hợp", "Quản lý kho", "Nhân sự real-time"]` |
| **Hiển thị** | ✅ |

### **Card 2: Loyalty - Voucher**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Loyalty - Voucher` |
| **Mô tả** | `Chương trình khách hàng thân thiết` |
| **Nội dung** | `Tích điểm, đổi thưởng, voucher, QR/NFC tích hợp\|Marketing automation, Phân tích hành vi khách hàng` |
| **Options (JSON)** | `["Tích điểm", "Voucher", "CRM", "Marketing"]` |
| **Hiển thị** | ✅ |

### **Card 3: AI Camera giám sát**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `AI Camera giám sát` |
| **Mô tả** | `Giám sát thông minh bằng AI` |
| **Nội dung** | `Đếm người, phát hiện hành vi trộm cắp, Heat map\|Customer journey, Age/gender detection, Queue management` |
| **Options (JSON)** | `["Đếm người", "Heat map", "Alert AI", "Analytics"]` |
| **Hiển thị** | ✅ |

> **💡 Lưu ý:** Field **Options** là JSON array chứa các tags hiển thị dưới mỗi card.

---

## 🔟 INDUSTRY HEALTHCARE CARDS (News - 3 items)

**Đường dẫn:** Admin → Quản lý Bài viết → **Industry Healthcare Cards**

### **Card 1: Quản lý phòng khám, bệnh viện**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Quản lý phòng khám, bệnh viện` |
| **Mô tả** | `Hệ thống quản lý y tế toàn diện` |
| **Nội dung** | `HIS, Quản lý bệnh nhân, Khám chữa bệnh, tạ viện\|DICOM, hồ sơ bệnh án điện tử, PACS, Quản lý kính dược, vật tư, hóa đơn BH YT` |
| **Options (JSON)** | `["HIS", "EMR", "PACS", "BHYT"]` |
| **Hiển thị** | ✅ |

### **Card 2: LMS - nền tảng đào tạo**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `LMS - nền tảng đào tạo` |
| **Mô tả** | `Nền tảng học tập trực tuyến` |
| **Nội dung** | `Course management, video streaming, quiz/exam\|Live class, discussion forum, Progress tracking, certificate, Mobile learning` |
| **Options (JSON)** | `["Video course", "Live class", "Quiz/exam", "Certificate"]` |
| **Hiển thị** | ✅ |

### **Card 3: AI hỗ trợ học tập**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `AI hỗ trợ học tập` |
| **Mô tả** | `Trợ lý AI cho giáo dục` |
| **Nội dung** | `Personalized learning path, Tự động chấm bài, dựa vào quiz\|Chatbot hỗ trợ học sinh, Phân tích tiến độ học tập` |
| **Options (JSON)** | `["Personalized", "Auto grading", "Chatbot", "Analytics"]` |
| **Hiển thị** | ✅ |

---

## 1️⃣1️⃣ TECH PLATFORMS HEADER (Static)

**Đường dẫn:** Admin → Quản lý Trang tĩnh → **Tech Platforms Header**

| Trường | Giá trị |
|--------|---------|
| **Slogan** | `PLATFORMS` |
| **Tên** | `Nền tảng công nghệ của TTP` |
| **Mô tả** | `Các sản phẩm nền tảng độc quyền được phát triển và vận hành bởi TTP Telecom.` |
| **Hiển thị** | ✅ |

---

## 1️⃣2️⃣ TECH PLATFORM CARDS (News - 2 items)

**Đường dẫn:** Admin → Quản lý Bài viết → **Tech Platform Cards**

### **Platform 1: MatD**

| Trường | Giá trị |
|--------|---------|
| **Slogan** | `primary` |
| **Tên** | `MatD - AI Camera Platform` |
| **Mô tả** | `Nền tảng quản lý camera thông minh` |
| **Nội dung** | `MatD là nền tảng AI-powered camera thông minh, tích hợp AI để phát hiện bất thường, tổng hợp sự kiện và đưa ra những cảnh báo tức thì.` |
| **Options (JSON)** | Xem mẫu bên dưới ⬇️ |
| **Hiển thị** | ✅ |

**Options JSON cho MatD:**
```json
{
  "features": [
    "Quản lý từ xa",
    "Tổng hợp dữ liệu",
    "Camera thông minh",
    "API mở"
  ],
  "highlight": "Ứng dụng: Chuỗi bán lẻ (FMCG), nhà máy sản xuất, kho logistics..."
}
```

### **Platform 2: FixHub**

| Trường | Giá trị |
|--------|---------|
| **Slogan** | `secondary` |
| **Tên** | `FixHub - Nền tảng quản lý dịch vụ kỹ thuật` |
| **Mô tả** | `Nền tảng quản lý IT dịch vụ kỹ thuật` |
| **Nội dung** | `FixHub là giải pháp quản lý toàn diện các dịch vụ IT/OT, từ quản lý thiết bị, theo dõi sự cố đến lịch bảo trì định kỳ. Tối ưu hoá vận hành, tiết kiệm chi phí quản lý. Dễ dàng tích hợp và linh hoạt triển khai cho doanh nghiệp mọi quy mô.` |
| **Options (JSON)** | Xem mẫu bên dưới ⬇️ |
| **Hiển thị** | ✅ |

**Options JSON cho FixHub:**
```json
{
  "features": [
    "Quản lý dịch vụ kỹ thuật",
    "Theo dõi sự cố & bảo trì",
    "Tích hợp đa hệ thống",
    "Báo cáo & analytics"
  ],
  "highlight": "Ứng dụng: Doanh nghiệp dịch vụ, chuỗi cửa hàng, khu công nghiệp..."
}
```

> **💡 Lưu ý:** 
> - Field **Slogan** dùng để set màu card (`primary` hoặc `secondary`)
> - Field **Options** là JSON object chứa `features` array và `highlight` string

---

## 1️⃣3️⃣ CTA SECTION (Static)

**Đường dẫn:** Admin → Quản lý Trang tĩnh → **CTA trang giải pháp**

| Trường | Giá trị |
|--------|---------|
| **Tên** | `Bạn đã sẵn sàng chuyển đổi số?` |
| **Mô tả** | `Hãy để TTP Telecom đồng hành cùng bạn.` |
| **Nội dung (Optional)** | `Liên hệ ngay hôm nay để được tư vấn chi tiết về các giải pháp phù hợp nhất cho doanh nghiệp của bạn.` |
| **Hiển thị** | ✅ |

---

## ✅ CHECKLIST SAU KHI NHẬP LIỆU

- [ ] Đã nhập đầy đủ 7 modules tĩnh (Static)
- [ ] Đã nhập đủ 3 Software Outsourcing Cards
- [ ] Đã nhập đủ 5 Dev Process Steps (có số thứ tự)
- [ ] Đã nhập đủ 3 Digital Transformation Cards
- [ ] Đã nhập đủ 3 Industry Retail Cards (có JSON tags)
- [ ] Đã nhập đủ 3 Industry Healthcare Cards (có JSON tags)
- [ ] Đã nhập đủ 2 Tech Platform Cards (có JSON options)
- [ ] Tất cả đều đã check ✅ **Hiển thị**
- [ ] Đã test trên trang `/giai-phap`
- [ ] Responsive mobile OK
- [ ] Tab switching (Retail/Healthcare) hoạt động

---

## 🆘 GẶP VẤN ĐỀ?

### **Module không hiển thị trên frontend:**
- ✅ Check xem đã bật **Hiển thị** chưa
- ✅ Check xem đã import database chưa: `mysql -u root -p db_name < database/migration_solution.sql`
- ✅ Xóa cache browser (Ctrl + F5)

### **JSON không parse được:**
- ✅ Kiểm tra dấu ngoặc kép `"` phải là dấu ngoặc kép chuẩn, không phải dấu fancy `""`
- ✅ Copy từ file `DATA_QUICK_COPY_SOLUTION.txt` để đảm bảo format đúng

### **Thứ tự hiển thị sai:**
- ✅ Dùng field **Số thứ tự** để sắp xếp lại
- ✅ STT càng nhỏ càng hiển thị trước

---

## 📞 LIÊN HỆ HỖ TRỢ

Nếu gặp khó khăn khi nhập liệu, liên hệ team Dev để được hỗ trợ!

**Happy editing! 🚀**

