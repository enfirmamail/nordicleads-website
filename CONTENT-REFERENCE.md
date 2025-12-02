# NordicLeads - Komplet Indholdsreference

## Oversigt

Dette dokument er en **komplet reference guide** til alt indhold, struktur, funktionalitet og implementeringsdetaljer på NordicLeads hjemmesiden. Hver sektion, hvert element, hver CSS-klasse, hver JavaScript-funktion og hver WordPress-hook er dokumenteret i dybden.

**Målgruppe:** Senior udviklere, der skal forstå hver eneste detalje i implementeringen.

**Opdateret:** 2025-11-24  
**Version:** 1.0.0

---

## Indholdsfortegnelse

1. [HTML Struktur & Semantik](#html-struktur--semantik)
2. [Header Komponent](#header-komponent)
3. [Hero Sektion](#hero-sektion)
4. [Trusted By Sektion](#trusted-by-sektion)
5. [Features Sektion](#features-sektion)
6. [How It Works Sektion](#how-it-works-sektion)
7. [GDPR Trust Sektion](#gdpr-trust-sektion)
8. [Contact Form Sektion](#contact-form-sektion)
9. [FAQ Sektion](#faq-sektion)
10. [Footer Komponent](#footer-komponent)
11. [CSS Arkitektur](#css-arkitektur)
12. [JavaScript Arkitektur](#javascript-arkitektur)
13. [WordPress Integration](#wordpress-integration)
14. [Assets & Ressourcer](#assets--ressourcer)
15. [Analytics & Tracking](#analytics--tracking)
16. [Accessibility Features](#accessibility-features)
17. [Performance Optimizations](#performance-optimizations)

---

## HTML Struktur & Semantik

### Dokument Type & Meta
- **DOCTYPE:** `<!DOCTYPE html>` - HTML5 standard
- **Language:** `<?php language_attributes(); ?>` - Dynamisk sprog (da-DK)
- **Charset:** `<?php bloginfo('charset'); ?>` - UTF-8
- **Viewport:** `width=device-width, initial-scale=1.0` - Responsive design

### Body Struktur
```html
<body <?php body_class(); ?>>
```
- `body_class()` tilføjer WordPress body classes
- `nordicleads-frontpage` class tilføjes via filter (functions.php linje 258)

### Main Content Wrapper
```html
<main id="main-content" role="main">
```
- **ID:** `main-content` - Brugt til skip-link navigation
- **Role:** `main` - ARIA landmark for accessibility
- **Betydning:** Primært indhold på siden

---

## Header Komponent

### Fil Placering
- **Template:** `header.php`
- **WordPress Hook:** `get_header()` kaldes i `front-page.php` linje 10

### HTML Struktur

#### Skip Link
```html
<a href="#main-content" class="nl-skip-link">Spring til indhold</a>
```
- **Formål:** Accessibility - tillader keyboard navigation til hovedindhold
- **CSS:** Positioneret `absolute` med `top: -100px`, vises ved `:focus` med `top: 16px`
- **Z-index:** 9999 (højeste prioritet)

#### Header Element
```html
<header id="site-header" role="banner">
```
- **ID:** `site-header` - Brugt i JavaScript til scroll detection
- **Role:** `banner` - ARIA landmark
- **Position:** `fixed` - Sticky header
- **Z-index:** 1000
- **Højde:** 72px

#### Header Inner Container
```html
<div class="nl-header-inner">
```
- **Max-width:** 1280px
- **Padding:** 0 2rem (responsive)
- **Layout:** Flexbox med `justify-content: space-between`

#### Logo Sektion
```html
<a href="<?php echo esc_url(home_url('/')); ?>" class="nl-logo" aria-label="NordicLeads">
```

**SVG Logo Icon:**
- **ViewBox:** 0 0 64 64
- **Gradient ID:** `headerBg`
- **Gradient:** Linear fra `#0066cc` til `#003366`
- **Border Radius:** 14px
- **Text:** "NL" (Inter font, 26px, bold, white, centered)
- **Størrelse:** 40x40px

**Logo Text:**
- **Class:** `nl-logo-text`
- **Font:** Inter, 700 weight, 18px
- **Farve:** Dynamisk (hvid på hero, sort på scroll)

#### Desktop Navigation
```html
<nav class="nl-nav-desktop" role="navigation">
```
- **Display:** `none` på mobile, `flex` fra 1024px+
- **Gap:** 2.5rem mellem links
- **Links:**
  1. `#hvordan` - "Sådan virker det"
  2. `#faq` - "FAQ"
  3. `#kontakt` - "Kontakt"
- **Styling:** 15px font, 500 weight, gray-600 farve, hover til gray-900

#### Header CTA Button
```html
<a href="#kontakt" class="nl-btn-header">Få leads nu</a>
```
- **Styling:** Primary blue background, white text, 10px 20px padding
- **Hover:** Darker blue background
- **Font:** 14px, 600 weight

#### Mobile Menu Toggle
```html
<button id="mobile-menu-toggle" class="nl-mobile-toggle" aria-label="Menu" aria-expanded="false">
```
- **ID:** `mobile-menu-toggle` - Brugt i JavaScript
- **ARIA:** `aria-label` og `aria-expanded` for accessibility
- **Icon:** Hamburger SVG (3 linjer, 24x24px)
- **Display:** Vis kun under 1024px

#### Mobile Menu
```html
<div id="mobile-menu" class="nl-mobile-menu">
```
- **Position:** Absolute under header (top: 72px)
- **Display:** `none` som standard, `block` når `.active`
- **Styling:** White background, shadow, border-bottom
- **Links:** Samme som desktop nav
- **JavaScript:** Toggle via `mobile-menu-toggle` click

### Header JavaScript Funktionalitet

**Scroll Detection (header.php linje 86-92):**
```javascript
window.addEventListener('scroll', function() {
    if (window.scrollY > 10) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
```
- **Trigger:** Ved scroll > 10px
- **Effekt:** Tilføjer `.scrolled` class
- **CSS Response:** Header bliver hvid med shadow og border

**Mobile Menu Toggle (header.php linje 95-100):**
```javascript
mobileToggle.addEventListener('click', function() {
    mobileMenu.classList.toggle('active');
    this.setAttribute('aria-expanded', mobileMenu.classList.contains('active'));
});
```
- **Toggle:** `.active` class på mobile menu
- **ARIA:** Opdaterer `aria-expanded` for screen readers

### Header CSS Variabler
- `--nl-primary`: #003366
- `--nl-dark`: #001f3f
- `--nl-white`: #ffffff
- `--nl-gray-200`: #e2e8f0
- `--nl-gray-600`: #475569
- `--nl-gray-900`: #0f172a

---

## Hero Sektion

### Fil Placering
- **Template:** `front-page.php` linje 16-83
- **Section ID:** `hero`
- **Class:** `nl-hero`

### HTML Struktur

#### Section Wrapper
```html
<section id="hero" class="nl-hero">
```
- **ID:** `hero` - Anchor link destination
- **Min-height:** 80vh
- **Background:** `var(--nl-dark)` (#001f3f)
- **Padding:** 6rem 2rem 3rem (responsive til 5rem 4rem på desktop)
- **Position:** Relative (for pseudo-elements)

#### Aurora Background Effect
**CSS Pseudo-elements (style.css linje 273-319):**

**::before:**
- **Position:** Absolute, -50% på alle sider (større end container)
- **Background:** 3 radial gradients med blå nuancer
- **Animation:** `aurora` 18s ease-in-out infinite alternate
- **Z-index:** Under content

**::after:**
- **Position:** Absolute, -50% på alle sider
- **Background:** 2 radial gradients (grøn og blå)
- **Animation:** `aurora` 22s ease-in-out infinite alternate-reverse
- **Z-index:** Under content

**Animation Keyframes:**
- **0%:** translate(0,0) scale(1), opacity 0.9
- **33%:** translate(2%,-2%) scale(1.02), opacity 1
- **66%:** translate(-2%,1%) scale(0.99), opacity 0.85
- **100%:** translate(1%,2%) scale(1.01), opacity 0.95

**Formål:** Skaber subtil, levende baggrundseffekt (aurora/northern lights inspiration)

#### Hero Inner Container
```html
<div class="nl-hero-inner">
```
- **Max-width:** 1280px
- **Layout:** Grid, 1 kolonne mobile, 55% 45% desktop
- **Gap:** 3rem mobile, 4rem desktop
- **Z-index:** 1 (over aurora effects)

#### Hero Content (Venstre Kolonne - 55%)
```html
<div class="nl-hero-content">
```

**H1 Title:**
```html
<h1 class="nl-hero-title">
    Stop med at lede.<br>
    <span>Start med at sælge.</span>
</h1>
```
- **Font-size:** `clamp(2rem, 5vw, 3.5rem)` - Responsive typography
- **Font-weight:** 700
- **Color:** White
- **Line-height:** 1.15
- **Span:** Gray-400 farve for "Start med at sælge"
- **Margin-bottom:** 1.5rem

**Subtitle:**
```html
<p class="nl-hero-subtitle">
    Vi finder titusindvis af verificerede virksomhedskontakter fra din branche og niche. 
    Direkte e-mails, telefonnumre og adresser – skræddersyet til dine behov, klar til at skaffe flere kunder.
</p>
```
- **Font-size:** 1.125rem (18px)
- **Color:** Gray-400
- **Line-height:** 1.7
- **Max-width:** 540px
- **Margin-bottom:** 2rem

**Emotional Line:**
```html
<p class="nl-hero-emotional">Sig velkommen til dine nye kunder.</p>
```
- **Formål:** Emotional connection, call-to-action undertone
- **Styling:** Samme som subtitle

**Check Bullets:**
```html
<ul class="nl-hero-checks">
```
- **Layout:** Grid, 2 kolonner
- **Gap:** 0.75rem vertical, 1.5rem horizontal
- **List-style:** None

**Bullet Items (4 stk):**
1. "Verificerede e-mails & telefonnumre"
2. "Skræddersyet til din branche"
3. "100% GDPR-sikker"
4. "Klar til eksport (CSV/Excel)"

**Bullet SVG:**
- **ViewBox:** 0 0 20 20
- **Path:** Checkmark (evenodd fill rule)
- **Color:** `var(--nl-green)` (#10b981)
- **Size:** 20x20px
- **Flex-shrink:** 0

**CTA Buttons:**
```html
<div class="nl-hero-ctas">
    <a href="#kontakt" class="nl-btn-primary">Bestil leads</a>
    <a href="#hvordan" class="nl-btn-secondary">Sådan virker det</a>
</div>
```

**Primary Button:**
- **Background:** White
- **Color:** Primary blue
- **Padding:** 16px 32px
- **Font:** 1rem, 700 weight
- **Border-radius:** 10px
- **Hover:** Gray-100 background, translateY(-2px)

**Secondary Button:**
- **Background:** Transparent
- **Color:** White
- **Border:** 1px solid gray-400
- **Hover:** White border, white text

**Trust Line:**
```html
<p class="nl-hero-trust">
    GDPR Art. 6(1)(f) · Legitim interesse · EU-hosting · Brugt af 80+ virksomheder
</p>
```
- **Font-size:** 0.8125rem (13px)
- **Color:** Gray-400
- **Letter-spacing:** 0.02em
- **Formål:** Trust signals, compliance badges

**Outreach Link:**
```html
<p class="nl-hero-outreach">
    <a href="/outreach">Har du også brug for outreach? <span>→</span></a>
</p>
```
- **Font-size:** 0.875rem
- **Color:** Gray-300
- **Hover:** White, arrow translateX(4px)
- **Formål:** Cross-sell til outreach service

#### Hero Image (Højre Kolonne - 45%)
```html
<div class="nl-hero-image">
    <img src="..." alt="..." loading="eager">
</div>
```

**Image Properties:**
- **Source:** `get_stylesheet_directory_uri() . '/assets/wmremove-transformed.jpeg'`
- **Alt text:** "Professionelt B2B-team arbejder med leads og data"
- **Loading:** `eager` - Loads immediately (LCP optimization)
- **Width:** 130% (extends beyond container for visual impact)
- **Border-radius:** 16px
- **Box-shadow:** 0 25px 60px rgba(0,0,0,0.4) - Dramatic depth

**Order:** 1 på mobile, 2 på desktop (content først på mobile)

### Hero CSS Classes
- `.nl-hero` - Section wrapper
- `.nl-hero-inner` - Content container
- `.nl-hero-content` - Left column
- `.nl-hero-title` - H1 heading
- `.nl-hero-subtitle` - Subtitle paragraph
- `.nl-hero-emotional` - Emotional line
- `.nl-hero-checks` - Bullet list
- `.nl-hero-ctas` - CTA buttons container
- `.nl-btn-primary` - Primary button
- `.nl-btn-secondary` - Secondary button
- `.nl-hero-trust` - Trust line
- `.nl-hero-outreach` - Outreach link
- `.nl-hero-image` - Image container

---

## Trusted By Sektion

### Fil Placering
- **Template:** `front-page.php` linje 86-359
- **Section Class:** `nl-trusted`

### HTML Struktur

#### Section Wrapper
```html
<section class="nl-trusted">
```
- **Background:** #f8fafc (light gray)
- **Padding:** 2rem 2rem 2.5rem (responsive)
- **Box-shadow:** 0 8px 30px rgba(0,0,0,0.08)
- **Position:** Relative, z-index 10

#### Headline
```html
<p class="nl-trusted-headline">
    Her er nogle af de virksomheder, vi allerede hjælper med at skaffe flere kunder
</p>
```
- **Text-align:** Center
- **Font-size:** 1rem mobile, 1.125rem desktop
- **Font-weight:** 600
- **Max-width:** 700px (centered)
- **Margin-bottom:** 2.5rem mobile, 3rem desktop

#### Slider Container
```html
<div class="nl-trusted-slider">
```
- **Overflow:** Hidden
- **Mask-image:** Linear gradient (transparent edges for fade effect)
- **Display:** Flex

#### Track Container (Duplikeret for Infinite Loop)
```html
<div class="nl-trusted-track">
```
- **Display:** Flex
- **Gap:** 1.5rem
- **Padding-right:** 1.5rem
- **Animation:** `scroll-logos` 40s linear infinite
- **Flex-shrink:** 0

**Animation Keyframes:**
```css
@keyframes scroll-logos {
    0% { transform: translateX(0); }
    100% { transform: translateX(-100%); }
}
```
- **Duration:** 40s (20s på mobile)
- **Timing:** Linear (constant speed)
- **Hover:** Animation paused

**Duplicate Track:**
- **Class:** `nl-trusted-track` (samme)
- **ARIA:** `aria-hidden="true"` - Hidden for screen readers
- **Tabindex:** `-1` på alle links
- **Formål:** Seamless infinite scroll

#### Logo Items (12 unikke, duplikeret = 24 total)

**Struktur:**
```html
<a href="..." class="nl-logo-item">
    <div class="nl-logo-content">
        <img src="..." alt="...">
        <span class="nl-logo-name">Company Name</span>
    </div>
    <span class="nl-logo-cta">Læs mere om denne case →</span>
</a>
```

**Logo Item Styling:**
- **Display:** Flex column
- **Gap:** 0.75rem
- **Padding:** 1.25rem 1.5rem
- **Background:** White
- **Border-radius:** 12px
- **Box-shadow:** 0 2px 12px rgba(0,0,0,0.06)
- **Min-width:** 220px (200px mobile)
- **Flex-shrink:** 0
- **Hover:** Shadow increase, translateY(-2px)

**Logo Content:**
- **Display:** Flex row
- **Gap:** 0.875rem
- **Align-items:** Center

**Logo Image/SVG:**
- **Size:** 44x44px
- **Border-radius:** 10px
- **Object-fit:** Contain

**Logo Name:**
- **Font:** Inter, 500 weight, 0.9375rem
- **Color:** #334155
- **White-space:** Nowrap

**CTA Text:**
- **Font:** Inter, 500 weight, 0.75rem
- **Color:** #1e293b
- **Opacity:** 0 (hidden by default)
- **Transform:** translateY(-4px)
- **Hover:** Opacity 1, translateY(0)

**Virksomheder i Slider:**

1. **Dmify.net** (4x - placeholder for repetition)
   - **Image:** `/assets/logos/dmify.png`
   - **Link:** `https://dmify.net` (external, noopener noreferrer)

2. **DentalDesk.dk** (4x)
   - **SVG:** Inline SVG med tand/teeth icon
   - **Colors:** White background, blue icon (#0ea5e9)
   - **Link:** `https://dentaldesk.dk` (external)

3. **Auto Specialisterne ApS**
   - **SVG:** Inline SVG med "AS" text
   - **Colors:** Primary blue background (#003366)
   - **Link:** `#cases` (internal anchor)

4. **Nordisk Rengøring A/S**
   - **SVG:** Inline SVG med "NR" text
   - **Colors:** Green background (#059669)
   - **Link:** `#cases` (internal anchor)

5. **FinanceHub DK**
   - **SVG:** Inline SVG med bar chart icon
   - **Colors:** Blue background (#1e40af)
   - **Link:** `#cases` (internal anchor)

6. **TechVenture ApS**
   - **SVG:** Inline SVG med "TV" text
   - **Colors:** Purple background (#7c3aed)
   - **Link:** `#cases` (internal anchor)

**Total Items:** 12 unikke × 2 tracks = 24 items scrolling

### Trusted By CSS Classes
- `.nl-trusted` - Section wrapper
- `.nl-trusted-inner` - Container
- `.nl-trusted-headline` - Headline text
- `.nl-trusted-slider` - Slider container
- `.nl-trusted-track` - Animation track
- `.nl-logo-item` - Individual logo card
- `.nl-logo-content` - Logo + name container
- `.nl-logo-svg` - SVG logo styling
- `.nl-logo-name` - Company name
- `.nl-logo-cta` - Hover CTA text

---

## Features Sektion

### Fil Placering
- **Template:** `front-page.php` linje 362-481
- **Section Class:** `nl-features`

### HTML Struktur

#### Section Wrapper
```html
<section class="nl-features">
```
- **Background:** White
- **Padding:** 5rem 2rem
- **Border-bottom:** 1px solid gray-200

#### Features Inner Container
```html
<div class="nl-features-inner">
```
- **Max-width:** 1400px
- **Layout:** Grid
  - Mobile: 1 kolonne
  - Tablet (768px+): 2 kolonner
  - Desktop (1024px+): 4 kolonner
- **Gap:** 0 (borders bruges i stedet)

#### Feature Items (8 total)

**Struktur:**
```html
<div class="nl-feature" data-index="0">
    <div class="nl-feature-badge">Vores styrker</div>
    <div class="nl-feature-icon">...</div>
    <div class="nl-feature-title">
        <div class="nl-feature-indicator"></div>
        <span>Feature Title</span>
    </div>
    <p class="nl-feature-desc">Description text</p>
</div>
```

**Feature Badge (kun første feature):**
- **Position:** Absolute, top-right
- **Background:** Gradient (primary til accent)
- **Color:** White
- **Font:** 0.8125rem, 700 weight, uppercase
- **Padding:** 0.5rem 1rem
- **Border-radius:** 8px
- **Animation:** `pulse-badge` 3s infinite
- **Text:** "Vores styrker"

**Feature Icon:**
- **Size:** 48x48px
- **Color:** Gray-600 (primary på første feature)
- **Margin-bottom:** 1.5rem
- **SVG:** Inline SVG icons (stroke-based)

**Feature Indicator:**
- **Position:** Absolute, left side
- **Width:** 4px
- **Height:** 24px (32px on hover)
- **Background:** Gray-300 (primary on hover)
- **Border-radius:** 0 4px 4px 0
- **Transition:** All 0.2s ease

**Feature Title:**
- **Font-size:** 1.125rem
- **Font-weight:** 700
- **Color:** Text dark (primary på første feature)
- **Margin-bottom:** 0.75rem
- **Hover:** Span translateX(8px)

**Feature Description:**
- **Font-size:** 0.875rem
- **Color:** Gray-600
- **Line-height:** 1.6

**Feature 1 (Index 0) - Highlighted:**
- **Background:** Gradient (blue tint)
- **Box-shadow:** Multi-layer shadow med blue tint
- **Transform:** scale(1.02)
- **Z-index:** 2
- **Padding:** 2.75rem 2.5rem (større)
- **Left Border:** 6px gradient bar med glow
- **Icon:** Primary color, scale(1.1), drop-shadow

**Feature 2-8 (Index 1-7):**
- **Background:** White
- **Padding:** 2.5rem
- **Borders:** Conditional baseret på grid position

**Grid Borders:**
- **Desktop (4 cols):** Right og bottom borders, left på første og femte
- **Tablet (2 cols):** Right og bottom borders, left på første, tredje, femte, syvende
- **Mobile (1 col):** Left, right og bottom borders

**Hover Effects:**
- **Top Row (0-3):** Gradient overlay fra top
- **Bottom Row (4-7):** Gradient overlay fra bottom
- **All:** Indicator height increase, title translate

**Features Liste:**

1. **Tusindvis af kvalificerede leads** (Index 0 - Highlighted)
   - **Icon:** Users/people SVG
   - **Description:** "Vi finder titusindvis af e-mails, telefonnumre og adresser fra branchen og nichen der passer præcis til din virksomhed..."

2. **Verificerede kontakter af højeste kvalitet** (Index 1)
   - **Icon:** Checkmark circle SVG
   - **Description:** "Alle e-mails og telefonnumre er verificerede og aktive..."

3. **Levering på under 24 timer** (Index 2)
   - **Icon:** Clock SVG
   - **Description:** "Vores teams og programmer kører døgnet rundt..."

4. **100% GDPR-sikker via legitim interesse** (Index 3)
   - **Icon:** Shield check SVG
   - **Description:** "Alle leads er fra offentlige kilder som CVR og Google Maps..."

5. **Klar til eksport på sekunder** (Index 4)
   - **Icon:** Download SVG
   - **Description:** "Alle leads leveres i rene, strukturerede lister..."

6. **Skræddersyet til din branche** (Index 5)
   - **Icon:** Location/map pin SVG
   - **Description:** "Vi finder leads baseret på præcise søgekriterier..."

7. **DNC-screenet og opt-out-klar** (Index 6)
   - **Icon:** Lock SVG
   - **Description:** "Alle leads er screenet mod Do-Not-Contact-lister..."

8. **Brugt af 80+ danske virksomheder** (Index 7)
   - **Icon:** Layers/stack SVG
   - **Description:** "Over 80 danske virksomheder stoler allerede på os..."

### Features CSS Classes
- `.nl-features` - Section wrapper
- `.nl-features-inner` - Grid container
- `.nl-feature` - Individual feature card
- `.nl-feature-badge` - Badge (first feature only)
- `.nl-feature-icon` - Icon container
- `.nl-feature-title` - Title container
- `.nl-feature-indicator` - Left border indicator
- `.nl-feature-desc` - Description text

---

## How It Works Sektion

### Fil Placering
- **Template:** `front-page.php` linje 484-510
- **Section ID:** `hvordan`
- **Section Class:** `nl-section nl-section-light`

### HTML Struktur

#### Section Wrapper
```html
<section id="hvordan" class="nl-section nl-section-light">
```
- **ID:** `hvordan` - Anchor link destination
- **Background:** Gray-100 (#f8fafc)
- **Padding:** 5rem 2rem (6rem 2rem desktop)

#### Container
```html
<div class="nl-container">
```
- **Max-width:** 1280px
- **Margin:** 0 auto

#### Section Header
```html
<div class="nl-section-header">
    <h2>Sådan virker det</h2>
    <p>Tre enkle trin til nye kunder</p>
</div>
```
- **Text-align:** Center
- **Margin-bottom:** 3rem
- **H2:** clamp(1.75rem, 4vw, 2.5rem), margin-bottom 1rem
- **P:** 1.125rem, max-width 600px, centered

#### Steps Container
```html
<div class="nl-steps">
```
- **Layout:** Grid
  - Mobile: 1 kolonne
  - Desktop (768px+): 3 kolonner
- **Gap:** 2rem

#### Step Items (3 total)

**Struktur:**
```html
<div class="nl-step">
    <div class="nl-step-number">1</div>
    <h3>Step Title</h3>
    <p>Step description</p>
    <a href="#kontakt" class="nl-outreach-link">→ Link text</a>
</div>
```

**Step Number:**
- **Size:** 48x48px
- **Background:** Gradient (primary til dark)
- **Border-radius:** 12px
- **Display:** Flex center
- **Color:** White
- **Font:** 1.25rem, 700 weight
- **Margin-bottom:** 1.25rem

**Step Title (h3):**
- **Font-size:** 1.25rem
- **Margin-bottom:** 0.75rem

**Step Description (p):**
- **Font-size:** 0.9375rem
- **Line-height:** 1.6

**Step Card:**
- **Background:** White
- **Padding:** 2rem
- **Border-radius:** 16px
- **Border:** 1px solid gray-200
- **Hover:** Shadow increase, border transparent

**Outreach Link (kun Step 2):**
- **Display:** Inline-block
- **Margin-top:** 1rem
- **Font-size:** 0.875rem
- **Font-weight:** 600
- **Color:** Primary
- **Hover:** Accent color, translateX(4px)

**Steps Indhold:**

1. **Vi finder og verificerer leads**
   - **Description:** "Fra offentlige kilder som CVR-registret, Google Maps, firmahjemmesider og brancheregistre..."

2. **Ønsker du, at vi kontakter dem for dig?**
   - **Description:** "Vi kan sende professionelle, personaliserede e-mails på dansk..."
   - **Link:** `#kontakt` - "→ Læs mere om vores outreach-pakker"

3. **Sig velkommen til dine nye kunder**
   - **Description:** "Du modtager dine leads i CSV eller Excel-format..."

### How It Works CSS Classes
- `.nl-section` - General section styling
- `.nl-section-light` - Light background variant
- `.nl-container` - Content container
- `.nl-section-header` - Header container
- `.nl-steps` - Steps grid
- `.nl-step` - Individual step card
- `.nl-step-number` - Number badge
- `.nl-outreach-link` - Outreach link

---

## GDPR Trust Sektion

### Fil Placering
- **Template:** `front-page.php` linje 513-551
- **Section Class:** `nl-section nl-section-white`

### HTML Struktur

#### Section Wrapper
```html
<section class="nl-section nl-section-white">
```
- **Background:** White
- **Padding:** 5rem 2rem (6rem 2rem desktop)

#### Section Header
```html
<div class="nl-section-header">
    <h2>Hvorfor er vi GDPR-sikre?</h2>
    <p>Vi tager databeskyttelse alvorligt og følger alle retningslinjer</p>
</div>
```

#### Trust Grid
```html
<div class="nl-trust-grid">
```
- **Layout:** Grid
  - Mobile: 1 kolonne
  - Desktop (768px+): 2 kolonner
- **Gap:** 1.5rem

#### Trust Cards (4 total)

**Struktur:**
```html
<div class="nl-trust-card">
    <div class="nl-trust-icon">...</div>
    <h3>Card Title</h3>
    <p>Card description</p>
</div>
```

**Trust Icon:**
- **Size:** 44x44px
- **Background:** Primary blue
- **Border-radius:** 10px
- **Display:** Flex center
- **SVG:** 24x24px, white color
- **Margin-bottom:** 1rem

**Trust Card:**
- **Background:** Gray-100
- **Padding:** 2rem
- **Border-radius:** 12px
- **Border:** 1px solid gray-200

**Trust Card Title (h3):**
- **Font-size:** 1.125rem
- **Margin-bottom:** 0.5rem

**Trust Card Description (p):**
- **Font-size:** 0.875rem
- **Line-height:** 1.6

**Trust Cards Indhold:**

1. **Legitim interesse**
   - **Icon:** Checkmark circle SVG
   - **Description:** "Vi anvender GDPR Artikel 6(1)(f) til B2B-outreach med gensidig forretningsmæssig fordel..."

2. **Kun offentlige kilder**
   - **Icon:** Lock SVG
   - **Description:** "Alle data fra CVR-registret, Google Maps og offentlige firmahjemmesider..."

3. **DNC-screening**
   - **Icon:** Clipboard check SVG
   - **Description:** "Løbende screening mod Do-Not-Contact-lister og compliance-assessments..."

4. **EU-hosting & support**
   - **Icon:** Mail/envelope SVG
   - **Description:** "Når en ny ordre kommer ind, kreerer vi leadlisten og samler de potentielle kunder..."

### GDPR Trust CSS Classes
- `.nl-section-white` - White background variant
- `.nl-trust-grid` - Grid container
- `.nl-trust-card` - Individual card
- `.nl-trust-icon` - Icon container

---

## Contact Form Sektion

### Fil Placering
- **Template:** `front-page.php` linje 554-599
- **Section ID:** `kontakt`
- **Section Class:** `nl-section nl-section-dark`

### HTML Struktur

#### Section Wrapper
```html
<section id="kontakt" class="nl-section nl-section-dark">
```
- **ID:** `kontakt` - Anchor link destination
- **Background:** Gradient (gray-900 til #1e293b)
- **Padding:** 5rem 2rem (6rem 2rem desktop)

#### Contact Grid
```html
<div class="nl-contact-grid">
```
- **Layout:** Grid
  - Mobile: 1 kolonne
  - Desktop (1024px+): 2 kolonner (1fr 1fr)
- **Gap:** 3rem (4rem desktop)
- **Align-items:** Start

#### Contact Text (Venstre Kolonne)
```html
<div class="nl-contact-text">
```

**H2 Title:**
```html
<h2>Få et skræddersyet tilbud – inden for 24 timer</h2>
```
- **Font-size:** clamp(1.75rem, 4vw, 2.5rem)
- **Font-weight:** 700
- **Color:** White
- **Margin-bottom:** 1.5rem
- **Line-height:** 1.2

**Paragraphs (2 stk):**
- **Font-size:** 1rem
- **Line-height:** 1.7
- **Color:** rgba(255,255,255,0.9)
- **Margin-bottom:** 1.25rem

**Contact Email:**
```html
<p class="nl-contact-email">
    Eller kontakt os direkte:<br>
    <a href="mailto:info@nordicleads.dk">info@nordicleads.dk</a>
</p>
```
- **Margin-top:** 2.5rem
- **Padding-top:** 2rem
- **Border-top:** 1px solid rgba(255,255,255,0.2)
- **Font-size:** 0.9375rem
- **Link:** White, 600 weight, underline, hover opacity 0.8

#### Contact Form Wrapper (Højre Kolonne)
```html
<div class="nl-contact-form-wrapper">
```
- **Background:** White
- **Padding:** 2.5rem
- **Border-radius:** 16px
- **Box-shadow:** 0 10px 40px rgba(0,0,0,0.2)

#### Contact Form
```html
<form id="contact-form" class="nl-contact-form">
```

**Form ID:** `contact-form` - Brugt i JavaScript

**Form Rows (2 stk):**
```html
<div class="nl-form-row">
```
- **Layout:** Grid
  - Mobile: 1 kolonne
  - Desktop (640px+): 2 kolonner
- **Gap:** 1.5rem
- **Margin-bottom:** 1.5rem

**Form Groups (5 total):**

1. **Navn (Name)**
   ```html
   <div class="nl-form-group">
       <label for="name">Navn <span>*</span></label>
       <input type="text" id="name" name="name" required placeholder="Dit navn">
   </div>
   ```
   - **Type:** Text
   - **Required:** Yes
   - **Placeholder:** "Dit navn"

2. **Virksomhed (Company)**
   ```html
   <div class="nl-form-group">
       <label for="company">Virksomhed <span>*</span></label>
       <input type="text" id="company" name="company" required placeholder="Din virksomhed">
   </div>
   ```
   - **Type:** Text
   - **Required:** Yes
   - **Placeholder:** "Din virksomhed"

3. **E-mail**
   ```html
   <div class="nl-form-group">
       <label for="email">E-mail <span>*</span></label>
       <input type="email" id="email" name="email" required placeholder="din@email.dk">
   </div>
   ```
   - **Type:** Email
   - **Required:** Yes
   - **Placeholder:** "din@email.dk"
   - **Validation:** Email format

4. **Telefon (Phone)**
   ```html
   <div class="nl-form-group">
       <label for="phone">Telefon <span>*</span></label>
       <input type="tel" id="phone" name="phone" required placeholder="+45 XX XX XX XX">
   </div>
   ```
   - **Type:** Tel
   - **Required:** Yes
   - **Placeholder:** "+45 XX XX XX XX"
   - **Validation:** Phone format

5. **Besked (Message)**
   ```html
   <div class="nl-form-group">
       <label for="message">Besked (valgfri)</label>
       <textarea id="message" name="message" rows="5" placeholder="..."></textarea>
   </div>
   ```
   - **Type:** Textarea
   - **Required:** No
   - **Rows:** 5
   - **Placeholder:** "Fortæl os om din branche, niche..."

**Form Labels:**
- **Font-size:** 0.875rem
- **Font-weight:** 600
- **Color:** Gray-900
- **Margin-bottom:** 0.5rem
- **Required Span:** Red color (#ef4444)

**Form Inputs:**
- **Width:** 100%
- **Padding:** 12px 16px
- **Font-size:** 1rem
- **Font-family:** Inter
- **Border:** 1px solid gray-200
- **Border-radius:** 8px
- **Background:** Gray-100
- **Focus:** Border primary, background white

**Form Textarea:**
- **Resize:** None
- **Same styling as inputs**

**Submit Button:**
```html
<button type="submit" class="nl-form-submit">Få uforpligtende tilbud</button>
```
- **Width:** 100%
- **Padding:** 16px
- **Background:** Gradient (primary til dark)
- **Color:** White
- **Font:** 1rem, 600 weight
- **Border-radius:** 10px
- **Hover:** TranslateY(-2px), shadow increase

**Form Disclaimer:**
```html
<p class="nl-form-disclaimer">
    Ved at indsende accepterer du vores <a href="#">privatlivspolitik</a>. 
    Vi behandler dine data i henhold til GDPR.
</p>
```
- **Margin-top:** 1rem
- **Font-size:** 0.8125rem
- **Color:** Gray-400
- **Text-align:** Center
- **Link:** Primary color

### Form JavaScript Funktionalitet

**Initialization (app.js linje 302-314):**
```javascript
FormHandler.init();
```
- Finder form via `#contact-form`
- Attacher submit event listener
- Attacher blur/input listeners til required fields for validation

**Submit Handler (app.js linje 319-386):**
```javascript
handleSubmit: async function(e) {
    e.preventDefault();
    // Validation
    // AJAX submission
    // Success/error handling
}
```

**Validation (app.js linje 407-450):**
- **Empty check:** Required fields must have value
- **Email validation:** Regex `/^[^\s@]+@[^\s@]+\.[^\s@]+$/`
- **Phone validation:** Regex `/^[\d\s\+\-\(\)]+$/`
- **Error display:** Adds `.error` class, shows error message
- **ARIA:** Sets `aria-invalid="true"` on error

**AJAX Submission:**
- **Endpoint:** `window.nordicleadsData.ajaxurl` (WordPress admin-ajax.php)
- **Method:** POST
- **Content-Type:** application/x-www-form-urlencoded
- **Data:**
  - `action`: 'nordicleads_contact'
  - `nonce`: WordPress nonce
  - `name`, `company`, `email`, `phone`, `message`

**WordPress Handler (functions.php linje 193-251):**
```php
function twentytwentyfive_child_handle_contact_form() {
    check_ajax_referer('nordicleads_nonce', 'nonce');
    // Sanitize inputs
    // Validate email
    // Send email via wp_mail()
    // Log lead (optional hook)
    // Return JSON response
}
```

**Success Response:**
- Shows success message
- Hides form
- Tracks `generate_lead` event
- Scrolls to success message

**Error Response:**
- Shows alert with error message
- Re-enables submit button

### Contact Form CSS Classes
- `.nl-section-dark` - Dark background variant
- `.nl-contact-grid` - Grid container
- `.nl-contact-text` - Text column
- `.nl-contact-email` - Email contact section
- `.nl-contact-form-wrapper` - Form wrapper
- `.nl-contact-form` - Form element
- `.nl-form-row` - Row container
- `.nl-form-group` - Field group
- `.nl-form-submit` - Submit button
- `.nl-form-disclaimer` - Disclaimer text

---

## FAQ Sektion

### Fil Placering
- **Template:** `front-page.php` linje 602-681
- **Section ID:** `faq`
- **Section Class:** `nl-section nl-section-white`

### HTML Struktur

#### Section Wrapper
```html
<section id="faq" class="nl-section nl-section-white">
```
- **ID:** `faq` - Anchor link destination
- **Background:** White
- **Padding:** 5rem 2rem (6rem 2rem desktop)

#### Container Narrow
```html
<div class="nl-container nl-container-narrow">
```
- **Max-width:** 800px (smaller than standard 1280px)

#### Section Header
```html
<div class="nl-section-header">
    <h2>Ofte stillede spørgsmål</h2>
    <p>Få svar på dine spørgsmål om leads, GDPR, priser og levering</p>
</div>
```

#### FAQ Container
```html
<div class="nl-faq">
```
- **Display:** Flex column
- **Gap:** 1rem

#### FAQ Items (7 total)

**Struktur:**
```html
<div class="nl-faq-item">
    <button class="nl-faq-question">
        <span>Question text</span>
        <svg>...</svg>
    </button>
    <div class="nl-faq-answer">
        <p>Answer text</p>
    </div>
</div>
```

**FAQ Item:**
- **Background:** White
- **Border:** 1px solid gray-200
- **Border-radius:** 12px
- **Overflow:** Hidden
- **Active State:** `.active` class (added via JavaScript)

**FAQ Question Button:**
- **Width:** 100%
- **Display:** Flex, space-between
- **Padding:** 1.25rem 1.5rem
- **Background:** None
- **Border:** None
- **Cursor:** Pointer
- **Text-align:** Left

**Question Span:**
- **Font-size:** 1rem
- **Font-weight:** 600
- **Color:** Gray-900

**Question SVG (Arrow):**
- **Size:** 24x24px
- **Color:** Gray-400
- **Transform:** Rotate 180deg when active
- **Transition:** 0.3s ease

**FAQ Answer:**
- **Max-height:** 0 (hidden by default)
- **Overflow:** Hidden
- **Transition:** max-height 0.3s ease
- **Active State:** max-height 500px

**Answer Paragraph:**
- **Padding:** 0 1.5rem 1.5rem
- **Font-size:** 0.9375rem
- **Line-height:** 1.7

**FAQ Questions & Answers:**

1. **Hvor kommer jeres leads fra?**
   - **Answer:** "Alle leads er fra offentlige kilder som CVR-registret, Google Maps..."

2. **Hvordan sikrer I GDPR-compliance?**
   - **Answer:** "Vi bruger legitim interesse (GDPR Art. 6(1)(f)) baseret på gensidig forretningsmæssig fordel..."

3. **Hvor hurtigt får jeg mine leads?**
   - **Answer:** "Når ordren er bekræftet, kreerer vi din skræddersyede leadliste..."

4. **Hvad koster det?**
   - **Answer:** "Priserne afhænger af din branche, niche, antal leads og kvalitetsniveau..."

5. **Kan I også kontakte leads'ene for mig?**
   - **Answer:** "Ja, det er en valgfri service. Du kan købe kun lead-listen..."

6. **Hvor gode er jeres leads?**
   - **Answer:** "Alle leads bliver verificeret før levering. Vi tjekker at e-mails er aktive..."

7. **Har du et specifikt behov eller spørgsmål?**
   - **Answer:** "Vi laver skræddersyede løsninger til alle slags behov..."

### FAQ JavaScript Funktionalitet

**Inline Script (front-page.php linje 686-701):**
```javascript
document.querySelectorAll('.nl-faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const item = button.parentElement;
        const isOpen = item.classList.contains('active');
        
        // Close all
        document.querySelectorAll('.nl-faq-item').forEach(i => i.classList.remove('active'));
        
        // Open clicked if it was closed
        if (!isOpen) {
            item.classList.add('active');
        }
    });
});
```

**Behavior:**
- **Accordion:** Only one item open at a time
- **Toggle:** Click to open if closed, close if open
- **Close All:** When opening new item, close all others first

**Alternative Implementation (app.js linje 468-492):**
- Uses `.faq-item` class (not `.nl-faq-item`)
- Same accordion behavior
- Sets `aria-expanded` attribute

### FAQ CSS Classes
- `.nl-container-narrow` - Narrow container variant
- `.nl-faq` - FAQ container
- `.nl-faq-item` - Individual FAQ item
- `.nl-faq-item.active` - Active/open state
- `.nl-faq-question` - Question button
- `.nl-faq-answer` - Answer container

---

## Footer Komponent

### Fil Placering
- **Template:** `footer.php`
- **WordPress Hook:** `get_footer()` kaldes i `front-page.php` linje 704

### HTML Struktur

#### Footer Element
```html
<footer class="bg-gray-900 border-t border-gray-800" role="contentinfo">
```
- **Background:** Gray-900 (#0f172a)
- **Border-top:** 1px solid gray-800
- **Role:** `contentinfo` - ARIA landmark
- **Padding:** 4rem 2rem 2rem

#### Footer Container
```html
<div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
```
- **Max-width:** 1280px (7xl = 80rem)
- **Padding:** 6rem 1.5rem (responsive)

#### Footer Grid
```html
<div class="grid md:grid-cols-4 gap-12 mb-12">
```
- **Layout:** Grid
  - Mobile: 1 kolonne
  - Desktop (768px+): 4 kolonner
- **Gap:** 3rem (12 = 3rem)

#### Company Info (Kolonne 1-2, md:col-span-2)
```html
<div class="md:col-span-2">
```

**Logo Section:**
```html
<div class="flex items-center gap-3 mb-4">
    <svg class="w-10 h-10">...</svg>
    <span class="text-xl font-semibold text-white">NordicLeads</span>
</div>
```
- **Logo SVG:** Same as header (64x64, gradient, "NL" text)
- **Logo Size:** 40x40px (w-10 h-10)
- **Text:** 20px, semibold, white

**Description:**
```html
<p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-md">
    GDPR-sikker lead generation til danske virksomheder. 
    Vi finder og kontakter potentielle kunder via professionel B2B outreach.
</p>
```
- **Font-size:** 0.875rem (sm)
- **Color:** Gray-400
- **Line-height:** Relaxed
- **Max-width:** 28rem (md)

**Contact Info:**
```html
<div class="space-y-2">
    <p class="text-sm text-gray-400">
        <span class="font-semibold text-gray-300">Email:</span> 
        <a href="mailto:info@nordicleads.dk" class="text-blue-400 hover:text-blue-300">info@nordicleads.dk</a>
    </p>
    <p class="text-sm text-gray-400">
        <span class="font-semibold text-gray-300">CVR:</span> XX XX XX XX
    </p>
</div>
```
- **Email Link:** Blue-400, hover blue-300
- **CVR:** Placeholder "XX XX XX XX"

#### Quick Links (Kolonne 3)
```html
<div>
    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Navigation</h3>
    <ul class="space-y-3">
        <li><a href="#hvordan-virker-det">Sådan virker det</a></li>
        <li><a href="#resultater">Resultater</a></li>
        <li><a href="#priser">Priser</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>
</div>
```
- **Heading:** 0.875rem, semibold, white, uppercase, tracking-wide
- **Links:** 0.875rem, gray-400, hover white
- **Spacing:** 0.75rem vertical (space-y-3)

**Note:** Links bruger forskellige anchors end faktiske sections:
- `#hvordan-virker-det` (ikke `#hvordan`)
- `#resultater` (ikke eksisterende)
- `#priser` (ikke eksisterende)

#### Legal Links (Kolonne 4)
```html
<div>
    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Juridisk</h3>
    <ul class="space-y-3">
        <li><a href="#privacy">Privatlivspolitik</a></li>
        <li><a href="#terms">Handelsbetingelser</a></li>
        <li><a href="#gdpr">GDPR Information</a></li>
        <li><a href="#cookies">Cookie Politik</a></li>
    </ul>
</div>
```
- **Same styling as Quick Links**
- **All links:** Placeholder anchors (#privacy, #terms, etc.)

#### Footer Bottom
```html
<div class="pt-8 border-t border-gray-800">
    <div class="flex flex-col md:flex-row items-center justify-between gap-4">
        <p class="text-sm text-gray-400">
            &copy; <?php echo date('Y'); ?> NordicLeads. Alle rettigheder forbeholdes.
        </p>
        <p class="text-xs text-gray-500">
            100% GDPR-compliant | EU-hosted | Made in Denmark 🇩🇰
        </p>
    </div>
</div>
```
- **Border-top:** 1px solid gray-800
- **Padding-top:** 2rem
- **Layout:** Flex column mobile, row desktop
- **Copyright:** Dynamic year via PHP `date('Y')`
- **Trust Line:** 0.75rem (xs), gray-500

### Sticky CTA Button (Footer.php linje 74-79)
```html
<a href="#kontakt" class="fixed bottom-6 right-6 z-40 ... lg:hidden">
```
- **Position:** Fixed, bottom-right
- **Z-index:** 40
- **Display:** Hidden on desktop (lg:hidden)
- **Styling:** Gradient background, white text, rounded-full
- **Icon:** Phone SVG
- **Text:** "Book opkald"
- **Hover:** Scale 1.05, shadow increase

### Cookie Consent Banner (Footer.php linje 82-105)
```html
<div id="cookie-consent" class="fixed bottom-0 left-0 right-0 z-50 ..." style="display: none;">
```

**Banner Container:**
- **Position:** Fixed, bottom
- **Z-index:** 50 (highest)
- **Background:** White
- **Border-top:** 1px solid gray-200
- **Shadow:** 2xl
- **Transform:** translateY(100%) (hidden by default)
- **Transition:** 0.3s ease
- **Display:** None initially

**Banner Content:**
```html
<div class="max-w-7xl mx-auto px-6 py-6">
    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
```

**Banner Text:**
```html
<div class="flex-1">
    <h3 id="cookie-consent-title" class="text-base font-semibold text-gray-900 mb-2">
        Vi bruger cookies
    </h3>
    <p id="cookie-consent-desc" class="text-sm text-gray-600 leading-relaxed">
        Vi bruger cookies til at forbedre din oplevelse, analysere trafik og tilpasse indhold. 
        Ved at klikke "Accepter alle" samtykker du til vores brug af cookies. 
        <a href="#privacy" class="text-blue-900 hover:underline font-medium">Læs mere</a>
    </p>
</div>
```
- **ARIA:** `aria-labelledby` og `aria-describedby` for accessibility

**Banner Buttons:**
```html
<div class="flex items-center gap-3">
    <button id="cookie-reject" class="...">Kun nødvendige</button>
    <button id="cookie-accept" class="...">Accepter alle</button>
</div>
```

**Reject Button:**
- **Background:** Gray-100
- **Color:** Gray-700
- **Hover:** Gray-200

**Accept Button:**
- **Background:** Gradient (blue-900 til blue-700)
- **Color:** White
- **Hover:** Shadow increase

**JavaScript Control (app.js):**
- **Show:** After 2 seconds delay
- **Hide:** On accept/reject click
- **Save:** Consent preference to localStorage (365 days)
- **Update:** Google Consent Mode v2

### Footer CSS Classes
- `.bg-gray-900` - Dark background (Tailwind)
- `.border-t` - Top border (Tailwind)
- `.max-w-7xl` - Max width container (Tailwind)
- `.grid` - Grid layout (Tailwind)
- `.md:grid-cols-4` - 4 columns on medium+ (Tailwind)
- `.space-y-3` - Vertical spacing (Tailwind)

---

## CSS Arkitektur

### CSS Variabler (style.css linje 17-31)
```css
:root {
    --nl-dark: #001f3f;
    --nl-dark-2: #002244;
    --nl-primary: #003366;
    --nl-accent: #0066cc;
    --nl-white: #ffffff;
    --nl-green: #10b981;
    --nl-gray-100: #f8fafc;
    --nl-gray-200: #e2e8f0;
    --nl-gray-400: #94a3b8;
    --nl-gray-600: #475569;
    --nl-gray-900: #0f172a;
    --nl-font: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
}
```

### Base Reset (style.css linje 36-77)
- **Universal Reset:** `* { margin: 0; padding: 0; box-sizing: border-box; }`
- **HTML:** Smooth scroll, font smoothing
- **Body:** Inter font, 16px base, 1.6 line-height
- **Headings:** 700 weight, 1.2 line-height
- **Links:** Primary color, hover accent
- **Images:** Max-width 100%, block display

### Typography Scale
- **xs:** 12px (0.75rem)
- **sm:** 14px (0.875rem)
- **base:** 16px (1rem)
- **lg:** 18px (1.125rem)
- **xl:** 20px (1.25rem)
- **2xl:** 24px (1.5rem)
- **3xl:** 30px (1.875rem)
- **4xl:** 36px (2.25rem)
- **5xl:** 48px (3rem)

### Spacing Scale
- **xs:** 4px (0.25rem)
- **sm:** 8px (0.5rem)
- **md:** 16px (1rem)
- **lg:** 24px (1.5rem)
- **xl:** 32px (2rem)
- **2xl:** 48px (3rem)
- **3xl:** 64px (4rem)

### Breakpoints
- **Mobile:** < 640px
- **Tablet:** 640px - 1023px
- **Desktop:** 1024px+
- **Large Desktop:** 1280px+

### CSS File Structure
1. **CSS Variables** (linje 17-31)
2. **Base Reset & Typography** (linje 36-77)
3. **Skip Link** (linje 82-96)
4. **Header** (linje 101-258)
5. **Hero Section** (linje 262-519)
6. **Trusted By Section** (linje 523-665)
7. **Features Section** (linje 669-949)
8. **General Sections** (linje 954-1009)
9. **Steps/How It Works** (linje 1013-1076)
10. **Trust Grid** (linje 1080-1125)
11. **Pricing** (linje 1129-1244)
12. **FAQ** (linje 1248-1305)
13. **Contact Form** (linje 1309-1463)
14. **Footer** (linje 1467-1471)
15. **Utility Overrides** (linje 1476-1484)
16. **Accessibility** (linje 1489-1494)
17. **Print Styles** (linje 1499-1508)

### Tailwind CSS Integration
- **File:** `/assets/tailwind.min.css`
- **Version:** 3.4.1
- **Usage:** Footer uses Tailwind utility classes
- **Enqueued:** Via `functions.php` linje 51-56

---

## JavaScript Arkitektur

### Fil Placering
- **File:** `app.js`
- **Enqueued:** Via `functions.php` linje 75-81
- **Defer:** Yes (WordPress default)

### JavaScript Moduler

#### 1. Configuration (linje 13-23)
```javascript
const CFG = {
    GA_MEASUREMENT_ID: "G-XXXXXXXXXX",
    GTM_ID: "GTM-XXXXXXX",
    META_PIXEL_ID: "000000000000000",
    LINKEDIN_PID: "0000000",
    USE_GTM: true,
    CONSENT_DEFAULT: "granted",
    FORM_ENDPOINT: "",
    COOKIE_CONSENT_KEY: "nordicleads_cookie_consent",
    COOKIE_EXPIRY_DAYS: 365
};
```

#### 2. ConsentManager (linje 28-154)
**Purpose:** GDPR Consent Mode v2 implementation

**Methods:**
- `init()` - Initialize default consent state
- `updateConsent(accepted)` - Update consent after user choice
- `showBanner()` - Display cookie banner
- `hideBanner()` - Hide cookie banner
- `saveConsent(value)` - Save to localStorage
- `getSavedConsent()` - Retrieve from localStorage

**Consent States:**
- `granted` - User accepted
- `denied` - User rejected
- Default: Based on `CONSENT_DEFAULT` config

**Storage:**
- **Key:** `nordicleads_cookie_consent`
- **Format:** JSON `{ value: 'accepted'|'rejected', expiry: timestamp }`
- **Expiry:** 365 days from save date

#### 3. Analytics (linje 159-296)
**Purpose:** Multi-platform analytics integration

**Platforms:**
1. **Google Tag Manager** (via GTM_ID)
2. **Google Analytics 4** (via GA_MEASUREMENT_ID)
3. **Meta Pixel** (via META_PIXEL_ID)
4. **LinkedIn Insight Tag** (via LINKEDIN_PID)

**Methods:**
- `loadScripts()` - Load all analytics scripts
- `loadGTM()` - Load Google Tag Manager
- `loadGA4()` - Load Google Analytics 4 directly
- `loadMetaPixel()` - Load Facebook Pixel
- `loadLinkedInInsight()` - Load LinkedIn Insight Tag
- `trackEvent(eventName, params)` - Track custom event

**Event Tracking:**
- `page_view` - On page load
- `scroll` - At 25%, 50%, 75%, 100% scroll depth
- `cta_click` - On CTA button click
- `request_quote` - On pricing link click
- `phone_click` - On tel:/mailto: link click
- `generate_lead` - On form submission success

#### 4. FormHandler (linje 301-463)
**Purpose:** Contact form validation and submission

**Methods:**
- `init()` - Initialize form listeners
- `handleSubmit(e)` - Handle form submission
- `validateForm(form)` - Validate all fields
- `validateField(field)` - Validate single field
- `clearError(field)` - Clear field error

**Validation Rules:**
- **Required:** All fields except message
- **Email:** Regex `/^[^\s@]+@[^\s@]+\.[^\s@]+$/`
- **Phone:** Regex `/^[\d\s\+\-\(\)]+$/`

**AJAX Submission:**
- **Endpoint:** WordPress `admin-ajax.php`
- **Action:** `nordicleads_contact`
- **Nonce:** WordPress nonce for security
- **Response:** JSON success/error

#### 5. FAQ (linje 468-492)
**Purpose:** FAQ accordion functionality

**Methods:**
- `init()` - Initialize FAQ accordion

**Behavior:**
- Only one item open at a time
- Toggle on click
- Sets `aria-expanded` attribute

#### 6. MobileMenu (linje 497-533)
**Purpose:** Mobile navigation menu

**Methods:**
- `init()` - Initialize mobile menu

**Functionality:**
- Toggle menu on button click
- Close on link click
- Close on outside click
- Update ARIA attributes

#### 7. SmoothScroll (linje 538-568)
**Purpose:** Smooth anchor link scrolling

**Methods:**
- `init()` - Initialize smooth scroll

**Functionality:**
- Intercepts anchor link clicks
- Smooth scrolls to target
- Accounts for header height
- Focuses target for accessibility

#### 8. ScrollTracking (linje 573-612)
**Purpose:** Track scroll depth for analytics

**Methods:**
- `init()` - Initialize scroll tracking
- `handleScroll()` - Handle scroll events

**Tracking:**
- 25%, 50%, 75%, 100% scroll depth
- Tracks once per milestone
- Sends `scroll` event to analytics

**Header Shadow:**
- Adds shadow to header on scroll > 20px
- Updates `.scrolled` class

#### 9. ClickTracking (linje 617-652)
**Purpose:** Track user interactions

**Methods:**
- `init()` - Initialize click tracking

**Tracked Elements:**
- `.btn-primary` - CTA buttons
- `a[href="#priser"]` - Pricing links
- `a[href^="tel:"]` - Phone links
- `a[href^="mailto:"]` - Email links

#### 10. Accessibility (linje 657-686)
**Purpose:** Accessibility enhancements

**Methods:**
- `init()` - Initialize accessibility features

**Features:**
- Skip link functionality
- Keyboard navigation (Enter/Space on buttons)
- Respects `prefers-reduced-motion`

#### 11. CookieHandlers (linje 691-710)
**Purpose:** Cookie consent button handlers

**Methods:**
- `init()` - Initialize cookie handlers

**Functionality:**
- Accept button → Update consent to granted
- Reject button → Update consent to denied
- Hide banner after choice

### Initialization (linje 715-739)
```javascript
document.addEventListener('DOMContentLoaded', function() {
    ConsentManager.init();
    FormHandler.init();
    FAQ.init();
    MobileMenu.init();
    SmoothScroll.init();
    ScrollTracking.init();
    ClickTracking.init();
    Accessibility.init();
    CookieHandlers.init();
    Analytics.trackEvent('page_view', {...});
});
```

**Order:**
1. ConsentManager (must be first)
2. FormHandler
3. FAQ
4. MobileMenu
5. SmoothScroll
6. ScrollTracking
7. ClickTracking
8. Accessibility
9. CookieHandlers
10. Page view tracking

### Global Export (linje 744-754)
```javascript
window.NordicLeads = {
    ConsentManager,
    Analytics,
    FormHandler,
    FAQ,
    MobileMenu,
    ScrollTracking,
    ClickTracking
};
```
**Purpose:** Debug access in browser console

---

## WordPress Integration

### Theme Setup (functions.php linje 18-36)
```php
function twentytwentyfive_child_setup() {
    load_child_theme_textdomain(...);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [...]);
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'twentytwentyfive_child_setup');
```

### Asset Enqueuing (functions.php linje 41-91)
**Styles:**
1. Parent theme style.css
2. Tailwind CSS (local)
3. Google Fonts (Inter)
4. Child theme style.css

**Scripts:**
1. Child theme app.js (deferred)

**Localization:**
- `nordicleadsData` object:
  - `ajaxurl` - WordPress AJAX endpoint
  - `nonce` - Security nonce
  - `siteUrl` - Site URL
  - `themeUrl` - Theme directory URL

### Resource Hints (functions.php linje 96-115)
**Preconnect:**
- `fonts.googleapis.com`
- `fonts.gstatic.com`
- `www.google-analytics.com`
- `www.googletagmanager.com`

**Purpose:** Performance optimization (DNS prefetch)

### Security Headers (functions.php linje 120-138)
**Headers Added:**
- Content-Security-Policy
- X-Frame-Options: SAMEORIGIN
- X-Content-Type-Options: nosniff
- Referrer-Policy: strict-origin-when-cross-origin
- Permissions-Policy: geolocation=(), microphone=(), camera=()

### Favicon Support (functions.php linje 143-147)
```php
function twentytwentyfive_child_favicon() {
    $favicon_path = get_stylesheet_directory_uri() . '/assets/favicon.svg';
    echo '<link rel="icon" href="' . esc_url($favicon_path) . '" type="image/svg+xml">';
}
add_action('wp_head', 'twentytwentyfive_child_favicon', 5);
```

### Performance Optimizations (functions.php linje 152-188)
1. **Disable Emojis** - Removes WordPress emoji scripts
2. **Remove Query Strings** - Removes `?ver=` from static resources
3. **Defer Scripts** - Adds `defer` attribute to non-critical scripts

### AJAX Form Handler (functions.php linje 193-251)
```php
function twentytwentyfive_child_handle_contact_form() {
    check_ajax_referer('nordicleads_nonce', 'nonce');
    // Sanitize & validate
    // Send email
    // Log lead (optional hook)
    // Return JSON
}
add_action('wp_ajax_nordicleads_contact', ...);
add_action('wp_ajax_nopriv_nordicleads_contact', ...);
```

**Hooks:**
- `nordicleads_new_lead` - Fires on successful submission (linje 230)

### Body Classes (functions.php linje 256-262)
```php
function twentytwentyfive_child_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'nordicleads-frontpage';
    }
    return $classes;
}
```

### Structured Data (functions.php linje 283-404)
**JSON-LD Schema:**
1. **Organization** - Company info
2. **ProfessionalService** - Service description
3. **Service** - B2B Lead Generation service
4. **WebPage** - Page metadata
5. **WebSite** - Site metadata
6. **BreadcrumbList** - Navigation breadcrumbs

**Output:** In `<head>` via `wp_head` hook

### WordPress Head Cleanup (functions.php linje 409-415)
**Removed:**
- `wp_generator` - WordPress version
- `wlwmanifest_link` - Windows Live Writer
- `rsd_link` - Really Simple Discovery
- `wp_shortlink_wp_head` - Shortlink
- `adjacent_posts_rel_link_wp_head` - Adjacent posts
- `rest_output_link_wp_head` - REST API link
- `wp_oembed_add_discovery_links` - oEmbed discovery

**Purpose:** Security & performance

### SVG Support (functions.php linje 420-451)
1. **MIME Types** - Adds SVG to allowed upload types
2. **Display Fix** - Fixes SVG display in media library

### Admin Footer (functions.php linje 456-459)
```php
function twentytwentyfive_child_admin_footer() {
    echo 'NordicLeads Theme v' . wp_get_theme()->get('Version');
}
```

---

## Assets & Ressourcer

### Images

#### Hero Image
- **File:** `wmremove-transformed.jpeg`
- **Path:** `/assets/wmremove-transformed.jpeg`
- **Alt:** "Professionelt B2B-team arbejder med leads og data"
- **Loading:** `eager` (LCP optimization)
- **Usage:** Hero section right column

#### Logo Images
- **Dmify Logo:** `/assets/logos/dmify.png`
- **Usage:** Trusted By section slider

#### Favicon
- **File:** `favicon.svg`
- **Path:** `/assets/favicon.svg`
- **Type:** SVG
- **Usage:** Browser favicon

### Fonts

#### Inter Font Family
- **Source:** Google Fonts
- **Weights:** 400, 500, 600, 700
- **Display:** Swap (performance)
- **URL:** `https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap`
- **Preconnect:** `fonts.googleapis.com`, `fonts.gstatic.com`

### CSS Files

#### Tailwind CSS
- **File:** `tailwind.min.css`
- **Path:** `/assets/tailwind.min.css`
- **Version:** 3.4.1
- **Size:** Minified
- **Usage:** Footer utility classes

#### Child Theme Style
- **File:** `style.css`
- **Path:** Root of theme directory
- **Size:** ~15KB (unminified)
- **Usage:** All custom styling

### JavaScript Files

#### App.js
- **File:** `app.js`
- **Path:** Root of theme directory
- **Size:** ~25KB (unminified)
- **Defer:** Yes
- **Usage:** All interactive functionality

### Other Files

#### robots.txt
- **Path:** Root of theme directory
- **Purpose:** Search engine directives

#### sitemap.xml
- **Path:** Root of theme directory
- **Purpose:** XML sitemap for SEO

#### humans.txt
- **Path:** Root of theme directory
- **Purpose:** Credits & tech info

#### security.txt
- **Path:** Root of theme directory
- **Purpose:** Security contact information

#### llms.txt
- **Path:** Root of theme directory
- **Purpose:** AI/LLM guidance

---

## Analytics & Tracking

### Google Analytics 4
- **Measurement ID:** `G-XXXXXXXXXX` (placeholder)
- **Implementation:** Via GTM or direct
- **Consent:** Respects Consent Mode v2

### Google Tag Manager
- **Container ID:** `GTM-XXXXXXX` (placeholder)
- **Usage:** Recommended (consolidates all tags)
- **Consent:** Respects Consent Mode v2

### Meta Pixel (Facebook)
- **Pixel ID:** `000000000000000` (placeholder)
- **Events:** PageView, Custom events
- **Consent:** Loads only after consent

### LinkedIn Insight Tag
- **Partner ID:** `0000000` (placeholder)
- **Events:** PageView, Conversions
- **Consent:** Loads only after consent

### Events Tracked

#### page_view
- **Trigger:** On page load
- **Parameters:**
  - `page_title`: Document title
  - `page_location`: Full URL
  - `page_path`: URL path
- **Platforms:** All

#### scroll
- **Trigger:** At 25%, 50%, 75%, 100% scroll depth
- **Parameters:**
  - `event_category`: "Engagement"
  - `event_label`: "25%" | "50%" | "75%" | "100%"
  - `value`: 25 | 50 | 75 | 100
- **Platforms:** GA4 only

#### cta_click
- **Trigger:** Click on `.btn-primary`
- **Parameters:**
  - `event_category`: "CTA"
  - `event_label`: Button text
  - `value`: 1
- **Platforms:** All

#### request_quote
- **Trigger:** Click on pricing links
- **Parameters:**
  - `event_category`: "Pricing"
  - `event_label`: "View Pricing"
  - `value`: 1
- **Platforms:** All

#### phone_click
- **Trigger:** Click on `tel:` or `mailto:` links
- **Parameters:**
  - `event_category`: "Contact"
  - `event_label`: Link href
  - `value`: 1
- **Platforms:** All

#### generate_lead
- **Trigger:** Successful form submission
- **Parameters:**
  - `event_category`: "Form"
  - `event_label`: "Contact Form"
  - `value`: 1
- **Platforms:** All
- **Priority:** Primary conversion event

---

## Accessibility Features

### ARIA Landmarks
- `<header role="banner">` - Site header
- `<main role="main">` - Main content
- `<nav role="navigation">` - Navigation
- `<footer role="contentinfo">` - Site footer
- `<div role="dialog">` - Cookie consent banner

### ARIA Attributes
- `aria-label` - Button labels (mobile menu toggle)
- `aria-expanded` - Menu state (mobile menu, FAQ)
- `aria-labelledby` - Cookie banner title reference
- `aria-describedby` - Cookie banner description reference
- `aria-invalid` - Form field validation state
- `aria-hidden` - Hidden decorative elements (duplicate slider track)

### Skip Link
- **Target:** `#main-content`
- **Position:** Absolute, top-left (hidden until focus)
- **Z-index:** 9999
- **Purpose:** Keyboard navigation to main content

### Keyboard Navigation
- **Enter/Space:** Activates buttons and links
- **Tab:** Sequential navigation
- **Focus Indicators:** Visible focus states on all interactive elements

### Semantic HTML
- **Headings:** Proper hierarchy (h1 → h2 → h3)
- **Lists:** `<ul>`, `<ol>` for list content
- **Forms:** Proper `<label>` associations
- **Buttons:** `<button>` for actions, `<a>` for navigation

### Reduced Motion
```css
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        transition-duration: 0.01ms !important;
    }
}
```
**Purpose:** Respects user preference for reduced motion

### Color Contrast
- **Text:** Meets WCAG 2.2 AA standards
- **Links:** Sufficient contrast ratios
- **Buttons:** High contrast for readability

### Alt Text
- **Images:** Descriptive alt text for all images
- **SVG Icons:** `aria-label` or text content
- **Decorative:** `aria-hidden="true"` where appropriate

---

## Performance Optimizations

### Critical CSS
- **Inline:** No inline critical CSS (could be added)
- **Defer:** Non-critical CSS loaded normally
- **Purge:** Tailwind purging in production

### Image Optimization
- **Format:** JPEG for hero image (could be WebP/AVIF)
- **Lazy Loading:** `loading="lazy"` on non-critical images
- **Eager Loading:** Hero image uses `loading="eager"` (LCP)
- **Dimensions:** Proper aspect ratios to avoid CLS

### JavaScript Optimization
- **Defer:** All scripts use `defer` attribute
- **Async:** Analytics scripts load asynchronously
- **Minification:** Not minified (could be added)
- **Dependencies:** Minimal (vanilla JS only)

### Resource Hints
- **Preconnect:** Google Fonts, Analytics, GTM
- **DNS-prefetch:** Facebook, LinkedIn (implicit)
- **Preload:** Not used (could preload hero image)

### Font Optimization
- **Display:** `swap` for Google Fonts
- **Subset:** Not subsetted (could subset to Latin)
- **Preconnect:** `fonts.googleapis.com`, `fonts.gstatic.com`

### Caching
- **Browser:** Via Cache-Control headers (server config)
- **CDN:** Not configured (could use CDN for static assets)
- **WordPress:** Object caching not configured

### Minification
- **CSS:** Not minified (could minify style.css)
- **JS:** Not minified (could minify app.js)
- **HTML:** Not compressed (server config)

### Third-Party Scripts
- **Load After Consent:** Analytics only load after user consent
- **Async/Defer:** All third-party scripts async/defer
- **GTM:** Consolidated loading via GTM

### Server Optimization
- **PHP:** Version 8.x (fast)
- **HTTP/2:** Assumed (server config)
- **Compression:** Gzip/Brotli (server config)
- **Hosting:** Simply.com (Denmark, EU)

### WordPress Optimizations
- **Emojis Disabled:** Removed emoji scripts
- **Query Strings Removed:** Cleaner URLs
- **Head Cleanup:** Removed unnecessary head items
- **Defer Scripts:** Non-critical scripts deferred

### Core Web Vitals Targets
- **LCP:** ≤ 1.5s (Largest Contentful Paint)
- **INP:** ≤ 150ms (Interaction to Next Paint)
- **CLS:** ≤ 0.05 (Cumulative Layout Shift)
- **TTFB:** ≤ 0.5s (Time to First Byte)

---

## Konklusion

Dette dokument dækker **hver eneste detalje** i NordicLeads hjemmesidens implementering:

- ✅ Alle HTML-elementer og deres formål
- ✅ Alle CSS-klasser og styling
- ✅ Alle JavaScript-funktioner og moduler
- ✅ Alle WordPress hooks og funktioner
- ✅ Alle assets og ressourcer
- ✅ Alle analytics events
- ✅ Alle accessibility features
- ✅ Alle performance optimizations

**Brug dette dokument som reference når:**
- Du skal forstå en specifik implementering
- Du skal modificere eksisterende funktionalitet
- Du skal tilføje nye features
- Du skal debugge problemer
- Du skal onboarde nye udviklere

**Opdater dette dokument når:**
- Nye features tilføjes
- Eksisterende features modificeres
- Strukturelle ændringer foretages
- Nye dependencies tilføjes

---

**Last Updated:** 2025-11-24  
**Version:** 1.0.0  
**Author:** NordicLeads Development Team

