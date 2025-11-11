# Project — PDF Certificate (Laravel)

Purpose
- This repository is a Laravel project that generates PDFs using `barryvdh/laravel-dompdf`.
- The frontend task: convert a Figma certificate design to raw HTML/CSS inside `resources/views/pdf/index.blade.php`. Do not use CSS frameworks; use plain CSS because the PDF generator has limited CSS support.

Prerequisites (Windows)
- Git
- PHP 8.x (installed via XAMPP, Laragon, or standalone)
- Composer
- Node.js & npm (optional if you will build frontend assets)
- XAMPP or Laragon (recommended) or ability to run `php artisan serve`

Quick setup (clone + install)
1. Clone the repository:
   - `git clone <repository-url>`
   - `cd <repository-folder>`

2. Install PHP dependencies:
   - `composer install`

3. Copy environment file and generate app key:
   - `copy .env.example .env` (Windows) or `cp .env.example .env`
   - `php artisan key:generate`

4. (Optional) Install npm packages and build assets:
   - `npm install`
   - `npm run dev` or `npm run build`

Run the project (choose one)

A. Using built-in server (fast, no XAMPP/Laragon required)
- `php artisan serve`
- Open `http://127.0.0.1:8000` and test the PDF at `http://127.0.0.1:8000/pdf`

B. Using XAMPP
- Copy the project folder to `C:\xampp\htdocs\<project-folder>`
- Ensure PHP version in XAMPP matches project requirements
- Open browser: `http://localhost/<project-folder>/public` (or configure a virtual host that points to the `public` folder)

C. Using Laragon
- Place the project in `C:\laragon\www\<project-folder>`
- Laragon often exposes the site as `http://<project-folder>.test` or `http://localhost/<project-folder>`
- Point the site to the `public` folder (default behavior is fine in most Laragon installs)

PDF preview route
- The project exposes a demo PDF at `GET /pdf`. Open `/pdf` in the browser to see the generated PDF.

Editing the PDF template
- Edit `resources/views/pdf/index.blade.php`
- Use plain HTML and internal CSS inside the blade file (use a `<style>` block in the head)
- Avoid remote CSS frameworks and external fonts (these often fail in dompdf)

Adding extra fonts (recommended approach)
1. Put font files in `public/fonts/` (e.g. `public/fonts/MyFont-Regular.ttf` and `public/fonts/MyFont-Bold.ttf`)

2. In `resources/views/pdf/index.blade.php` add an internal style block referencing the absolute filesystem path so dompdf can load the font:

```html
<style>
@font-face {
  font-family: 'MyFont';
  src: url('{{ public_path("fonts/MyFont-Regular.ttf") }}') format('truetype');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'MyFont';
  src: url('{{ public_path("fonts/MyFont-Bold.ttf") }}') format('truetype');
  font-weight: bold;
  font-style: normal;
}
body {
  font-family: 'MyFont', sans-serif;
}
</style>/* public/css/certificate.css */
html, body {
  margin: 0;
  padding: 0;
  width: 297mm; /* A4 landscape width */
  height: 210mm; /* A4 landscape height */
  background: #fff;
  color: #222;
}

.container {
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  padding: 20mm;
  text-align: center;
  position: relative;
}

.header {
  margin-top: 6mm;
  font-size: 28px;
  font-weight: 700;
}

.recipient {
  margin-top: 20mm;
  font-size: 42px;
  font-weight: 700;
}

.details {
  margin-top: 8mm;
  font-size: 14px;
  color: #555;
}

/* Use fixed units (mm, cm, px) and avoid flex/grid */
.signature {
  position: absolute;
  right: 20mm;
  bottom: 20mm;
  text-align: center;
  font-size: 12px;
}<img src="{{ public_path('images/logo.png') }}" alt="logo"><style>
@font-face {
  font-family: 'MyFont';
  src: url('{{ public_path("fonts/MyFont-Regular.ttf") }}') format('truetype');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'MyFont';
  src: url('{{ public_path("fonts/MyFont-Bold.ttf") }}') format('truetype');
  font-weight: bold;
  font-style: normal;
}
body { font-family: 'MyFont', sans-serif; }
</style><link rel="stylesheet" href="{{ asset('css/certificate.css') }}"># Project — PDF Certificate (Laravel)

This update documents how to add and use CSS for the certificate PDF template.

Where to edit
- Blade file to edit HTML: `resources/views/pdf/index.blade.php`
- Recommended CSS file: `public/css/certificate.css`
- Custom fonts: `public/fonts/`

Important note about dompdf
- dompdf supports a subset of CSS. Prefer simple positioning (absolute, margins), fixed sizes (mm, cm, px), and tables for complex grid-like layouts. Avoid advanced layout features (flexbox/grid), CSS variables, and many modern CSS features.
- dompdf can load fonts/images from the local filesystem (recommended) or via HTTP if `enable_remote` is turned on in `config/dompdf.php`.

Two safe ways to include CSS for the PDF

1) Preferred — Inline the CSS file contents into the blade (no remote access needed)
- Put your stylesheet at `public/css/certificate.css`.
- In `resources/views/pdf/index.blade.php`, insert the stylesheet contents inside a `<style>` tag using `file_get_contents`:
```blade
<style>
{!! file_get_contents(public_path('css/certificate.css')) !!}
</style><p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
