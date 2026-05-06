# Coconex - Fresh Juice Store

Laravel e-commerce website for fresh juice business.

## GitHub Setup

1. **Create new repository:**
   - Go to https://github.com/new
   - Name: `coconex`
   - Description: Fresh juice store website

2. **Push to GitHub:**
```bash
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/YOUR_USERNAME/coconex.git
git push -u origin main
```

## Environment Setup

1. Copy `.env.example` to `.env`:
```bash
cp .env.example .env
```

2. Generate key:
```bash
php artisan key:generate
```

3. Run migrations:
```bash
php artisan migrate
```

4. Seed products:
```bash
php artisan db:seed --class=ProductSeeder
```

5. Install dependencies:
```bash
composer install
npm install
npm run build
```

## Razorpay Payment Setup

1. Get API keys from https://dashboard.razorpay.com

2. Add to `.env`:
```env
RAZORPAY_KEY_ID=rzp_test_xxxxxxxx
RAZORPAY_KEY_SECRET=xxxxxxxx
```

3. Clear cache:
```bash
php artisan config:clear
```

## Running Locally

```bash
php artisan serve
```

Then open http://localhost:8000

## Features

- Product menu with flavours (Sangupoo, Karupatti, Nattusakkarai)
- Sugar options (Regular/No Sugar)
- Floating cart with quantity
- Razorpay payment integration

## Deploy

### Render.com (Free)
1. Connect GitHub to Render
2. Build: `composer install --no-dev --optimize-autoloader && php artisan migrate --force`
3. Start: `php artisan serve --host=0.0.0.0 --port=$PORT`

### Laravel Vapor (Production)
```bash
composer require laravel/vapor
vapor deploy production
```