# Quality Assurance Checklist for NordicLeads

Complete QA checklist to ensure the site is production-ready before launch.

---

## 1. Performance ⚡

### Core Web Vitals
- [ ] **LCP (Largest Contentful Paint):** ≤ 1.5s
- [ ] **INP (Interaction to Next Paint):** ≤ 150ms
- [ ] **CLS (Cumulative Layout Shift):** ≤ 0.05
- [ ] **TTFB (Time to First Byte):** ≤ 0.5s

### Lighthouse Audit
- [ ] **Performance:** ≥ 95/100
- [ ] **Accessibility:** ≥ 95/100
- [ ] **Best Practices:** ≥ 95/100
- [ ] **SEO:** ≥ 95/100

### Tools to Test
- [ ] Google PageSpeed Insights
- [ ] GTmetrix
- [ ] WebPageTest
- [ ] Chrome DevTools Lighthouse

### Image Optimization
- [ ] All images compressed (< 200KB for large images)
- [ ] WebP/AVIF format with fallback
- [ ] Responsive images (srcset, sizes)
- [ ] Lazy loading implemented (except LCP image)
- [ ] LCP image has fetchpriority="high"
- [ ] No layout shift from images (width/height set)

### Scripts & Styles
- [ ] CSS minified (production)
- [ ] JavaScript minified (production)
- [ ] No render-blocking resources
- [ ] Critical CSS inlined
- [ ] Fonts preloaded
- [ ] Analytics deferred until consent

### Caching
- [ ] Browser caching configured (Cache-Control headers)
- [ ] Static assets have long cache times
- [ ] HTML has short cache time

---

## 2. SEO 🔍

### Meta Tags
- [ ] Title tag present and ≤ 60 characters
- [ ] Meta description present and ≤ 155 characters
- [ ] Meta keywords removed (not used by Google)
- [ ] Canonical URL set correctly
- [ ] Robots meta tag allows indexing

### Open Graph
- [ ] og:title set
- [ ] og:description set
- [ ] og:image set (1200x630px)
- [ ] og:url set
- [ ] og:type set to "website"
- [ ] og:locale set to "da_DK"

### Twitter Cards
- [ ] twitter:card set to "summary_large_image"
- [ ] twitter:title set
- [ ] twitter:description set
- [ ] twitter:image set

### Hreflang
- [ ] hreflang="da-DK" present
- [ ] hreflang="da" present
- [ ] hreflang="x-default" present

### Structured Data (JSON-LD)
- [ ] Organization schema present
- [ ] ProfessionalService schema present
- [ ] Service schema present
- [ ] FAQPage schema present
- [ ] BreadcrumbList schema present
- [ ] WebPage schema present
- [ ] WebSite schema present
- [ ] Validate with Google Rich Results Test
- [ ] Validate with Schema.org Validator

### Content
- [ ] H1 tag present (only one)
- [ ] H2-H6 tags in logical hierarchy
- [ ] Alt text on all images
- [ ] Internal links working
- [ ] No broken links (404s)
- [ ] URL structure clean (no parameters)

### Files
- [ ] robots.txt present and allows crawling
- [ ] sitemap.xml present and submitted to GSC
- [ ] llms.txt present (AI/LLM guidance)
- [ ] humans.txt present
- [ ] security.txt present (.well-known/security.txt)
- [ ] favicon.svg present

### Tools to Test
- [ ] Google Search Console
- [ ] Google Rich Results Test
- [ ] Screaming Frog SEO Spider
- [ ] Ahrefs Site Audit
- [ ] SEMrush Site Audit

---

## 3. Accessibility ♿

### WCAG 2.2 AA Compliance
- [ ] Color contrast ≥ 4.5:1 for text
- [ ] Color contrast ≥ 3:1 for UI elements
- [ ] Keyboard navigation works for all elements
- [ ] Focus indicators visible
- [ ] Skip to main content link present
- [ ] No keyboard traps

### ARIA
- [ ] ARIA labels on interactive elements
- [ ] ARIA-expanded on accordions
- [ ] ARIA-required on form fields
- [ ] ARIA-invalid on error states
- [ ] ARIA-describedby for error messages
- [ ] ARIA-labelledby for sections

### Forms
- [ ] All inputs have labels
- [ ] Required fields marked with *
- [ ] Error messages clear and descriptive
- [ ] Success messages clear
- [ ] Form can be submitted with keyboard

### Semantic HTML
- [ ] Proper heading hierarchy (H1 → H2 → H3)
- [ ] Semantic elements used (header, nav, main, section, article, footer)
- [ ] Lists used for lists (ul, ol)
- [ ] Buttons vs links used correctly

### Media
- [ ] Images have alt text
- [ ] Decorative images have alt=""
- [ ] No text in images (or OCR-friendly)
- [ ] Videos have captions (if applicable)

### Reduced Motion
- [ ] Respects prefers-reduced-motion
- [ ] Animations can be disabled
- [ ] No auto-playing animations

### Tools to Test
- [ ] WAVE (Web Accessibility Evaluation Tool)
- [ ] axe DevTools
- [ ] Lighthouse Accessibility Audit
- [ ] NVDA/JAWS screen reader testing
- [ ] VoiceOver (Mac) screen reader testing

---

## 4. Privacy & GDPR 🔒

### Consent Mode v2
- [ ] Default consent set to "denied"
- [ ] Cookie banner displays on first visit
- [ ] Accept/Reject buttons work
- [ ] Consent saved to localStorage
- [ ] Analytics load only after consent
- [ ] Consent can be withdrawn

### Cookie Banner
- [ ] Banner visible on first visit
- [ ] Clear explanation of cookies
- [ ] Accept all button present
- [ ] Reject (only necessary) button present
- [ ] Link to privacy policy present
- [ ] Banner hides after interaction
- [ ] Doesn't reappear after choice made

### Privacy Documents
- [ ] Privacy Policy page created/linked
- [ ] Cookie Policy page created/linked
- [ ] GDPR Information page created/linked
- [ ] Terms of Service page created/linked
- [ ] All linked from footer

### Data Protection
- [ ] HTTPS enabled (SSL certificate)
- [ ] No sensitive data in URLs
- [ ] Form data sanitized server-side
- [ ] Email validation implemented
- [ ] No plain-text password storage (N/A)
- [ ] EU-hosted data storage

### Security Headers
- [ ] Content-Security-Policy set
- [ ] X-Frame-Options: SAMEORIGIN
- [ ] X-Content-Type-Options: nosniff
- [ ] Referrer-Policy set
- [ ] Permissions-Policy set

### Tools to Test
- [ ] Cookie Consent Checker
- [ ] SecurityHeaders.com
- [ ] SSL Labs SSL Test
- [ ] GDPR Compliance Checker

---

## 5. Functionality 🛠️

### Navigation
- [ ] Logo links to home
- [ ] All nav links work (anchor scrolling)
- [ ] Mobile menu opens/closes
- [ ] Mobile menu closes on link click
- [ ] Mobile menu closes on outside click
- [ ] Smooth scrolling works

### Hero Section
- [ ] H1 displays correctly
- [ ] Subtitle readable
- [ ] Bullets display correctly
- [ ] CTAs work (scroll to contact)
- [ ] Trust badges visible

### How It Works
- [ ] 3 cards display correctly
- [ ] Icons visible
- [ ] Grid responsive on mobile

### Results/Stats
- [ ] Stats display correctly
- [ ] Numbers readable
- [ ] Grid responsive on mobile

### Trust Section
- [ ] 4 trust points display
- [ ] Checkmarks visible
- [ ] Content readable

### Guarantee Section
- [ ] Text centered
- [ ] Background color correct (blue)
- [ ] White text readable

### Testimonials
- [ ] 2 testimonials display
- [ ] Quotes readable
- [ ] Author names visible
- [ ] Roles/companies visible

### Pricing
- [ ] 3 pricing cards display
- [ ] "Most popular" badge on Pro
- [ ] Feature lists readable
- [ ] CTAs work
- [ ] Prices correct (2.500, 4.500, Custom)

### FAQ
- [ ] 8 questions display
- [ ] Accordion opens on click
- [ ] Accordion closes other items
- [ ] Icons rotate on open
- [ ] Content readable when open
- [ ] ARIA-expanded updates

### Contact Form
- [ ] All 5 fields display
- [ ] Labels visible
- [ ] Required fields marked (*)
- [ ] Email validation works
- [ ] Phone validation works
- [ ] Submit button works
- [ ] Loading state shows during submit
- [ ] Success message displays after submit
- [ ] Form hides after submit
- [ ] Error messages display for invalid fields
- [ ] Inline validation on blur
- [ ] Can submit with keyboard (Enter)

### Footer
- [ ] 3 columns display
- [ ] All links work
- [ ] Contact email clickable
- [ ] Copyright year correct (2025)
- [ ] GDPR note visible

### Sticky CTA
- [ ] Button visible in bottom-right
- [ ] Pulse animation works
- [ ] Links to contact form
- [ ] Doesn't overlap content
- [ ] Visible on mobile

### Cookie Banner
- [ ] Displays after 2 seconds
- [ ] Slides up from bottom
- [ ] Accept button works
- [ ] Reject button works
- [ ] Hides after interaction
- [ ] Doesn't block content

---

## 6. Analytics & Tracking 📊

### Setup
- [ ] GA4 Measurement ID configured in app.js
- [ ] GTM Container ID configured (if USE_GTM: true)
- [ ] Meta Pixel ID configured
- [ ] LinkedIn Partner ID configured
- [ ] All IDs replaced (not placeholder values)

### Consent
- [ ] Analytics blocked by default
- [ ] Analytics load after consent
- [ ] gtag consent default set
- [ ] gtag consent update works

### Events Tracked
- [ ] page_view fires on load
- [ ] scroll fires at 25%, 50%, 75%, 100%
- [ ] cta_click fires on CTA button clicks
- [ ] request_quote fires on pricing link click
- [ ] phone_click fires on email/phone link click
- [ ] generate_lead fires on form submit

### Verification
- [ ] Open browser console, see "[Analytics] Event tracked" logs
- [ ] GA4 DebugView shows events (real-time)
- [ ] Meta Pixel Helper shows events
- [ ] LinkedIn Tag Checker shows tag loaded
- [ ] GTM Preview mode shows tags firing (if GTM used)

### GA4 Setup
- [ ] generate_lead marked as conversion
- [ ] Data retention set to 14 months
- [ ] Goals configured

---

## 7. Cross-Browser Testing 🌐

### Desktop Browsers
- [ ] Chrome (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Edge (latest)

### Mobile Browsers
- [ ] Chrome Mobile (Android)
- [ ] Safari Mobile (iOS)
- [ ] Samsung Internet (Android)
- [ ] Firefox Mobile

### Test On
- [ ] Windows 10/11
- [ ] macOS
- [ ] iOS (iPhone)
- [ ] Android

### Tools
- [ ] BrowserStack
- [ ] LambdaTest
- [ ] Real devices (recommended)

---

## 8. Responsive Design 📱

### Breakpoints
- [ ] **Mobile (< 640px):** Layout stacks correctly
- [ ] **Tablet (640px - 1024px):** Grid adjusts
- [ ] **Desktop (> 1024px):** Full layout displays
- [ ] **Large Desktop (> 1920px):** Content doesn't stretch too wide

### Components
- [ ] Header responsive (mobile menu works)
- [ ] Hero text readable on mobile
- [ ] Cards stack on mobile
- [ ] Pricing tables stack on mobile
- [ ] Form fields full-width on mobile
- [ ] Footer stacks on mobile
- [ ] Sticky CTA visible but not obtrusive

### Images
- [ ] Images don't overflow
- [ ] Images maintain aspect ratio
- [ ] Responsive srcset works

### Typography
- [ ] Font sizes scale with clamp()
- [ ] Text readable on all devices
- [ ] No horizontal scrolling

### Touch Targets
- [ ] Buttons ≥ 44px × 44px (iOS guideline)
- [ ] Links easy to tap
- [ ] Form fields large enough

---

## 9. Content ✍️

### Copy
- [ ] No placeholder text (Lorem ipsum)
- [ ] No "[PLACEHOLDER]" or "XXX" values
- [ ] Danish grammar/spelling correct
- [ ] No AI-sounding phrases
- [ ] Tone consistent (professional, friendly)
- [ ] No broken sentences

### Real Data
- [ ] Replace placeholder statistics (if needed)
- [ ] Add real testimonials (or remove placeholders)
- [ ] Add real CVR number in footer
- [ ] Verify contact email (info@nordicleads.dk)
- [ ] Verify pricing (2.500, 4.500, Custom)

### Legal
- [ ] Privacy Policy created
- [ ] Terms of Service created
- [ ] Cookie Policy created
- [ ] GDPR Information created
- [ ] All link to actual pages (not #)

---

## 10. Security 🔐

### HTTPS
- [ ] SSL certificate installed
- [ ] Site loads via HTTPS
- [ ] No mixed content warnings
- [ ] HTTP redirects to HTTPS

### Headers
- [ ] Content-Security-Policy set
- [ ] X-Frame-Options set
- [ ] X-Content-Type-Options set
- [ ] Referrer-Policy set
- [ ] Permissions-Policy set

### Forms
- [ ] CSRF protection (nonce)
- [ ] Input sanitization
- [ ] SQL injection prevention (prepared statements)
- [ ] XSS protection (escaping output)
- [ ] Email validation server-side
- [ ] Rate limiting (prevent spam)

### WordPress
- [ ] WordPress core updated
- [ ] Themes updated
- [ ] Plugins updated
- [ ] Admin username not "admin"
- [ ] Strong admin password
- [ ] Two-factor authentication enabled (recommended)
- [ ] File permissions correct (644/755)

### Backups
- [ ] Automated backups configured
- [ ] Backup tested (can restore)
- [ ] Off-site backup storage

---

## 11. Email & Forms 📧

### Form Submission
- [ ] Submit test form
- [ ] Email received to correct address
- [ ] Email formatting correct
- [ ] Reply-To header correct
- [ ] From header correct (not user's email)

### Email Content
- [ ] All form fields included in email
- [ ] Timestamp included
- [ ] No HTML injection possible

### Spam Prevention
- [ ] Consider adding reCAPTCHA (optional)
- [ ] Rate limiting implemented
- [ ] Honeypot field (optional)

### SMTP
- [ ] Consider WP Mail SMTP plugin for reliability
- [ ] Test email deliverability
- [ ] Check spam folder

---

## 12. Final Checks ✅

### Pre-Launch
- [ ] All placeholder content replaced
- [ ] All links work (no 404s)
- [ ] All images present (no broken images)
- [ ] Analytics IDs configured
- [ ] Contact email verified
- [ ] Domain points to server
- [ ] DNS propagated
- [ ] SSL certificate active

### Post-Launch
- [ ] Submit sitemap to Google Search Console
- [ ] Submit site to Google (via GSC)
- [ ] Monitor first 24h for errors
- [ ] Check analytics tracking
- [ ] Test form submission from production
- [ ] Check email delivery from production

### Monitoring
- [ ] Set up uptime monitoring (UptimeRobot)
- [ ] Set up error logging
- [ ] Set up analytics alerts
- [ ] Set up Google Search Console alerts

---

## Tools Summary

### Performance
- Google PageSpeed Insights
- GTmetrix
- WebPageTest
- Lighthouse (Chrome DevTools)

### SEO
- Google Search Console
- Screaming Frog SEO Spider
- Google Rich Results Test
- Schema.org Validator

### Accessibility
- WAVE
- axe DevTools
- Lighthouse Accessibility
- Screen readers (NVDA, JAWS, VoiceOver)

### Security
- SecurityHeaders.com
- SSL Labs SSL Test
- Sucuri SiteCheck
- Wordfence (WordPress)

### Analytics
- GA4 DebugView
- Meta Pixel Helper
- Google Tag Manager Preview
- LinkedIn Tag Checker

### Cross-Browser
- BrowserStack
- LambdaTest
- Real devices

---

## Sign-Off

**Tested by:** _____________  
**Date:** _____________  
**Ready for launch:** [ ] Yes [ ] No

**Notes:**
```
(Add any issues found or items requiring follow-up)
```

---

**Last Updated:** 2025-11-24  
**Version:** 1.0.0

