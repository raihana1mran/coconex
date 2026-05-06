# Free Hosting Options for Laravel

## Best Free Option: Render.com
- **URL:** render.com
- **Free Tier:** Web service (sleeps after 15 min inactivity)
- **Credit Card:** Not required for free tier

### Deploy Steps:
1. Push code to GitHub
2. Go to Render → New Web Service
3. Connect GitHub repo
4. Configure:
   - Build Command: `composer install --no-dev --optimize-autoloader && php artisan migrate --force`
   - Start Command: `php artisan serve --host=0.0.0.0 --port=$PORT`
5. Add Environment Variables:
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `DB_CONNECTION=sqlite`
   - `DB_DATABASE=/tmp/coconex.sqlite`

---

## Alternative: Cyclic.sh
- Free for side projects
- Limited PHP support
- URL: cyclic.sh

---

## Alternative: Fly.io
- 3 free VMs
- Requires credit card
- URL: fly.io

---

## Quick SQLite Config for Free Hosting:

Update local .env for compatibility: