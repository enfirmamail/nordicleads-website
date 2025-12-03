# Fix Permalinks for /cases URL

## Problem
Links viser `?page_id=41` i stedet for `/cases` fordi WordPress permalinks ikke er sat korrekt.

## Løsning

### Trin 1: Fix Permalinks i WordPress

1. **Log ind på WordPress Admin**
   - Gå til `https://nordicleads.dk/wp-admin`

2. **Gå til Settings → Permalinks**
   - Eller **Indstillinger → Permanente links** (hvis på dansk)

3. **Vælg "Post name"**
   - Vælg **"Post name"** (eller **"Indlægsnavn"**)
   - Dette giver URLs som `/cases` i stedet for `?page_id=41`

4. **Klik "Save Changes"**
   - WordPress vil nu bruge pæne URLs

### Trin 2: Tjek Cases-siden

1. **Gå til Pages → All Pages**
   - Find "Cases" siden

2. **Tjek Permalink/Slug**
   - Klik på "Cases" for at redigere
   - Under titlen skal der stå: **Permalink: /cases**
   - Hvis ikke, klik på "Edit" ved siden af permalink og skriv `cases`

3. **Publish/Update siden**
   - Klik "Update" hvis du har ændret noget

### Trin 3: Test

1. **Gå til forsiden**
   - Klik på "Cases" link i navigation
   - URL skal nu være: `https://nordicleads.dk/cases`
   - Ikke: `https://nordicleads.dk/?page_id=41`

2. **Hvis det stadig ikke virker:**
   - Gå til Settings → Permalinks igen
   - Klik bare "Save Changes" uden at ændre noget
   - Dette opdaterer `.htaccess` filen

## Alternativ: Hvis Permalinks ikke virker

Hvis permalinks stadig ikke virker (fx på localhost), kan du:

1. **Brug WordPress Menu System**
   - Gå til Appearance → Menus
   - Tilføj "Cases" siden til dit menu
   - WordPress håndterer links automatisk

2. **Eller brug hardcoded link (kun hvis nødvendigt)**
   - Links i header.php bruger nu WordPress' `get_permalink()` funktion
   - De finder automatisk cases-siden uanset URL-struktur

## Verificering

Efter fix, tjek:
- ✅ Navigation link virker
- ✅ URL er `/cases` ikke `?page_id=41`
- ✅ Siden loader korrekt
- ✅ Mobile menu virker også

## Teknisk Info

Koden i `header.php` finder nu cases-siden dynamisk:
```php
$cases_page = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-cases.php'
));
$cases_url = get_permalink($cases_page[0]->ID);
```

Dette betyder at links virker uanset permalink-struktur, men `/cases` er stadig bedre for SEO og UX.


