# دستور قالب Al-Multaqa (Al-Multaqa Theme Constitution)

## 📋 الغرض

هذا الدستور يحكم تطوير وصيانة قالب Al-Multaqa لشركة نسق (Nasq). القالب متعدد الاستخدام مع دعم RTL كامل وسرعة فائقة.

---

## 🎯 المبادئ الأساسية

### 1. الجودة أولاً (Quality First)
- كود نظيف وواضح
- هيكلية منظمة
- تجربة مستخدم ممتازة

### 2. RTL والخطوط العربية (RTL & Arabic Typography)
- دعم RTL أصلي، ليس إضافة
- خطوط Tajawal و Cairo مطلوبة
- تباين ألوان مناسبة للقراءة العربية

### 3. السرعة والأداء (Speed & Performance)
- PageSpeed > 90
- تحميل كسول للموارد
- لا يوجد inline CSS في JavaScript

### 4. سهولة الاستخدام (User Experience)
- تصميم نظيف وبسيط
- تنقل سهل
- Mobile-responsive كامل

### 5. إمكانية الوصول (Accessibility)
- WCAG AA متوافق
- Keyboard navigation
- Screen reader support

### 6. التوافقية (Compatibility)
- WordPress 5.8+
- PHP 7.4+
- WooCommerce جاهز
- Elementor جاهز

---

## 🏗️ معايير الكود الخاصة بـ Al-Multaqa

### تسمية الدوال والأصناف
```php
// البادئات
alm_  - للدوال العامة (Al-Multaqa)
// الأصناف
AlMultaqa_  - للأصناف
```

### الألوان (Colors)
```css
:root {
  --alm-primary: #1E7E34;
  --alm-primary-dark: #166429;
  --alm-accent: #0D47A1;
  --alm-dark: #121212;
  --alm-gray: #6C757D;
  --alm-light: #F8F9FA;
  --alm-white: #FFFFFF;
  --alm-font: 'Tajawal', 'Cairo', sans-serif;
}
```

### المتغيرات في JavaScript
```javascript
// البادئة alm_ للعناصر
const almContainer = document.querySelector('.alm-container');
const almBtn = document.querySelector('.alm-btn');
```

---

## 📝 الملفات المطلوبة

```
Al-Multaqa/
├── style.css              # Theme metadata
├── functions.php           # Main functionality
├── index.php              # Blog archive
├── page.php              # Pages
├── front-page.php        # Homepage
├── 404.php               # Error page
├── header.php            # Site header
├── footer.php            # Site footer
├── inc/
│   ├── setup.php         # Theme setup
│   ├── enqueue.php       # Scripts & styles
│   ├── hooks.php         # Filters & actions
│   ├── template-tags.php  # Template functions
│   └── customizer.php    # Customizer
├── template-parts/
│   ├── header.php
│   ├── footer.php
│   └── content.php
├── assets/
│   ├── css/
│   │   ├── style.css    # Main styles
│   │   └── rtl.css     # RTL styles
│   ├── js/
│   │   └── main.js     # Main JS
│   └── fonts/          # Font files (if local)
└── languages/
    └── al-multqa.pot  # Translation template
```

---

## 🔐 معايير الأمان

### نفس معايير nasq-theme مع تخصيص لـ Al-Multaqa:
- ✅ التحقق من ABSPATH
- ✅ Sanitization للمدخلات
- ✅ Escaping للمخرجات
- ✅ Nonces لـ AJAX
- ✅ التحقق من الصلاحيات

### محظورات إضافية:
- ❌ لا تضف ميزات بدون التحقق من الأمان
- ❌ لا تستخدم `eval()` أو `exec()`
- ❌ لا تُكتب كود مباشر في ملفات القالب

---

## 📊 قائمة التحقق قبل الإطلاق

### الكود
- [ ] جميع الدوال لديها PHPDoc
- [ ] تسمية alm_ للدوال والأصناف
- [ ] جميع المدخلات sanitized
- [ ] جميع المخرجات escaped
- [ ] لا يوجد `!important` إلّا ضروري

### الأداء
- [ ] لا توجد JavaScript في الـ header
- [ ] Debatced resize events
- [ ] استخدام CSS classes بدلاً من inline styles
- [ ] لا يوجد broken lazy loading

### RTL
- [ ] RTL CSS منفصل ويعمل
- [ ] الخطوط العربية محملة من Google Fonts
- [ ] الاتجاه RTL صحيح
- [ ] النصوص العربية في قالب front-page.php

### الملفات
- [ ] جميع القوالب المذكورة موجودة
- [ ] content.xml موجود (للاستيراد)
- [ ] README.md شامل

---

## 🎨 معايير التصميم

### تصميم Hero Section
- Gradient أخضر داكن (#1E7E34 إلى #166429)
- نص أبيض مع تباين عالي
- الأزرار: أساس أبيض، ثانوي بسيط
- Mobile: تقليل الحجم والتبديل للعمود

### تصميم Cards
- خلفية بيضاء
- Box shadow خفيف
- Hover effect: ترجيع للأعلى 4px باستخدام CSS class
- Border radius: 10px

### تصميم Navigation
- Sticky header
- Mobile menu overlay
- Smooth scroll
- RTL-aware

---

## 📦 الإصدار

### SemVer
- `1.0.0` - الإصدار الأولي
- `1.1.0` - إضافة ميزات جديدة
- `2.0.0` - تحديث كبير

---

## 📞 الدعم والصيانة

### عند الإضافة لميزات جديدة:
1. أضف الكود في الملف المناسب
2. حدّث README.md
3. أضف النصوص الجديدة إلى al-multqa.pot
4. اختبر على جميع المتصفحات
5. أضف changelog

---

## 🧩 الأهداف المستقبلية

### القوالب الإضافية
- صفحة Services
- صفحة Portfolio
- صفحة Team
- صفحة Testimonials
- صفحة Pricing

### التحسينات
- Lazy loading للصور
- WebP support
- Service Worker للـ PWA
- Advanced Customizer options

---

*آخر تحديث: 31 يناير 2026*
