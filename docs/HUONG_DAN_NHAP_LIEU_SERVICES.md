# HƯỚNG DẪN NHẬP LIỆU - TRANG DỊCH VỤ

> **Tài liệu hướng dẫn dành cho Admin quản trị nội dung trang "Dịch vụ" (Services Page)**  
> **Website:** TTP Telecom  
> **Ngày cập nhật:** 07/01/2026

---

## 📋 MỤC LỤC

1. [Tổng quan](#tổng-quan)
2. [Danh sách modules cần nhập liệu](#danh-sách-modules-cần-nhập-liệu)
3. [Hướng dẫn chi tiết từng module](#hướng-dẫn-chi-tiết-từng-module)
4. [Lưu ý quan trọng](#lưu-ý-quan-trọng)
5. [Checklist kiểm tra](#checklist-kiểm-tra)

---

## TỔNG QUAN

Trang **Dịch vụ** (Services) bao gồm 14 modules chính, chia thành 2 loại:

- **Static modules (7):** Nội dung đơn (Hero, Headers, CTA)
- **News modules (7):** Danh sách items (Dịch vụ, Quy trình, Ưu điểm, Why Choose)

**Truy cập Admin:**
- Static: `Admin > Static > [Tên module]`
- News: `Admin > Tin tức > [Tên module]`

---

## DANH SÁCH MODULES CẦN NHẬP LIỆU

### **STATIC MODULES (7)**
1. ✅ Hero trang Dịch vụ
2. ✅ TTP Connect - Header
3. ✅ TTP Data - Header
4. ✅ TTP Cloud - Header
5. ✅ TTP Infra - Header
6. ✅ Process - Header
7. ✅ CTA Section

### **NEWS MODULES (7)**
8. ✅ TTP Connect - Dịch vụ (3 items)
9. ✅ TTP Data - Dịch vụ (2 items)
10. ✅ Data Center Advantages - Ưu điểm (4 items)
11. ✅ TTP Cloud - Dịch vụ (3 items)
12. ✅ Why Choose Cloud - Lợi thế (4 items)
13. ✅ TTP Infra - Dịch vụ (4 items)
14. ✅ Process Steps - Quy trình (4 bước)

---

## HƯỚNG DẪN CHI TIẾT TỪNG MODULE

---

### 1. HERO TRANG DỊCH VỤ
**🔧 Loại:** Static  
**📂 Truy cập:** `Admin > Static > Hero trang dịch vụ`

#### Các trường cần nhập:

| Trường | Giá trị | Mô tả |
|--------|---------|-------|
| **Slogan** | Dịch vụ hạ tầng số | Badge nhỏ phía trên tiêu đề |
| **Tên** | Dịch Vụ `<span class="highlight">TTP Telecom</span>` | Tiêu đề chính (H1) |
| **Mô tả** | Giải pháp hạ tầng toàn diện cho doanh nghiệp | Mô tả ngắn dưới tiêu đề |
| **Nội dung** | Từ kết nối Internet... (văn bản dài hơn) | Mô tả chi tiết thêm |

✅ **Checkbox:** Hiển thị

---

### 2. TTP CONNECT - HEADER
**🔧 Loại:** Static  
**📂 Truy cập:** `Admin > Static > TTP Connect Header`

| Trường | Giá trị |
|--------|---------|
| **Tên** | TTP Connect – Internet & Truyền dẫn doanh nghiệp |
| **Mô tả** | Kết nối ổn định, băng thông cao, tốc độ tối ưu |
| **Hình ảnh** | (Optional) Ảnh header cho section |

✅ **Checkbox:** Hiển thị

---

### 3. TTP CONNECT - DỊCH VỤ (Items)
**🔧 Loại:** News List  
**📂 Truy cập:** `Admin > Tin tức > TTP Connect - Dịch vụ`

**Số lượng:** 3 dịch vụ

#### **Item 1: Internet Leased Line**
- **Tên:** Internet Leased Line / GIA / DIA
- **Mô tả:** Đường truyền Internet riêng biệt, tốc độ cao, băng thông ổn định phục vụ cho doanh nghiệp với cam kết SLA cao.
- **Nội dung (Features - phân tách bằng dấu |):**
  ```
  Băng thông cam kết 1:1|Đường truyền riêng biệt|Hỗ trợ kỹ thuật 24/7|Cam kết SLA 99.9%
  ```
- **Số thứ tự:** 1
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 2: Dark Fiber**
- **Tên:** Dark Fiber – Cáp quang trọn tuyến
- **Mô tả:** Cho thuê sợi quang (dark fiber) kết nối điểm-điểm cho doanh nghiệp có nhu cầu băng thông lớn.
- **Nội dung:**
  ```
  Cáp quang trọn tuyến|Không giới hạn băng thông|Độ trễ thấp|Bảo mật tuyệt đối
  ```
- **Số thứ tự:** 2
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 3: MPLS L2/L3**
- **Tên:** MPLS L2/L3
- **Mô tả:** Kết nối mạng riêng ảo MPLS cho doanh nghiệp có nhiều chi nhánh, văn phòng phân tán.
- **Nội dung:**
  ```
  Kết nối đa điểm|QoS đảm bảo|Mở rộng linh hoạt|Quản lý tập trung
  ```
- **Số thứ tự:** 3
- ✅ **Checkbox:** Nổi bật, Hiển thị

---

### 4. TTP DATA - HEADER
**🔧 Loại:** Static  
**📂 Truy cập:** `Admin > Static > TTP Data Header`

| Trường | Giá trị |
|--------|---------|
| **Tên** | TTP Data – Máy chủ & Trung tâm dữ liệu |
| **Mô tả** | Hạ tầng máy chủ hiện đại với tiêu chuẩn cao nhất |

✅ **Checkbox:** Hiển thị

---

### 5. TTP DATA - DỊCH VỤ (Items with Pricing)
**🔧 Loại:** News List  
**📂 Truy cập:** `Admin > Tin tức > TTP Data - Dịch vụ`

**Số lượng:** 2 dịch vụ

#### **Item 1: Colocation**
- **Tên:** Colocation
- **Slogan (Giá):** Từ 3.500.000đ/U/tháng
- **Mô tả:** Đặt máy chủ tại Data Center tiêu chuẩn Tier III, hưởng trọn vẹn cơ sở hạ tầng với bảo mật cao nhất.
- **Nội dung:**
  ```
  Không gian rack tiêu chuẩn|Nguồn điện dự phòng N+1|Hệ thống làm mát chính xác|Bảo vệ vật lý 24/7
  ```
- **Số thứ tự:** 1
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 2: Dedicated Server**
- **Tên:** Dedicated Server
- **Slogan (Giá):** Từ 5.000.000đ/tháng
- **Mô tả:** Máy chủ vật lý riêng biệt, hiệu năng cao, toàn quyền quản trị cho doanh nghiệp có nhu cầu tài nguyên lớn.
- **Nội dung:**
  ```
  CPU & RAM riêng biệt|Ổ cứng SSD NVMe tốc độ cao|Bandwidth không giới hạn|Full root access
  ```
- **Số thứ tự:** 2
- ✅ **Checkbox:** Nổi bật, Hiển thị

---

### 6. DATA CENTER ADVANTAGES - ƯU ĐIỂM (4 Items)
**🔧 Loại:** News List  
**📂 Truy cập:** `Admin > Tin tức > Ưu điểm Data Center`

**Số lượng:** 4 ưu điểm

#### **Item 1: Uptime**
- **Tên:** Uptime 99,99%
- **Số thứ tự:** 1
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 2: Nguồn điện**
- **Tên:** Nguồn điện dự phòng
- **Số thứ tự:** 2
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 3: Làm mát**
- **Tên:** Làm mát chính xác
- **Số thứ tự:** 3
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 4: Bảo vệ**
- **Tên:** Bảo vệ vật lý
- **Số thứ tự:** 4
- ✅ **Checkbox:** Nổi bật, Hiển thị

---

### 7. TTP CLOUD - HEADER
**🔧 Loại:** Static  
**📂 Truy cập:** `Admin > Static > TTP Cloud Header`

| Trường | Giá trị |
|--------|---------|
| **Tên** | TTP Cloud – Hạ tầng đám mây |
| **Mô tả** | Linh hoạt, ổn định và mở rộng dễ dàng |

✅ **Checkbox:** Hiển thị

---

### 8. TTP CLOUD - DỊCH VỤ (Items with Specs)
**🔧 Loại:** News List  
**📂 Truy cập:** `Admin > Tin tức > TTP Cloud - Dịch vụ`

**Số lượng:** 3 dịch vụ

#### **Item 1: Cloud Server**
- **Tên:** Cloud Server
- **Mô tả:** Máy chủ ảo đám mây linh hoạt, dễ dàng mở rộng theo nhu cầu.
- **Nội dung (Specs - format: Label: Value|...):**
  ```
  CPU: 1-32 vCPU|RAM: 1-128 GB|Storage: SSD NVMe
  ```
- **Số thứ tự:** 1
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 2: Cloud Storage**
- **Tên:** Cloud Storage
- **Mô tả:** Lưu trữ đám mây an toàn với khả năng mở rộng không giới hạn.
- **Nội dung:**
  ```
  Block Storage: Có sẵn|Object Storage: Có sẵn|File Storage: Có sẵn
  ```
- **Số thứ tự:** 2
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 3: Backup & Disaster Recovery**
- **Tên:** Backup & Disaster Recovery
- **Mô tả:** Giải pháp sao lưu và khôi phục dữ liệu đảm bảo an toàn.
- **Nội dung:**
  ```
  RPO: Linh hoạt|RTO: < 4 giờ|Retention: Tuỳ chọn
  ```
- **Số thứ tự:** 3
- ✅ **Checkbox:** Nổi bật, Hiển thị

---

### 9. WHY CHOOSE CLOUD - TẠI SAO CHỌN TTP CLOUD (4 Items)
**🔧 Loại:** News List  
**📂 Truy cập:** `Admin > Tin tức > Tại sao chọn TTP Cloud`

**Số lượng:** 4 lợi thế

#### **Item 1: Chi phí**
- **Tên:** Chi phí tối ưu
- **Mô tả:** Chi trả theo sử dụng thực tế, không đầu tư phần cứng ban đầu.
- **Số thứ tự:** 1
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 2: Linh hoạt**
- **Tên:** Mở rộng linh hoạt
- **Mô tả:** Tăng giảm tài nguyên theo nhu cầu, không gián đoạn dịch vụ.
- **Số thứ tự:** 2
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 3: Backup**
- **Tên:** Backup tự động
- **Mô tả:** Hệ thống backup tự động, đảm bảo dữ liệu luôn an toàn.
- **Số thứ tự:** 3
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 4: Quản lý**
- **Tên:** Quản lý đơn giản
- **Mô tả:** Giao diện quản trị trực quan, dễ sử dụng cho mọi đối tượng.
- **Số thứ tự:** 4
- ✅ **Checkbox:** Nổi bật, Hiển thị

---

### 11. TTP INFRA - HEADER
**🔧 Loại:** Static  
**📂 Truy cập:** `Admin > Static > TTP Infra Header`

| Trường | Giá trị |
|--------|---------|
| **Tên** | TTP Infra – Hạ tầng CNTT |
| **Mô tả** | Xây dựng hạ tầng công nghệ vững chắc cho doanh nghiệp |

✅ **Checkbox:** Hiển thị

---

### 12. TTP INFRA - DỊCH VỤ (Items)
**🔧 Loại:** News List  
**📂 Truy cập:** `Admin > Tin tức > TTP Infra - Dịch vụ`

**Số lượng:** 4 dịch vụ

#### **Item 1: LAN / WAN / WLAN**
- **Tên:** LAN / WAN / WLAN
- **Mô tả:** Thiết kế và triển khai hệ thống mạng LAN/WAN cho doanh nghiệp với hiệu suất cao.
- **Số thứ tự:** 1
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 2: Data Center**
- **Tên:** Data Center
- **Mô tả:** Xây dựng và vận hành Data Center theo tiêu chuẩn quốc tế Tier III.
- **Số thứ tự:** 2
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 3: Firewall & NTTI**
- **Tên:** Firewall & NTTI
- **Mô tả:** Giải pháp bảo mật mạng, tường lửa và phòng chống xâm nhập cho doanh nghiệp.
- **Số thứ tự:** 3
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Item 4: Vận hành & giám sát 24/7**
- **Tên:** Vận hành & giám sát 24/7
- **Mô tả:** Dịch vụ vận hành, giám sát và bảo trì hệ thống CNTT chuyên nghiệp.
- **Số thứ tự:** 4
- ✅ **Checkbox:** Nổi bật, Hiển thị

---

### 13. PROCESS - HEADER
**🔧 Loại:** Static  
**📂 Truy cập:** `Admin > Static > Process Header`

| Trường | Giá trị |
|--------|---------|
| **Tên** | Quy trình `<span class="highlight">triển khai dự án</span>` |
| **Slogan** | Quy trình |

✅ **Checkbox:** Hiển thị

---

### 14. PROCESS STEPS - QUY TRÌNH (4 Bước)
**🔧 Loại:** News List  
**📂 Truy cập:** `Admin > Tin tức > Quy trình triển khai`

**Số lượng:** 4 bước

#### **Bước 1: Khảo sát**
- **Slogan (Số bước):** 1
- **Tên:** Khảo sát
- **Mô tả:** Tìm hiểu nhu cầu và đánh giá hiện trạng
- **Số thứ tự:** 1
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Bước 2: Thiết kế**
- **Slogan:** 2
- **Tên:** Thiết kế
- **Mô tả:** Đề xuất giải pháp tối ưu phù hợp với yêu cầu
- **Số thứ tự:** 2
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Bước 3: Triển khai**
- **Slogan:** 3
- **Tên:** Triển khai
- **Mô tả:** Thi công, lắp đặt và cấu hình hệ thống
- **Số thứ tự:** 3
- ✅ **Checkbox:** Nổi bật, Hiển thị

#### **Bước 4: Bàn giao**
- **Slogan:** 4
- **Tên:** Bàn giao
- **Mô tả:** Nghiệm thu và hướng dẫn sử dụng
- **Số thứ tự:** 4
- ✅ **Checkbox:** Nổi bật, Hiển thị

---

### 15. CTA SECTION
**🔧 Loại:** Static  
**📂 Truy cập:** `Admin > Static > CTA Services`

| Trường | Giá trị |
|--------|---------|
| **Tên** | Bạn đang cần một đối tác hạ tầng & công nghệ đáng tin cậy? |
| **Mô tả** | Liên hệ TTP Telecom ngay hôm nay để được tư vấn miễn phí! |
| **Nội dung** | Dù mới bắt đầu hay đang cần nâng cấp hệ thống hiện có với giải pháp phù hợp với chiến lược kinh doanh của bạn |

✅ **Checkbox:** Hiển thị

---

## LƯU Ý QUAN TRỌNG

### 📌 **Format đặc biệt:**

1. **Dấu phân cách `|` (pipe):**
   - Sử dụng trong trường "Nội dung" để tạo list items
   - Ví dụ: `Item 1|Item 2|Item 3`

2. **Format Specs (Cloud):**
   - Dùng dấu `:` để phân tách label và value
   - Format: `Label: Value|Label2: Value2`
   - Ví dụ: `CPU: 1-32 vCPU|RAM: 1-128 GB`

3. **HTML trong text:**
   - Có thể dùng `<span class="highlight">text</span>` để highlight
   - Ví dụ: `Quy trình <span class="highlight">triển khai dự án</span>`

### 🔢 **Số thứ tự:**
- Quan trọng! Quyết định thứ tự hiển thị trên web
- Nên đánh số: 1, 2, 3, 4...

### ✅ **Checkboxes:**
- **Hiển thị:** Bắt buộc phải check để nội dung xuất hiện
- **Nổi bật:** (Optional) Đánh dấu items quan trọng

### 🖼️ **Hình ảnh:**
- Chỉ cần upload cho các header sections (nếu muốn)
- Hệ thống sẽ tự động resize theo chuẩn

---

## CHECKLIST KIỂM TRA

### ✅ Trước khi xuất bản:
- [ ] Đã nhập đủ 12 modules
- [ ] Tất cả các trường "Hiển thị" đã được check
- [ ] Số thứ tự đã được sắp xếp đúng
- [ ] Format `|` và `:` đã chính xác
- [ ] Không có lỗi chính tả
- [ ] Đã xem thử trên trang web

### 📱 Kiểm tra hiển thị:
- [ ] Desktop: Mở trang `/services` kiểm tra layout
- [ ] Mobile: Kiểm tra responsive
- [ ] Các section header hiển thị đúng
- [ ] Danh sách items hiển thị đầy đủ
- [ ] CTA button hoạt động

---

## 🆘 HỖ TRỢ

Nếu gặp vấn đề khi nhập liệu, liên hệ:
- **Email:** support@ttptelecom.vn
- **Hotline:** 1900.xxxx

---

**Chúc bạn nhập liệu thành công! 🎉**

