# AI Image Generation Prompts for NordicLeads

This document contains detailed prompts for generating all images needed for the NordicLeads website using AI image generators like Midjourney, DALL-E, Stable Diffusion, or similar tools.

## Design Guidelines

**Style:** Nordic minimalism, clean, professional, business-focused  
**Color Palette:** Deep blue (#003366), accent blue (#0066cc), white, light gray  
**Mood:** Trustworthy, modern, professional, approachable  
**Quality:** High resolution (at least 1920px wide for hero, 1200x630 for OG)  
**Format:** WebP or AVIF with JPG fallback  
**Aspect Ratios:** 16:9 for hero, 1:1 for icons, 1.91:1 for OG images

---

## Required Images

### 1. Hero Background Image
**Filename:** `hero-bg.jpg` / `hero-bg.webp`  
**Dimensions:** 1920x1080px (16:9)  
**Usage:** Hero section background (subtle, not overpowering)

**Prompt:**
```
Modern Danish business district aerial view, clean architecture, blue hour lighting, 
minimalist nordic style, professional atmosphere, soft gradient from deep blue to light blue, 
abstract geometric patterns overlaid, high contrast, 8K quality, commercial photography style, 
Scandinavian aesthetic, corporate headquarters, glass buildings reflecting sunset, 
Copenhagen or Aarhus cityscape, ultra-detailed, professional color grading
```

**Alternative Prompt (Abstract):**
```
Abstract minimalist background, geometric shapes, gradient from dark blue (#003366) to 
bright blue (#0066cc), flowing lines representing connections and networks, 
professional business aesthetic, nordic minimalism, clean composition, 
soft lighting, modern design, high resolution, corporate identity, 
subtle texture, professional photography quality
```

---

### 2. Open Graph / Social Media Image
**Filename:** `og-image.jpg`  
**Dimensions:** 1200x630px (1.91:1)  
**Usage:** Facebook, LinkedIn, Twitter sharing

**Prompt:**
```
Professional Danish business promotional image, text space in center, 
"NordicLeads" branding, gradient blue background (#003366 to #0066cc), 
modern typography space, clean layout, minimalist design, professional aesthetic, 
corporate identity, high contrast, business-to-business marketing feel, 
nordic style, geometric accents, professional photography quality, 
safe text area in middle, 1200x630 pixels, social media optimized
```

---

### 3. "How It Works" Icons (3 images)

#### Icon 1: Lead Search/Discovery
**Filename:** `icon-search-leads.svg` or `.png`  
**Dimensions:** 512x512px (1:1)  
**Usage:** Step 1 card

**Prompt:**
```
Modern minimalist icon, magnifying glass over database/spreadsheet, 
flat design style, gradient blue (#003366 to #0066cc), white background, 
simple geometric shapes, professional business icon, clean lines, 
vector art style, corporate branding, Scandinavian minimalism, 
high contrast, SVG-ready, 512x512 pixels
```

#### Icon 2: Email Outreach
**Filename:** `icon-email-outreach.svg` or `.png`  
**Dimensions:** 512x512px (1:1)  
**Usage:** Step 2 card

**Prompt:**
```
Modern minimalist icon, email envelope with send arrow, 
flat design style, gradient blue (#003366 to #0066cc), white background, 
simple geometric shapes, professional business icon, clean lines, 
vector art style, corporate branding, Scandinavian minimalism, 
communication symbol, high contrast, SVG-ready, 512x512 pixels
```

#### Icon 3: Results/Growth
**Filename:** `icon-results.svg` or `.png`  
**Dimensions:** 512x512px (1:1)  
**Usage:** Step 3 card

**Prompt:**
```
Modern minimalist icon, upward trending graph or growth chart, 
flat design style, gradient blue (#003366 to #0066cc), white background, 
simple geometric shapes, professional business icon, clean lines, 
vector art style, corporate branding, Scandinavian minimalism, 
success symbol, high contrast, SVG-ready, 512x512 pixels
```

---

### 4. GDPR/Trust Badge Icon
**Filename:** `icon-gdpr.svg` or `.png`  
**Dimensions:** 256x256px (1:1)  
**Usage:** Trust section, footer

**Prompt:**
```
Modern minimalist shield icon with checkmark, representing security and compliance, 
flat design style, gradient blue (#003366 to #0066cc), white background, 
simple geometric shapes, professional business icon, clean lines, 
GDPR compliance symbol, trust badge, vector art style, Scandinavian minimalism, 
high contrast, SVG-ready, 256x256 pixels
```

---

### 5. Testimonial Profile Images (Placeholder)
**Filenames:** `testimonial-1.jpg`, `testimonial-2.jpg`  
**Dimensions:** 400x400px (1:1)  
**Usage:** Customer testimonials

**Prompt for Testimonial 1 (Female Business Owner):**
```
Professional portrait photo, Danish woman in her 40s, business owner, 
confident smile, professional attire, blurred office/cafe background, 
natural lighting, modern Danish interior, approachable and trustworthy, 
high-quality commercial photography, nordic aesthetic, professional headshot, 
400x400 pixels, neutral professional background
```

**Prompt for Testimonial 2 (Male Business Owner):**
```
Professional portrait photo, Danish man in his 30s, small business owner, 
friendly expression, casual business attire, blurred salon/shop background, 
natural lighting, modern Scandinavian interior, approachable and professional, 
high-quality commercial photography, nordic aesthetic, professional headshot, 
400x400 pixels, neutral professional background
```

---

### 6. Stats/Results Background (Optional)
**Filename:** `stats-bg.jpg`  
**Dimensions:** 1920x600px (16:5)  
**Usage:** Results section background

**Prompt:**
```
Abstract data visualization background, subtle charts and graphs in background, 
gradient blue (#003366 to #0066cc), minimalist design, professional business aesthetic, 
soft focus, modern digital interface elements, Scandinavian color palette, 
clean composition, corporate identity, high resolution, 1920x600 pixels, 
subtle texture, professional photography quality
```

---

### 7. Contact Form Background (Optional)
**Filename:** `contact-bg.jpg`  
**Dimensions:** 1920x800px (12:5)  
**Usage:** Contact section background

**Prompt:**
```
Modern Danish office setting, blurred background, professional workspace, 
gradient blue tint overlay (#003366 to #0066cc), clean minimalist aesthetic, 
natural lighting, Scandinavian interior design, professional business atmosphere, 
soft focus, high-quality commercial photography, corporate identity, 
1920x800 pixels, professional color grading
```

---

### 8. Loading/Placeholder Image
**Filename:** `placeholder.svg`  
**Dimensions:** 800x600px (4:3)  
**Usage:** Lazy loading placeholder

**Prompt:**
```
Simple geometric placeholder, gradient blue (#003366 to #0066cc), 
minimalist design, centered icon or logo space, clean composition, 
modern design, SVG-optimized, 800x600 pixels, professional aesthetic
```

---

## Image Specifications

### File Formats
1. **Hero & Large Images:** WebP + JPG fallback
2. **Icons:** SVG preferred, PNG fallback
3. **Testimonials:** WebP + JPG fallback
4. **OG Image:** JPG only

### Optimization Guidelines
- Compress all images (TinyPNG, Squoosh, ImageOptim)
- Target file size: < 200KB for hero, < 50KB for icons
- Use responsive srcset for different screen sizes
- Include alt text for all images (accessibility)

### Responsive Sizes
For hero and large images, create these variants:
- **Desktop:** 1920px wide
- **Tablet:** 1200px wide
- **Mobile:** 768px wide
- **Small Mobile:** 480px wide

Example srcset:
```html
<img 
  src="hero-bg-768.webp" 
  srcset="hero-bg-480.webp 480w, 
          hero-bg-768.webp 768w, 
          hero-bg-1200.webp 1200w, 
          hero-bg-1920.webp 1920w"
  sizes="100vw"
  alt="NordicLeads hero background"
  loading="lazy"
>
```

---

## Alt Text Examples

### Hero
```
Alt: "Modern Danish business district representing NordicLeads' professional B2B lead generation services"
```

### Icons
```
Alt: "Search and discover leads icon"
Alt: "Email outreach communication icon"
Alt: "Business growth and results icon"
Alt: "GDPR compliance and security badge"
```

### Testimonials
```
Alt: "Maria Jensen, owner of Café Nordlys in Copenhagen"
Alt: "Thomas Andersen, owner of Andersens Frisør in Aarhus"
```

### OG Image
```
Alt: "NordicLeads - Lead generation og outreach til danske virksomheder"
```

---

## Color Correction

If AI-generated images don't match the exact color palette, use these adjustments:

### Photoshop/GIMP
1. Add Color Balance adjustment layer
2. Shift towards blues in highlights
3. Increase blue saturation slightly
4. Add gradient map: #003366 → #0066cc at 20% opacity

### CSS Filters
```css
filter: hue-rotate(-10deg) saturate(1.1) brightness(0.95);
```

---

## Stock Photo Alternatives

If you prefer stock photos, search these terms on Unsplash, Pexels, or Unsplash:

**Hero:**
- "Danish business office"
- "Scandinavian workspace"
- "Modern Copenhagen architecture"
- "Nordic office environment"
- "Professional business setting"

**Testimonials:**
- "Professional Danish headshot"
- "Small business owner portrait"
- "Scandinavian entrepreneur"
- "Professional cafe owner"
- "Danish business professional"

**Icons:**
- "Flat design business icons"
- "Minimalist blue icons"
- "Professional vector icons"
- "Corporate branding icons"

---

## Implementation Checklist

- [ ] Generate all required images
- [ ] Optimize for web (compress)
- [ ] Create responsive variants (480px, 768px, 1200px, 1920px)
- [ ] Convert to WebP/AVIF with JPG fallback
- [ ] Add images to `/assets/` folder
- [ ] Update `front-page.php` with image paths
- [ ] Add proper alt text
- [ ] Test loading performance
- [ ] Verify images on mobile devices
- [ ] Check accessibility (contrast, clarity)

---

## Notes

- **Priority:** Hero image + OG image (most visible)
- **Quick Win:** Use solid gradient backgrounds initially (CSS only)
- **SVG Icons:** Create simple SVG icons in Figma/Illustrator if AI results aren't satisfactory
- **Testimonials:** Can use initial avatars or monogram circles as placeholders

---

**Last Updated:** 2025-11-24  
**Version:** 1.0.0

