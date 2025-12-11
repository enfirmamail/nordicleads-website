# Google Analytics 4 (GA4) Key Events Setup Guide

## Hvad er Key Events?

**Key Events** (tidligere kaldt "Conversions") er de vigtigste hændelser på dit website, som du vil måle som konverteringer. I GA4 kan du markere op til 30 events som "Key Events" for at tracke dem som konverteringer.

## Hvordan dit site er sat op

Dit website bruger **ikke Google Site Kit plugin** - i stedet er analytics implementeret direkte i `app.js` med:
- **Google Analytics 4 (GA4)** - direkte integration
- **Google Tag Manager (GTM)** - hvis aktiveret
- **Meta Pixel** og **LinkedIn Insight Tag**

### Hvordan det virker:

1. **Analytics loader kun efter GDPR-samtykke** (Consent Mode v2)
2. **Events sendes automatisk** når brugere interagerer med sitet
3. **Alle events sendes til GA4** via `gtag()` funktionen

## Events der allerede trackes

Dit website sender automatisk disse events til GA4:

### 1. `page_view` 
- **Hvornår:** Hver gang en side indlæses
- **Betydning:** Standard GA4 event

### 2. `scroll`
- **Hvornår:** Når brugeren scroller 25%, 50%, 75%, 100% ned på siden
- **Betydning:** Måler engagement

### 3. `cta_click`
- **Hvornår:** Når brugeren klikker på en CTA-knap (f.eks. "Få leads nu")
- **Betydning:** Interesse i jeres service

### 4. `request_quote`
- **Hvornår:** Når brugeren klikker på pristilbud links
- **Betydning:** Interesse i priser

### 5. `phone_click`
- **Hvornår:** Når brugeren klikker på telefon eller email links
- **Betydning:** Direkte kontaktforsøg

### 6. `generate_lead` ⭐ **VIKTIGST**
- **Hvornår:** Når kontaktformularen sendes succesfuldt
- **Betydning:** **Dette er jeres primære konvertering!**

## Sådan opsætter du Key Events i GA4

### Trin 1: Gå til Google Analytics 4

1. Gå til [analytics.google.com](https://analytics.google.com)
2. Vælg dit property (nordicleads.dk)
3. Gå til **Admin** (tandhjul-ikon nederst til venstre)

### Trin 2: Opret Key Events

1. I **Admin** panelet, find **Data display** → **Events**
2. Klik på **"Create event"** eller **"Mark as conversion"**
3. Du vil se en liste over alle events der er sendt til GA4

### Trin 3: Markér vigtige events som Key Events

**Anbefalede Key Events for NordicLeads:**

#### 1. `generate_lead` ⭐ **MEST VIKTIG**
- **Hvorfor:** Dette er når nogen sender kontaktformularen
- **Hvordan:** 
  - Find `generate_lead` i event-listen
  - Klik på toggle-switchen til højre for at markere det som Key Event
  - Dette er jeres primære konvertering!

#### 2. `cta_click`
- **Hvorfor:** Måler interesse når folk klikker på "Få leads nu" knapper
- **Hvordan:** Markér som Key Event

#### 3. `request_quote`
- **Hvorfor:** Måler interesse i priser/tilbud
- **Hvordan:** Markér som Key Event

#### 4. `phone_click`
- **Hvorfor:** Måler direkte kontaktforsøg
- **Hvordan:** Markér som Key Event (valgfrit)

### Trin 4: Verificer at events kommer ind

1. Gå til **Reports** → **Realtime**
2. Udfør en handling på dit website (f.eks. send formularen)
3. Du skulle se eventet dukke op i Realtime-rapporten
4. Hvis events ikke vises, tjek:
   - Er GDPR-samtykke givet? (Events sendes kun efter samtykke)
   - Er GA4 Measurement ID korrekt i `app.js`?
   - Er der JavaScript-fejl i browser console?

## Hvordan Google Site Kit passer ind

**Vigtigt:** Dit website bruger **ikke Google Site Kit plugin** lige nu. I stedet er analytics implementeret direkte i koden.

### Hvis du vil bruge Google Site Kit:

1. **Installér plugin:**
   - WordPress Admin → Plugins → Add New
   - Søg efter "Site Kit by Google"
   - Installer og aktiver

2. **Forbind til Google:**
   - Site Kit vil guide dig gennem forbindelsen
   - Du skal give tilladelse til Google Analytics

3. **Fordele ved Site Kit:**
   - Nemmere at se analytics i WordPress Admin
   - Automatisk opsætning af Search Console
   - Dashboard i WordPress

4. **Ulemper:**
   - Kan konflikte med jeres nuværende custom implementation
   - Måske dobbelt tracking hvis ikke konfigureret korrekt

### Anbefaling:

**Behold jeres nuværende setup** (custom implementation i `app.js`) fordi:
- ✅ Det virker allerede
- ✅ GDPR-compliant med Consent Mode v2
- ✅ Mere kontrol over hvad der trackes
- ✅ Ingen ekstra plugin overhead

**Brug Google Site Kit kun hvis:**
- Du vil have analytics dashboard i WordPress
- Du vil have nemmere adgang til Search Console data
- Du er okay med at konfigurere det korrekt for at undgå dobbelt tracking

## Troubleshooting

### Events vises ikke i GA4

1. **Tjek GDPR-samtykke:**
   - Events sendes kun efter brugeren accepterer cookies
   - Test ved at acceptere cookies og derefter udføre handling

2. **Tjek GA4 Measurement ID:**
   - Åbn `wp-content/themes/twentytwentyfive-child/app.js`
   - Find `GA_MEASUREMENT_ID` (linje ~14)
   - Verificer at det matcher dit GA4 Measurement ID

3. **Tjek browser console:**
   - Åbn Developer Tools (F12)
   - Gå til Console tab
   - Se efter fejl eller `[Analytics]` beskeder

4. **Tjek Realtime rapport:**
   - GA4 → Reports → Realtime
   - Udfør handlinger på sitet
   - Events skulle vises med 1-2 sekunders forsinkelse

### Key Events vises ikke som konverteringer

1. **Vent 24-48 timer:** Key Events kan tage tid før de vises i rapporter
2. **Tjek at eventet faktisk sendes:** Brug Realtime rapport
3. **Verificer at eventet er markeret som Key Event:** Admin → Events → Tjek toggle

## Næste skridt

1. ✅ Markér `generate_lead` som Key Event (mest vigtig!)
2. ✅ Markér `cta_click` som Key Event
3. ✅ Markér `request_quote` som Key Event
4. ✅ Vent 24-48 timer og tjek Conversion-rapporter
5. ✅ Opsæt conversion goals i Google Ads (hvis relevant)

## Yderligere ressourcer

- [GA4 Key Events Documentation](https://support.google.com/analytics/answer/9267568)
- [GA4 Event Tracking Guide](https://developers.google.com/analytics/devguides/collection/ga4/events)
- [Google Site Kit Documentation](https://sitekit.withgoogle.com/documentation/)

---

**Hvis du har brug for hjælp:**
- Tjek browser console for fejl
- Verificer at GDPR-samtykke virker
- Test events i Realtime rapport
- Kontakt mig hvis events stadig ikke vises

