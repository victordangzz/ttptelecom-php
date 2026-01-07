# 📊 SO SÁNH: CÁCH CŨ vs CÁCH MỚI (REFACTORED)

## 🎯 TRANG CHỦ (HOMEPAGE)

### ❌ CÁCH CŨ (Đang dùng)

```
STATIC MODULES (4):
├─ hero-trangchu         → Hero section
├─ about-trangchu        → About section (1 section = 1 module)
├─ header-dichvu         → Services HEADER only (riêng biệt!)
└─ header-uuthe          → Why Choose HEADER only (riêng biệt!)

NEWS MODULES (2):
├─ dich-vu-trangchu      → Services cards (6 items)
└─ uu-the                → Features (6 items)

TỔNG: 6 modules, 16 items (4 static + 12 news)
```

**Vấn đề:**
- ❌ Header và content **tách rời** → khó quản lý
- ❌ Quá nhiều static modules không cần thiết
- ❌ Nếu muốn thêm 1 section mới → phải tạo 2 modules (header + content)
- ❌ Logic phức tạp: admin phải hiểu đâu là header, đâu là content

---

### ✅ CÁCH MỚI (Refactored)

```
STATIC MODULES (1):
└─ hero-trangchu         → Hero section only

NEWS MODULES (3):
├─ about-trangchu        → About (1 item: badge/title/desc/stats)
├─ dich-vu-trangchu      → Services (7 items: 1 header + 6 cards)
│                           Item 1: slogan="HEADER" → header
│                           Item 2-7: service cards
└─ uu-the                → Why Choose (7 items: 1 header + 6 features)
                            Item 1: slogan="HEADER" → header
                            Item 2-7: feature cards

TỔNG: 4 modules, 15 items (1 static + 14 news)
```

**Ưu điểm:**
- ✅ Header và content **cùng module** → dễ quản lý
- ✅ Giảm số lượng modules (6 → 4)
- ✅ Logic đơn giản: 1 section = 1 module
- ✅ Dùng `slogan="HEADER"` để phân biệt → rõ ràng
- ✅ Linh hoạt: dễ thêm/xóa items trong section

---

## 📝 SO SÁNH CHI TIẾT

### 1. Hero Section

| Cách cũ | Cách mới |
|---------|----------|
| ✅ Static module | ✅ Static module (giữ nguyên) |
| `hero-trangchu` | `hero-trangchu` |

**→ Không thay đổi**

---

### 2. About Section

#### Cách cũ:
```php
// Static module: about-trangchu
$about = $d->rawQueryOne("SELECT * FROM table_static WHERE type='about-trangchu'");

// Template:
<h2><?= $about['namevi'] ?></h2>
<p><?= $about['descvi'] ?></p>
```

#### Cách mới:
```php
// News module: about-trangchu (1 item)
$about_section = $d->rawQuery("SELECT * FROM table_news WHERE type='about-trangchu' AND hienthi>0");
$about = $about_section[0]; // Lấy item đầu tiên

// Template: (tương tự)
<h2><?= $about['namevi'] ?></h2>
<p><?= $about['descvi'] ?></p>
```

**Ưu điểm cách mới:**
- Có thể thêm nhiều "about sections" nếu cần
- Có `numb` để sắp xếp
- Có thể copy/duplicate dễ dàng

---

### 3. Services Section

#### Cách cũ:
```php
// 2 MODULES riêng biệt:

// Module 1: Static header
$services_header = $d->rawQueryOne("SELECT * FROM table_static WHERE type='header-dichvu'");

// Module 2: News cards
$services = $d->rawQuery("SELECT * FROM table_news WHERE type='dich-vu-trangchu' AND hienthi>0 ORDER BY numb");

// Template:
<div class="section-header">
  <h2><?= $services_header['namevi'] ?></h2>  <!-- Từ static -->
</div>
<div class="services-grid">
  <?php foreach($services as $s): ?>           <!-- Từ news -->
    <div class="card"><?= $s['namevi'] ?></div>
  <?php endforeach; ?>
</div>
```

#### Cách mới:
```php
// 1 MODULE duy nhất:
$services = $d->rawQuery("SELECT * FROM table_news WHERE type='dich-vu-trangchu' AND hienthi>0 ORDER BY numb");

// Tách header và cards trong template:
<?php
$header = null;
$cards = [];
foreach($services as $item) {
  if(strtoupper($item['sloganvi']) === 'HEADER') {
    $header = $item;
  } else {
    $cards[] = $item;
  }
}
?>

<div class="section-header">
  <h2><?= $header['namevi'] ?></h2>     <!-- Item đầu tiên -->
</div>
<div class="services-grid">
  <?php foreach($cards as $s): ?>        <!-- Items còn lại -->
    <div class="card"><?= $s['namevi'] ?></div>
  <?php endforeach; ?>
</div>
```

**Ưu điểm cách mới:**
- ✅ Tất cả cùng 1 module → dễ backup/restore
- ✅ Admin chỉ vào 1 nơi để quản lý cả section
- ✅ Có thể sắp xếp header và cards cùng nhau
- ✅ Có thể ẩn/hiện header độc lập
- ✅ Logic đơn giản: check slogan="HEADER"

---

### 4. Why Choose Us Section

**Tương tự Services** - gộp header và features vào 1 module

---

## 📊 SO SÁNH SỐ LIỆU

| Metric | Cách cũ | Cách mới | Cải thiện |
|--------|---------|----------|-----------|
| **Modules** | 6 | 4 | ↓ 33% |
| **Static modules** | 4 | 1 | ↓ 75% |
| **News modules** | 2 | 3 | ↑ 50% |
| **Database queries** | 6 | 4 | ↓ 33% |
| **Admin screens** | 6 | 4 | ↓ 33% |
| **Complexity** | Cao | Thấp | ✅ |

---

## 🎯 DATABASE STRUCTURE

### Cách cũ:

```sql
-- table_static (4 records)
hero-trangchu        | "Giải pháp..."      | ...
about-trangchu       | "Về TTP..."         | ...
header-dichvu        | "Dịch vụ"           | ...  ← Chỉ header!
header-uuthe         | "Ưu thế"            | ...  ← Chỉ header!

-- table_news (12 records)
dich-vu-trangchu     | "TTP Connect"       | ...  ← 6 cards
dich-vu-trangchu     | "TTP Data"          | ...
...
uu-the               | "Đội ngũ chuyên..." | ...  ← 6 features
uu-the               | "Công nghệ hiện..." | ...
...
```

### Cách mới:

```sql
-- table_static (1 record)
hero-trangchu        | "Giải pháp..."      | ...

-- table_news (14 records)
about-trangchu       | "Về TTP..."         | ...  ← 1 item (about)

dich-vu-trangchu     | "Hệ sinh thái..."   | slogan="HEADER"  ← Header
dich-vu-trangchu     | "TTP Connect"       | slogan=""        ← Card 1
dich-vu-trangchu     | "TTP Data"          | slogan=""        ← Card 2
...                                                            (6 cards)

uu-the               | "Ưu thế của..."     | slogan="HEADER"  ← Header
uu-the               | "Đội ngũ chuyên..." | slogan=""        ← Feature 1
uu-the               | "Công nghệ..."      | slogan=""        ← Feature 2
...                                                            (6 features)
```

**Khác biệt chính:**
- ❌ Cũ: Header và content **khác table** (static vs news)
- ✅ Mới: Header và content **cùng table**, phân biệt bằng `slogan="HEADER"`

---

## 💡 TEMPLATE CODE SO SÁNH

### Services Section - Cách cũ:
```php
<!-- 2 queries riêng -->
<?php
$services_header = $d->rawQueryOne("SELECT * FROM table_static WHERE type='header-dichvu'");
$services = $d->rawQuery("SELECT * FROM table_news WHERE type='dich-vu-trangchu'");
?>

<!-- 2 sources khác nhau -->
<div class="header">
  <?= $services_header['namevi'] ?>  <!-- Static -->
</div>
<div class="grid">
  <?php foreach($services as $s): ?>  <!-- News -->
    ...
  <?php endforeach; ?>
</div>
```

### Services Section - Cách mới:
```php
<!-- 1 query duy nhất -->
<?php
$services = $d->rawQuery("SELECT * FROM table_news WHERE type='dich-vu-trangchu'");

// Tách trong code
$header = null;
$cards = [];
foreach($services as $item) {
  if($item['sloganvi'] === 'HEADER') $header = $item;
  else $cards[] = $item;
}
?>

<!-- Cùng 1 source -->
<div class="header">
  <?= $header['namevi'] ?>           <!-- Item đầu -->
</div>
<div class="grid">
  <?php foreach($cards as $s): ?>    <!-- Items còn lại -->
    ...
  <?php endforeach; ?>
</div>
```

---

## ✅ KẾT LUẬN

### Cách cũ:
- ❌ Phức tạp: 1 section = 2 modules
- ❌ Khó quản lý: header và content tách rời
- ❌ Nhiều queries: 6 queries cho homepage
- ❌ Admin phải hiểu structure phức tạp

### Cách mới:
- ✅ Đơn giản: 1 section = 1 module
- ✅ Dễ quản lý: header và content cùng chỗ
- ✅ Ít queries: 4 queries cho homepage
- ✅ Admin friendly: logic rõ ràng

---

## 🚀 RECOMMENDATION

**→ Nên áp dụng cách mới (refactored)** cho:
1. ✅ Trang chủ (Homepage)
2. ✅ Trang giới thiệu (About)
3. ✅ Trang dịch vụ (Services)
4. ✅ Trang giải pháp (Solution)
5. ✅ Các trang mới trong tương lai

**Lợi ích:**
- Code ngắn gọn hơn
- Dễ bảo trì hơn
- Admin dễ sử dụng hơn
- Linh hoạt mở rộng hơn

---

**💡 Bạn thấy cách nào tốt hơn?**

