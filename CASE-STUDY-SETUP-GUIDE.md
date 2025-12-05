# Case Study Sider - WordPress Setup Guide

## 📋 Oversigt

Denne guide hjælper dig med at oprette de 3 case study sider i WordPress:
1. **DentalDesk** – Fra 0 til 50+ bookinger på 3 måneder
2. **Dmify** – 127 nye kunder gennem strategisk multi-market lead generation  
3. **Auto Specialisterne** – 127 salg gennem hyper-targeted automotive leads

## 🔧 Forudsætninger

### Option 1: Med ACF (Anbefalet)
Hvis du har **Advanced Custom Fields (ACF)** installeret, kan du bruge custom fields direkte.

**Installér ACF:**
1. Gå til **Plugins → Add New**
2. Søg efter "Advanced Custom Fields"
3. Installér og aktiver plugin'et
4. (Valgfrit) Installér "ACF Pro" hvis du har licens

### Option 2: Uden ACF (Standard WordPress)
Hvis du ikke har ACF, kan du bruge standard WordPress meta fields eller bare indsætte indholdet direkte i editoren.

---

## 📝 Trin-for-trin Guide

### TRIN 1: Opret ACF Field Group (Hvis du bruger ACF)

1. **Gå til Custom Fields → Field Groups → Add New**

2. **Navn:** "Case Study Fields"

3. **Tilføj følgende fields:**

   **Field 1: Company Name**
   - Field Label: `case_company_name`
   - Field Name: `case_company_name`
   - Field Type: Text
   - Location Rules: Page Template is equal to Case Study

   **Field 2: Company Logo**
   - Field Label: `case_company_logo`
   - Field Name: `case_company_logo`
   - Field Type: Image
   - Return Format: Image URL
   - Location Rules: Page Template is equal to Case Study

   **Field 3: Stats (Repeater)**
   - Field Label: `case_stats`
   - Field Name: `case_stats`
   - Field Type: Repeater
   - Sub Fields:
     - `number` (Text)
     - `label` (Text)
   - Location Rules: Page Template is equal to Case Study

   **Field 4: Quote**
   - Field Label: `case_quote`
   - Field Name: `case_quote`
   - Field Type: Textarea
   - Location Rules: Page Template is equal to Case Study

   **Field 5: Quote Author**
   - Field Label: `case_quote_author`
   - Field Name: `case_quote_author`
   - Field Type: Text
   - Location Rules: Page Template is equal to Case Study

   **Field 6: Quote Role**
   - Field Label: `case_quote_role`
   - Field Name: `case_quote_role`
   - Field Type: Text
   - Location Rules: Page Template is equal to Case Study

4. **Klik "Publish"**

---

### TRIN 2: Opret Case Study Siderne

#### Case 1: DentalDesk

1. **Gå til Pages → Add New**

2. **Titel:** `DentalDesk – Fra 0 til 50+ Bookinger på 3 Måneder`

3. **Permalink/Slug:** `dentaldesk-50-bookinger` (vigtigt - skal matche!)

4. **Page Template:** Vælg **"Case Study"** fra dropdown

5. **Excerpt (kort beskrivelse):**
   ```
   Dansk AI-powered receptionist startup skulle skalere hurtigt, men havde ingen systematisk måde at nå ud til klinikker. Vi hjalp dem med at få 50+ bookinger gennem målrettet lead generation og professionel outreach.
   ```

6. **Hvis du bruger ACF, udfyld custom fields:**
   - **case_company_name:** `DentalDesk.dk`
   - **case_company_logo:** (Upload et screenshot eller mockup)
   - **case_stats:**
     - Stat 1: Number: `50+`, Label: `Nye bookinger`
     - Stat 2: Number: `300+`, Label: `Klinikker kontaktet`
     - Stat 3: Number: `18%`, Label: `Conversion rate`
   - **case_quote:** `NordicLeads gav os den struktur vi manglede. Fra tom kalender til fyldt pipeline på under 3 måneder. Vi udvider nu til Norge og Sverige med deres hjælp.`
   - **case_quote_author:** `DentalDesk Team`
   - **case_quote_role:** `Founder & CEO`

7. **Featured Image:** Upload et screenshot eller mockup af DentalDesk's interface

8. **Hovedindhold (kopier fra CASE-1-DENTALDESK.md):**
   Kopier alt indhold fra sektionen "## 📝 MAIN CONTENT" og indsæt i WordPress editoren.

   **Start fra:**
   ```
   ### Udfordringen
   
   DentalDesk var en lovende dansk startup med et innovativt produkt...
   ```

   **Slut ved:**
   ```
   **Keywords for SEO:** AI receptionist case study, lead generation Danmark...
   ```

9. **Publish siden**

---

#### Case 2: Dmify

1. **Gå til Pages → Add New**

2. **Titel:** `Dmify – 127 Nye Kunder gennem Strategisk Multi-Market Lead Generation`

3. **Permalink/Slug:** `dmify-127-nye-kunder` (vigtigt!)

4. **Page Template:** Vælg **"Case Study"**

5. **Excerpt:**
   ```
   Tech SaaS virksomhed med bred målgruppe kæmpede med at finde deres sweet spot. Vi hjalp dem med at skaffe 127 nye kunder gennem data-driven segmentering og multi-market outreach.
   ```

6. **ACF Custom Fields:**
   - **case_company_name:** `Dmify.net`
   - **case_company_logo:** Upload `assets/logos/dmify.png` (eller upload logo fra din computer)
   - **case_stats:**
     - Stat 1: Number: `127`, Label: `Nye kunder`
     - Stat 2: Number: `1200+`, Label: `Kvalificerede leads`
     - Stat 3: Number: `41%`, Label: `Email open rate`
   - **case_quote:** `Vi anede ikke hvor vi skulle starte med lead generation. NordicLeads gjorde ikke bare research – de blev en del af vores go-to-market strategi. 127 nye kunder på 3 måneder taler for sig selv.`
   - **case_quote_author:** `Dmify Team`
   - **case_quote_role:** `Co-Founder`

7. **Featured Image:** Upload Dmify logo eller et relevant billede

8. **Hovedindhold:** Kopier fra `CASE-2-DMIFY.md` (fra "### Udfordringen" til slut)

9. **Publish siden**

---

#### Case 3: Auto Specialisterne

1. **Gå til Pages → Add New**

2. **Titel:** `Auto Specialisterne – 127 Salg gennem Hyper-Targeted Automotive Leads`

3. **Permalink/Slug:** `auto-specialisterne-127-salg` (vigtigt!)

4. **Page Template:** Vælg **"Case Study"**

5. **Excerpt:**
   ```
   Dansk automotive marketing agency skulle finde værksteder der havde brug for hjælp til at skaffe flere kunder. Vi leverede 800+ verificerede leads og hjalp dem med at lukke 127 salg på 4 måneder.
   ```

6. **ACF Custom Fields:**
   - **case_company_name:** `Auto Specialisterne ApS`
   - **case_company_logo:** (Upload logo eller billede af værksted/biler)
   - **case_stats:**
     - Stat 1: Number: `127`, Label: `Lukkede salg`
     - Stat 2: Number: `800+`, Label: `Verificerede leads`
     - Stat 3: Number: `22%`, Label: `Booking rate`
   - **case_quote:** `NordicLeads forstod automotive branchen bedre end nogen anden. De gav os ikke bare leads – de gav os den præcise målgruppe der havde brug for vores hjælp. 127 salg på 4 måneder er langt over hvad vi havde forventet.`
   - **case_quote_author:** `Thomas Nielsen`
   - **case_quote_role:** `Salgschef, Auto Specialisterne ApS`

7. **Featured Image:** Upload et relevant billede (fx auto værksted eller biler)

8. **Hovedindhold:** Kopier fra `CASE-3-AUTO-SPECIALISTERNE.md` (fra "### Udfordringen" til slut)

9. **Publish siden**

---

## 🔄 Hvis du IKKE bruger ACF

Hvis du ikke har ACF installeret, kan du:

### Option A: Installér ACF (Anbefalet)
Det er den nemmeste løsning. Følg TRIN 1 ovenfor.

### Option B: Brug standard WordPress
1. Opret siderne som beskrevet, men spring custom fields over
2. Indsæt statistikker og quotes direkte i indholdet med HTML
3. Template vil stadig virke, men viser kun indholdet fra editoren

**Eksempel på HTML i indholdet:**
```html
<div class="nl-case-stats-manual">
    <div class="nl-case-stat">
        <div class="nl-case-stat-number">50+</div>
        <div class="nl-case-stat-label">Nye bookinger</div>
    </div>
    <div class="nl-case-stat">
        <div class="nl-case-stat-number">300+</div>
        <div class="nl-case-stat-label">Klinikker kontaktet</div>
    </div>
    <div class="nl-case-stat">
        <div class="nl-case-stat-number">18%</div>
        <div class="nl-case-stat-label">Conversion rate</div>
    </div>
</div>
```

---

## ✅ Verificering

Efter du har oprettet alle 3 sider, tjek:

1. **Cases-siden viser links:**
   - Gå til `/cases` siden
   - Tjek at "Læs fuld case →" links virker
   - De skal linke til:
     - `/dentaldesk-50-bookinger`
     - `/dmify-127-nye-kunder`
     - `/auto-specialisterne-127-salg`

2. **Case study siderne vises korrekt:**
   - Hero section med logo/company name
   - Stats bar med 3 statistikker
   - Featured image
   - Hovedindhold
   - Quote section
   - CTA section
   - Related cases (hvis flere end 1 case er oprettet)

3. **Responsive design:**
   - Test på mobile, tablet og desktop
   - Tjek at alt indhold er læsbart

---

## 🎨 Billeder & Assets

### DentalDesk
- Upload et screenshot eller mockup af DentalDesk's interface som Featured Image
- Eller brug et generisk billede af en tandlægeklinik

### Dmify
- Logo ligger i: `wp-content/themes/twentytwentyfive-child/assets/logos/dmify.png`
- Upload dette som Featured Image eller Company Logo

### Auto Specialisterne
- Upload et billede af et værksted, biler eller automotive-relateret
- Eller brug et generisk automotive billede

---

## 🐛 Fejlfinding

### Problem: Template vises ikke i dropdown
**Løsning:** 
- Tjek at `page-case-study.php` ligger i: `/wp-content/themes/twentytwentyfive-child/`
- Tjek at filen starter med: `<?php /** * Template Name: Case Study`

### Problem: Custom fields vises ikke
**Løsning:**
- Tjek at ACF er installeret og aktiveret
- Tjek at Field Group location rules er sat til "Page Template is equal to Case Study"
- Tjek at du har valgt "Case Study" template på siden

### Problem: Links fra Cases-siden virker ikke
**Løsning:**
- Tjek at permalinks/slugs matcher præcist:
  - `dentaldesk-50-bookinger`
  - `dmify-127-nye-kunder`
  - `auto-specialisterne-127-salg`
- Tjek at siderne er publiceret (ikke draft)

### Problem: Stats vises ikke
**Løsning:**
- Hvis du bruger ACF: Tjek at Repeater field er korrekt udfyldt
- Hvis du ikke bruger ACF: Indsæt HTML manuelt i indholdet (se Option B ovenfor)

---

## 📞 Hjælp

Hvis du støder på problemer:
1. Tjek at alle filer er uploadet korrekt
2. Tjek WordPress error logs
3. Deaktiver andre plugins for at teste om der er konflikter
4. Tjek at theme er aktiveret korrekt

---

## 🎯 Næste Skridt

Når alle 3 case study sider er oprettet:
1. ✅ Test alle links
2. ✅ Upload billeder/logoer
3. ✅ Tjek SEO (meta descriptions, titles)
4. ✅ Test på forskellige enheder
5. ✅ Del links med teamet for feedback

**God fornøjelse! 🚀**

