# Unsubscribe / DNC List Setup Guide

## ✅ Hvad er implementeret

1. ✅ **Unsubscribe side** (`page-unsubscribe.php`)
2. ✅ **AJAX handler** til at tilføje emails til listen
3. ✅ **JavaScript form handling** i `app.js`
4. ✅ **Footer link** tilføjet under "Juridisk & Compliance"
5. ✅ **CSS styling** tilføjet
6. ✅ **PHP funktioner** til at håndtere unsubscribe/DNC liste

## 📋 Sådan opsætter du siden i WordPress

### Trin 1: Opret Unsubscribe Side

1. Gå til **WordPress Admin → Pages → Add New**
2. **Titel:** `Afmeld nyhedsbrev`
3. **Permalink/Slug:** `unsubscribe` (vigtigt!)
4. **Template:** Vælg **"Unsubscribe / DNC List"** fra dropdown
5. **Publish** siden

### Trin 2: Verificer Footer Link

- Linket tilføjes automatisk til footer under "Juridisk & Compliance"
- Link: `/unsubscribe`

## 📁 Hvor listen gemmes

Unsubscribe/DNC listen gemmes i:
```
wp-content/uploads/nordicleads-unsubscribe.txt
```

Denne fil er:
- ✅ Automatisk oprettet når første unsubscribe sker
- ✅ Kan læses direkte fra filsystemet
- ✅ En email per linje (lowercase, trimmed)
- ✅ Sorteret alfabetisk

## 🔧 Sådan bruger du listen i din anden proces

### Metode 1: Læs direkte fra fil

```php
function is_email_unsubscribed($email) {
    $unsubscribe_file = '/path/to/wp-content/uploads/nordicleads-unsubscribe.txt';
    
    if (!file_exists($unsubscribe_file)) {
        return false;
    }
    
    $content = file_get_contents($unsubscribe_file);
    if (!$content) {
        return false;
    }
    
    $emails = array_map('trim', explode("\n", $content));
    $emails = array_map('strtolower', $emails);
    $email = strtolower(trim($email));
    
    return in_array($email, $emails);
}

// Brug:
if (is_email_unsubscribed('test@example.com')) {
    // Skip denne email - de er på DNC listen
    continue;
}
```

### Metode 2: Download filen manuelt

1. Gå til `wp-content/uploads/nordicleads-unsubscribe.txt`
2. Download filen
3. Brug den i din anden proces til at checke emails

### Metode 3: Via HTTP (hvis filen er tilgængelig)

Hvis din webserver tillader det, kan du læse filen via:
```
https://nordicleads.dk/wp-content/uploads/nordicleads-unsubscribe.txt
```

⚠️ **Sikkerhed:** Sørg for at beskytte denne fil, eller læs den via en API endpoint i stedet.

## 📧 Tilføj Unsubscribe Link til Emails

I alle jeres nyhedsbrev emails, tilføj denne link:

```
https://nordicleads.dk/unsubscribe
```

Eller med email parameter (kan auto-udfylde):
```
https://nordicleads.dk/unsubscribe?email={EMAIL}
```

## 🔒 GDPR Compliance

- ✅ Unsubscribe er en-klik proces
- ✅ Email tilføjes til DNC liste med det samme
- ✅ Ingen samtykke nødvendig - unsubscribe er altid tilladt
- ✅ Fil gemmes på sikker server
- ✅ Ingen personlige data gemmes udover email

## 🧪 Test

1. Gå til `https://nordicleads.dk/unsubscribe`
2. Indtast en test email
3. Klik "Afmeld mig"
4. Tjek at success besked vises
5. Verificer at email er tilføjet til filen:
   - Fil: `wp-content/uploads/nordicleads-unsubscribe.txt`
   - Email skulle være der (lowercase)

## 🐛 Troubleshooting

### Fil oprettes ikke automatisk
- **Løsning:** Tjek at `wp-content/uploads/` mappen er skrivbar
- **Fix:** Sæt permissions til 755 på uploads mappen

### Emails bliver ikke tilføjet
- **Tjek:** Browser console for JavaScript fejl
- **Tjek:** WordPress debug log for PHP fejl
- **Tjek:** At nonce er korrekt i AJAX request

### Fil kan ikke læses fra anden proces
- **Tjek:** Fil permissions (skal være 644 eller 755)
- **Tjek:** Fil path er korrekt
- **Alternativ:** Brug WordPress API endpoint (kan laves hvis nødvendigt)

## 📝 Fil Format

Listen er simpel tekstfil, en email per linje:
```
test1@example.com
test2@example.com
user@domain.dk
```

- Alle emails er lowercase
- Alle emails er trimmed (ingen spaces)
- Filen er sorteret alfabetisk
- Hver email på egen linje

## ✅ Checklist

- [ ] Unsubscribe side oprettet i WordPress
- [ ] Template valgt: "Unsubscribe / DNC List"
- [ ] Side published
- [ ] Footer link vises korrekt
- [ ] Test unsubscribe virker
- [ ] Fil oprettes i `wp-content/uploads/`
- [ ] Email tilføjes korrekt til filen
- [ ] Unsubscribe link tilføjet til nyhedsbrev emails

---

**Support:** Hvis du har problemer, tjek WordPress debug log eller browser console for fejl.

