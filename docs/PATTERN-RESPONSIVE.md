# 📱 KIM CHỈ NAM RESPONSIVE - CHUẨN FORESTADAKNONG

> **Tài liệu hướng dẫn thiết kế responsive cho các dự án web**  
> Dựa trên phân tích từ dự án ForestaDaknong  
> Cập nhật: 06/01/2026

---

## 🎯 1. BREAKPOINTS CHUẨN (7 MỨC)

```css
/* Desktop */
@media (min-width: 1025px) { 
  /* Màn hình lớn - Laptop, Desktop */
}

/* Tablet lớn */
@media (max-width: 1024px) { 
  /* iPad Pro, Tablet lớn */
}

/* Tablet nhỏ */
@media (max-width: 992px) { 
  /* iPad, Tablet nhỏ */
}

/* Mobile lớn (Landscape) */
@media (max-width: 768px) { 
  /* Mobile ngang, Tablet mini */
}

/* Mobile chuẩn */
@media (max-width: 576px) { 
  /* iPhone 12/13/14, Android phổ thông */
}

/* Mobile nhỏ */
@media (max-width: 430px) { 
  /* iPhone 14 Pro Max và nhỏ hơn */
}

/* Mobile rất nhỏ (iPhone SE) */
@media (max-width: 375px) { 
  /* iPhone SE, iPhone 8 và nhỏ hơn */
}
```

### 📊 Bảng tham chiếu nhanh:

| Tên gọi | Breakpoint | Thiết bị điển hình |
|---------|------------|-------------------|
| Desktop | ≥ 1025px | Desktop, Laptop lớn |
| Tablet lớn | ≤ 1024px | iPad Pro, Surface |
| Tablet nhỏ | ≤ 992px | iPad, Galaxy Tab |
| Mobile lớn | ≤ 768px | iPhone Plus (ngang) |
| Mobile | ≤ 576px | iPhone 12/13/14 |
| Mobile nhỏ | ≤ 430px | iPhone 14 Pro Max |
| Mobile rất nhỏ | ≤ 375px | iPhone SE, iPhone 8 |

---

## 📝 2. FONT SIZE - QUY TẮC VÀNG

### **Công thức giảm: Desktop → Mobile giảm 20-40%**

### 2.1. Bảng Font Size chi tiết:

| Loại | Desktop | Tablet (≤1024px) | Mobile (≤768px) | Mobile nhỏ (≤430px) | Rất nhỏ (≤375px) |
|------|---------|------------------|-----------------|---------------------|------------------|
| **Hero Title** | 64-72px | - | - | 36px | - |
| **Section Title** | 50px | - | - | 36px | 32px |
| **Title Main** | 32px | - | 26px | - | 22px |
| **Subtitle/Tagline** | 18px | - | - | 15px | - |
| **Body Text** | 14-18px | 16px | 15px | 14-15px | - |
| **Button** | 18px | - | 14px | - | - |
| **Price (lớn)** | - | - | 22px | - | 18px |
| **Price (nhỏ)** | - | - | - | - | 14px |

### 2.2. Ghi nhớ nhanh - Công thức giảm dần:

```
Hero/H1:     64px → 36px → 22px  (giảm ~44% → ~39%)
H2/Section:  50px → 36px → 32px  (giảm ~28% → ~11%)
H3/Title:    32px → 26px → 22px  (giảm ~19% → ~15%)
Body/Text:   18px → 16px → 15px → 14px  (giảm ~11% → ~6% → ~7%)
Button:      18px → 14px  (giảm ~22%)
```

### 2.3. Code mẫu:

```css
/* Desktop */
.hero-title { font-size: 64px; }
.section-title { font-size: 50px; }
.title-main { font-size: 32px; }
.body-text { font-size: 18px; }
.btn { font-size: 18px; }

/* Tablet lớn */
@media (max-width: 1024px) {
  .body-text { font-size: 16px; }
}

/* Mobile lớn */
@media (max-width: 768px) {
  .title-main { font-size: 26px; }
  .body-text { font-size: 15px; }
  .btn { font-size: 14px; }
}

/* Mobile nhỏ */
@media (max-width: 430px) {
  .hero-title { font-size: 36px; }
  .section-title { font-size: 36px; }
  .body-text { font-size: 15px; }
}

/* Mobile rất nhỏ */
@media (max-width: 375px) {
  .section-title { font-size: 32px; }
  .title-main { font-size: 22px; }
  .body-text { font-size: 14px; }
}
```

---

## 📏 3. PADDING/MARGIN - QUY TẮC GIẢM DẦN

### **Công thức: Chia đôi hoặc giảm 30-50%**

### 3.1. Bảng Padding/Margin:

| Element | Desktop | Tablet (≤1024px) | Mobile (≤768px) | Mobile nhỏ (≤430px) |
|---------|---------|------------------|-----------------|---------------------|
| **Section Padding** | 112px 0 | 60px 0 | 30px 0 | 20-30px 0 |
| **Container Padding** | 48px 0 | 30px 0 | 20px 0 | 10-16px 0 |
| **Section Header Margin** | 48px bottom | - | - | 30px bottom |
| **Title Margin** | 1.5rem (24px) | - | - | 0.75rem (12px) |
| **Button Padding** | 10px 24px | - | 6px 10px | - |
| **Card/Box Padding** | 20-30px | 16-20px | 10-15px | 10px |

### 3.2. Ghi nhớ nhanh:

```
Section:   112px → 60px → 30px → 20px  (giảm ~46% → ~50% → ~33%)
Container: 48px → 30px → 20px → 10px   (giảm ~38% → ~33% → ~50%)
Button:    10px 24px → 6px 10px        (giảm ~40% theo cả 2 chiều)
```

### 3.3. Code mẫu:

```css
/* Desktop */
.section { padding: 112px 0; }
.container { padding: 48px 0; }
.section-header { margin-bottom: 48px; }
.title { margin-bottom: 1.5rem; }
.btn { padding: 10px 24px; }
.card { padding: 30px; }

/* Tablet lớn */
@media (max-width: 1024px) {
  .section { padding: 60px 0; }
  .container { padding: 30px 0; }
  .card { padding: 20px; }
}

/* Mobile lớn */
@media (max-width: 768px) {
  .section { padding: 30px 0; }
  .container { padding: 20px 0; }
  .btn { padding: 6px 10px; }
  .card { padding: 15px; }
}

/* Mobile nhỏ */
@media (max-width: 430px) {
  .section { padding: 20px 0; }
  .container { padding: 10px 0; }
  .section-header { margin-bottom: 30px; }
  .title { margin-bottom: 0.75rem; }
  .card { padding: 10px; }
}
```

---

## 📦 4. LAYOUT GRID - SỐ CỘT

### **Công thức: 5 → 4 → 3 → 2 → 1**

### 4.1. Bảng số cột theo breakpoint:

| Breakpoint | Số cột | Width công thức | Ví dụ |
|------------|--------|-----------------|-------|
| **Desktop** | 4-5 cột | `calc(100% / 5 - margin)` | Sản phẩm nổi bật |
| **Tablet (≤1024px)** | 3-4 cột | `calc(100% / 4 - margin)` | Grid sản phẩm |
| **Mobile (≤768px)** | 2 cột | `calc(100% / 2 - margin)` | Danh sách sản phẩm |
| **Mobile nhỏ (≤430px)** | 1-2 cột | `calc(100% / 2 - margin)` | Tùy loại content |
| **Rất nhỏ (≤375px)** | 1 cột | `calc(100% - margin)` | Full width |

### 4.2. Code mẫu chi tiết:

```css
/* Desktop - 5 cột */
.grid-container {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -7px;
}

.grid-item {
  width: calc(100% / 5 - 14px);
  margin: 14px 7px 0 7px;
}

/* Tablet lớn - 4 cột */
@media (max-width: 1024px) {
  .grid-item {
    width: calc(100% / 4 - 14px);
  }
}

/* Mobile lớn - 2 cột */
@media (max-width: 768px) {
  .grid-item {
    width: calc(100% / 2 - 14px);
  }
}

/* Mobile nhỏ - Tùy loại */
@media (max-width: 430px) {
  /* Sản phẩm nhỏ vẫn 2 cột */
  .grid-item.small {
    width: calc(100% / 2 - 10px);
    margin: 10px 5px 0 5px;
  }
  
  /* Content lớn chuyển 1 cột */
  .grid-item.large {
    width: calc(100% - 20px);
    margin: 10px 10px 0 10px;
  }
}

/* Mobile rất nhỏ - 1 cột */
@media (max-width: 375px) {
  .grid-item {
    width: calc(100% - 14px);
    margin: 14px 7px 0 7px;
  }
}
```

### 4.3. Ví dụ thực tế:

```css
/* Sản phẩm nổi bật */
.prod-outstanding-item {
  width: calc(100% / 5 - 14px); /* Desktop: 5 cột */
}

@media (max-width: 1024px) {
  .prod-outstanding-item {
    width: calc(100% / 5 - 14px); /* Tablet: vẫn 5 cột */
  }
}

@media (max-width: 768px) {
  .prod-outstanding-item {
    width: calc(100% / 2 - 14px); /* Mobile: 2 cột */
  }
}

@media (max-width: 375px) {
  .prod-outstanding-item {
    width: calc(100% / 1 - 14px); /* Mobile nhỏ: 1 cột */
  }
}

/* Tin tức */
.page-news-item {
  width: calc(100% / 3 - 14px); /* Desktop: 3 cột */
}

@media (max-width: 576px) {
  .page-news-item {
    width: calc(100% / 2 - 14px); /* Mobile: 2 cột */
  }
}

@media (max-width: 375px) {
  .page-news-item {
    width: calc(100% / 1 - 14px); /* Mobile nhỏ: 1 cột */
  }
}
```

---

## 🎨 5. GAPS & SPACING

### **Công thức: Giảm 50-70%**

### 5.1. Bảng Gaps:

| Element | Desktop | Tablet | Mobile | Mobile nhỏ |
|---------|---------|--------|--------|------------|
| **Flex Gap** | 32px | 16px | 10-14px | 8px |
| **Grid Margin** | 14px | 10px | 7px | 5px |
| **Border Radius** | 12-22px | - | 6px | - |
| **Line Spacing** | 1.7 | 1.6 | 1.5 | 1.4 |

### 5.2. Code mẫu:

```css
/* Desktop */
.flex-container {
  display: flex;
  gap: 32px;
}

.grid-container {
  margin: 0 -7px;
}

.grid-item {
  margin: 14px 7px 0 7px;
}

.card {
  border-radius: 22px;
}

/* Tablet */
@media (max-width: 1024px) {
  .flex-container {
    gap: 16px;
  }
  
  .grid-container {
    margin: 0 -5px;
  }
  
  .grid-item {
    margin: 10px 5px 0 5px;
  }
}

/* Mobile */
@media (max-width: 768px) {
  .flex-container {
    gap: 10px;
  }
  
  .card {
    border-radius: 6px;
  }
}

/* Mobile nhỏ */
@media (max-width: 576px) {
  .flex-container {
    gap: 8px;
  }
  
  .grid-container {
    margin: 0 -5px;
  }
  
  .grid-item {
    margin: 10px 5px 0 5px;
  }
}
```

---

## 👁️ 6. DISPLAY - ẨN/HIỆN

### **Quy tắc: Mobile First - Ẩn những gì không cần**

### 6.1. Danh sách ẩn trên Mobile (≤1024px):

```css
@media (max-width: 1024px) {
  /* Navigation & Menu */
  .desktop-menu,
  .menu,
  .head {
    display: none;
  }
  
  /* Sidebar & Filters */
  .sidebar,
  .page-static-right,
  .page-product-left,
  .filter-layer-tags {
    display: none;
  }
  
  /* Decorative & Extra */
  .hero-foresta__overlay,
  .control-slideshow button,
  .prod-collection-pic,
  .prod-outstanding-pic,
  .btn-frame,
  .product-tool a span {
    display: none;
  }
  
  /* Social & Extras */
  #messages-facebook,
  .time-news {
    display: none;
  }
}
```

### 6.2. Danh sách hiện trên Mobile:

```css
@media (max-width: 1024px) {
  /* Mobile Menu */
  .menu-res,
  .mobile-menu,
  .hamburger-icon {
    display: block;
  }
  
  /* Mobile Toolbar */
  .product-tool {
    opacity: 1;
    visibility: visible;
    position: initial;
  }
}

/* Desktop - Ẩn mobile menu */
@media (min-width: 1025px) {
  .toolbar,
  .menu-res,
  .mobile-menu {
    display: none;
  }
}
```

### 6.3. Checklist ẩn/hiện:

#### ❌ Ẩn trên Mobile:
- ✓ Sidebar phức tạp
- ✓ Filter nâng cao
- ✓ Menu desktop
- ✓ Banner lớn/decorative
- ✓ Overlay phức tạp
- ✓ Social widgets lớn
- ✓ Extra controls

#### ✅ Hiện trên Mobile:
- ✓ Menu hamburger
- ✓ Mobile toolbar
- ✓ Simplified navigation
- ✓ Touch-friendly buttons
- ✓ Mobile-optimized forms

---

## 🔧 7. FLEX RESPONSIVE

### **Quy tắc chuyển đổi: Row → Column, No Wrap → Wrap**

### 7.1. Flex Direction:

```css
/* Desktop: Flex Row */
.container {
  display: flex;
  flex-direction: row;
  gap: 32px;
  align-items: center;
}

/* Mobile: Flex Column */
@media (max-width: 768px) {
  .container {
    flex-direction: column;
    gap: 16px;
    align-items: flex-start;
  }
}
```

### 7.2. Flex Wrap:

```css
/* Desktop: No Wrap */
.flex-container {
  display: flex;
  flex-wrap: nowrap;
  gap: 24px;
}

/* Mobile: Wrap */
@media (max-width: 576px) {
  .flex-container {
    flex-wrap: wrap;
    gap: 10px;
  }
}
```

### 7.3. Ví dụ thực tế:

```css
/* Hero Actions */
.hero-actions {
  display: flex;
  align-items: center;
  gap: 16px;
}

@media (max-width: 576px) {
  .hero-actions {
    flex-direction: column;
    gap: 10px;
    width: 100%;
  }
  
  .hero-actions .btn {
    width: 100%;
    text-align: center;
  }
}

/* Product Info */
.product-info {
  display: flex;
  justify-content: space-between;
  gap: 20px;
}

@media (max-width: 768px) {
  .product-info {
    flex-direction: column;
    gap: 12px;
  }
}

/* Price Display */
.product-price {
  display: flex;
  align-items: center;
  gap: 12px;
}

@media (max-width: 576px) {
  .product-price {
    flex-wrap: wrap;
    gap: 8px;
  }
}
```

---

## 📐 8. WIDTH RESPONSIVE

### **Quy tắc: Multi-column → Full Width**

### 8.1. Layout chuyển đổi:

```css
/* Desktop: Sidebar Layout */
.page-container {
  display: flex;
  gap: 30px;
}

.sidebar {
  width: 25%;
  min-width: 280px;
}

.main-content {
  width: 75%;
  flex: 1;
}

/* Mobile: Full Width */
@media (max-width: 1024px) {
  .page-container {
    flex-direction: column;
    gap: 20px;
  }
  
  .sidebar,
  .main-content {
    width: 100%;
    margin: 0;
  }
}
```

### 8.2. Ví dụ thực tế:

```css
/* Product Detail */
.product-detail {
  display: flex;
  gap: 40px;
}

.product-images {
  width: 50%;
}

.product-info {
  width: 50%;
}

@media (max-width: 768px) {
  .product-detail {
    flex-direction: column;
    gap: 20px;
  }
  
  .product-images,
  .product-info {
    width: 100%;
  }
}

/* News Layout */
.news-container {
  display: flex;
  gap: 30px;
}

.news-main {
  width: 70%;
}

.news-sidebar {
  width: 30%;
}

@media (max-width: 768px) {
  .news-container {
    flex-direction: column;
  }
  
  .news-main,
  .news-sidebar {
    width: 100%;
  }
}
```

---

## 🎯 9. CONTAINER MAX-WIDTH

### 9.1. Container chuẩn:

```css
.wrap-content {
  max-width: 1440px;  /* Desktop max */
  margin: 0 auto;
  width: calc(100% - 30px);  /* Padding 15px mỗi bên */
}

@media (max-width: 1024px) {
  .wrap-content {
    width: calc(100% - 24px);  /* Padding 12px mỗi bên */
  }
}

@media (max-width: 768px) {
  .wrap-content {
    width: calc(100% - 20px);  /* Padding 10px mỗi bên */
  }
}

@media (max-width: 576px) {
  .wrap-content {
    width: calc(100% - 16px);  /* Padding 8px mỗi bên */
  }
}
```

### 9.2. Container variants:

```css
/* Container rộng */
.container-wide {
  max-width: 1920px;
  margin: 0 auto;
  width: calc(100% - 60px);
}

/* Container hẹp */
.container-narrow {
  max-width: 960px;
  margin: 0 auto;
  width: calc(100% - 30px);
}

/* Container text */
.container-text {
  max-width: 720px;
  margin: 0 auto;
  width: calc(100% - 30px);
}

@media (max-width: 768px) {
  .container-wide,
  .container-narrow,
  .container-text {
    width: calc(100% - 20px);
  }
}
```

---

## 🚀 10. CHECKLIST ÁP DỤNG NHANH

### ✅ Bước 1: Setup Breakpoints
```css
/* Copy 7 breakpoints chuẩn vào file media.css hoặc responsive.css */
@media (min-width: 1025px) { }
@media (max-width: 1024px) { }
@media (max-width: 992px) { }
@media (max-width: 768px) { }
@media (max-width: 576px) { }
@media (max-width: 430px) { }
@media (max-width: 375px) { }
```

### ✅ Bước 2: Font Size
```
Áp dụng công thức giảm 20-40%:
- Hero: 64px → 36px (giảm 44%)
- Title: 32px → 22px (giảm 31%)
- Body: 18px → 14px (giảm 22%)
```

### ✅ Bước 3: Padding/Margin
```
Giảm 50% hoặc chia đôi:
- Section: 112px → 60px → 30px → 20px
- Container: 48px → 30px → 20px → 10px
```

### ✅ Bước 4: Grid Layout
```
Áp dụng quy tắc: 5 → 3 → 2 → 1 cột
- Desktop: 5 cột
- Tablet: 3-4 cột
- Mobile: 2 cột
- Mobile nhỏ: 1 cột
```

### ✅ Bước 5: Ẩn/Hiện Elements
```
Ẩn trên mobile:
- Sidebar, Filter phức tạp
- Decorative elements
- Desktop menu

Hiện trên mobile:
- Mobile menu, Hamburger
- Simplified toolbar
```

### ✅ Bước 6: Flex Direction
```
Desktop: flex-direction: row
Mobile: flex-direction: column
```

### ✅ Bước 7: Test Devices
```
- iPhone SE (375px)
- iPhone 12/13 (390px)
- iPhone 14 Pro Max (430px)
- iPad (768px)
- Desktop (1440px+)
```

---

## 📋 TEMPLATE NHANH - COPY & PASTE

### Template 1: Component cơ bản

```css
/* ==================== COMPONENT RESPONSIVE ==================== */

/* Desktop Default */
.component {
  font-size: 32px;
  padding: 48px 0;
  margin-bottom: 48px;
  gap: 32px;
}

.component-item {
  width: calc(100% / 5 - 14px);
  margin: 14px 7px 0 7px;
}

/* Tablet lớn (≤1024px) */
@media (max-width: 1024px) {
  .component {
    padding: 30px 0;
    margin-bottom: 30px;
    gap: 16px;
  }
  
  .component-item {
    width: calc(100% / 4 - 14px);
  }
  
  .component-sidebar {
    display: none;
  }
}

/* Mobile lớn (≤768px) */
@media (max-width: 768px) {
  .component {
    font-size: 26px;
    padding: 20px 0;
    margin-bottom: 20px;
    gap: 10px;
    flex-direction: column;
  }
  
  .component-item {
    width: calc(100% / 2 - 14px);
  }
}

/* Mobile chuẩn (≤576px) */
@media (max-width: 576px) {
  .component {
    font-size: 22px;
    padding: 16px 0;
    gap: 8px;
  }
}

/* Mobile nhỏ (≤430px) */
@media (max-width: 430px) {
  .component {
    font-size: 20px;
    padding: 10px 0;
  }
}

/* Mobile rất nhỏ (≤375px) */
@media (max-width: 375px) {
  .component {
    font-size: 18px;
  }
  
  .component-item {
    width: calc(100% - 14px);
  }
}
```

### Template 2: Hero Section

```css
/* ==================== HERO SECTION RESPONSIVE ==================== */

/* Desktop */
.hero {
  min-height: 100vh;
  padding: 120px 0;
}

.hero-title {
  font-size: 64px;
  line-height: 1.1;
  margin-bottom: 24px;
}

.hero-desc {
  font-size: 18px;
  line-height: 1.7;
  max-width: 640px;
  margin-bottom: 32px;
}

.hero-actions {
  display: flex;
  gap: 16px;
}

.hero-btn {
  padding: 10px 24px;
  font-size: 18px;
  border-radius: 12px;
}

/* Tablet (≤1024px) */
@media (max-width: 1024px) {
  .hero {
    padding: 80px 0;
  }
}

/* Mobile (≤768px) */
@media (max-width: 768px) {
  .hero {
    min-height: 70vh;
    padding: 60px 0;
  }
  
  .hero-btn {
    padding: 6px 10px;
    font-size: 14px;
    border-radius: 6px;
  }
}

/* Mobile nhỏ (≤430px) */
@media (max-width: 430px) {
  .hero {
    min-height: 60vh;
    padding: 40px 0;
  }
  
  .hero-title {
    font-size: 36px;
    margin-bottom: 16px;
  }
  
  .hero-desc {
    font-size: 15px;
    margin-bottom: 20px;
  }
  
  .hero-actions {
    flex-direction: column;
    gap: 10px;
    width: 100%;
  }
  
  .hero-btn {
    width: 100%;
    text-align: center;
  }
}
```

### Template 3: Product Grid

```css
/* ==================== PRODUCT GRID RESPONSIVE ==================== */

/* Desktop */
.product-grid {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -7px;
  gap: 0;
}

.product-item {
  width: calc(100% / 5 - 14px);
  margin: 14px 7px 0 7px;
  padding: 20px;
  border-radius: 12px;
}

.product-image {
  width: 100%;
  aspect-ratio: 1 / 1;
  object-fit: cover;
  margin-bottom: 16px;
}

.product-name {
  font-size: 18px;
  margin-bottom: 8px;
}

.product-price {
  font-size: 22px;
  font-weight: 600;
}

/* Tablet lớn (≤1024px) - 4 cột */
@media (max-width: 1024px) {
  .product-item {
    width: calc(100% / 4 - 14px);
  }
}

/* Tablet nhỏ (≤992px) - 3 cột */
@media (max-width: 992px) {
  .product-item {
    width: calc(100% / 3 - 14px);
  }
}

/* Mobile lớn (≤768px) - 2 cột */
@media (max-width: 768px) {
  .product-grid {
    margin: 0 -5px;
  }
  
  .product-item {
    width: calc(100% / 2 - 10px);
    margin: 10px 5px 0 5px;
    padding: 15px;
  }
  
  .product-name {
    font-size: 16px;
  }
  
  .product-price {
    font-size: 18px;
  }
}

/* Mobile nhỏ (≤430px) - 2 cột nhỏ hơn */
@media (max-width: 430px) {
  .product-item {
    padding: 10px;
  }
  
  .product-name {
    font-size: 15px;
  }
  
  .product-price {
    font-size: 16px;
  }
}

/* Mobile rất nhỏ (≤375px) - 1 cột */
@media (max-width: 375px) {
  .product-item {
    width: calc(100% - 14px);
    margin: 14px 7px 0 7px;
  }
}
```

### Template 4: Form Responsive

```css
/* ==================== FORM RESPONSIVE ==================== */

/* Desktop */
.form-container {
  max-width: 600px;
  margin: 0 auto;
  padding: 40px;
  border-radius: 12px;
}

.form-group {
  margin-bottom: 24px;
}

.form-label {
  font-size: 16px;
  margin-bottom: 8px;
  display: block;
}

.form-input,
.form-textarea {
  width: 100%;
  padding: 12px 16px;
  font-size: 16px;
  border-radius: 8px;
  border: 1px solid #ddd;
}

.form-button {
  width: 100%;
  padding: 14px 24px;
  font-size: 18px;
  border-radius: 8px;
}

/* Tablet (≤768px) */
@media (max-width: 768px) {
  .form-container {
    padding: 30px 20px;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-input,
  .form-textarea {
    padding: 10px 14px;
    font-size: 15px;
  }
  
  .form-button {
    padding: 12px 20px;
    font-size: 16px;
  }
}

/* Mobile (≤576px) */
@media (max-width: 576px) {
  .form-container {
    padding: 20px 15px;
    border-radius: 6px;
  }
  
  .form-group {
    margin-bottom: 16px;
  }
  
  .form-label {
    font-size: 15px;
  }
  
  .form-input,
  .form-textarea {
    padding: 8px 12px;
    font-size: 14px;
  }
  
  .form-button {
    padding: 10px 16px;
    font-size: 15px;
  }
}
```

---

## 💡 LƯU Ý QUAN TRỌNG

### 1. Mobile First vs Desktop First

**Dự án ForestaDaknong dùng Desktop First:**
```css
/* Desktop First - Viết CSS cho desktop trước */
.element { font-size: 32px; }

/* Sau đó override bằng max-width */
@media (max-width: 768px) {
  .element { font-size: 22px; }
}
```

**Khuyến nghị cho dự án mới - Mobile First:**
```css
/* Mobile First - Viết CSS cho mobile trước */
.element { font-size: 22px; }

/* Sau đó mở rộng bằng min-width */
@media (min-width: 769px) {
  .element { font-size: 32px; }
}
```

### 2. Thứ tự ưu tiên khi làm responsive

1. **Font Size** - Quan trọng nhất cho readability
2. **Padding/Margin** - Tạo không gian hợp lý
3. **Layout Grid** - Số cột phù hợp với màn hình
4. **Display** - Ẩn/hiện elements không cần thiết
5. **Flex Direction** - Chuyển từ row sang column
6. **Width** - Full width cho mobile
7. **Gaps** - Khoảng cách giữa items

### 3. Test trên thiết bị thật

**Danh sách thiết bị nên test:**

| Thiết bị | Kích thước | Ưu tiên |
|----------|-----------|---------|
| iPhone SE | 375 × 667 | ⭐⭐⭐ Cao |
| iPhone 12/13 | 390 × 844 | ⭐⭐⭐ Cao |
| iPhone 14 Pro Max | 430 × 932 | ⭐⭐ Trung bình |
| iPad | 768 × 1024 | ⭐⭐⭐ Cao |
| iPad Pro | 1024 × 1366 | ⭐⭐ Trung bình |
| Desktop 1440px | 1440 × 900 | ⭐⭐⭐ Cao |
| Desktop 1920px | 1920 × 1080 | ⭐⭐ Trung bình |

### 4. Performance Tips

```css
/* ✅ TỐT - Ẩn bằng display */
@media (max-width: 768px) {
  .large-image {
    display: none;
  }
}

/* ❌ KHÔNG TỐT - Vẫn load resource */
@media (max-width: 768px) {
  .large-image {
    visibility: hidden;
    opacity: 0;
  }
}
```

**Checklist Performance:**
- ✓ Ẩn hình ảnh lớn bằng `display: none`
- ✓ Lazy load images
- ✓ Optimize font loading
- ✓ Minify CSS
- ✓ Use CSS variables cho màu sắc
- ✓ Avoid expensive CSS properties (box-shadow nhiều lớp, filters)

### 5. Accessibility (A11y)

```css
/* Đảm bảo touch target đủ lớn trên mobile */
@media (max-width: 768px) {
  .btn,
  .link,
  .clickable {
    min-height: 44px; /* Apple guideline */
    min-width: 44px;
    padding: 12px 16px;
  }
}

/* Font size tối thiểu cho mobile */
@media (max-width: 768px) {
  body {
    font-size: 16px; /* Tránh zoom tự động trên iOS */
  }
  
  input,
  textarea,
  select {
    font-size: 16px; /* Tránh zoom khi focus */
  }
}
```

### 6. Common Pitfalls (Lỗi thường gặp)

```css
/* ❌ KHÔNG TỐT - Quên calc() */
.item {
  width: 100% / 5 - 14px; /* Sai cú pháp */
}

/* ✅ TỐT */
.item {
  width: calc(100% / 5 - 14px);
}

/* ❌ KHÔNG TỐT - Breakpoint không theo thứ tự */
@media (max-width: 768px) { }
@media (max-width: 1024px) { } /* Sai thứ tự */

/* ✅ TỐT - Từ lớn đến nhỏ */
@media (max-width: 1024px) { }
@media (max-width: 768px) { }

/* ❌ KHÔNG TỐT - Hardcode giá trị */
.element {
  padding: 48px 0;
}
@media (max-width: 768px) {
  .element {
    padding: 20px 0; /* Không theo quy tắc */
  }
}

/* ✅ TỐT - Theo công thức */
.element {
  padding: 48px 0;
}
@media (max-width: 768px) {
  .element {
    padding: 24px 0; /* 48px / 2 */
  }
}
```

---

## 🎁 BONUS: CÔNG THỨC TÍNH NHANH

### Công thức chuyển đổi Desktop → Mobile:

```
📝 Font Size:
   Mobile = Desktop × (0.6 đến 0.8)
   Ví dụ: 64px × 0.6 = 38.4px ≈ 36px

📏 Padding/Margin:
   Mobile = Desktop × 0.5
   Ví dụ: 48px × 0.5 = 24px

🎨 Gap:
   Mobile = Desktop × 0.5
   Ví dụ: 32px × 0.5 = 16px

📦 Grid Columns:
   Mobile = Desktop ÷ 2 (hoặc ÷ 4)
   Ví dụ: 4 cột ÷ 2 = 2 cột

🔲 Border Radius:
   Mobile = Desktop × 0.5
   Ví dụ: 12px × 0.5 = 6px
```

### Quick Reference Card:

```
┌─────────────────────────────────────────────────┐
│  RESPONSIVE QUICK REFERENCE                     │
├─────────────────────────────────────────────────┤
│  Breakpoints: 1024 → 768 → 576 → 430 → 375     │
│  Font: 64 → 36 | 32 → 22 | 18 → 14             │
│  Padding: 112 → 60 → 30 → 20                   │
│  Columns: 5 → 3 → 2 → 1                        │
│  Gap: 32 → 16 → 10 → 8                         │
│  Radius: 12 → 6                                │
└─────────────────────────────────────────────────┘
```

---

## 📚 TÀI LIỆU THAM KHẢO

### CSS Media Queries:
- [MDN Web Docs - Media Queries](https://developer.mozilla.org/en-US/docs/Web/CSS/Media_Queries)
- [CSS-Tricks - A Complete Guide to CSS Media Queries](https://css-tricks.com/a-complete-guide-to-css-media-queries/)

### Responsive Design:
- [Responsive Web Design Basics - Google](https://developers.google.com/web/fundamentals/design-and-ux/responsive)
- [Mobile-First CSS - Is It Time for a Rethink?](https://alistapart.com/article/mobile-first-css-is-it-time-for-a-rethink/)

### Device Sizes:
- [Viewport Sizes - ViewportSizer](https://viewportsizer.com/)
- [Screen Sizes - ScreenSiz.es](https://screensiz.es/)

---

## 📞 HỖ TRỢ

Nếu có thắc mắc hoặc cần hỗ trợ thêm về responsive design:

1. Xem lại file `media.css` trong dự án ForestaDaknong
2. Tham khảo các template ở trên
3. Test trên nhiều thiết bị thật
4. Sử dụng DevTools của Chrome/Firefox để debug

---

**📅 Phiên bản:** 1.0  
**🗓️ Cập nhật:** 06/01/2026  
**👨‍💻 Dựa trên:** ForestaDaknong Project  

---

**💾 Lưu file này để tham khảo khi làm dự án mới!**

**🚀 Happy Coding!**

