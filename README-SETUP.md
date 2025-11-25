# NordicLeads WordPress Development Environment

## Quick Start

### 1. Start Docker Environment
```bash
docker-compose up -d
```

### 2. Access WordPress
- **WordPress Site**: http://localhost:8000
- **WordPress Admin**: http://localhost:8000/wp-admin
- **phpMyAdmin**: http://localhost:8080

### 3. Initial WordPress Setup
1. Go to http://localhost:8000
2. Select language: **Dansk**
3. Create admin account:
   - Site Title: **NordicLeads**
   - Username: **admin**
   - Password: *(create a strong one)*
   - Email: **info@nordicleads.dk**
4. Click "Install WordPress"

### 4. Activate Child Theme
1. Log in to WordPress admin (http://localhost:8000/wp-admin)
2. Go to **Udseende → Temaer** (Appearance → Themes)
3. First, ensure **Twenty Twenty-Five** parent theme is installed
4. Activate **Twenty Twenty-Five Child** theme

### 5. Set Frontpage as Homepage
1. Go to **Indstillinger → Læsning** (Settings → Reading)
2. Select "En statisk side" (A static page)
3. Choose your frontpage as Homepage
4. Save changes

### 6. Live Development
All files in `wp-content/themes/twentytwentyfive-child/` are mounted directly.
**Any changes you make = instant preview in browser!**

Just refresh the page after editing:
- `front-page.php` - Homepage template
- `style.css` - Styling
- `app.js` - JavaScript functionality
- `functions.php` - WordPress functions

## Docker Commands

```bash
# Start containers
docker-compose up -d

# Stop containers
docker-compose down

# View logs
docker-compose logs -f wordpress

# Restart after changes
docker-compose restart wordpress

# Stop and remove everything (including database)
docker-compose down -v
```

## Ports
- **8000** - WordPress site
- **8080** - phpMyAdmin
- **3306** - MySQL (internal)

## File Structure
```
leads-web/
├── docker-compose.yml
├── wp-content/
│   └── themes/
│       └── twentytwentyfive-child/
│           ├── style.css
│           ├── functions.php
│           ├── front-page.php
│           ├── header.php
│           ├── footer.php
│           ├── app.js
│           ├── robots.txt
│           ├── llms.txt
│           ├── sitemap.xml
│           ├── humans.txt
│           ├── security.txt
│           └── assets/
│               └── favicon.svg
```

## Troubleshooting

**Port already in use?**
```bash
# Change ports in docker-compose.yml
# 8000:80 → 8001:80
```

**Need fresh install?**
```bash
docker-compose down -v
docker-compose up -d
```

**Permission issues?**
```bash
docker-compose exec wordpress chown -R www-data:www-data /var/www/html
```

## Next Steps After Setup
1. Install plugins if needed (Yoast SEO, WPForms, etc.)
2. Configure analytics IDs in `app.js` (CFG object)
3. Replace placeholder content with real data
4. Add real images to `/assets/`
5. Configure SMTP for form emails
6. Test on mobile devices using your local IP: http://192.168.x.x:8000

## Production Deployment
When ready to deploy to simply.com:
1. Export database from phpMyAdmin
2. Copy child theme folder to production
3. Update wp-config.php with production database details
4. Search/replace localhost:8000 → nordicleads.dk in database
5. Upload files via FTP/SFTP
6. Configure DNS and SSL

