# 📖 HƯỚNG DẪN NHẬP LIỆU ADMIN - TRANG CHỦ MỚI

> **Ngày tạo:** 07/01/2026  
> **Phiên bản:** 1.0  
> **Dự án:** TTP Telecom Website

---

## 📋 MỤC LỤC

1. [Tổng quan](#tổng-quan)
2. [Cài đặt ban đầu](#cài-đặt-ban-đầu)
3. [Hướng dẫn từng module](#hướng-dẫn-từng-module)
4. [Upload và quản lý ảnh](#upload-và-quản-lý-ảnh)
5. [Tips & Best Practices](#tips--best-practices)
6. [Troubleshooting](#troubleshooting)

---

## 🎯 TỔNG QUAN

Trang chủ mới bao gồm **4 sections chính**:

| Section | Module | Số bản ghi | Loại |
|---------|--------|------------|------|
| **Hero** (Banner) | Static | 1 | `hero-trangchu` |
| **About** (Giới thiệu) | Static | 1 | `about-trangchu` |
| **Services** (Dịch vụ) | Static + News | 1 header + 5 items | `header-dichvu` + `dich-vu-trangchu` |
| **Why Choose** (Ưu thế) | Static + News | 1 header + 4 items | `header-uuthe` + `uu-the` |

---

## ⚙️ CÀI ĐẶT BAN ĐẦU

### **Bước 1: Chạy Migration Database**

```bash
# 1. Thêm cột 'options' vào table_static (nếu chưa có)
mysql -u username -p database_name < database/alter_table_add_options.sql

# 2. Insert dữ liệu mẫu
mysql -u username -p database_name < database/migration_homepage.sql
```

### **Bước 2: Kiểm tra Menu Admin**

Sau khi chạy migration, vào Admin panel, bạn sẽ thấy các menu mới:

- **Nội dung tĩnh:**
  - ✅ Hero trang chủ
  - ✅ Giới thiệu trang chủ
  - ✅ Header dịch vụ
  - ✅ Header ưu thế

- **Tin tức:**
  - ✅ Dịch vụ trang chủ
  - ✅ Ưu thế/Tính năng

---

## 📝 HƯỚNG DẪN TỪNG MODULE

### **1️⃣ HERO SECTION - Banner Trang Chủ**

**Đường dẫn:** Admin > Nội dung tĩnh > Hero trang chủ

#### **Các trường cần nhập:**

| Trường | Mô tả | Ví dụ | Bắt buộc |
|--------|-------|-------|----------|
| **Slogan** | Badge text phía trên tiêu đề | "Hạ tầng số cho doanh nghiệp" | ✅ |
| **Tên** | Tiêu đề chính (có thể xuống dòng) | "TTP Telecom – Kiến tạo hạ\ntầng số cho doanh nghiệp" | ✅ |
| **Mô tả ngắn** | Đoạn văn giới thiệu ngắn | "Giúp doanh nghiệp vận hành ổn định..." | ✅ |
| **Options** | JSON cho 2 buttons | Xem bên dưới | ❌ |

#### **Cấu hình Options (JSON):**

Trong phần admin, nếu có trường **"Options"** (textarea), nhập:

```json
{
  "button1_text": "Tìm Hiểu về chúng tôi",
  "button1_link": "gioi-thieu",
  "button2_text": "Liên hệ ngay",
  "button2_link": "lien-he"
}
```

**Lưu ý:**
- Nếu không nhập Options, hệ thống dùng giá trị mặc định
- Link không cần `/` ở đầu

#### **Screenshot tham khảo:**

```
┌─────────────────────────────────────────┐
│ Slogan: [Hạ tầng số cho doanh nghiệp]  │
│                                          │
│ Tên: [TTP Telecom – Kiến tạo hạ        │
│       tầng số cho doanh nghiệp]         │
│                                          │
│ Mô tả: [Giúp doanh nghiệp vận hành...] │
│                                          │
│ Options: [{...json...}]                 │
│                                          │
│ ☑ Hiển thị                              │
│                                          │
│ [Lưu]  [Thoát]                          │
└─────────────────────────────────────────┘
```

---

### **2️⃣ ABOUT SECTION - Giới Thiệu**

**Đường dẫn:** Admin > Nội dung tĩnh > Giới thiệu trang chủ

#### **Các trường cần nhập:**

| Trường | Mô tả | Ví dụ | Bắt buộc |
|--------|-------|-------|----------|
| **Slogan** | Badge text | "Về chúng tôi" | ✅ |
| **Tên** | Tiêu đề (có thể dùng HTML) | "Về `<span class=\"highlight\">TTP Telecom</span>`" | ✅ |
| **Mô tả ngắn** | Đoạn văn 1 (có CKEditor) | "TTP Telecom tự hào là..." | ✅ |
| **Nội dung** | Đoạn văn 2 (có CKEditor) | "Chúng tôi không ngừng cải tiến..." | ❌ |
| **Hình ảnh** | Ảnh giới thiệu công ty | Upload ảnh 600x800px | ✅ |
| **Options** | JSON cho stats | Xem bên dưới | ❌ |

#### **Cấu hình Options (JSON):**

```json
{
  "stat1_number": "10+",
  "stat1_label": "Năm kinh nghiệm",
  "stat2_number": "1700+",
  "stat2_label": "Dự án hoàn thành"
}
```

#### **Yêu cầu hình ảnh:**

- **Kích thước khuyến nghị:** 600x800px (tỉ lệ 3:4)
- **Định dạng:** JPG, PNG, WebP
- **Dung lượng:** < 500KB
- **Nội dung:** Ảnh văn phòng, đội ngũ, hoặc công nghệ

---

### **3️⃣ SERVICES SECTION - Dịch Vụ**

Gồm **2 phần:**

#### **A. Header Dịch Vụ (Static)**

**Đường dẫn:** Admin > Nội dung tĩnh > Header dịch vụ

| Trường | Nội dung |
|--------|----------|
| **Slogan** | "Hệ sinh thái dịch vụ" |
| **Tên** | "Hệ Sinh Thái `<span class=\"highlight\">Dịch Vụ</span>`" |
| **Mô tả** | "Cung cấp giải pháp trọn gói..." |

#### **B. Danh Sách Dịch Vụ (News)**

**Đường dẫn:** Admin > Tin tức > Dịch vụ trang chủ

**Cần tạo 5 dịch vụ:**

| STT | Tên | Mô tả | Slug | Icon/Ảnh |
|-----|-----|-------|------|----------|
| 1 | TTP Connect | Internet & Truyền dẫn... | `ttp-connect` | WiFi icon |
| 2 | TTP Data | Máy chủ, Data center... | `ttp-data` | Server icon |
| 3 | TTP Cloud | Hạ tầng đám mây... | `ttp-cloud` | Cloud icon |
| 4 | TTP Infra | Hạ tầng CNTT... | `ttp-infra` | Network icon |
| 5 | TTP Solution | Giải pháp chuyển đổi số... | `ttp-solution` | Code icon |

**Hướng dẫn thêm 1 dịch vụ:**

1. Click **[Thêm mới]**
2. Nhập:
   - **Tên:** Tên dịch vụ (ví dụ: "TTP Connect")
   - **Mô tả ngắn:** Giới thiệu 1-2 dòng
   - **Slug:** Tự động tạo từ tên
   - **Hình ảnh:** Upload icon/logo (200x200px, SVG/PNG)
3. Check:
   - ☑ **Nổi bật**
   - ☑ **Hiển thị**
4. **Số thứ tự:** 1, 2, 3, 4, 5 (để sắp xếp)
5. Click **[Lưu]**

---

### **4️⃣ WHY CHOOSE SECTION - Ưu Thế**

Gồm **2 phần:**

#### **A. Header Ưu Thế (Static)**

**Đường dẫn:** Admin > Nội dung tĩnh > Header ưu thế

| Trường | Nội dung |
|--------|----------|
| **Slogan** | "Tại sao chọn chúng tôi" |
| **Tên** | "Tại Sao Chọn `<span class=\"highlight\">TTP Telecom?</span>`" |
| **Mô tả** | "Chúng tôi mang đến những ưu thế..." |

#### **B. Danh Sách Ưu Thế (News)**

**Đường dẫn:** Admin > Tin tức > Ưu thế/Tính năng

**Cần tạo 4 ưu thế:**

| STT | Tên | Mô tả |
|-----|-----|-------|
| 1 | Hạ tầng hiện đại | Data Center chuẩn Tier 3... |
| 2 | Kết nối toàn cầu | Kết nối 15+ ISP... |
| 3 | Hiệu suất cao | Cam kết SLA 99,99%... |
| 4 | Bảo mật tuyệt đối | Firewall, DDoS protection... |

**Hướng dẫn thêm 1 ưu thế:**

1. Click **[Thêm mới]**
2. Nhập:
   - **Tên:** Tên ưu thế (ngắn gọn)
   - **Mô tả ngắn:** Chi tiết 1-2 dòng
   - **Hình ảnh:** Upload icon (200x200px, optional)
3. Check:
   - ☑ **Nổi bật**
   - ☑ **Hiển thị**
4. **Số thứ tự:** 1, 2, 3, 4
5. Click **[Lưu]**

---

## 📸 UPLOAD VÀ QUẢN LÝ ẢNH

### **Yêu cầu chung:**

| Loại ảnh | Kích thước | Định dạng | Dung lượng |
|----------|------------|-----------|------------|
| **Ảnh giới thiệu** | 600x800px | JPG, PNG, WebP | < 500KB |
| **Icon dịch vụ** | 200x200px | PNG, SVG | < 100KB |
| **Icon ưu thế** | 200x200px | PNG, SVG | < 100KB |

### **Tips tối ưu hình ảnh:**

1. **Nén ảnh trước khi upload:**
   - Dùng: TinyPNG, Squoosh, ImageOptim
   - Mục tiêu: giảm 50-70% dung lượng mà vẫn giữ chất lượng

2. **Chọn định dạng phù hợp:**
   - **JPG:** Ảnh chụp, ảnh có nhiều màu
   - **PNG:** Logo, icon, ảnh có trong suốt
   - **WebP:** Định dạng mới, nhẹ hơn 30%
   - **SVG:** Icon vector (tốt nhất cho icon)

3. **Tên file nên:**
   - Không dấu, không khoảng trắng
   - Ví dụ: `ttp-connect-icon.png`, `about-office.jpg`

---

## 💡 TIPS & BEST PRACTICES

### **1. Viết nội dung hiệu quả:**

✅ **NÊN:**
- Ngắn gọn, súc tích (80-120 ký tự cho mô tả)
- Sử dụng động từ hành động
- Highlight từ khóa quan trọng
- Kiểm tra chính tả

❌ **KHÔNG NÊN:**
- Viết quá dài, lan man
- Lạm dụng chữ IN HOA
- Copy-paste không chỉnh sửa
- Dùng emoji không cần thiết

### **2. SEO-friendly:**

- **Tiêu đề:** Chứa từ khóa chính
- **Mô tả:** Khoảng 150-160 ký tự
- **Slug:** Ngắn, có dấu gạch ngang
- **Alt text ảnh:** Mô tả rõ ràng

### **3. Thứ tự hiển thị:**

- Cột **"Số thứ tự"** quyết định thứ tự hiển thị
- Số nhỏ hơn → hiển thị trước
- Ví dụ: 1, 2, 3, 4, 5

### **4. Sao lưu dữ liệu:**

- Export database định kỳ
- Lưu ảnh gốc trước khi upload
- Ghi chú các thay đổi quan trọng

---

## 🔧 TROUBLESHOOTING

### **Vấn đề 1: Không thấy menu module mới**

**Nguyên nhân:**
- Chưa chạy migration
- Chưa require config files

**Giải pháp:**
1. Kiểm tra `config/config-type.php` đã require 2 file:
   ```php
   require_once 'type-static-homepage.php';
   require_once 'type-news-homepage.php';
   ```
2. Clear cache (nếu có)
3. Đăng xuất và đăng nhập lại admin

---

### **Vấn đề 2: Lỗi khi lưu Options (JSON)**

**Nguyên nhân:**
- Cột `options` chưa tồn tại trong database
- Syntax JSON sai

**Giải pháp:**
1. Chạy file: `database/alter_table_add_options.sql`
2. Kiểm tra JSON hợp lệ tại: https://jsonlint.com/
3. Đảm bảo dùng dấu ngoặc kép `"`, không dùng `'`

---

### **Vấn đề 3: Ảnh không hiển thị**

**Nguyên nhân:**
- Upload file quá lớn
- Định dạng không hỗ trợ
- Quyền thư mục upload

**Giải pháp:**
1. Kiểm tra file size: `php.ini` → `upload_max_filesize`
2. Chỉ dùng: JPG, PNG, WebP, SVG
3. Chmod thư mục upload: `chmod 755 upload/`

---

### **Vấn đề 4: Nội dung không cập nhật trên trang chủ**

**Nguyên nhân:**
- Cache browser
- Cache server
- Chưa check "Hiển thị"

**Giải pháp:**
1. Clear cache: `Ctrl + F5` (Windows) / `Cmd + Shift + R` (Mac)
2. Kiểm tra checkbox **☑ Hiển thị**
3. Xóa cache server (nếu có Redis, Memcached)

---

## 📞 HỖ TRỢ

Nếu gặp vấn đề không giải quyết được:

1. **Kiểm tra logs:**
   - `logs/error.log`
   - Browser DevTools → Console

2. **Liên hệ Developer:**
   - Email: dev@ttptelecom.vn
   - Phone: 0123 456 789

3. **Tham khảo:**
   - Document context: `docs/cursor_index_tpl_php_data_retrieval_and.md`
   - Migration SQL: `database/migration_homepage.sql`

---

## ✅ CHECKLIST HOÀN THÀNH

- [ ] Đã chạy migration database
- [ ] Đã thêm cột `options` vào `table_static`
- [ ] Đã insert dữ liệu mẫu
- [ ] Đã thấy menu module mới trong admin
- [ ] Đã nhập nội dung Hero Section
- [ ] Đã nhập nội dung About Section
- [ ] Đã nhập 5 dịch vụ
- [ ] Đã nhập 4 ưu thế
- [ ] Đã upload tất cả hình ảnh
- [ ] Đã kiểm tra hiển thị trên trang chủ
- [ ] Đã test responsive mobile/tablet
- [ ] Đã clear cache và test lại

---

**🎉 CHÚC BẠN THÀNH CÔNG!**

> Tài liệu này được tạo tự động bởi Cursor AI  
> Cập nhật lần cuối: 07/01/2026

