# Services Menu Setup Guide

Dette dokument forklarer den nye Services dropdown-menu og hvordan du bruger den.

## 📋 Hvad er blevet oprettet?

### 1. Header Navigation
- **Services dropdown menu** tilføjet mellem "Sådan virker det" og "Cases"
- Fungerer på både desktop og mobile
- 4 undermenu-punkter:
  - Lead Generation
  - Webudvikling
  - AI-Integration & Automation
  - Custom Løsninger

### 2. Template Filer
- `page-services.php` - Hovedoversigt over services (overview page)
- `page-service-single.php` - Template til individuelle service-sider

### 3. Styling
- Dropdown animation og styling tilføjet til `style.css`
- Responsive design til mobile og desktop
- Hover-effekter og transitions

### 4. JavaScript
- Dropdown funktionalitet tilføjet til `header.php`
- Click handling (åbner/lukker dropdown)
- Outside click detection (lukker når man klikker uden for)
- Mobile dropdown toggle

## 🚀 Sådan opretter du siderne

### Metode 1: Via PowerShell (Hurtigst)
```powershell
.\run-create-services.ps1
```

### Metode 2: Via Browser
1. Naviger til: `http://din-site.local/create-services-pages.php`
2. Refresh siden for at køre scriptet
3. Se confirmation message

### Metode 3: Manuel oprettelse i WordPress Admin
1. Gå til **Pages → Add New**
2. Opret disse sider med følgende slugs:
   - `services` (Template: Services)
   - `services/lead-generation` (Template: Service Single)
   - `services/webudvikling` (Template: Service Single)
   - `services/ai-integration-automation` (Template: Service Single)
   - `services/custom-loesninger` (Template: Service Single)

## ✏️ Sådan redigerer du content

1. Gå til **WordPress Admin → Pages**
2. Find de service-sider du vil redigere
3. Klik **Edit**
4. Tilføj dit content i editoren
5. Klik **Update**

## 📁 File Structure

```
wp-content/themes/twentytwentyfive-child/
├── header.php              (Updated med dropdown menu)
├── style.css               (Updated med dropdown styles)
├── page-services.php       (Ny - Services overview)
└── page-service-single.php (Ny - Single service template)

create-services-pages.php   (Script til at oprette sider)
run-create-services.ps1     (PowerShell helper script)
```

## 🎨 Customization

### Ændre dropdown colors
Edit `style.css` omkring linje 256:

```css
.nl-nav-dropdown-menu {
    background: var(--nl-white);
    /* Ændre farver her */
}
```

### Tilføje flere services
1. Rediger `header.php` (linje ~65 og ~110)
2. Tilføj nyt link i både desktop og mobile dropdown
3. Opret tilsvarende side i WordPress

### Ændre dropdown position
Edit `style.css`:

```css
.nl-nav-dropdown-menu {
    top: calc(100% + 1rem); /* Ændre afstand fra toggle */
}
```

## 🔍 Troubleshooting

### Dropdown vises ikke
- Check at siderne er oprettet med korrekte slugs
- Clear browser cache
- Check console for JavaScript errors

### Styling ser forkert ud
- Hard refresh browser (Ctrl+Shift+R)
- Check at `style.css` er opdateret
- Verify WordPress theme er aktivt

### Links virker ikke
- Check permalinks i WordPress (**Settings → Permalinks**)
- Click "Save Changes" for at regenerere rewrite rules
- Verify side slugs matcher links i header

## ✅ Test Checklist

- [ ] Desktop dropdown åbner ved klik
- [ ] Desktop dropdown lukker ved outside click
- [ ] Mobile dropdown toggle virker
- [ ] Alle 4 service links er klikbare
- [ ] Service sider loader korrekt
- [ ] Styling ser godt ud på alle devices
- [ ] Hover effekter virker

## 📞 Support

Hvis du har problemer, check:
1. WordPress error log
2. Browser console for JavaScript errors
3. Verify alle filer er uploadet korrekt
4. Check file permissions

---

**Version:** 1.0.0  
**Oprettet:** December 2025  
**Sidst opdateret:** December 2025

