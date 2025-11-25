# NordicLeads - Lead Generation Website

**Production-ready WordPress child theme for Danish B2B lead generation company**

Built with WordPress, Tailwind CSS, and modern web standards. Optimized for conversion, performance, and GDPR compliance.

---

## 🚀 Quick Start (Docker Development)

### 1. Start Docker Environment

```bash
docker-compose up -d
```

This will start:
- **WordPress** on http://localhost:8000
- **phpMyAdmin** on http://localhost:8080
- **MySQL** database (internal)

### 2. Install WordPress

1. Go to http://localhost:8000
2. Select language: **Dansk**
3. Fill in site information:
   - Site Title: **NordicLeads**
   - Username: **admin**
   - Password: (create a strong password)
   - Email: **info@nordicleads.dk**
4. Click "Install WordPress"

### 3. Activate Theme

1. Login to WordPress Admin: http://localhost:8000/wp-admin
2. Go to **Appearance → Themes**
3. Install **Twenty Twenty-Five** parent theme (if not present)
4. Activate **Twenty Twenty-Five Child** theme

### 4. Set Homepage

1. Go to **Settings → Reading**
2. Select "A static page"
3. Choose your frontpage as Homepage
4. Save changes

### 5. See Your Site

Visit http://localhost:8000 - Your site is live! 🎉

**Any changes to files = instant preview** (just refresh browser)

---

## 📁 Project Structure

```
leads-web/
├── docker-compose.yml                    # Docker setup
├── README.md                             # This file
├── README-SETUP.md                       # Detailed Docker instructions
├── DOCUMENTATION.md                      # Complete technical docs
├── AI-IMAGE-PROMPTS.md                   # Image generation prompts
├── ANALYTICS-EVENTS.md                   # Analytics tracking guide
├── QA-CHECKLIST.md                       # Pre-launch checklist
└── wp-content/
    └── themes/
        └── twentytwentyfive-child/       # Your child theme
            ├── style.css                 # Tailwind + custom CSS
            ├── functions.php             # WordPress functions
            ├── front-page.php            # Main frontpage template
            ├── header.php                # Site header
            ├── footer.php                # Site footer
            ├── app.js                    # JavaScript (consent, analytics, forms)
            ├── robots.txt                # SEO crawler directives
            ├── llms.txt                  # AI/LLM guidance
            ├── sitemap.xml               # XML sitemap
            ├── humans.txt                # Credits
            ├── security.txt              # Security policy
            └── assets/
                └── favicon.svg           # Site icon
```

---

## 🎨 What's Included

### ✅ Complete Frontpage
- **Hero** with value proposition + 2 CTAs
- **Problem → Solution** section
- **How It Works** (3 steps)
- **Results/Stats** (4 metrics)
- **Trust/GDPR** compliance section
- **30-Day Guarantee**
- **Testimonials** (2 customer quotes)
- **Pricing** (3 tiers: Starter, Pro, Enterprise)
- **FAQ** (8 questions with accordion)
- **Contact Form** with validation
- **Footer** with links + GDPR info

### ✅ Modern Design
- Tailwind CSS 3.4.1
- Nordic minimalism aesthetic
- Gradients & subtle animations
- Fully responsive (mobile-first)
- High contrast & accessibility
- Premium 2025 look

### ✅ Performance Optimized
- LCP ≤ 1.5s target
- Critical CSS inlined
- Lazy loading images
- Speculation Rules API (prefetch/prerender)
- Preconnect to external resources
- Target: Lighthouse ≥ 95

### ✅ SEO Ready
- Semantic HTML5
- Meta tags (title, description, OG, Twitter)
- JSON-LD structured data (7 schemas)
- robots.txt (open to all crawlers)
- sitemap.xml
- llms.txt (AI/answer engine optimization)
- Hreflang for Danish

### ✅ GDPR Compliant
- Consent Mode v2 implementation
- Cookie banner (accept/reject)
- Analytics load only after consent
- Privacy-friendly defaults
- EU-hosted ready
- GDPR justifications in copy (legitimate interest)

### ✅ Analytics & Tracking
- Google Analytics 4
- Google Tag Manager
- Meta Pixel (Facebook)
- LinkedIn Insight Tag
- 6 custom events tracked
- Form conversion tracking

### ✅ Accessibility
- WCAG 2.2 AA compliant
- Keyboard navigation
- Screen reader support
- ARIA labels
- Skip link
- High contrast mode
- Reduced motion support

---

## 🛠️ Configuration

### Analytics Setup

Edit `wp-content/themes/twentytwentyfive-child/app.js`:

```javascript
const CFG = {
    GA_MEASUREMENT_ID: "G-XXXXXXXXXX",      // Your Google Analytics 4 ID
    GTM_ID: "GTM-XXXXXXX",                  // Your Google Tag Manager ID
    META_PIXEL_ID: "000000000000000",       // Your Meta Pixel ID
    LINKEDIN_PID: "0000000",                // Your LinkedIn Partner ID
    USE_GTM: true,                          // Use GTM (recommended)
};
```

**How to get IDs:**
- **GA4:** Google Analytics → Admin → Data Streams → Measurement ID
- **GTM:** Google Tag Manager → Create Container → Container ID
- **Meta:** Meta Business Manager → Pixels → Pixel ID
- **LinkedIn:** LinkedIn Campaign Manager → Insight Tag → Partner ID

### Email Configuration

**Default:** Forms use WordPress `wp_mail()` function

**Recommended:** Install **WP Mail SMTP** plugin for reliable delivery:
1. WordPress Admin → Plugins → Add New
2. Search "WP Mail SMTP"
3. Install & Activate
4. Configure with SendGrid, Mailgun, or SMTP provider

---

## 📝 Content Customization

### Replace Placeholder Content

1. **Testimonials** (`front-page.php` line ~540)
   - Replace with real customer quotes
   - Update names, companies, roles

2. **Statistics** (`front-page.php` line ~470)
   - Verify numbers or update: "40% flere kunder", "50-250 leads/måned"

3. **Footer** (`footer.php` line ~25)
   - Add real CVR number: `CVR: [XX XX XX XX]`
   - Verify contact email

4. **Images** (Add to `/assets/` folder)
   - Hero background
   - OG image (1200x630px)
   - Icons for "How It Works"
   - Testimonial photos
   - Use `AI-IMAGE-PROMPTS.md` for generation

---

## 🖼️ Image Assets

### Generate with AI

Use prompts in `AI-IMAGE-PROMPTS.md` with:
- DALL-E 3
- Midjourney
- Stable Diffusion
- Adobe Firefly

### Or Use Stock Photos

Search on:
- Unsplash
- Pexels
- Unsplash

Keywords: "Danish business", "Scandinavian office", "Nordic workspace"

---

## 🚢 Deployment to Production

### Prerequisites
- Domain: nordicleads.dk
- Hosting: Simply.com (or similar)
- WordPress installed
- PHP 8.x + MySQL 8.x
- SSL certificate

### Steps

1. **Export Database**
   - phpMyAdmin (localhost:8080)
   - Export → SQL format

2. **Upload Child Theme**
   - FTP/SFTP to: `/wp-content/themes/`
   - Upload entire `twentytwentyfive-child` folder

3. **Import Database**
   - Production phpMyAdmin
   - Import SQL file
   - Search/Replace: `localhost:8000` → `nordicleads.dk`

4. **Activate Theme**
   - WordPress Admin → Themes
   - Activate Twenty Twenty-Five Child

5. **Configure Analytics**
   - Edit `app.js` with real IDs

6. **Test Everything**
   - Use `QA-CHECKLIST.md`
   - Test forms, links, mobile

7. **Go Live!** 🎉

**Detailed deployment guide in DOCUMENTATION.md**

---

## 📊 Analytics Events

6 events tracked automatically:

1. **page_view** - Page load
2. **scroll** - Scroll depth (25%, 50%, 75%, 100%)
3. **cta_click** - CTA button clicks
4. **request_quote** - Pricing interest
5. **phone_click** - Email/phone link clicks
6. **generate_lead** - Form submission (PRIMARY CONVERSION)

See `ANALYTICS-EVENTS.md` for setup details.

---

## 🧪 Testing

### Performance
```bash
# Lighthouse in Chrome DevTools
# Target: ≥ 95 for all metrics
```

### Accessibility
```bash
# WAVE browser extension
# axe DevTools extension
# Screen reader testing
```

### Cross-Browser
- Chrome, Firefox, Safari, Edge
- iOS Safari, Chrome Mobile

### Forms
- Submit test form
- Check email delivery
- Verify analytics event fires

**Complete checklist in QA-CHECKLIST.md**

---

## 📚 Documentation

### For Developers
- **DOCUMENTATION.md** - Complete technical documentation
- **ANALYTICS-EVENTS.md** - Analytics implementation guide
- **AI-IMAGE-PROMPTS.md** - Image generation prompts

### For Launch
- **QA-CHECKLIST.md** - Pre-launch quality assurance
- **README-SETUP.md** - Docker environment setup

---

## 🐛 Troubleshooting

### Docker Issues

**Port already in use?**
```bash
# Edit docker-compose.yml, change ports:
# "8000:80" → "8001:80"
```

**Permission issues?**
```bash
docker-compose exec wordpress chown -R www-data:www-data /var/www/html
```

**Fresh start?**
```bash
docker-compose down -v
docker-compose up -d
```

### WordPress Issues

**White screen?**
- Enable WordPress debug: `wp-config.php` → `WP_DEBUG = true`
- Check PHP error logs

**Theme not showing?**
- Verify parent theme (Twenty Twenty-Five) is installed
- Check file permissions (644 for files, 755 for folders)

**Forms not working?**
- Install WP Mail SMTP plugin
- Check email settings in WordPress → Settings → General
- Test with different email address

---

## 🔒 Security

### Included
✅ HTTPS/SSL ready  
✅ Security headers (CSP, XSS, etc.)  
✅ Input sanitization  
✅ CSRF protection (nonces)  
✅ SQL injection prevention  
✅ GDPR compliant

### Recommended Plugins
- **Wordfence** (security)
- **UpdraftPlus** (backups)
- **WP Rocket** (caching)
- **Yoast SEO** (SEO)

---

## 📞 Support

### Contact
- **Email:** info@nordicleads.dk
- **Website:** https://nordicleads.dk

### Resources
- [WordPress Codex](https://codex.wordpress.org/)
- [Tailwind CSS Docs](https://tailwindcss.com/docs)
- [GDPR Official Guide](https://gdpr-info.eu/)
- [Google Analytics 4 Help](https://support.google.com/analytics)

---

## 📄 License

- **Theme:** GPL v2 or later
- **Content:** © 2025 NordicLeads. All rights reserved.

---

## 🎯 Key Features

| Feature | Status |
|---------|--------|
| Modern Design (Tailwind) | ✅ |
| Responsive (Mobile-First) | ✅ |
| SEO Optimized | ✅ |
| GDPR Compliant | ✅ |
| Accessibility (WCAG 2.2 AA) | ✅ |
| Analytics (GA4, Meta, LinkedIn) | ✅ |
| Form with Validation | ✅ |
| Performance Optimized | ✅ |
| Consent Mode v2 | ✅ |
| Structured Data (JSON-LD) | ✅ |
| Docker Dev Environment | ✅ |
| Complete Documentation | ✅ |

---

## 🚀 Next Steps

1. **Start Docker:** `docker-compose up -d`
2. **Install WordPress:** http://localhost:8000
3. **Activate Theme:** Appearance → Themes
4. **Customize Content:** Replace placeholders
5. **Add Images:** Use AI prompts or stock photos
6. **Configure Analytics:** Edit `app.js` with real IDs
7. **Test:** Use QA-CHECKLIST.md
8. **Deploy:** Follow deployment guide
9. **Monitor:** Set up analytics & uptime monitoring
10. **Launch!** 🎉

---

**Built with ❤️ for Danish businesses**  
**Version:** 1.0.0  
**Last Updated:** 2025-11-24

---

## 🙏 Thank You

Thank you for choosing this theme! If you have questions, check the documentation files or reach out.

**Good luck with your launch!** 🚀

