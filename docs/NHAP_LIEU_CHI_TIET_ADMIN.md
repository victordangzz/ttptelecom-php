# 📝 HƯỚNG DẪN NHẬP LIỆU CHI TIẾT - ADMIN PANEL

> **Ngày tạo:** 07/01/2026  
> **Dành cho:** Admin/Content Editor  
> **Mục đích:** Copy-paste trực tiếp vào admin

---

## 📌 DANH SÁCH CẦN NHẬP

| STT | Module | Loại | Số bản ghi | Thời gian ước tính |
|-----|--------|------|------------|-------------------|
| 1 | Hero trang chủ | Static | 1 | 3 phút |
| 2 | Giới thiệu trang chủ | Static | 1 | 5 phút |
| 3 | Header dịch vụ | Static | 1 | 2 phút |
| 4 | Dịch vụ trang chủ | News | 5 | 10 phút |
| 5 | Header ưu thế | Static | 1 | 2 phút |
| 6 | Ưu thế/Tính năng | News | 4 | 8 phút |
| **TỔNG** | | | **12** | **~30 phút** |

---

# 1️⃣ HERO TRANG CHỦ

**Đường dẫn:** `Admin > Nội dung tĩnh > Hero trang chủ`

## 📋 FORM NHẬP LIỆU:

```
┌─────────────────────────────────────────────────────────┐
│ THÊM/SỬA: HERO TRANG CHỦ                                │
├─────────────────────────────────────────────────────────┤
│                                                           │
│ [Tiếng Việt] ◉  (Tab ngôn ngữ)                          │
│                                                           │
│ ┌─── Slogan ─────────────────────────────────────────┐  │
│ │ Hạ tầng số cho doanh nghiệp                         │  │
│ └─────────────────────────────────────────────────────┘  │
│                                                           │
│ ┌─── Tên (Tiêu đề) ──────────────────────────────────┐  │
│ │ TTP Telecom – Kiến tạo hạ                           │  │
│ │ tầng số cho doanh nghiệp                            │  │
│ └─────────────────────────────────────────────────────┘  │
│   💡 Tip: Xuống dòng bằng Enter                          │
│                                                           │
│ ┌─── Mô tả ngắn ──────────────────────────────────────┐  │
│ │ Giúp doanh nghiệp vận hành ổn định, mở rộng linh    │  │
│ │ hoạt và vươn lên tầm cao mới. Chúng tôi tự hào      │  │
│ │ làm tảng tin cậy đồng hành cùng bạn trong mọi       │  │
│ │ giai đoạn phát triển.                                │  │
│ └─────────────────────────────────────────────────────┘  │
│                                                           │
│ ┌─── Options (JSON) ──────────────────────────────────┐  │
│ │ {"button1_text":"Tìm Hiểu về chúng tôi",            │  │
│ │ "button1_link":"gioi-thieu",                         │  │
│ │ "button2_text":"Liên hệ ngay",                       │  │
│ │ "button2_link":"lien-he"}                            │  │
│ └─────────────────────────────────────────────────────┘  │
│   💡 Nếu không có trường Options, bỏ qua                 │
│                                                           │
│ ☑ Hiển thị                                               │
│                                                           │
│ Số thứ tự: [1]                                           │
│                                                           │
│ [Lưu]  [Lưu & Thoát]  [Thoát]                           │
└─────────────────────────────────────────────────────────┘
```

## 📝 DỮ LIỆU COPY-PASTE:

### **Slogan:**
```
Hạ tầng số cho doanh nghiệp
```

### **Tên (Tiêu đề):**
```
TTP Telecom – Kiến tạo hạ
tầng số cho doanh nghiệp
```

### **Mô tả ngắn:**
```
Giúp doanh nghiệp vận hành ổn định, mở rộng linh hoạt và vươn lên tầm cao mới. Chúng tôi tự hào làm tảng tin cậy đồng hành cùng bạn trong mọi giai đoạn phát triển.
```

### **Options (JSON):**
```json
{"button1_text":"Tìm Hiểu về chúng tôi","button1_link":"gioi-thieu","button2_text":"Liên hệ ngay","button2_link":"lien-he"}
```

### **Checkbox:**
- ☑ **Hiển thị**

### **Số thứ tự:**
```
1
```

---

# 2️⃣ GIỚI THIỆU TRANG CHỦ

**Đường dẫn:** `Admin > Nội dung tĩnh > Giới thiệu trang chủ`

## 📋 FORM NHẬP LIỆU:

```
┌─────────────────────────────────────────────────────────┐
│ THÊM/SỬA: GIỚI THIỆU TRANG CHỦ                          │
├─────────────────────────────────────────────────────────┤
│                                                           │
│ [Tiếng Việt] ◉                                           │
│                                                           │
│ ┌─── Slogan ─────────────────────────────────────────┐  │
│ │ Về chúng tôi                                         │  │
│ └─────────────────────────────────────────────────────┘  │
│                                                           │
│ ┌─── Tên (Tiêu đề) ──────────────────────────────────┐  │
│ │ Về <span class="highlight">TTP Telecom</span>       │  │
│ └─────────────────────────────────────────────────────┘  │
│                                                           │
│ ┌─── Mô tả ngắn (CKEditor) ───────────────────────────┐  │
│ │ [B] [I] [U] [Link] [Image]...                        │  │
│ │                                                       │  │
│ │ TTP Telecom tự hào là đơn vị cung cấp giải pháp     │  │
│ │ IT/OT đặc biệt là công nghệ trong các doanh nghiệp, │  │
│ │ với định hướng "One-Stop-Shop" - nền tảng điều      │  │
│ │ hành trọn bộ, máy chủ, cloud (IaaS)/container, AI   │  │
│ │ và liên kết nội hạ tầng số hoá mọi quy trình doanh  │  │
│ │ nghiệp.                                              │  │
│ └─────────────────────────────────────────────────────┘  │
│                                                           │
│ ┌─── Nội dung (CKEditor) ─────────────────────────────┐  │
│ │ Chúng tôi không ngừng cải tiến, đổi mới sáng tạo,   │  │
│ │ đồng hành cùng doanh nghiệp trong suốt hành trình   │  │
│ │ chuyển đổi số với hạ tầng CNTT tiên tiến và phù hợp.│  │
│ └─────────────────────────────────────────────────────┘  │
│                                                           │
│ ┌─── Hình ảnh ────────────────────────────────────────┐  │
│ │ [Chọn file...]  [Upload]                             │  │
│ │ 💡 Kích thước: 600x800px, < 500KB                    │  │
│ └─────────────────────────────────────────────────────┘  │
│                                                           │
│ ┌─── Options (JSON) ──────────────────────────────────┐  │
│ │ {"stat1_number":"10+",                               │  │
│ │ "stat1_label":"Năm kinh nghiệm",                     │  │
│ │ "stat2_number":"1700+",                              │  │
│ │ "stat2_label":"Dự án hoàn thành"}                    │  │
│ └─────────────────────────────────────────────────────┘  │
│                                                           │
│ ☑ Hiển thị                                               │
│                                                           │
│ Số thứ tự: [1]                                           │
│                                                           │
│ [Lưu]  [Lưu & Thoát]  [Thoát]                           │
└─────────────────────────────────────────────────────────┘
```

## 📝 DỮ LIỆU COPY-PASTE:

### **Slogan:**
```
Về chúng tôi
```

### **Tên (Tiêu đề):**
```
Về <span class="highlight">TTP Telecom</span>
```

### **Mô tả ngắn:**
```html
<p>TTP Telecom tự hào là đơn vị cung cấp giải pháp IT/OT đặc biệt là công nghệ trong các doanh nghiệp, với định hướng <strong>"One-Stop-Shop"</strong> - nền tảng điều hành trọn bộ, máy chủ, cloud (IaaS)/container, AI và liên kết nội hạ tầng số hoá mọi quy trình doanh nghiệp.</p>
```

### **Nội dung:**
```html
<p>Chúng tôi không ngừng cải tiến, đổi mới sáng tạo, đồng hành cùng doanh nghiệp trong suốt hành trình chuyển đổi số với hạ tầng CNTT tiên tiến và phù hợp.</p>
```

### **Hình ảnh:**
- Upload ảnh: **600x800px** (tỉ lệ 3:4)
- Định dạng: JPG, PNG, WebP
- Nội dung: Ảnh văn phòng, data center, hoặc đội ngũ

### **Options (JSON):**
```json
{"stat1_number":"10+","stat1_label":"Năm kinh nghiệm","stat2_number":"1700+","stat2_label":"Dự án hoàn thành"}
```

### **Checkbox:**
- ☑ **Hiển thị**

### **Số thứ tự:**
```
1
```

---

# 3️⃣ HEADER DỊCH VỤ

**Đường dẫn:** `Admin > Nội dung tĩnh > Header dịch vụ`

## 📝 DỮ LIỆU COPY-PASTE:

### **Slogan:**
```
Hệ sinh thái dịch vụ
```

### **Tên (Tiêu đề):**
```
Hệ Sinh Thái <span class="highlight">Dịch Vụ</span>
```

### **Mô tả ngắn:**
```
Cung cấp giải pháp trọn gói từ kết nối mạng, lưu trữ dữ liệu đến chuyển đổi số toàn diện cho doanh nghiệp
```

### **Checkbox:**
- ☑ **Hiển thị**

### **Số thứ tự:**
```
1
```

---

# 4️⃣ DỊCH VỤ TRANG CHỦ (5 bản ghi)

**Đường dẫn:** `Admin > Tin tức > Dịch vụ trang chủ`

## 📋 DỊCH VỤ 1: TTP CONNECT

```
┌─────────────────────────────────────────────────────────┐
│ THÊM: DỊCH VỤ TRANG CHỦ                                 │
├─────────────────────────────────────────────────────────┤
│                                                           │
│ Tên: TTP Connect                                         │
│                                                           │
│ Slug: ttp-connect (tự động tạo)                          │
│                                                           │
│ Mô tả ngắn:                                              │
│ Internet & Truyền dẫn doanh nghiệp (Leased line,        │
│ IP transit)                                              │
│                                                           │
│ Hình ảnh: [Upload icon WiFi/Network]                    │
│ 💡 Kích thước: 200x200px, PNG/SVG                        │
│                                                           │
│ ☑ Nổi bật                                                │
│ ☑ Hiển thị                                               │
│                                                           │
│ Số thứ tự: 1                                             │
│                                                           │
│ [Lưu]  [Lưu & Thoát]                                     │
└─────────────────────────────────────────────────────────┘
```

### **Dữ liệu:**
- **Tên:** `TTP Connect`
- **Mô tả:** `Internet & Truyền dẫn doanh nghiệp (Leased line, IP transit)`
- **Slug:** `ttp-connect`
- **Checkbox:** ☑ Nổi bật, ☑ Hiển thị
- **Số thứ tự:** `1`

---

## 📋 DỊCH VỤ 2: TTP DATA

### **Dữ liệu:**
- **Tên:** `TTP Data`
- **Mô tả:** `Máy chủ, Data center - Colocation, Dedicated server`
- **Slug:** `ttp-data`
- **Checkbox:** ☑ Nổi bật, ☑ Hiển thị
- **Số thứ tự:** `2`

---

## 📋 DỊCH VỤ 3: TTP CLOUD

### **Dữ liệu:**
- **Tên:** `TTP Cloud`
- **Mô tả:** `Hạ tầng đám mây Cloud server, storage, backup & recovery`
- **Slug:** `ttp-cloud`
- **Checkbox:** ☑ Nổi bật, ☑ Hiển thị
- **Số thứ tự:** `3`

---

## 📋 DỊCH VỤ 4: TTP INFRA

### **Dữ liệu:**
- **Tên:** `TTP Infra`
- **Mô tả:** `Hạ tầng CNTT LAN/WAN, Camera AI, giải pháp an ninh`
- **Slug:** `ttp-infra`
- **Checkbox:** ☑ Nổi bật, ☑ Hiển thị
- **Số thứ tự:** `4`

---

## 📋 DỊCH VỤ 5: TTP SOLUTION

### **Dữ liệu:**
- **Tên:** `TTP Solution`
- **Mô tả:** `Giải pháp chuyển đổi số ERP, CRM, AI chatbot`
- **Slug:** `ttp-solution`
- **Checkbox:** ☑ Nổi bật, ☑ Hiển thị
- **Số thứ tự:** `5`

---

# 5️⃣ HEADER ƯU THẾ

**Đường dẫn:** `Admin > Nội dung tĩnh > Header ưu thế`

## 📝 DỮ LIỆU COPY-PASTE:

### **Slogan:**
```
Tại sao chọn chúng tôi
```

### **Tên (Tiêu đề):**
```
Tại Sao Chọn <span class="highlight">TTP Telecom?</span>
```

### **Mô tả ngắn:**
```
Chúng tôi mang đến những ưu thế vượt trội cho doanh nghiệp của bạn
```

### **Checkbox:**
- ☑ **Hiển thị**

### **Số thứ tự:**
```
1
```

---

# 6️⃣ ƯU THẾ/TÍNH NĂNG (4 bản ghi)

**Đường dẫn:** `Admin > Tin tức > Ưu thế/Tính năng`

## 📋 ƯU THẾ 1: HẠ TẦNG HIỆN ĐẠI

### **Dữ liệu:**
- **Tên:** `Hạ tầng hiện đại`
- **Mô tả:** `Data Center chuẩn Tier 3 đạt chứng nhận TVRA, SOC 2 Type II`
- **Hình ảnh:** Upload icon server/data center (optional)
- **Checkbox:** ☑ Nổi bật, ☑ Hiển thị
- **Số thứ tự:** `1`

---

## 📋 ƯU THẾ 2: KẾT NỐI TOÀN CẦU

### **Dữ liệu:**
- **Tên:** `Kết nối toàn cầu`
- **Mô tả:** `Kết nối 15+ ISP và đối tác Internet từ Việt Nam ra thế giới`
- **Hình ảnh:** Upload icon globe/network (optional)
- **Checkbox:** ☑ Nổi bật, ☑ Hiển thị
- **Số thứ tự:** `2`

---

## 📋 ƯU THẾ 3: HIỆU SUẤT CAO

### **Dữ liệu:**
- **Tên:** `Hiệu suất cao`
- **Mô tả:** `Cam kết SLA 99,99% uptime, độ trễ thấp, phản hồi nhanh`
- **Hình ảnh:** Upload icon lightning/speed (optional)
- **Checkbox:** ☑ Nổi bật, ☑ Hiển thị
- **Số thứ tự:** `3`

---

## 📋 ƯU THẾ 4: BẢO MẬT TUYỆT ĐỐI

### **Dữ liệu:**
- **Tên:** `Bảo mật tuyệt đối`
- **Mô tả:** `Firewall, DDoS protection theo tiêu chuẩn quốc tế`
- **Hình ảnh:** Upload icon shield/security (optional)
- **Checkbox:** ☑ Nổi bật, ☑ Hiển thị
- **Số thứ tự:** `4`

---

# 📊 TỔNG HỢP BẢNG DỮ LIỆU

## **1. STATIC MODULES (4 bản ghi)**

| Module | Slogan | Tên | Mô tả | Options |
|--------|--------|-----|-------|---------|
| **Hero** | Hạ tầng số cho doanh nghiệp | TTP Telecom – Kiến tạo hạ<br>tầng số cho doanh nghiệp | Giúp doanh nghiệp vận hành ổn định... | {"button1_text":"...","button2_text":"..."} |
| **About** | Về chúng tôi | Về TTP Telecom | TTP Telecom tự hào là... | {"stat1_number":"10+","stat2_number":"1700+"} |
| **Header DV** | Hệ sinh thái dịch vụ | Hệ Sinh Thái Dịch Vụ | Cung cấp giải pháp trọn gói... | - |
| **Header ƯT** | Tại sao chọn chúng tôi | Tại Sao Chọn TTP Telecom? | Chúng tôi mang đến những ưu thế... | - |

## **2. NEWS MODULES (9 bản ghi)**

### **A. Dịch vụ trang chủ (5)**

| STT | Tên | Mô tả | Slug |
|-----|-----|-------|------|
| 1 | TTP Connect | Internet & Truyền dẫn... | ttp-connect |
| 2 | TTP Data | Máy chủ, Data center... | ttp-data |
| 3 | TTP Cloud | Hạ tầng đám mây... | ttp-cloud |
| 4 | TTP Infra | Hạ tầng CNTT... | ttp-infra |
| 5 | TTP Solution | Giải pháp chuyển đổi số... | ttp-solution |

### **B. Ưu thế (4)**

| STT | Tên | Mô tả |
|-----|-----|-------|
| 1 | Hạ tầng hiện đại | Data Center chuẩn Tier 3... |
| 2 | Kết nối toàn cầu | Kết nối 15+ ISP... |
| 3 | Hiệu suất cao | Cam kết SLA 99,99%... |
| 4 | Bảo mật tuyệt đối | Firewall, DDoS protection... |

---

# 🎨 HƯỚNG DẪN UPLOAD HÌNH ẢNH

## **1. Ảnh giới thiệu (About Section)**

**Yêu cầu:**
- Kích thước: **600x800px** (tỉ lệ 3:4, ảnh dọc)
- Định dạng: JPG, PNG, WebP
- Dung lượng: < 500KB
- Nội dung: Ảnh văn phòng, data center, đội ngũ

**Nơi tìm ảnh mẫu:**
- Unsplash: `data center`, `office team`, `technology`
- Pexels: `server room`, `networking`

---

## **2. Icons dịch vụ (5 cái)**

**Yêu cầu:**
- Kích thước: **200x200px**
- Định dạng: PNG, SVG (ưu tiên SVG)
- Dung lượng: < 100KB
- Màu sắc: Trắng hoặc trong suốt (để CSS tự tô màu)

**Đề xuất icons:**

| Dịch vụ | Icon | Nguồn |
|---------|------|-------|
| TTP Connect | WiFi/Signal waves | FontAwesome: `fa-wifi` |
| TTP Data | Server/Database | FontAwesome: `fa-server` |
| TTP Cloud | Cloud | FontAwesome: `fa-cloud` |
| TTP Infra | Network | FontAwesome: `fa-project-diagram` |
| TTP Solution | Code/Settings | FontAwesome: `fa-code` |

**Download miễn phí:**
- https://fontawesome.com/icons
- https://iconmonstr.com/
- https://www.flaticon.com/

---

## **3. Icons ưu thế (4 cái) - OPTIONAL**

Nếu không upload, hệ thống dùng SVG mặc định.

**Yêu cầu tương tự icons dịch vụ:**
- 200x200px, PNG/SVG, < 100KB

---

# ✅ CHECKLIST NHẬP LIỆU

```
STATIC MODULES:
  ☐ Hero trang chủ (1 bản ghi)
    ☐ Slogan ✓
    ☐ Tên ✓
    ☐ Mô tả ✓
    ☐ Options (JSON) ✓
    ☐ Check "Hiển thị" ✓
    
  ☐ Giới thiệu trang chủ (1 bản ghi)
    ☐ Slogan ✓
    ☐ Tên ✓
    ☐ Mô tả (CKEditor) ✓
    ☐ Nội dung (CKEditor) ✓
    ☐ Upload ảnh 600x800px ✓
    ☐ Options (JSON) ✓
    ☐ Check "Hiển thị" ✓
    
  ☐ Header dịch vụ (1 bản ghi)
    ☐ Slogan ✓
    ☐ Tên ✓
    ☐ Mô tả ✓
    ☐ Check "Hiển thị" ✓
    
  ☐ Header ưu thế (1 bản ghi)
    ☐ Slogan ✓
    ☐ Tên ✓
    ☐ Mô tả ✓
    ☐ Check "Hiển thị" ✓

NEWS MODULES:
  ☐ Dịch vụ trang chủ (5 bản ghi)
    ☐ 1. TTP Connect ✓
    ☐ 2. TTP Data ✓
    ☐ 3. TTP Cloud ✓
    ☐ 4. TTP Infra ✓
    ☐ 5. TTP Solution ✓
    
  ☐ Ưu thế/Tính năng (4 bản ghi)
    ☐ 1. Hạ tầng hiện đại ✓
    ☐ 2. Kết nối toàn cầu ✓
    ☐ 3. Hiệu suất cao ✓
    ☐ 4. Bảo mật tuyệt đối ✓

KIỂM TRA:
  ☐ Đã check tất cả "Hiển thị" ✓
  ☐ Đã upload ảnh About ✓
  ☐ Đã upload 5 icons dịch vụ (optional) ✓
  ☐ Đã test hiển thị trang chủ ✓
  ☐ Đã clear cache browser ✓
```

---

# 💡 TIPS NHẬP LIỆU NHANH

## **1. Sử dụng Excel để chuẩn bị trước:**

```excel
| Module | Field | Content |
|--------|-------|---------|
| Hero   | Slogan| Hạ tầng số cho doanh nghiệp |
| Hero   | Name  | TTP Telecom – Kiến tạo... |
...
```

Sau đó copy-paste từ Excel vào admin.

---

## **2. Shortcut hữu ích:**

- **Lưu nhanh:** `Ctrl + S` (trên một số CMS)
- **Copy text:** `Ctrl + C`
- **Paste text:** `Ctrl + V`
- **Undo:** `Ctrl + Z`

---

## **3. Validate JSON trước khi paste:**

Truy cập: https://jsonlint.com/  
Paste JSON → Click "Validate JSON"

Ví dụ:
```json
{"button1_text":"Tìm Hiểu về chúng tôi","button1_link":"gioi-thieu","button2_text":"Liên hệ ngay","button2_link":"lien-he"}
```

Nếu hợp lệ → Màu xanh ✅  
Nếu lỗi → Màu đỏ, sửa theo gợi ý

---

## **4. Thứ tự nhập liệu khuyến nghị:**

1. ✅ Nhập tất cả STATIC trước (4 bản ghi) - nhanh
2. ✅ Nhập NEWS sau (9 bản ghi) - lâu hơn
3. ✅ Upload ảnh About
4. ✅ Upload icons dịch vụ (nếu có)
5. ✅ Test trang chủ

---

# 🔧 XỬ LÝ LỖI THƯỜNG GẶP

## **Lỗi 1: "Trường bắt buộc không được để trống"**

**Nguyên nhân:** Chưa nhập đủ trường bắt buộc

**Giải pháp:**
- Kiểm tra các trường có dấu `*` (bắt buộc)
- Nhập ít nhất: Tên, Check "Hiển thị"

---

## **Lỗi 2: "JSON không hợp lệ"**

**Nguyên nhân:** Syntax JSON sai

**Giải pháp:**
1. Dùng dấu ngoặc kép `"` không phải `'`
2. Kiểm tra tại: https://jsonlint.com/
3. Copy chính xác từ file này

---

## **Lỗi 3: "Upload file thất bại"**

**Nguyên nhân:** File quá lớn hoặc sai định dạng

**Giải pháp:**
1. Nén ảnh bằng TinyPNG.com
2. Chỉ dùng: JPG, PNG, WebP, SVG
3. Đổi tên file không dấu, không khoảng trắng

---

## **Lỗi 4: "Slug đã tồn tại"**

**Nguyên nhân:** Trùng slug với bản ghi khác

**Giải pháp:**
- Sửa slug thành: `ttp-connect-2`, `ttp-connect-v2`
- Hoặc xóa bản ghi cũ trùng slug

---

# 📞 HỖ TRỢ

**Nếu gặp khó khăn:**

1. **Screenshot màn hình lỗi**
2. **Ghi chú bước đang làm**
3. **Liên hệ:**
   - Email: dev@ttptelecom.vn
   - Phone: 0123 456 789
   - Zalo: [Số Zalo]

---

# 🎉 HOÀN THÀNH

Sau khi nhập xong tất cả:

1. ✅ Kiểm tra trang chủ: `https://domain.com/`
2. ✅ Test trên mobile
3. ✅ Clear cache: `Ctrl + F5`
4. ✅ Báo cáo hoàn thành

**Chúc bạn nhập liệu thành công! 🚀**

---

> **Tài liệu này:** `docs/NHAP_LIEU_CHI_TIET_ADMIN.md`  
> **Ngày tạo:** 07/01/2026  
> **Phiên bản:** 1.0

