# cPanel deploy — no SSH required

This is the shortest path to get the site live on shared cPanel hosting with a
primary domain and **no SSH access**. The repo includes `vendor/` and built
assets so the server never needs Composer or Node.

> **Important:** GitHub repo may need to be **Public** for cPanel's Git Version
> Control to clone it. Easiest: GitHub → repo → Settings → Danger Zone →
> "Change visibility" → Public. (Reversible later.)
> If you must keep it private, you'll need to add a deploy key — ask and I'll
> walk you through it.

---

## What you'll click in cPanel

### 1. Clone the repo

- cPanel → **Git™ Version Control** → **Create**
- **Clone URL:** `https://github.com/newcenturyimports-lgtm/global-imports.git`
- **Repository Path:** `/home/USER/global-imports`  *(replace USER with your cPanel username)*
- **Branch:** `main`
- Click **Create**. cPanel will clone — takes 30-60 seconds.

### 2. Create the database

- cPanel → **MySQL® Databases**
- Create a database: `USER_globalmkt` (cPanel auto-prefixes with your username)
- Create a user: `USER_global` with a strong password
- Add the user to the database with **ALL PRIVILEGES**
- **Write down** the database name, user, and password — you'll need them in step 4

### 3. Wire up `public_html`

cPanel → **File Manager**

1. Open `/home/USER/global-imports/deploy/`
2. Copy **`public_html-index.php`** → into `/home/USER/public_html/` → rename it to `index.php` (overwrite the default if cPanel created one)
3. Copy **`public_html-htaccess`** → into `/home/USER/public_html/` → rename it to `.htaccess`
4. From `/home/USER/global-imports/public/`, copy the entire **`build/`** folder and the **`images/`** folder into `/home/USER/public_html/`
   - You'll re-do this step any time you change images or rebuild CSS/JS

> If your repo folder isn't named `global-imports`, open the new `public_html/index.php` in File Manager and update the `$appBase` line at the top.

### 4. Configure `.env`

cPanel → **File Manager** → `/home/USER/global-imports/`

1. Copy `.env.example` → `.env`
2. Edit `.env`:
   ```
   APP_NAME="Global Market by NCI"
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   APP_KEY=                                  # leave blank — fill in step 5

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=USER_globalmkt
   DB_USERNAME=USER_global
   DB_PASSWORD=your-password

   MAIL_MAILER=log                           # change to smtp + creds when ready
   INQUIRY_NOTIFY_EMAIL=newcenturyimports@gmail.com
   ```

### 5. Run the one-time setup (no SSH)

cPanel → **Cron Jobs** → add a one-off job:

- **Common Settings:** Once per minute *(or any minute one minute in the future)*
- **Command:**
  ```
  cd /home/USER/global-imports && php artisan key:generate --force && php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache
  ```
- Wait one minute, then **delete the cron** — it only needs to run once.

If you'd rather not use cron, see "Web-based setup" below.

### 6. Visit the site

Open `https://yourdomain.com/` — you should see Global Market live.

---

## When you update the site

After pushing changes to GitHub:

1. cPanel → **Git™ Version Control** → **Manage** next to your repo → **Update from Remote** (then **Deploy HEAD Commit**)
2. If CSS/JS or images changed, re-copy `build/` and `images/` from `global-imports/public/` into `public_html/`
3. If new migrations, re-run the cron from step 5 (just the `php artisan migrate --force` part)

---

## Web-based setup (alternative to step 5)

If cron isn't available, paste this **one-time setup script** at
`/home/USER/global-imports/public/setup.php`, then visit
`https://yourdomain.com/setup.php?token=CHANGE_ME` once. **Delete the file
immediately after** — leaving it up is a security hole.

```php
<?php
if (($_GET['token'] ?? '') !== 'CHANGE_ME_STRONG') { http_response_code(403); exit('forbidden'); }
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->call('key:generate', ['--force' => true]);
$kernel->call('migrate', ['--force' => true]);
$kernel->call('config:cache');
$kernel->call('route:cache');
$kernel->call('view:cache');
echo "<pre>".$kernel->output()."</pre>";
echo "Done. DELETE setup.php NOW.";
```

---

## Troubleshooting

- **500 error / blank page** — `tail -50 /home/USER/global-imports/storage/logs/laravel.log` in File Manager. Usually a wrong path in `public_html/index.php` or missing `APP_KEY` (re-run step 5).
- **CSS not loading** — you forgot step 3.4. Copy `public/build/` into `public_html/`.
- **Database error** — re-check `.env` DB credentials match what cPanel MySQL gave you.
- **`Permission denied` on storage** — File Manager → `global-imports/storage/` and `bootstrap/cache/` → set permissions to `775`.
- **Repo won't clone** — repo is still private. Make it public (or set up a deploy key).
