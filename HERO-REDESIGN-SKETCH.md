# Hero Redesign - Wireframe & Tailwind Classes

## Layout Structure

```
┌─────────────────────────────────────────────────────────────┐
│ HEADER (Sticky, Shadow on Scroll)                          │
│ ┌──────┐  Navigation Links          [Book Opkald Button]   │
│ │ SVG  │  Sådan virker det | Resultater | Priser | FAQ    │
│ │ Logo │                                                      │
│ └──────┘                                                      │
├─────────────────────────────────────────────────────────────┤
│                                                               │
│ HERO SECTION (Gradient BG: blue-900 → blue-700)             │
│                                                               │
│   ┌─────────────────────────────────────────────┐          │
│   │                                               │          │
│   │  H1: "Få adgang til 50-250 relevante         │          │
│   │       B2B-leads på minutter"                 │          │
│   │  (text-5xl lg:text-6xl font-bold text-white)│          │
│   │                                               │          │
│   │  Sub: "Compliant leads (emails, tlf,        │          │
│   │        adresser) fra offentlige kilder—      │          │
│   │        GDPR-sikker via legitimate interest"  │          │
│   │  (text-xl text-blue-100 max-w-3xl mx-auto)  │          │
│   │                                               │          │
│   │  ┌─────────────────────────────────────┐    │          │
│   │  │ BULLETS (3-4 items with icons)      │    │          │
│   │  │ ✓ Email + Telefon + Adresse         │    │          │
│   │  │ ✓ CVR-registret + Google Maps       │    │          │
│   │  │ ✓ GDPR-sikker (legitimate interest)│    │          │
│   │  │ ✓ Download på minutter              │    │          │
│   │  └─────────────────────────────────────┘    │          │
│   │                                               │          │
│   │  ┌──────────────┐  ┌──────────────┐         │          │
│   │  │ [Primary CTA]│  │[Secondary CTA]│         │          │
│   │  │ "Se Leads"   │  │ "Book Opkald" │         │          │
│   │  └──────────────┘  └──────────────┘         │          │
│   │                                               │          │
│   │  ┌─────────────────────────────────────┐    │          │
│   │  │ TRUST CHIPS (Horizontal)            │    │          │
│   │  │ [✓ GDPR] [✓ CVR] [✓ Instant]       │    │          │
│   │  └─────────────────────────────────────┘    │          │
│   │                                               │          │
│   └─────────────────────────────────────────────┘          │
│                                                               │
└─────────────────────────────────────────────────────────────┘
```

## Tailwind Classes Breakdown

### Hero Container
```html
<section class="relative overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700 pt-32 pb-40 lg:pt-40 lg:pb-48">
```

### Content Wrapper
```html
<div class="relative max-w-7xl mx-auto px-6 lg:px-8">
  <div class="max-w-4xl mx-auto text-center">
```

### H1 (Main Headline)
```html
<h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight tracking-tight mb-6 animate-fade-in-up">
```

### Subheadline
```html
<p class="text-lg md:text-xl lg:text-2xl text-blue-100 leading-relaxed mb-12 max-w-3xl mx-auto animate-fade-in-up animation-delay-100">
```

### Bullets Container
```html
<div class="flex flex-col gap-4 mb-12 max-w-2xl mx-auto text-left animate-fade-in-up animation-delay-200">
```

### Bullet Item
```html
<div class="flex items-start gap-4 bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20 hover:bg-white/15 transition-all duration-300">
  <svg class="w-6 h-6 text-green-400 flex-shrink-0 mt-0.5">...</svg>
  <div>
    <p class="text-white font-semibold text-lg">Email + Telefon + Adresse</p>
    <p class="text-blue-200 text-sm">Komplette kontaktoplysninger</p>
  </div>
</div>
```

### CTA Buttons Container
```html
<div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12 animate-fade-in-up animation-delay-300">
```

### Primary CTA
```html
<a href="#priser" class="inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-blue-900 bg-white rounded-xl shadow-2xl hover:shadow-3xl hover:scale-105 transform transition-all duration-300 group">
  Se Leads
  <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform">...</svg>
</a>
```

### Secondary CTA
```html
<a href="#kontakt" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white bg-blue-800/50 backdrop-blur-sm border-2 border-white/30 rounded-xl hover:bg-blue-800/70 hover:border-white/50 transition-all duration-300">
  Book Opkald
</a>
```

### Trust Chips Container
```html
<div class="flex flex-wrap items-center justify-center gap-3 animate-fade-in-up animation-delay-400">
```

### Trust Chip
```html
<div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
  <svg class="w-4 h-4 text-green-400">...</svg>
  <span class="text-sm font-medium text-white">GDPR-sikker</span>
</div>
```

## Spacing & Typography

- **H1:** text-4xl → md:text-5xl → lg:text-6xl → xl:text-7xl
- **Sub:** text-lg → md:text-xl → lg:text-2xl
- **Bullets:** gap-4 (tight spacing)
- **CTAs:** gap-4, px-8 py-4 (generous padding)
- **Trust chips:** gap-3, px-4 py-2 (compact)

## Colors

- **Background:** from-blue-900 via-blue-800 to-blue-700
- **Text:** text-white (headlines), text-blue-100 (sub), text-blue-200 (descriptions)
- **Accents:** text-green-400 (icons), bg-white/10 (cards), border-white/20

## Animations

- **Fade-in-up:** All elements animate in sequence
- **Delays:** 0ms, 100ms, 200ms, 300ms, 400ms
- **Hover:** scale-105 on CTAs, bg-white/15 on bullets

## Icons Needed

1. Email icon
2. Phone icon
3. Map/Location icon
4. Shield (GDPR)
5. Database (CVR)
6. Lightning (Instant)
7. Arrow right (CTA)

