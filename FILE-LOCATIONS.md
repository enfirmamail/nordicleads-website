# File Locations Guide

This document explains where each file should be located on your WordPress server.

## 📁 File Structure

### Root Directory (`/public_html/`)
These files must be in the root directory for proper SEO and crawler access:

- **`robots.txt`** → `/public_html/robots.txt`
  - Must be accessible at `https://nordicleads.dk/robots.txt`
  - Tells search engines and crawlers what to index

- **`sitemap.xml`** → `/public_html/sitemap.xml`
  - Must be accessible at `https://nordicleads.dk/sitemap.xml`
  - Referenced in robots.txt
  - Helps search engines discover all pages

- **`humans.txt`** → `/public_html/humans.txt`
  - Must be accessible at `https://nordicleads.dk/humans.txt`
  - Credits file for humans (not robots)

- **`llms.txt`** → `/public_html/llms.txt`
  - Must be accessible at `https://nordicleads.dk/llms.txt`
  - Guidance for AI/LLM crawlers

### Security File (`.well-known/` directory)
- **`security.txt`** → `/public_html/.well-known/security.txt`
  - Must be accessible at `https://nordicleads.dk/.well-known/security.txt`
  - Security policy file (RFC 9116 standard)
  - Can also be at root, but `.well-known/` is preferred

### Theme Directory (`/public_html/wp-content/themes/twentytwentyfive-child/`)
All WordPress theme files go here:

**PHP Template Files:**
- `front-page.php` - Main frontpage template
- `header.php` - Site header
- `footer.php` - Site footer
- `functions.php` - WordPress theme functions

**Stylesheets:**
- `style.css` - Main stylesheet (required for WordPress theme)
- `tailwind-input.css` - Tailwind source file
- `assets/tailwind.min.css` - Compiled Tailwind CSS

**JavaScript:**
- `app.js` - Theme JavaScript (analytics, forms, etc.)

**Assets:**
- `assets/` folder - All images, logos, etc.
  - `assets/wmremove-transformed.jpeg` - Hero image
  - `assets/logo.svg` - Site logo
  - `assets/favicon.svg` - Site favicon
  - `assets/logos/` - Client logos
  - All other images

## ✅ Current Status

After running `upload-to-wordpress-correct.ps1`, files will be in these locations:

```
/public_html/
├── robots.txt          ✓ Root
├── sitemap.xml         ✓ Root
├── humans.txt          ✓ Root
├── llms.txt            ✓ Root
└── .well-known/
    └── security.txt    ✓ Security file

/public_html/wp-content/themes/twentytwentyfive-child/
├── front-page.php      ✓ Theme
├── header.php          ✓ Theme
├── footer.php          ✓ Theme
├── functions.php       ✓ Theme
├── style.css           ✓ Theme
├── tailwind-input.css  ✓ Theme
├── app.js              ✓ Theme
└── assets/             ✓ Theme
    ├── wmremove-transformed.jpeg
    ├── logo.svg
    ├── favicon.svg
    ├── tailwind.min.css
    └── logos/
        └── dmify.png
```

## 🚀 How to Upload

Run the corrected upload script:

```powershell
.\upload-to-wordpress-correct.ps1
```

The script will:
1. Ask for FTP credentials
2. Upload root files to `/public_html/`
3. Upload `security.txt` to `/public_html/.well-known/`
4. Upload theme files to `/public_html/wp-content/themes/twentytwentyfive-child/`

## ⚠️ Important Notes

- **Root files** (`robots.txt`, `sitemap.xml`, etc.) must be in root for SEO to work
- **Theme files** must stay in the theme directory for WordPress to recognize them
- **security.txt** should be in `.well-known/` for proper security policy discovery
- All paths are relative to your base path (typically `/public_html/`)

## 🔍 Verification

After upload, verify files are accessible:

- ✅ `https://nordicleads.dk/robots.txt`
- ✅ `https://nordicleads.dk/sitemap.xml`
- ✅ `https://nordicleads.dk/humans.txt`
- ✅ `https://nordicleads.dk/llms.txt`
- ✅ `https://nordicleads.dk/.well-known/security.txt`
- ✅ Theme files accessible via WordPress (check in admin → Appearance → Themes)

