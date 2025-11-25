# NordicLeads - Complete Documentation

## Project Overview

**Name:** NordicLeads  
**Purpose:** Lead generation og outreach til danske virksomheder  
**Platform:** WordPress (Twenty Twenty-Five Child Theme)  
**Language:** Danish (da-DK)  
**Target:** B2B small to medium businesses in Denmark  
**Launch Date:** 2025-11-24

## Table of Contents

1. [Architecture Overview](#architecture-overview)
2. [Design System](#design-system)
3. [File Structure](#file-structure)
4. [Features](#features)
5. [SEO Strategy](#seo-strategy)
6. [GDPR Compliance](#gdpr-compliance)
7. [Performance Optimization](#performance-optimization)
8. [Analytics & Tracking](#analytics--tracking)
9. [Deployment Guide](#deployment-guide)
10. [Maintenance](#maintenance)

---

## Architecture Overview

### Tech Stack
- **Backend:** PHP 8.x, WordPress 6.x
- **Frontend:** HTML5, Tailwind CSS 3.4.1, Vanilla JavaScript (ES6+)
- **Typography:** Inter (Google Fonts)
- **Icons:** Unicode emojis + SVG
- **Analytics:** GA4, Meta Pixel, LinkedIn Insight, GTM
- **Hosting:** Simply.com (Denmark, EU)

### Single-Page Architecture
The site is a **single-page frontpage** with anchor navigation:
- All content on one page for optimal cold outreach conversion
- Anchor links for navigation (#hvordan-virker-det, #priser, etc.)
- No blog, no additional pages (frontpage-only focus)

---

## Design System

### Colors
```css
Primary:     #003366 (Deep Blue)
Secondary:   #0066cc (Accent Blue)
Accent:      #f0f0f0 (Light Gray)
Text Dark:   #1a1a1a
Text Gray:   #4a5568
Text Light:  #718096
Background:  #ffffff
BG Gray:     #f7fafc
Border:      #e2e8f0
Success:     #10b981
Error:       #ef4444
```

### Typography
- **Font Family:** Inter (weights: 400, 500, 600, 700)
- **Headings:** 700 weight, clamp() for responsive sizing
- **Body:** 400 weight, 16px base, 1.6 line-height
- **Scale:** xs(12px) → sm(14px) → base(16px) → lg(18px) → xl(20px) → 2xl(24px) → 3xl(30px) → 4xl(36px) → 5xl(48px)

### Spacing
- **Base unit:** 0.25rem (4px)
- **Scale:** xs(4px), sm(8px), md(16px), lg(24px), xl(32px), 2xl(48px), 3xl(64px)

### Shadows
```css
sm:  0 1px 2px rgba(0,0,0,0.05)
md:  0 4px 6px -1px rgba(0,0,0,0.1)
lg:  0 10px 15px -3px rgba(0,0,0,0.1)
xl:  0 20px 25px -5px rgba(0,0,0,0.1)
```

### Border Radius
```css
sm: 0.25rem (4px)
md: 0.5rem (8px)
lg: 0.75rem (12px)
xl: 1rem (16px)
full: 9999px
```

### Transitions
- **Fast:** 150ms cubic-bezier(0.4, 0, 0.2, 1)
- **Base:** 250ms cubic-bezier(0.4, 0, 0.2, 1)
- **Slow:** 350ms cubic-bezier(0.4, 0, 0.2, 1)

### Gradients
```css
Hero: linear-gradient(135deg, #001f3f 0%, #003366 50%, #0066cc 100%)
Button: linear-gradient(135deg, #003366 0%, #0066cc 100%)
Text: linear-gradient(135deg, #003366 0%, #0066cc 100%)
```

---

## File Structure

```
leads-web/
├── docker-compose.yml                    # Docker environment
├── README-SETUP.md                       # Setup instructions
├── DOCUMENTATION.md                      # This file
├── AI-IMAGE-PROMPTS.md                   # Image generation prompts
├── ANALYTICS-EVENTS.md                   # Event tracking docs
├── QA-CHECKLIST.md                       # Quality assurance
└── wp-content/
    └── themes/
        └── twentytwentyfive-child/
            ├── style.css                 # Main stylesheet (Tailwind + custom)
            ├── functions.php             # WordPress functions & hooks
            ├── front-page.php            # Frontpage template
            ├── header.php                # Site header
            ├── footer.php                # Site footer
            ├── app.js                    # JavaScript (consent, analytics, forms)
            ├── robots.txt                # Crawler directives
            ├── llms.txt                  # AI/LLM guidance
            ├── sitemap.xml               # Sitemap (frontpage only)
            ├── humans.txt                # Credits & tech info
            ├── security.txt              # Security contact
            └── assets/
                ├── favicon.svg           # Site favicon
                └── (images to be added)
```

---

## Features

### 1. Header
- **Sticky navigation** with blur backdrop
- Logo (text-based "NordicLeads")
- Anchor navigation to sections
- Mobile hamburger menu
- Primary CTA button ("Book gratis opkald")
- Accessibility: Skip link, ARIA labels, keyboard nav

### 2. Hero Section
- H1: "Få 50–250 nye kunder hver måned til din virksomhed"
- Value proposition with 5 bullet points
- Dual CTAs (primary + secondary)
- Trust badges (GDPR, Dansk support, 30 dages garanti)
- Gradient background with subtle pattern overlay
- TL;DR for AEO (hidden for users, visible for AI)

### 3. Problem → Solution
- Addresses pain points of small Danish businesses
- Explains GDPR compliance approach (legitimate interest)
- References Cognism-style best practices
- ~180 words, persuasive copy

### 4. How It Works (3 Steps)
- Card-based layout with icons
- Step 1: Find leads from public sources
- Step 2: Send personalized Danish emails
- Step 3: Deliver booked leads
- Visual clarity with grid layout

### 5. Results/Stats
- 4 stat cards in responsive grid
- "40% flere kunder", "50-250 leads/måned", etc.
- Gradient numbers for visual impact

### 6. Trust/GDPR Compliance
- 4-point explanation of GDPR safety
- Legitimate interest (Art. 6(1)(f))
- Public sources only
- DNC-screening & compliance
- Danish support & EU hosting
- Bordered card for emphasis

### 7. 30-Day Guarantee
- Full-width colored section (primary blue)
- Simple, clear promise
- Builds trust for Pro package

### 8. Testimonials
- 2 customer quotes (placeholders)
- Name, role, company
- Side-by-side card layout
- Left border accent

### 9. Pricing (3 Tiers)
- Starter: 2.500 kr/måned
- Pro: 4.500 kr/måned (most popular, featured)
- Enterprise: Custom pricing
- Feature lists with checkmarks
- CTA buttons per tier

### 10. FAQ (8 Questions)
- Accordion UI (expand/collapse)
- ARIA-expanded for accessibility
- Addresses GDPR, spam, results, target audience
- Includes explanation of "legitimate interest"

### 11. Contact Form
- 5 fields: name, company, email, phone, message
- Client-side validation with inline errors
- AJAX submission to WordPress backend
- Success message on submission
- Tracks "generate_lead" event
- GDPR consent text below form

### 12. Footer
- 3-column layout (company, links, legal)
- Contact info
- Quick links (anchors)
- Legal links (privacy, terms, GDPR, cookies)
- Copyright notice
- GDPR compliance note

### 13. Sticky CTA Button
- Fixed position (bottom-right)
- Links to contact form
- Pulse animation
- High z-index

### 14. Cookie Consent Banner
- GDPR-compliant banner (Consent Mode v2)
- Accept all / Reject (only necessary)
- Saves preference to localStorage (365 days)
- Controls analytics loading

---

## SEO Strategy

### On-Page SEO
- **Title:** "NordicLeads - Lead generation og outreach til danske virksomheder" (≤60 chars)
- **Meta Description:** "Få 50-250 nye kunder hver måned med GDPR-sikre leads..." (≤155 chars)
- **H1:** Keyword-rich, benefit-focused
- **H2/H3:** Semantic hierarchy
- **Alt text:** Descriptive for all images
- **Internal linking:** Anchor links to sections

### Technical SEO
- Semantic HTML5 (header, main, section, article, footer)
- Clean URL structure
- Canonical tag (self-referencing)
- Hreflang (da-DK, da, x-default)
- robots.txt (allow all, block wp-admin)
- sitemap.xml (frontpage + sections)
- Schema.org JSON-LD (Organization, Service, FAQPage, BreadcrumbList)

### Keywords (Danish)
**Primary:**
- lead generation danmark
- kolde emails b2b
- gdpr sikre leads
- outreach service danmark

**Secondary:**
- b2b leads danmark
- cold outreach danmark
- email marketing b2b
- virksomheds leads

**Intent:** Commercial/Transactional

### Content Strategy
- Focus on benefits, not features
- Address objections proactively (GDPR, spam, results)
- Natural Danish tone (not AI-sounding)
- Trust signals throughout (30-day guarantee, testimonials, compliance)

### AI/Answer Engine Optimization (AEO)
- TL;DR summary in hero (hidden for users, visible for AI)
- llms.txt with comprehensive site info
- Open robots.txt (allow all AI crawlers)
- FAQ with direct answers
- Structured data (FAQPage schema)

### Open Graph & Social
- OG title, description, image, locale
- Twitter Card (summary_large_image)
- Proper image dimensions (1200x630)

---

## GDPR Compliance

### Legal Basis
- **Legitimate Interest (Art. 6(1)(f))** for B2B outreach
- Mutual benefit for business development
- Compliance assessments documented
- Right to object honored (unsubscribe)

### Data Sources
- 100% public sources (CVR, Google Maps, LinkedIn, websites)
- No third-party data purchases
- Transparent data collection

### User Rights
- Unsubscribe in every email
- DNC (Do Not Contact) screening
- Data deletion on request
- Access to data on request

### Consent Mode v2
- Default: All analytics denied
- User choice: Accept all / Reject
- Granular consent: analytics_storage, ad_storage, etc.
- Cookie banner with clear options

### Data Storage
- EU-hosted servers (Simply.com, Denmark)
- Secure HTTPS/TLS
- Regular backups
- Access controls

### Privacy Documents
- Privacy Policy (link in footer)
- Cookie Policy (link in footer)
- GDPR Information page (link in footer)
- Terms of Service (link in footer)

---

## Performance Optimization

### Core Web Vitals Targets
- **LCP (Largest Contentful Paint):** ≤ 1.5s
- **INP (Interaction to Next Paint):** ≤ 150ms
- **CLS (Cumulative Layout Shift):** ≤ 0.05
- **TTFB (Time to First Byte):** ≤ 0.5s

### Strategies

#### 1. Critical CSS
- Inline critical above-the-fold CSS in `<head>`
- Defer non-critical CSS
- Tailwind purging (production)

#### 2. Image Optimization
- AVIF/WebP formats with fallback
- Responsive images (srcset, sizes)
- Lazy loading (loading="lazy")
- LCP image: fetchpriority="high", preload
- Proper dimensions to avoid CLS

#### 3. JavaScript
- Defer non-critical scripts
- Async loading where possible
- No render-blocking JS
- Minimal dependencies (vanilla JS)

#### 4. Resource Hints
- **Preconnect:** Google Fonts, GA, GTM
- **DNS-prefetch:** Facebook, LinkedIn
- **Preload:** LCP image, critical fonts
- **Prefetch/Prerender:** Speculation Rules API for internal links

#### 5. Caching
- Browser caching (Cache-Control headers)
- CDN for static assets
- WordPress object caching (if needed)

#### 6. Minification
- Minify CSS, JS (production)
- Remove unused CSS (PurgeCSS)
- Compress HTML

#### 7. Fonts
- Google Fonts with display=swap
- Preconnect to fonts.googleapis.com
- Subset fonts to Latin if possible

#### 8. Third-Party Scripts
- Load analytics after consent
- Async/defer all third-party scripts
- Use GTM for consolidated loading

#### 9. Server
- Fast hosting (Simply.com)
- HTTP/2 or HTTP/3
- Gzip/Brotli compression
- Fast PHP version (8.x)

#### 10. WordPress Specific
- Disable emojis (done in functions.php)
- Remove query strings from static resources
- Disable unnecessary plugins
- Use latest WordPress version

---

## Analytics & Tracking

### Platforms
1. **Google Analytics 4** (via GTM or direct)
2. **Google Tag Manager** (recommended)
3. **Meta Pixel** (Facebook)
4. **LinkedIn Insight Tag**

### Consent Mode v2
- Default: all denied
- Update on user choice
- Respects GDPR

### Events Tracked

#### 1. page_view
- **Trigger:** On page load
- **Parameters:** page_title, page_location, page_path
- **All platforms**

#### 2. scroll
- **Trigger:** At 25%, 50%, 75%, 100% scroll depth
- **Parameters:** event_category: "Engagement", event_label: "X%", value: X
- **GA4 only**

#### 3. cta_click
- **Trigger:** Click on .btn-primary
- **Parameters:** event_category: "CTA", event_label: button text, value: 1
- **All platforms**

#### 4. request_quote
- **Trigger:** Click on pricing links
- **Parameters:** event_category: "Pricing", event_label: "View Pricing", value: 1
- **All platforms**

#### 5. phone_click
- **Trigger:** Click on tel: or mailto: links
- **Parameters:** event_category: "Contact", event_label: href, value: 1
- **All platforms**

#### 6. generate_lead
- **Trigger:** Successful form submission
- **Parameters:** event_category: "Form", event_label: "Contact Form", value: 1
- **All platforms** (primary conversion event)

### Implementation
- All tracking in `app.js`
- `Analytics.trackEvent()` function
- Sends to GA, Meta, LinkedIn simultaneously
- Respects consent settings

---

## Deployment Guide

### Prerequisites
1. WordPress 6.x installed
2. Twenty Twenty-Five parent theme installed
3. PHP 8.x
4. MySQL 8.x
5. HTTPS/SSL configured
6. Domain: nordicleads.dk

### Steps

#### 1. Upload Child Theme
```bash
# Via FTP/SFTP
Upload entire /wp-content/themes/twentytwentyfive-child/ folder
```

#### 2. Activate Theme
- WordPress Admin → Appearance → Themes
- Activate "Twenty Twenty-Five Child"

#### 3. Set Frontpage as Homepage
- Settings → Reading
- Select "A static page"
- Choose your frontpage
- Save

#### 4. Configure Analytics
Edit `app.js`:
```javascript
const CFG = {
    GA_MEASUREMENT_ID: "G-XXXXXXXXXX",  // Your GA4 ID
    GTM_ID: "GTM-XXXXXXX",              // Your GTM ID
    META_PIXEL_ID: "000000000000000",   // Your Meta Pixel ID
    LINKEDIN_PID: "0000000",            // Your LinkedIn ID
    USE_GTM: true,
    // ...
};
```

#### 5. Configure Email
In WordPress Admin:
- Settings → General → Email Address → info@nordicleads.dk
- Or configure SMTP plugin for reliable delivery

#### 6. Install Recommended Plugins (Optional)
- **Yoast SEO** or **Rank Math** (SEO)
- **WP Mail SMTP** (email delivery)
- **WP Rocket** or **W3 Total Cache** (caching)
- **Wordfence** or **Sucuri** (security)

#### 7. Upload Images
- Add real images to `/assets/` folder
- Replace placeholders in front-page.php
- Generate images using AI-IMAGE-PROMPTS.md

#### 8. Replace Placeholder Content
- Customer testimonials (names, companies)
- Real statistics (if different from placeholders)
- CVR number in footer
- Phone number (if needed)

#### 9. Test Forms
- Submit test form
- Check email delivery
- Verify analytics events fire

#### 10. Performance Check
- Run Lighthouse audit (target ≥ 95)
- Check Core Web Vitals
- Test on mobile devices

#### 11. Security
- Update all plugins/themes
- Configure security headers (done in functions.php)
- Enable automatic updates
- Set up backups

#### 12. Legal Pages
Create additional pages (if needed):
- Privacy Policy
- Cookie Policy
- Terms of Service
- GDPR Information

Link from footer.

#### 13. DNS & SSL
- Point nordicleads.dk to hosting
- Ensure SSL certificate is active
- Test HTTPS

#### 14. Final QA
- Use QA-CHECKLIST.md
- Test all links
- Test all forms
- Test on multiple devices/browsers
- Check accessibility (WCAG 2.2 AA)

---

## Maintenance

### Regular Tasks

#### Daily
- Monitor form submissions
- Check email delivery
- Review analytics for anomalies

#### Weekly
- Check site uptime
- Review analytics data
- Respond to contact form leads

#### Monthly
- Update WordPress core, themes, plugins
- Review Core Web Vitals
- Check for broken links
- Review SEO performance
- Backup database

#### Quarterly
- Full security audit
- Performance optimization review
- Content updates (stats, testimonials)
- Competitor analysis
- SEO strategy review

#### Yearly
- Renew SSL certificate (auto if Let's Encrypt)
- Domain renewal
- GDPR compliance review
- Design refresh assessment
- Analytics strategy review

### Monitoring

#### Uptime
- Use UptimeRobot or Pingdom
- Alert on downtime

#### Performance
- Google Search Console (Core Web Vitals)
- PageSpeed Insights
- GTmetrix
- Lighthouse CI (automated)

#### Analytics
- GA4 dashboard
- Weekly reports
- Conversion tracking

#### Security
- Wordfence/Sucuri alerts
- Failed login attempts
- Malware scans

### Troubleshooting

#### Forms Not Working
1. Check email settings
2. Install WP Mail SMTP
3. Test with Mailgun/SendGrid
4. Check nonce validation
5. Check AJAX endpoint

#### Slow Performance
1. Enable caching plugin
2. Optimize images (compress, WebP)
3. Remove unused plugins
4. Check database size
5. Upgrade hosting plan

#### Analytics Not Tracking
1. Check consent was given
2. Verify IDs in app.js
3. Check browser console for errors
4. Verify GTM is firing
5. Test in incognito mode

#### Mobile Menu Not Working
1. Check JavaScript errors
2. Verify mobile-menu-toggle ID
3. Test on different devices
4. Check CSS media queries

---

## Support & Resources

### Documentation
- README-SETUP.md (Docker setup)
- DOCUMENTATION.md (this file)
- AI-IMAGE-PROMPTS.md (image generation)
- ANALYTICS-EVENTS.md (event tracking)
- QA-CHECKLIST.md (quality assurance)

### External Resources
- [WordPress Codex](https://codex.wordpress.org/)
- [Tailwind CSS Docs](https://tailwindcss.com/docs)
- [Google Analytics 4 Docs](https://support.google.com/analytics)
- [GDPR Official Text](https://gdpr-info.eu/)
- [WCAG 2.2 Guidelines](https://www.w3.org/WAI/WCAG22/quickref/)

### Contact
- Email: info@nordicleads.dk
- Website: https://nordicleads.dk

---

## License

- **Theme:** GPL v2 or later
- **Content:** © 2025 NordicLeads. All rights reserved.

---

**Last Updated:** 2025-11-24  
**Version:** 1.0.0  
**Author:** NordicLeads Team

