# TTC Group Website Clone

## 🎯 Giới thiệu dự án

**TTC Group Website Clone** là dự án xây dựng lại giao diện website của TTC Group với mục đích học tập và thực hành phát triển giao diện web.

Dự án tập trung vào việc tái hiện bố cục, phong cách hiển thị, các thành phần giao diện và trải nghiệm người dùng của website tham khảo, đồng thời xây dựng các trang web theo hướng **responsive** và dễ mở rộng.

Website tham khảo: [TTC Group](https://www.ttcgroup.vn/?utm_source=chatgpt.com)

> **Lưu ý:** Đây là dự án phục vụ mục đích học tập và thực hành lập trình. Dự án không phải là website chính thức của TTC Group.

---

## 🛠️ Công nghệ sử dụng

* **Laravel 13**
* **PHP 8.3+**
* **Blade Template**
* **HTML5**
* **CSS3**
* **JavaScript**
* **Vite**
* **Node.js**
* **Composer**

---

## ✨ Chức năng chính

* Xây dựng giao diện website theo phong cách TTC Group.
* Thiết kế giao diện responsive trên Desktop, Tablet và Mobile.
* Xây dựng các thành phần giao diện có thể tái sử dụng bằng Blade Components.
* Hiển thị các trang thông tin của doanh nghiệp.
* Xây dựng thanh điều hướng và footer.
* Xây dựng banner, hero section, card và các khu vực nội dung.
* Tạo hiệu ứng hover, animation và chuyển động cơ bản bằng CSS và JavaScript.

---

## 📁 Cấu trúc dự án

```text
TTC-Group-Website/
│
├── app/
├── public/
│   ├── images/
│   └── assets/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── about/
│       ├─ business/
│       ├─ careers/
│       ├─ components/
│       ├─ contact/
│       ├─ home/
│       ├─ layouts/
│       ├─ media/
│       ├─ social/
│
├── routes/
│   └── web.php
│
├── package.json
├── composer.json
└── README.md
```

---

## 📦 Hướng dẫn cài đặt

### 1. Clone dự án

```bash
git clone https://github.com/NguyenThi-ThuyDuong/TTC-Group-Website.git
```

Di chuyển vào thư mục dự án:

```bash
cd TTC-Group-Website
```

### 2. Cài đặt thư viện PHP

```bash
composer install
```

### 3. Tạo file môi trường

```bash
copy .env.example .env
```

Sau đó tạo application key:

```bash
php artisan key:generate
```

### 4. Cài đặt thư viện JavaScript

```bash
npm install
```

### 5. Chạy Vite

```bash
npm run dev
```

### 6. Chạy Laravel Server

Mở một terminal khác và chạy:

```bash
php artisan serve
```

Sau đó truy cập:

```text
http://localhost:8000
```

---

## 🚀 Build giao diện

Để build tài nguyên cho môi trường production:

```bash
npm run build
```

---

## 🖼️ Giao diện

Dự án được xây dựng dựa trên việc tham khảo bố cục và phong cách từ website TTC Group.

Các khu vực giao diện bao gồm:

* Trang chủ
* Giới thiệu
* Lĩnh vực hoạt động
* Tin tức / Truyền thông
* Trách nhiệm xã hội
* Liên hệ
* Header và Navigation
* Footer

---

## 👩‍💻 Tác giả

**Nguyễn Thị Thùy Dương**

Sinh viên ngành Kỹ thuật Phần mềm.

GitHub Repository:

[TTC Group Website Repository](https://github.com/NguyenThi-ThuyDuong/TTC-Group-Website)

---

## 📄 Lưu ý

Dự án được thực hiện với mục đích **học tập, thực hành và nghiên cứu phát triển giao diện web**.

Website được tham khảo từ TTC Group. Các thương hiệu, hình ảnh và nội dung gốc thuộc quyền sở hữu của các chủ sở hữu tương ứng.
