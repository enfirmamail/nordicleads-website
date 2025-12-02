# Manual File Move Guide

Since the files are already uploaded to the theme directory, you need to **move** these files to their correct locations using your file manager.

## 📋 Files to Move

### From: `/public_html/wp-content/themes/twentytwentyfive-child/`
### To: `/public_html/` (root)

Move these 4 files to the root directory:

1. **`robots.txt`** → Move to `/public_html/robots.txt`
2. **`sitemap.xml`** → Move to `/public_html/sitemap.xml`
3. **`humans.txt`** → Move to `/public_html/humans.txt`
4. **`llms.txt`** → Move to `/public_html/llms.txt`

### Security File

**`security.txt`** → Move to `/public_html/.well-known/security.txt`

**Steps:**
1. First, create the `.well-known` folder in root (`/public_html/.well-known/`)
2. Then move `security.txt` into that folder

## 🎯 Step-by-Step Instructions

### Using File Manager (Simply.com/UnoEuro):

1. **Navigate to theme directory:**
   - Go to `/public_html/wp-content/themes/twentytwentyfive-child/`

2. **Move root files:**
   - Select `robots.txt`, `sitemap.xml`, `humans.txt`, `llms.txt`
   - Use "Cut" or "Move" function
   - Navigate to `/public_html/` (root)
   - Paste/Move files there

3. **Create `.well-known` folder:**
   - Navigate to `/public_html/`
   - Create new folder named `.well-known`
   - (Note: The dot at the beginning is important!)

4. **Move security.txt:**
   - Go back to theme directory
   - Select `security.txt`
   - Move it to `/public_html/.well-known/security.txt`

## ✅ Verification

After moving files, verify they're accessible:

- ✅ `https://nordicleads.dk/robots.txt` - Should show robots.txt content
- ✅ `https://nordicleads.dk/sitemap.xml` - Should show XML sitemap
- ✅ `https://nordicleads.dk/humans.txt` - Should show humans.txt content
- ✅ `https://nordicleads.dk/llms.txt` - Should show llms.txt content
- ✅ `https://nordicleads.dk/.well-known/security.txt` - Should show security policy

## 📁 Final Structure

After moving, your structure should look like:

```
/public_html/
├── robots.txt                    ← Moved from theme
├── sitemap.xml                   ← Moved from theme
├── humans.txt                    ← Moved from theme
├── llms.txt                      ← Moved from theme
├── .well-known/
│   └── security.txt              ← Moved from theme
└── wp-content/
    └── themes/
        └── twentytwentyfive-child/
            ├── front-page.php    ← Stays here
            ├── header.php        ← Stays here
            ├── footer.php        ← Stays here
            ├── functions.php     ← Stays here
            ├── style.css         ← Stays here
            ├── app.js            ← Stays here
            └── assets/           ← Stays here
                └── ...
```

## ⚠️ Important

- **DO NOT delete** the files from theme directory until you've verified they work in root
- **DO NOT** move PHP, CSS, JS, or assets files - those must stay in theme directory
- Only move the 5 files listed above (4 to root, 1 to .well-known/)

