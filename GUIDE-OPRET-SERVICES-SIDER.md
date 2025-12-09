# 📖 GUIDE: Opret Services Sider i WordPress

## ✅ Status: Filerne er uploadet!
Alle nødvendige filer er nu på live WordPress:
- ✅ `page-services.php` (Services template)
- ✅ `page-service-single.php` (Single service template)  
- ✅ `header.php` (Med dropdown menu)
- ✅ `style.css` (Med dropdown styling)

---

## 🎯 TRIN-FOR-TRIN: Opret Siderne

### TRIN 1: Log ind på WordPress Admin

1. Gå til: **https://nordicleads.dk/wp-admin**
2. Log ind med dine admin credentials

---

### TRIN 2: Opret Hoved-Services Side (Valgfri - bruges ikke i menu nu)

**Denne side vises ikke i menuen, men kan være nyttig som oversigt**

1. Klik på **Pages** → **Add New** i venstre menu
2. I **Page Title** feltet, skriv: `Services`
3. I **content area** (den store editor), skriv noget placeholder tekst eller lad den være tom
4. Find **Page Attributes** boksen i højre side
5. Under **Template**, vælg: `Services`
6. I **Permalink** området (under titlen), klik **Edit**
7. Sæt slug til: `services` (kun lowercase, ingen mellemrum)
8. Klik **Publish**

---

### TRIN 3: Opret Service Side 1 - Lead Generation

1. Klik på **Pages** → **Add New**
2. **Page Title**: `Lead Generation`
3. **Content**: Skriv din tekst om lead generation services, f.eks.:

```
# Lead Generation

Vi hjælper danske virksomheder med at generere kvalificerede B2B-leads gennem:

✅ GDPR-sikker data indsamling
✅ Verificerede kontaktoplysninger
✅ Skræddersyet til din branche
✅ Hurtig levering (under 24 timer)

## Vores Proces

1. Du fortæller os om din målgruppe
2. Vi finder og verificerer leads
3. Du modtager Excel-fil med kontakter
4. Start din outreach kampagne

## Priser

Kontakt os for en skræddersyet pris baseret på dine behov.

[Kontakt os knap er nederst på siden]
```

4. **Template**: Vælg `Service Single` i Page Attributes boksen
5. **Permalink**: Klik Edit og skriv: `services/lead-generation`
   - ⚠️ VIGTIGT: Det SKAL være `services/lead-generation` (med skråstreg og bindestreg)
6. Klik **Publish**

---

### TRIN 4: Opret Service Side 2 - Webudvikling

1. Klik på **Pages** → **Add New**
2. **Page Title**: `Webudvikling`
3. **Content**: Skriv din tekst om webudvikling, f.eks.:

```
# Webudvikling

Vi bygger moderne, hurtige og konverterende websites til danske virksomheder.

## Vores Specialer

✅ WordPress websites
✅ Custom web-løsninger
✅ Landingspages
✅ Performance optimering
✅ SEO-optimering
✅ Mobile-first design

## Teknologier

- WordPress & Custom Themes
- React & Modern JavaScript
- Tailwind CSS
- Performance optimering
- SEO best practices

## Hvad Du Får

- Professionelt design
- Hurtig loadetid
- Mobile responsiv
- SEO-optimeret
- Google Analytics integration
- GDPR-compliant

Kontakt os for at høre mere om hvordan vi kan hjælpe din virksomhed online.
```

4. **Template**: Vælg `Service Single`
5. **Permalink**: `services/webudvikling`
6. Klik **Publish**

---

### TRIN 5: Opret Service Side 3 - AI-Integration & Automation

1. Klik på **Pages** → **Add New**
2. **Page Title**: `AI-Integration & Automation`
3. **Content**: Skriv din tekst om AI og automation, f.eks.:

```
# AI-Integration & Automation

Automatiser dine forretningsprocesser med moderne AI-teknologi.

## Hvad Vi Tilbyder

✅ AI Chatbots til kundeservice
✅ Automatisk lead kvalificering
✅ Email automation
✅ Data processing & analyse
✅ Custom AI-løsninger
✅ Integration med eksisterende systemer

## Use Cases

**Kundeservice Automation**
- 24/7 AI chatbot support
- Automatisk FAQ besvarelse
- Lead capture & kvalificering

**Sales & Marketing Automation**
- Automatisk lead scoring
- Personaliserede email kampagner
- Social media automation

**Data & Analytics**
- Automatisk rapportering
- Predictive analytics
- Data cleaning & processing

## Fordele

- Spar tid på gentagne opgaver
- Forbedret kunde-oplevelse
- Reducer omkostninger
- Skalerbar løsning
- 24/7 tilgængelighed

Kontakt os for at diskutere hvordan AI kan transformere din forretning.
```

4. **Template**: Vælg `Service Single`
5. **Permalink**: `services/ai-integration-automation`
6. Klik **Publish**

---

### TRIN 6: Opret Service Side 4 - Custom Løsninger

1. Klik på **Pages** → **Add New**
2. **Page Title**: `Custom Løsninger`
3. **Content**: Skriv din tekst om custom løsninger, f.eks.:

```
# Custom Løsninger

Har du behov for en skræddersyet løsning til din virksomhed? Vi hjælper dig!

## Hvad Er Custom Løsninger?

Vi bygger præcis det din virksomhed har brug for - intet mere, intet mindre.

## Eksempler På Custom Løsninger

✅ **CRM Systemer**
- Skræddersyet til din sales proces
- Integration med eksisterende værktøjer
- Automatisk data sync

✅ **Business Automation**
- Workflow automation
- Integration mellem systemer
- Rapportering & dashboards

✅ **Data & Analytics Tools**
- Custom dashboards
- Real-time rapportering
- Datavisualisering

✅ **API Integrationer**
- Connect dine systemer
- Automatisk data flow
- Real-time sync

✅ **Web Applications**
- Internal tools
- Customer portals
- Admin panels

## Vores Proces

1. **Discovery** - Vi forstår dine behov
2. **Design** - Vi designer løsningen
3. **Development** - Vi bygger det
4. **Testing** - Vi sikrer kvalitet
5. **Launch** - Vi leverer og supporterer

## Hvorfor Custom?

- Præcis det du har brug for
- Ingen unødvendige features
- Fuld kontrol
- Skalerbar løsning
- Langsigtet investering

Kontakt os for en uforpligtende snak om dine behov.
```

4. **Template**: Vælg `Service Single`
5. **Permalink**: `services/custom-loesninger`
6. Klik **Publish**

---

## ⚠️ VIGTIGT: Permalink Check

Når du har oprettet alle sider, skal du checke at permalinks er korrekte:

1. Gå til **Settings** → **Permalinks**
2. Klik **Save Changes** (selv hvis du ikke ændrer noget)
3. Dette regenererer WordPress rewrite rules

---

## ✅ TEST: Verificer At Det Virker

1. **Besøg din hjemmeside**: https://nordicleads.dk
2. **Klik på "Services"** i navigation menuen
3. **Check dropdown åbner** og viser alle 4 services
4. **Klik på hver service link** for at verificere de virker
5. **Test på mobile** (resize browser vindue)

---

## 🎨 Sådan Redigerer Du Content Senere

### Metode 1: Via WordPress Admin (Nemmest)

1. Log ind på **wp-admin**
2. Gå til **Pages** → **All Pages**
3. Find den side du vil redigere (søg efter "Lead Generation", etc.)
4. Klik **Edit**
5. Lav dine ændringer i content editoren
6. Klik **Update**
7. Refresh hjemmesiden for at se ændringer

### Metode 2: Via WordPress Block Editor

WordPress bruger Gutenberg block editor. Du kan:
- **Tilføje blocks**: Klik på `+` ikonet
- **Redigere tekst**: Klik direkte på teksten
- **Tilføje billeder**: Klik `+` → Search "Image"
- **Tilføje knapper**: Klik `+` → Search "Button"
- **Ændre layout**: Klik `+` → Search "Columns"

---

## 📝 TIPS TIL CONTENT

### God Service Side Skal Have:

1. **Klar overskrift** - Hvad tilbyder I?
2. **Værdi proposition** - Hvorfor vælge jer?
3. **Features/Fordele** - Konkrete punkter med ✅
4. **Proces/Hvordan det virker** - Trin-for-trin
5. **Social proof** (valgfri) - Testimonials, cases
6. **Call-to-action** - Kontakt knap (allerede på template)

### Gode Tips:

- ✅ Hold tekst **kort og præcis**
- ✅ Brug **bullet points** for læsbarhed
- ✅ Tilføj **relevante billeder** hvis muligt
- ✅ Brug **overskrifter** til at strukturere
- ✅ Fokuser på **fordele**, ikke bare features
- ✅ Inkluder **konkrete eksempler**

---

## 🔧 Troubleshooting

### Problem: Links virker ikke (404 fejl)
**Løsning**: 
1. Gå til **Settings** → **Permalinks**
2. Klik **Save Changes**
3. Dette regenererer rewrite rules

### Problem: Dropdown vises ikke
**Løsning**: 
1. Hard refresh browser (Ctrl+Shift+R eller Cmd+Shift+R)
2. Clear browser cache
3. Check at theme er aktiveret

### Problem: Template vises ikke i dropdown
**Løsning**: 
1. Check at theme filer er uploadet korrekt
2. Gå til **Appearance** → **Themes**
3. Verify "Twenty Twenty-Five Child" er aktiveret

### Problem: Styling ser forkert ud
**Løsning**: 
1. Hard refresh (Ctrl+Shift+R)
2. Clear cache (browser og WordPress cache hvis I bruger caching plugin)

---

## 📞 HUSK!

- **Gem ofte** når du redigerer
- **Preview** siden før du publisher (klik Preview knap)
- **Test på mobile** efter ændringer
- **Backup** før du laver store ændringer (mange hosting tilbyder automatisk backup)

---

## 🎉 Færdig!

Når du har oprettet alle 4 service-sider, er din Services dropdown menu klar til brug!

**Næste skridt:**
1. Tilføj rigtig content til hver side
2. Tilføj billeder hvis relevant
3. Test alle links
4. Test på mobile
5. Fortæl dine kunder om dine nye services! 🚀

---

**Brug for hjælp?** Hvis noget ikke virker, lad mig vide så hjælper jeg! 💪

