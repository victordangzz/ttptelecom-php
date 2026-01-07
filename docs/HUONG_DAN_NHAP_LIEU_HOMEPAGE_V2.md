# HƯỚNG DẪN NHẬP LIỆU - TRANG CHỦ (V2 - REFACTORED)

> **Phiên bản:** V2 - Đã tối ưu hóa, giảm số lượng modules  
> **Ngày:** 07/01/2026

---

## 📋 TỔNG QUAN

Trang chủ đã được **tối ưu hóa** từ **6 modules → 4 modules** bằng cách gộp header và content vào cùng 1 module.

### ✅ CÁC MODULE:

| STT | Module | Loại | Số items | Ghi chú |
|-----|--------|------|----------|---------|
| 1 | Hero trang chủ | Static | 1 | Banner chính |
| 2 | Giới thiệu trang chủ | News | 1 | About section |
| 3 | Dịch vụ trang chủ | News | 7 | 1 header + 6 cards |
| 4 | Tại sao chọn chúng tôi | News | 7 | 1 header + 6 features |

**TỔNG: 4 modules, 16 items**

---

## 🎯 1. HERO SECTION (Static)

**Đường dẫn:** Admin → **Quản lý Trang tĩnh** → **Hero trang chủ**

| Trường | Giá trị mẫu | Ghi chú |
|--------|-------------|---------|
| **Slogan** | `Hạ tầng số cho doanh nghiệp` | Badge text phía trên |
| **Tên** | `Giải pháp hạ tầng số\ncho doanh nghiệp Việt` | Tiêu đề chính (dùng `\n` xuống dòng) |
| **Mô tả** | `TTP Telecom cung cấp hệ sinh thái...` | Mô tả ngắn |
| **Options (JSON)** | Xem bên dưới | Texts và links của 2 buttons |
| **Hiển thị** | ✅ | Bắt buộc |

**Options JSON:**
```json
{
  "button1_text": "Tìm hiểu về chúng tôi",
  "button1_link": "gioi-thieu",
  "button2_text": "Liên hệ ngay",
  "button2_link": "lien-he"
}
```

---

## 🏢 2. GIỚI THIỆU (News - 1 item)

**Đường dẫn:** Admin → **Quản lý Bài viết** → **Giới thiệu trang chủ**

> **Lưu ý:** Module này chỉ có **1 item duy nhất**, không cần thêm nhiều items.

| Trường | Giá trị mẫu |
|--------|-------------|
| **Slogan** | `Về chúng tôi` |
| **Tên** | `Về TTP Telecom` |
| **Mô tả** | `<p>TTP Telecom là đơn vị hàng đầu...</p>` |
| **Nội dung** | `<p>Đội ngũ chuyên gia giàu kinh nghiệm...</p>` |
| **Hình ảnh** | Upload ảnh about (600x800px) |
| **Options (JSON)** | Xem bên dưới |
| **Hiển thị** | ✅ |
| **Số thứ tự** | 1 |

**Options JSON (cho stats):**
```json
{
  "stat1_number": "10+",
  "stat1_label": "Năm kinh nghiệm",
  "stat2_number": "1700+",
  "stat2_label": "Dự án hoàn thành"
}
```

---

## 💼 3. DỊCH VỤ TRANG CHỦ (News - 7 items)

**Đường dẫn:** Admin → **Quản lý Bài viết** → **Dịch vụ trang chủ**

> **Quan trọng:** Module này gồm **1 header + 6 service cards**

### 📌 Item 1: HEADER

| Trường | Giá trị |
|--------|---------|
| **Slogan** | `HEADER` ⚠️ **BẮT BUỘC viết hoa** |
| **Tên** | `Hệ sinh thái dịch vụ` (Badge text) |
| **Mô tả** | `Dịch vụ toàn diện của TTP Telecom` (Title) |
| **Hiển thị** | ✅ |
| **Số thứ tự** | 1 |

### 📌 Item 2-7: Service Cards

| STT | Tên | Mô tả | Slug | Số TT |
|-----|-----|-------|------|-------|
| 2 | TTP Connect | Giải pháp kết nối internet... | ttp-connect | 2 |
| 3 | TTP Data | Trung tâm dữ liệu... | ttp-data | 3 |
| 4 | TTP Cloud | Dịch vụ điện toán đám mây... | ttp-cloud | 4 |
| 5 | TTP Infra | Tư vấn và triển khai hạ tầng... | ttp-infra | 5 |
| 6 | Software Development | Phát triển phần mềm... | software-development | 6 |
| 7 | IT Consulting | Tư vấn chiến lược... | it-consulting | 7 |

**Lưu ý:**
- ✅ Item 1 có `Slogan = "HEADER"` để phân biệt
- ✅ Items 2-7 để `Slogan` trống hoặc không điền
- ✅ Có thể upload icon/hình cho mỗi service
- ✅ Dùng `Số thứ tự` để sắp xếp

---

## ⭐ 4. TẠI SAO CHỌN CHÚNG TÔI (News - 7 items)

**Đường dẫn:** Admin → **Quản lý Bài viết** → **Tại sao chọn chúng tôi**

> **Tương tự Services:** 1 header + 6 features

### 📌 Item 1: HEADER

| Trường | Giá trị |
|--------|---------|
| **Slogan** | `HEADER` ⚠️ **BẮT BUỘC viết hoa** |
| **Tên** | `Ưu thế của chúng tôi` (Badge) |
| **Mô tả** | `Tại sao chọn TTP Telecom?` (Title) |
| **Hiển thị** | ✅ |
| **Số thứ tự** | 1 |

### 📌 Item 2-7: Feature Cards

| STT | Tên | Mô tả | Số TT |
|-----|-----|-------|-------|
| 2 | Đội ngũ chuyên nghiệp | Đội ngũ kỹ sư giàu kinh nghiệm... | 2 |
| 3 | Công nghệ hiện đại | Áp dụng công nghệ mới nhất... | 3 |
| 4 | Hỗ trợ 24/7 | Đội ngũ hỗ trợ sẵn sàng... | 4 |
| 5 | Bảo mật cao | Cam kết bảo mật tuyệt đối... | 5 |
| 6 | Chi phí tối ưu | Giải pháp phù hợp mọi quy mô... | 6 |
| 7 | Linh hoạt mở rộng | Dễ dàng nâng cấp hệ thống... | 7 |

---

## 💡 LƯU Ý QUAN TRỌNG

### ⚠️ Về Slogan="HEADER"

- **Mục đích:** Phân biệt item nào là header, item nào là content
- **Cách dùng:**
  - Item header: Slogan = `HEADER` (viết hoa, không dấu cách)
  - Items còn lại: Slogan = để trống hoặc không điền

- **Ví dụ sai:**
  ```
  ❌ Slogan = "header" (viết thường)
  ❌ Slogan = "Header" (viết thường chữ đầu)
  ❌ Slogan = "HEADER " (có dấu cách)
  ```

- **Ví dụ đúng:**
  ```
  ✅ Slogan = "HEADER" (viết hoa, không dấu cách)
  ✅ Slogan = "" (để trống cho items khác)
  ```

### 📊 Về Số thứ tự

- Header luôn để **Số TT = 1**
- Content items: **Số TT = 2, 3, 4...**
- STT càng nhỏ → hiển thị càng trước

### 🎨 Về Hình ảnh

- **Hero:** Không cần ảnh (có background effects)
- **About:** Ảnh 600x800px
- **Services:** Icon SVG hoặc PNG nhỏ (200x200px)
- **Features:** Icon SVG hoặc PNG nhỏ (200x200px)

---

## ✅ CHECKLIST SAU KHI NHẬP LIỆU

- [ ] Hero đã nhập đầy đủ (slogan, name, desc, options JSON)
- [ ] Giới thiệu có 1 item (slogan, name, desc, content, stats JSON)
- [ ] Dịch vụ có 7 items (1 header + 6 cards)
  - [ ] Item 1 có slogan="HEADER"
  - [ ] Item 2-7 có slug và mô tả đầy đủ
- [ ] Ưu thế có 7 items (1 header + 6 features)
  - [ ] Item 1 có slogan="HEADER"
  - [ ] Item 2-7 có tên và mô tả
- [ ] Tất cả đều check ✅ Hiển thị
- [ ] Số thứ tự đã set đúng
- [ ] Test trên trang `/` xem có hiển thị đúng không

---

## 🆘 TROUBLESHOOTING

### Header không hiển thị?
- ✅ Check slogan có đúng là "HEADER" không (viết hoa)
- ✅ Check đã bật "Hiển thị" chưa
- ✅ Check "Số thứ tự" = 1

### Items hiển thị sai thứ tự?
- ✅ Check field "Số thứ tự"
- ✅ STT nhỏ hơn sẽ hiển thị trước

### JSON parse error?
- ✅ Check dấu ngoặc kép `"` (không phải `""`)
- ✅ Copy từ file DATA_QUICK_COPY

---

## 🎉 KẾT LUẬN

Với cách mới này:
- ✅ **Ít modules hơn** (6 → 4 modules)
- ✅ **Dễ quản lý hơn** (header + content cùng chỗ)
- ✅ **Linh hoạt hơn** (dễ thêm/xóa items)
- ✅ **Logic rõ ràng** (dùng slogan="HEADER" phân biệt)

**Happy editing! 🚀**

