# TTC Group Website

> **Website TTC Group hiện đại, chuẩn premium sử dụng Laravel**

## 🎯 Giới thiệu dự án

**TTC Group Website** là một ứng dụng web full‑stack được xây dựng bằng **Laravel 13** và **Vite**. Dự án minh họa kiến trúc sạch, UI đáp ứng, và một bộ component Blade tái sử dụng giúp dễ bảo trì và mở rộng.

- **Backend**: Laravel 13 (PHP 8.3+)
- **Frontend**: CSS thuần với hệ thống thiết kế tùy chỉnh (gradient, glass‑morphism, micro‑animation) và font Google *Inter*.
- **Build**: Vite để bundling tài sản và hot‑module reloading.
- **Cơ sở dữ liệu**: SQLite mặc định (có thể cấu hình qua `.env`).

## ✨ Tính năng

- **Giao diện đáp ứng** – thiết kế mobile‑first.
- **UI sang trọng** – chế độ dark, gradient sinh động, hiệu ứng hover tinh tế.
- **Thư viện component** – các component Blade cho navigation, hero, card, form, …
- **Scaffold xác thực** – Laravel Breeze sẵn sàng (tùy chọn).
- **Queue & log thời gian thực** – tích hợp Laravel queue.
- **Pipeline tài sản** – Vite với HMR cho phát triển nhanh.

## 🛠️ Yêu cầu hệ thống

| Công cụ | Phiên bản |
|---------|----------|
| **PHP** | `^8.3` |
| **Composer** | mới nhất |
| **Node.js** | `>=20` |
| **Git** | bất kỳ |
| **SQLite** (mặc định) – tùy chọn MySQL/PostgreSQL |

## 📦 Hướng dẫn cài đặt

### 1. Clone dự án

```bash
# Clone repository về máy
git clone https://github.com/NguyenThi-ThuyDuong/TTC-Group-Website.git
cd TTC-Group-Website
```

### 2. Cài đặt phụ thuộc PHP

```bash
composer install
```

### 3. Thiết lập môi trường

```bash
# Sao chép file môi trường mẫu và tạo khóa ứng dụng
cp .env.example .env
php artisan key:generate
```

### 4. Cài đặt phụ thuộc JavaScript và biên dịch tài sản

```bash
npm install
npm run build   # hoặc npm run dev để bật hot‑reloading
```

### 5. Chạy migration (SQLite mặc định)

```bash
php artisan migrate --force
```

## 🚀 Chạy server phát triển

```bash
# Khởi động Laravel và Vite đồng thời
npx concurrently -c "#93c5fd,#c4b5fd" \
  "php artisan serve" \
  "npm run dev"
```

Mở trình duyệt tại <http://localhost:8000> để xem site.

## 🧪 Kiểm thử

```bash
php artisan test
```

## 📋 Cấu hình

Các cấu hình chính nằm trong file `.env`. Bạn có thể thay đổi:

- `APP_URL` – URL cơ sở của site.
- `DB_CONNECTION` – `sqlite` (default), `mysql`, hoặc `pgsql`.
- `SESSION_DRIVER` – `database` (default) để lưu phiên.
- `MAIL_MAILER` – `log` cho môi trường phát triển.

## 🏗️ Build & Deploy

- **Phát triển** – `npm run dev` cung cấp hot‑module reloading qua Vite.
- **Sản xuất** – `npm run build` tạo tài sản tối ưu trong `public/build`.

## 🤝 Đóng góp

1. Fork repository.
2. Tạo nhánh tính năng (`git checkout -b feature/tinh-nang-moi`).
3. Commit thay đổi với mô tả rõ ràng.
4. Push lên fork và mở Pull Request.

Vui lòng tuân thủ các chuẩn mã nguồn hiện có và đảm bảo các bài kiểm thử đều pass.

## 📄 Giấy phép

Dự án này được cấp phép theo **MIT License** – xem file `LICENSE` để biết chi tiết.

---

*Chúc bạn lập trình vui vẻ!*
