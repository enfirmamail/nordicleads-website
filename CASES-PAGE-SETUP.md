# Cases Page Setup Guide

## 📋 Hvad er blevet oprettet?

1. **`page-cases.php`** - WordPress page template for Cases-siden
2. **CSS styling** - Tilføjet til `style.css` (Cases-specifik styling)
3. **4 eksempel cases** - Dmify, DentalDesk, Auto Specialisterne, Nordisk Rengøring

## 🚀 Sådan opretter du Cases-siden i WordPress

### Trin 1: Upload filerne
Filerne er klar til upload. Upload disse filer:
- `page-cases.php` → `/wp-content/themes/twentytwentyfive-child/`
- `style.css` (opdateret) → `/wp-content/themes/twentytwentyfive-child/`

### Trin 2: Opret siden i WordPress Admin

1. **Log ind på WordPress Admin**
   - Gå til `https://nordicleads.dk/wp-admin`

2. **Opret ny side**
   - Gå til **Pages → Add New**
   - Eller **Sider → Tilføj ny** (hvis på dansk)

3. **Indstil siden**
   - **Titel:** `Cases` (eller `Vores Cases`)
   - **Permalink/Slug:** `cases` (vigtigt - skal matche template-navnet)
   - **Page Template:** Vælg **"Cases"** fra dropdown (skal vises automatisk)

4. **Publish siden**
   - Klik **Publish**
   - Siden er nu tilgængelig på `https://nordicleads.dk/cases`

### Trin 3: Tilføj link i navigation (valgfrit)

1. **Gå til Appearance → Menus**
2. **Tilføj "Cases" til dit menu**
   - Vælg siden "Cases"
   - Klik "Add to Menu"
   - Træk den til ønsket position
   - Klik "Save Menu"

Eller opdater `header.php` manuelt:
```php
<nav class="nl-nav-desktop" role="navigation">
    <a href="#hvordan">Sådan virker det</a>
    <a href="/cases">Cases</a>  <!-- Tilføj denne linje -->
    <a href="#faq">FAQ</a>
    <a href="#kontakt">Kontakt</a>
</nav>
```

## 📁 Filstruktur

```
wp-content/themes/twentytwentyfive-child/
├── page-cases.php    ← Ny Cases template
├── style.css         ← Opdateret med Cases styling
├── front-page.php
├── header.php
└── ...
```

## 🎨 Design Features

- **Hero section** - Gradient baggrund med titel
- **Cases grid** - Responsive grid med 4 cases
- **Case cards** - Professionelle kort med logo, statistikker og links
- **CTA section** - Call-to-action nederst på siden
- **Fuldt responsivt** - Fungerer på mobile, tablet og desktop

## ✏️ Redigér Cases

Cases kan redigeres direkte i `page-cases.php`. Hver case har:
- Logo (billede eller SVG)
- Virksomhedsnavn
- Branche
- Beskrivelse
- 3 statistikker (Leads, Svarrate, Tid til resultater)
- Link til virksomhed eller kontakt

## 🔗 Links

- **Dmify:** Linker til https://dmify.net
- **DentalDesk:** Linker til https://dentaldesk.dk
- **Auto Specialisterne:** Linker til #kontakt (kan ændres)
- **Nordisk Rengøring:** Linker til #kontakt (kan ændres)

## ✅ Verificering

Efter upload, tjek:
- ✅ `https://nordicleads.dk/cases` - Siden vises korrekt
- ✅ Cases vises i grid layout
- ✅ Responsive design virker på mobile
- ✅ Links virker korrekt
- ✅ Styling matcher resten af sitet

## 🎯 Næste skridt

1. Upload filerne via FTP eller file manager
2. Opret siden i WordPress Admin
3. Vælg "Cases" template
4. Publish siden
5. Tilføj link i navigation (valgfrit)
6. Test siden på forskellige enheder

Siden er nu klar til brug! 🎉

