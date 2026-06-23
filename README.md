# Laravel URL Shortener

## Author

**B N Manish**

- GitHub: [bnmanish](https://github.com/bnmanish)
- LinkedIn: [B N Manish](https://www.linkedin.com/in/bnmanish/)

---

A multi-tenant URL shortening service built with Laravel. Users can generate short URLs that redirect to the original URLs.

## Tech Stack

- **Framework:** Laravel 13 (Laravel 13.8)
- **PHP:** ^8.3
- **Database:** MySQL

## Features

### Authentication & Authorization
- Three roles: **SuperAdmin**, **Admin**, **Member**
- Role-based middleware for access control
- Login / Logout using Laravel Breeze

### Invitation System
- SuperAdmin can invite an Admin to a new company
- Admin can invite another Admin or Member within their own company
- Email invitations sent via Laravel Mail

### URL Shortener
- Admin and Member can create short URLs
- SuperAdmin cannot create short URLs
- SuperAdmin can view all short URLs across every company
- Admin can only see short URLs created within their own company
- Member can only see short URLs created by themselves
- All short URLs are publicly resolvable and redirect to the original URL

## Setup Instructions

### 1. Clone the repository

```bash
git clone <repository-url>
cd laravel_url_shortner
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Environment configuration

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` and configure your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_url_shortner
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Email configuration (required for invitations)

Edit `.env` and set your mail driver credentials (e.g., Gmail SMTP):

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME="your_email@gmail.com"
MAIL_PASSWORD="your_app_password"
MAIL_FROM_ADDRESS="your_email@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"
MAIL_ENCRYPTION=tls
```

> **Note:** If using Gmail, you'll need an [App Password](https://support.google.com/accounts/answer/185833) (not your regular password).

### 5. Run migrations and seeders

```bash
php artisan migrate
php artisan db:seed --class=CompanySeeder
php artisan db:seed --class=SuperAdminSeeder
```

This will:
- Create the necessary database tables
- Seed 5 companies: Google, Microsoft, Amazon, Apple, Meta
- Create a default Super Admin account:
  - **Email:** `developermanish95@gmail.com`
  - **Password:** `12345678`


### 6. Start the development server

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
