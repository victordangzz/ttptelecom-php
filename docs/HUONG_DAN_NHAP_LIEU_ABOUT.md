# 📖 HƯỚNG DẪN NHẬP LIỆU ADMIN - TRANG GIỚI THIỆU

> **Ngày tạo:** 07/01/2026  
> **Phiên bản:** 1.0  
> **Dự án:** TTP Telecom Website - Trang About

---

## 📋 MỤC LỤC

1. [Tổng quan](#tổng-quan)
2. [Cài đặt ban đầu](#cài-đặt-ban-đầu)
3. [Hướng dẫn từng module](#hướng-dẫn-từng-module)
4. [Tips & Best Practices](#tips--best-practices)
5. [Troubleshooting](#troubleshooting)

---

## 🎯 TỔNG QUAN

Trang Giới thiệu bao gồm **6 sections chính**:

| Section              | Module        | Số bản ghi          | Loại                              |
| -------------------- | ------------- | ------------------- | --------------------------------- |
| **Page Hero**        | Static        | 1                   | `hero-about`                      |
| **Company Profile**  | Static        | 1 + 4 stats         | `profile-about`                   |
| **Vision & Mission** | Static        | 2                   | `vision` + `mission`              |
| **Core Values**      | Static + News | 1 header + 4 values | `header-values` + `core-values`   |
| **Infrastructure**   | Static + News | 1 header + 3 items  | `header-infra` + `infrastructure` |
| **CTA Section**      | Static        | 1                   | `cta-about`                       |

---

## ⚙️ CÀI ĐẶT BAN ĐẦU

### **Bước 1: Chạy Migration Database**

```bash
# 1. Đảm bảo đã có cột 'options' trong table_static
# Nếu chưa có, chạy: database/alter_table_add_options.sql

# 2. Insert dữ liệu mẫu cho trang About
mysql -u username -p database_name < database/migration_about.sql
```

### **Bước 2: Require Config Files**

Mở file `config/config-type.php` và thêm:

```php
/* About page configs */
require_once 'type-static-about.php';
require_once 'type-news-about.php';
```

### **Bước 3: Kiểm tra Menu Admin**

Sau khi chạy migration, vào Admin panel, bạn sẽ thấy các menu mới:

- **Nội dung tĩnh:**

  - ✅ Hero trang giới thiệu
  - ✅ Hồ sơ công ty
  - ✅ Tầm nhìn
  - ✅ Sứ mệnh
  - ✅ Header giá trị cốt lõi
  - ✅ Header hạ tầng công nghệ
  - ✅ CTA trang giới thiệu

- **Tin tức:**
  - ✅ Giá trị cốt lõi
  - ✅ Hạ tầng công nghệ

---

## 📝 HƯỚNG DẪN TỪNG MODULE

### **1️⃣ PAGE HERO - Banner Trang**

**Đường dẫn:** Admin > Nội dung tĩnh > Hero trang giới thiệu

#### **Các trường cần nhập:**

| Trường         | Mô tả                      | Ví dụ                                                       | Bắt buộc |
| -------------- | -------------------------- | ----------------------------------------------------------- | -------- |
| **Slogan**     | Badge text                 | "Về chúng tôi"                                              | ✅       |
| **Tên**        | Tiêu đề (có thể dùng HTML) | "Giới Thiệu `<span class=\"highlight\">TTP Telecom</span>`" | ✅       |
| **Mô tả ngắn** | Subtitle                   | "Đơn vị hàng đầu trong lĩnh vực..."                         | ✅       |

---

### **2️⃣ COMPANY PROFILE - Hồ Sơ Công Ty**

**Đường dẫn:** Admin > Nội dung tĩnh > Hồ sơ công ty

#### **Các trường cần nhập:**

| Trường         | Mô tả                       | Bắt buộc |
| -------------- | --------------------------- | -------- |
| **Slogan**     | Badge text: "Hồ sơ công ty" | ✅       |
| **Tên**        | Tiêu đề section             | ✅       |
| **Mô tả ngắn** | Đoạn văn 1 (có CKEditor)    | ✅       |
| **Nội dung**   | Đoạn văn 2 (có CKEditor)    | ❌       |
| **Options**    | JSON cho 4 thống kê         | ✅       |

#### **Cấu hình Options (JSON):**

```json
{
  "stat1_value": "1700+",
  "stat1_label": "Khách hàng tin tưởng",
  "stat2_value": "99.99%",
  "stat2_label": "Uptime SLA",
  "stat3_value": "10+",
  "stat3_label": "Năm kinh nghiệm",
  "stat4_value": "15+",
  "stat4_label": "Đối tác ISP quốc tế"
}
```

**Lưu ý:**

- Có thể sửa số liệu và label tùy ý
- Có thể bỏ trống stat3, stat4 nếu chỉ cần 2 thống kê

---

### **3️⃣ VISION & MISSION - Tầm Nhìn & Sứ Mệnh**

Gồm **2 phần riêng biệt:**

#### **A. Tầm Nhìn (Vision)**

**Đường dẫn:** Admin > Nội dung tĩnh > Tầm nhìn

| Trường    | Nội dung                       |
| --------- | ------------------------------ |
| **Tên**   | "Tầm Nhìn"                     |
| **Mô tả** | Nội dung tầm nhìn (150-200 từ) |

#### **B. Sứ Mệnh (Mission)**

**Đường dẫn:** Admin > Nội dung tĩnh > Sứ mệnh

| Trường    | Nội dung                      |
| --------- | ----------------------------- |
| **Tên**   | "Sứ Mệnh"                     |
| **Mô tả** | Nội dung sứ mệnh (150-200 từ) |

---

### **4️⃣ CORE VALUES - Giá Trị Cốt Lõi**

Gồm **2 phần:**

#### **A. Header Giá Trị (Static)**

**Đường dẫn:** Admin > Nội dung tĩnh > Header giá trị cốt lõi

| Trường     | Nội dung                                             |
| ---------- | ---------------------------------------------------- |
| **Slogan** | "Giá trị cốt lõi"                                    |
| **Tên**    | "Giá Trị `<span class=\"highlight\">Cốt Lõi</span>`" |
| **Mô tả**  | "Những giá trị định hướng..."                        |

#### **B. Danh Sách Giá Trị (News)**

**Đường dẫn:** Admin > Tin tức > Giá trị cốt lõi

**Cần tạo 4 giá trị:**

| STT | Số  | Tên      | Mô tả                         |
| --- | --- | -------- | ----------------------------- |
| 1   | 01  | Uy Tín   | Luôn đặt uy tín và lợi ích... |
| 2   | 02  | Tận Tâm  | Đồng hành và hỗ trợ 24/7...   |
| 3   | 03  | Sáng Tạo | Không ngừng đổi mới...        |
| 4   | 04  | Hợp Tác  | Xây dựng mối quan hệ...       |

**Hướng dẫn thêm 1 giá trị:**

1. Click **[Thêm mới]**
2. Nhập:
   - **Slogan:** Số thứ tự (01, 02, 03, 04)
   - **Tên:** Tên giá trị (ngắn gọn, 1-2 từ)
   - **Mô tả ngắn:** Chi tiết giá trị (30-50 từ)
   - **Hình ảnh:** Upload icon (200x200px, optional)
3. Check:
   - ☑ **Nổi bật**
   - ☑ **Hiển thị**
4. **Số thứ tự:** 1, 2, 3, 4
5. Click **[Lưu]**

---

### **5️⃣ INFRASTRUCTURE - Hạ Tầng Công Nghệ**

Gồm **2 phần:**

#### **A. Header Hạ Tầng (Static)**

**Đường dẫn:** Admin > Nội dung tĩnh > Header hạ tầng công nghệ

| Trường     | Nội dung                                               |
| ---------- | ------------------------------------------------------ |
| **Slogan** | "Hạ tầng công nghệ"                                    |
| **Tên**    | "Hạ Tầng `<span class=\"highlight\">Công Nghệ</span>`" |
| **Mô tả**  | "Cơ sở vật chất và công nghệ..."                       |

#### **B. Danh Sách Hạ Tầng (News)**

**Đường dẫn:** Admin > Tin tức > Hạ tầng công nghệ

**Cần tạo 3 hạ tầng:**

| STT | Tên                | Mô tả                             |
| --- | ------------------ | --------------------------------- |
| 1   | Data Center Tier 3 | Hệ thống Data Center đạt chuẩn... |
| 2   | Kết Nối Quốc Tế    | Kết nối trực tiếp với 15+ ISP...  |
| 3   | Bảo Mật Cao        | Hệ thống bảo mật đa lớp...        |

**Hướng dẫn thêm 1 hạ tầng:**

1. Click **[Thêm mới]**
2. Nhập:
   - **Tên:** Tên hạ tầng
   - **Mô tả ngắn:** Chi tiết (50-70 từ)
   - **Hình ảnh:** Upload ảnh/icon (400x400px, optional)
3. Check:
   - ☑ **Nổi bật**
   - ☑ **Hiển thị**
4. **Số thứ tự:** 1, 2, 3
5. Click **[Lưu]**

---

### **6️⃣ CTA SECTION - Call To Action**

**Đường dẫn:** Admin > Nội dung tĩnh > CTA trang giới thiệu

#### **Các trường cần nhập:**

| Trường      | Mô tả              | Ví dụ                       | Bắt buộc |
| ----------- | ------------------ | --------------------------- | -------- |
| **Tên**     | Tiêu đề CTA        | "Sẵn sàng chuyển đổi số..." | ✅       |
| **Mô tả**   | Mô tả CTA          | "Liên hệ với chúng tôi..."  | ✅       |
| **Options** | JSON cho 2 buttons | Xem bên dưới                | ✅       |

#### **Cấu hình Options (JSON):**

```json
{
  "button1_text": "Liên Hệ Ngay",
  "button1_link": "lien-he",
  "button2_text": "Tải Brochure",
  "button2_link": "#"
}
```

---

## 💡 TIPS & BEST PRACTICES

### **1. Viết nội dung hiệu quả:**

✅ **NÊN:**

- **Tầm nhìn/Sứ mệnh:** 150-200 từ, rõ ràng, truyền cảm hứng
- **Giá trị cốt lõi:** Ngắn gọn, dễ nhớ (30-50 từ/giá trị)
- **Thống kê:** Sử dụng số liệu thực tế, có nguồn
- **CTA:** Hành động rõ ràng, hấp dẫn

❌ **KHÔNG NÊN:**

- Copy-paste từ đối thủ
- Viết quá dài, lan man
- Sử dụng thuật ngữ khó hiểu
- Thống kê không chính xác

### **2. Số liệu thống kê:**

**Các loại số liệu phổ biến:**

- Số năm kinh nghiệm: `10+`
- Số khách hàng: `1700+`, `2K+`
- Tỷ lệ phần trăm: `99.99%`
- Số đối tác: `15+`, `50+`

**Format đẹp:**

- Dùng dấu `+` cho số lớn hơn
- Dùng `K` cho số nghìn: `2K+`, `5K+`
- Dùng số thập phân cho tỷ lệ: `99.99%`

### **3. HTML trong nội dung:**

**Highlight từ khóa:**

```html
<span class="highlight">TTP Telecom</span>
```

**Bold text:**

```html
<strong>One-Stop-Shop</strong>
```

**Xuống dòng:**

```html
<br />
```

### **4. Thứ tự hiển thị:**

**Quan trọng:**

- **Giá trị cốt lõi:** Theo số thứ tự 01, 02, 03, 04
- **Hạ tầng:** Theo mức độ quan trọng
- Cột **"Số thứ tự"** quyết định thứ tự hiển thị

---

## 📸 UPLOAD VÀ QUẢN LÝ ẢNH

### **Yêu cầu ảnh:**

| Loại ảnh             | Kích thước | Định dạng | Dung lượng |
| -------------------- | ---------- | --------- | ---------- |
| **Icon giá trị**     | 200x200px  | PNG, SVG  | < 50KB     |
| **Icon/Ảnh hạ tầng** | 400x400px  | JPG, PNG  | < 200KB    |

### **Tips tối ưu:**

1. **Icon giá trị:**

   - Dùng SVG (tốt nhất)
   - Style đơn giản, line art
   - Màu đơn sắc (sẽ được tô màu bằng CSS)

2. **Ảnh hạ tầng:**
   - Ảnh thật của Data Center, thiết bị
   - Hoặc ảnh minh họa chuyên nghiệp
   - Tránh ảnh stock quá generic

---

## 🔧 TROUBLESHOOTING

### **Vấn đề 1: Thống kê không hiển thị**

**Nguyên nhân:**

- Cột `options` chưa có
- JSON sai format
- Thiếu key trong JSON

**Giải pháp:**

1. Kiểm tra cột `options` tồn tại: `DESCRIBE table_static;`
2. Validate JSON tại: https://jsonlint.com/
3. Đảm bảo đủ 4 cặp key-value cho stats

---

### **Vấn đề 2: Giá trị cốt lõi không đúng thứ tự**

**Nguyên nhân:**

- Số thứ tự (numb) không đúng
- Query không sắp xếp theo numb

**Giải pháp:**

1. Kiểm tra cột **"Số thứ tự"** trong admin: 1, 2, 3, 4
2. File `sources/about.php` phải có: `order by numb,id asc`

---

### **Vấn đề 3: HTML không hiển thị đúng**

**Nguyên nhân:**

- Bị escape HTML
- Thiếu `htmlspecialchars_decode()`

**Giải pháp:**

- Đảm bảo template có: `<?= htmlspecialchars_decode($var) ?>`
- Với trường text thuần: `<?= $var ?>`

---

## ✅ CHECKLIST HOÀN THÀNH

- [ ] Đã chạy migration database
- [ ] Đã require config files
- [ ] Đã thấy menu module mới trong admin
- [ ] Đã nhập Page Hero
- [ ] Đã nhập Company Profile + 4 stats
- [ ] Đã nhập Vision & Mission
- [ ] Đã nhập 4 giá trị cốt lõi
- [ ] Đã nhập 3 hạ tầng công nghệ
- [ ] Đã nhập CTA Section
- [ ] Đã upload icon/ảnh (nếu có)
- [ ] Đã kiểm tra hiển thị trên trang About
- [ ] Đã test responsive mobile/tablet
- [ ] Đã clear cache và test lại

---

**🎉 CHÚC BẠN THÀNH CÔNG!**

> Tài liệu được tạo bởi Cursor AI  
> Cập nhật: 07/01/2026
