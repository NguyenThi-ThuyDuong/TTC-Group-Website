# TTC Group Website

> **A modern, premium Laravel‑based website for the TTC Group**

## 🎯 Project Overview

The **TTC Group Website** is a full‑stack web application built with **Laravel 13** and **Vite**. It showcases a clean architecture, responsive UI, and a set of reusable Blade components that make the site easy to maintain and extend.

- **Backend**: Laravel 13 (PHP 8.3+)
- **Frontend**: Vanilla CSS with a custom design system (gradient, glass‑morphism, micro‑animations) and Google Font *Inter*.
- **Build**: Vite for asset bundling and hot‑module reloading.
- **Database**: SQLite by default (configurable via `.env`).

## ✨ Features

- **Responsive layout** – mobile‑first design.
- **Elegant UI** – dark mode, vibrant gradients, subtle hover animations.
- **Component library** – reusable Blade components for navigation, hero sections, cards, forms, etc.
- **Authentication scaffold** – ready‑to‑use Laravel Breeze (optional).
- **Task queue & real‑time logs** – integrated with Laravel queues.
- **Asset pipeline** – Vite with HMR for rapid development.

## 🛠️ Getting Started

### Prerequisites

| Tool | Version |
|------|---------|
| **PHP** | `^8.3` |
| **Composer** | latest |
| **Node.js** | `>=20` |
| **Git** | any |
| **SQLite** (default) – optional MySQL/PostgreSQL |

### Installation

```bash
# Clone the repository
git clone https://github.com/NguyenThi-ThuyDuong/TTC-Group-Website.git
cd TTC-Group-Website

# Install PHP dependencies
composer install

# Copy env file & generate app key
cp .env.example .env
php artisan key:generate

# Install JS dependencies & build assets
npm install
npm run build   # or npm run dev for hot reloading

# Run migrations (SQLite by default)
php artisan migrate --force
```

### Running the Development Server

```bash
# Start Laravel's built‑in server and Vite in parallel
npx concurrently -c "#93c5fd,#c4b5fd" \
  "php artisan serve" \
  "npm run dev"
```

Visit <http://localhost:8000> in your browser.

### Testing

```bash
php artisan test
```

## 📦 Configuration

All configuration lives in the `.env` file. Key settings you might want to adjust:

- `APP_URL` – base URL of the site.
- `DB_CONNECTION` – `sqlite` (default), `mysql`, or `pgsql`.
- `SESSION_DRIVER` – `database` (default) for persistent sessions.
- `MAIL_MAILER` – `log` for local development.

## 🏗️ Build & Assets

- **Development** – `npm run dev` provides hot‑module reloading via Vite.
- **Production** – `npm run build` creates optimized assets in `public/build`.

## 🤝 Contributing

1. Fork the repository.
2. Create a feature branch (`git checkout -b feature/awesome-feature`).
3. Commit your changes with clear messages.
4. Push to your fork and open a Pull Request.

Please ensure your code follows the existing coding standards and passes all tests.

## 📄 License

This project is licensed under the **MIT License** – see the `LICENSE` file for details.

---

*Happy coding!*
