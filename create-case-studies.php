<?php
/**
 * WordPress Script: Opret Case Study Sider Automatisk
 * 
 * INSTRUKTIONER:
 * 1. Upload denne fil til din WordPress root (samme mappe som wp-config.php)
 * 2. Gå til: https://nordicleads.dk/create-case-studies.php
 * 3. Scriptet opretter automatisk de 3 case study sider
 * 4. SLET FILEN EFTER BRUG (sikkerhed!)
 * 
 * OBS: Dette script kræver at du er logget ind som admin i WordPress
 */

// Load WordPress
require_once('wp-load.php');

// Check if user is admin
if (!current_user_can('manage_options')) {
    die('Du skal være administrator for at køre dette script.');
}

// Check if ACF is active
$acf_active = class_exists('ACF');

echo '<h1>Opretter Case Study Sider...</h1>';
echo '<style>body { font-family: Arial, sans-serif; padding: 20px; } .success { color: green; } .error { color: red; } .info { color: blue; }</style>';

// Case Study 1: DentalDesk
echo '<h2>1. DentalDesk Case Study</h2>';

$dentaldesk_content = <<<EOT
### Udfordringen

DentalDesk var en lovende dansk startup med et innovativt produkt – AI-powered receptionist-løsninger der kunne håndtere både telefonopkald og chatbot-samtaler for travle klinikker. Produktet var teknisk solidt, kunderne elskede det, men der var ét stort problem: **de kunne ikke finde deres kunder**.

Teamet havde prøvet de traditionelle metoder:
- **LinkedIn reklamekampagner** der kostede for meget og gav for lidt
- **Kolde opkald** uden struktur eller systematik
- **Tilfældige emails** til klinikker de fandt online
- **Networking events** med begrænset reach

Resultatet? En tom pipeline, få bookinger, og en følelse af at køre rundt i ring.

De havde brug for en **systematisk, skalerbar tilgang** til at finde og kontakte de rigtige beslutningstagere på hundredvis af klinikker – hurtigt.

---

### Vores Løsning

Vi analyserede DentalDesk's situation og så med det samme potentialet. Deres produkt løste et reelt problem for en klar målgruppe. De havde bare brug for den rigtige tilgang til lead generation og outreach.

#### 🎯 **Phase 1: Lead Research & Segmentering**

Vi startede med at bygge en målrettet database:
- **300+ tandlægeklinikker** fra CVR-registret og Google Maps
- **Verificerede kontaktoplysninger** – direktør, klinikansvarlig, eller klinikejere
- **DNC-screening** for at sikre 100% GDPR-compliance
- **Segmentering** efter klinikstørrelse, geografi og digital modenhed

Alt blev leveret i strukturerede CSV-filer klar til brug.

#### 📧 **Phase 2: Professionel Outreach**

Vi overtog hele outreach-processen:
- **Personaliserede emails på dansk** skrevet til klinikejere og beslutningstagere
- **Multi-touch sequences** med follow-ups der faktisk virkede
- **Unsubscribe links** og fuld GDPR-compliance i hver email
- **A/B testing** af subject lines og messaging for optimal performance

#### 🚀 **Phase 3: Niche Expansion**

Da resultaterne begyndte at komme, udvidede vi målgruppen:
- **Kiropraktorer** der havde samme behov for reception-hjælp
- **Fysioterapeuter og massører** med travle klinikker
- **Endda restauranter** der havde brug for booking-håndtering

Vi byggede nye leadlister for hver vertikal og tilpassede messaging til deres specifikke pain points.

---

### Resultater

Resultaterne var over al forventning:

#### 📈 **50+ Bookinger på 3 måneder**
Fra næsten ingen demos til en fyldt kalender med kvalificerede interessenter.

#### 🎯 **18% Conversion Rate**
Langt over branchegennemsnittet for B2B cold outreach (typisk 1-3%).

#### 💰 **85% Lavere CAC**
Customer Acquisition Cost faldt drastisk sammenlignet med deres tidligere LinkedIn ads.

#### 🌍 **Geografisk Ekspansion**
Med succesen i Danmark var DentalDesk klar til at ekspandere til **Norge, Sverige og Tyskland** – med os som deres lead generation partner.

---

### Hvad Gjorde Forskellen?

#### ✅ **Systematik over improvisation**
I stedet for tilfældige outreach-forsøg havde vi en datadrevet proces der kunne skaleres.

#### ✅ **Niche-first approach**
Vi startede smalt (tandlæger) og udvidede kun da vi havde bevist success.

#### ✅ **GDPR-compliant fra dag 1**
Ingen spam, ingen risiko – bare professionel B2B kommunikation baseret på legitim interesse.

#### ✅ **Messaging der resonerede**
Vi testede og optimerede hver email til vi ramte den rigtige tone for klinikejere.

---

### Fremtiden

DentalDesk er nu klar til international vækst, og vi er med dem hele vejen. I 2025 skal vi hjælpe dem med at:
- **Ekspandere til Norge og Sverige** med lokaliseret outreach
- **Entre det tyske marked** hvor receptionist-løsninger er i høj efterspørgsel
- **Skalere deres pipeline** til 100+ bookinger om måneden

---

### Vil Du Have Lignende Resultater?

Hvis din virksomhed sidder fast med lead generation, eller du ved der er tusindvis af potentielle kunder derude – men du bare ikke ved hvordan du når dem – så kan vi hjælpe.

**Vi leverer:**
- ✅ Verificerede, GDPR-sikre leads fra offentlige kilder
- ✅ Professionel outreach der får svar
- ✅ En systematisk proces der kan skaleres

[Få et uforpligtende tilbud](#kontakt)
EOT;

$dentaldesk_page = array(
    'post_title'    => 'DentalDesk – Fra 0 til 50+ Bookinger på 3 Måneder',
    'post_name'     => 'dentaldesk-50-bookinger',
    'post_content'  => $dentaldesk_content,
    'post_excerpt'  => 'Dansk AI-powered receptionist startup skulle skalere hurtigt, men havde ingen systematisk måde at nå ud til klinikker. Vi hjalp dem med at få 50+ bookinger gennem målrettet lead generation og professionel outreach.',
    'post_status'   => 'publish',
    'post_type'     => 'page',
    'page_template' => 'page-case-study.php'
);

$dentaldesk_id = wp_insert_post($dentaldesk_page);

if ($dentaldesk_id && !is_wp_error($dentaldesk_id)) {
    update_post_meta($dentaldesk_id, '_wp_page_template', 'page-case-study.php');
    
    if ($acf_active) {
        update_field('case_company_name', 'DentalDesk.dk', $dentaldesk_id);
        update_field('case_quote', 'NordicLeads gav os den struktur vi manglede. Fra tom kalender til fyldt pipeline på under 3 måneder. Vi udvider nu til Norge og Sverige med deres hjælp.', $dentaldesk_id);
        update_field('case_quote_author', 'DentalDesk Team', $dentaldesk_id);
        update_field('case_quote_role', 'Founder & CEO', $dentaldesk_id);
        
        // Stats repeater
        $stats = array(
            array('number' => '50+', 'label' => 'Nye bookinger'),
            array('number' => '300+', 'label' => 'Klinikker kontaktet'),
            array('number' => '18%', 'label' => 'Conversion rate')
        );
        update_field('case_stats', $stats, $dentaldesk_id);
    }
    
    echo '<p class="success">✅ DentalDesk case oprettet! ID: ' . $dentaldesk_id . '</p>';
} else {
    echo '<p class="error">❌ Fejl ved oprettelse af DentalDesk case</p>';
}

// Case Study 2: Dmify
echo '<h2>2. Dmify Case Study</h2>';

$dmify_content = <<<EOT
### Udfordringen

Dmify havde et problem som mange tech-startups står overfor: **et fantastisk produkt, men ingen klar målgruppe**.

Deres SaaS-platform kunne bruges af:
- **B2C virksomheder** der ville optimere deres kundeflow
- **B2B virksomheder** med komplekse sales pipelines  
- **Marketing agencies** der arbejdede med multiple klienter
- **E-commerce brands** der skulle skalere deres operations

Produktet var fleksibelt – men netop dét gjorde det svært at sælge. Hvem skulle de kontakte? Hvor mange leads skulle de generere? Hvilken messaging virkede?

De havde prøvet:
- ❌ **Bred targeting** der gav lav conversion
- ❌ **LinkedIn ads** med høje CPL og lav ROI
- ❌ **Cold calling** uden struktur
- ❌ **Generic emails** der endte i spam

Det var tid til en **helt ny tilgang**.

---

### Vores Strategi: Data-Driven Niche Discovery

I modsætning til DentalDesk, hvor målgruppen var krystalklar (tandlægeklinikker), var Dmify's situation anderledes. Vi skulle **finde den rigtige niche gennem testing**.

#### 📊 **Phase 1: Massiv Lead Generation & Testing**

Fordi successraten var usikker, lavede vi en **høj-volumen strategi**:

- **1200+ leads** genereret fra CVR, LinkedIn, og industry databases
- **Segmenteret i 6 test-grupper:**
  - Growth agencies (marketing/sales fokus)
  - Digital marketing agencies  
  - E-commerce brands (Shopify, WooCommerce)
  - SaaS startups
  - Consulting firms
  - Tech-enabled service businesses

Hver gruppe fik **skræddersyet messaging** baseret på deres pain points.

#### 🌍 **Phase 2: Multi-Market Expansion**

Danmark er et lille marked. Vi udvidede derfor til lande med **mindre streng email-lovgivning** (men stadig 100% GDPR-compliant):

- **UK** – stort SaaS marked, engelsk-sproget outreach
- **Tyskland** – stærk B2B kultur, behov for automation tools
- **Nederland** – tech-forward businesses, høj email engagement

Vi sikrede:
✅ **Unsubscribe links** i hver email  
✅ **DNC-screening** på tværs af markets  
✅ **Lokaliseret messaging** tilpasset hver regions tone  
✅ **Follow GDPR Artikel 6(1)(f)** – legitim interesse

#### 📈 **Phase 3: Optimize & Scale**

Efter 2 ugers testing så vi klare trends:
- **Growth agencies** havde 3x højere svarrate
- **SaaS startups** bookede flest demos
- **UK markedet** gav bedst ROI

Vi **pivoterede hele strategien** til at fokusere på disse segmenter og skalerede output.

---

### Resultater

#### 🎯 **127 Nye Kunder**
Fra 0 struktur til et systematisk sales-flow der levererede konsistent vækst.

#### 📊 **41% Email Open Rate**
Langt over branchegennemsnittet (typisk 15-20%), takket være præcis targeting og personalisering.

#### 💰 **3x ROI på 3 måneder**
Hver krone investeret i lead generation gav 3 kroner tilbage i closed deals.

#### 🌍 **International Presence**
Dmify gik fra at være en lokal dansk startup til at have kunder i 4 markeder.

---

### Hvad Gjorde Forskellen?

#### ✅ **Volume + Testing = Clarity**
Fordi vi ikke kendte den rigtige niche, testede vi massivt og lod data guide strategien.

#### ✅ **Multi-Market Approach**
Ved at ekspandere til UK og Tyskland fik vi adgang til større markets med lavere email-restriktioner.

#### ✅ **Agency-First Targeting**
Growth agencies blev vores golden niche – de havde budgettet, behovet, og decision-making power.

#### ✅ **Iterativ Optimering**
Vi stoppede ikke efter første resultat. Vi doublede down på hvad virkede og droppede hvad ikke gjorde.

---

### Lessons Learned

Dmify-casen viste os noget vigtigt: **Ikke alle virksomheder har en klar niche fra start**.

Mange SaaS-produkter er brede, fleksible, og kan bruges af multiple industries. I de tilfælde skal lead generation strategien være:

1. **Start bredt** – test multiple segmenter
2. **Measure ruthlessly** – track open rates, reply rates, booking rates
3. **Pivot hurtigt** – double down på winners, drop losers
4. **Scale smart** – når du finder PMF (product-market fit), kør fuld gas

---

### Hvad Nu?

Dmify fortsætter deres vækst, og vi er stadig deres foretrukne lead generation partner. I 2025 planlægger vi:

- **Ekspansion til Frankrig og Spanien**
- **1000+ leads om måneden** gennem automatiserede pipelines
- **Partnership program** hvor vi finder agencies der kan reselle Dmify

---

### Har Du Også en Bred Målgruppe?

Hvis dit produkt kan bruges af flere typer virksomheder, og du ikke er sikker på hvor du skal starte – **det er okay**.

Vi hjælper dig med at:
- ✅ Teste multiple segmenter med struktureret A/B testing
- ✅ Generere høje volumener af leads hurtigt
- ✅ Analysere resultaterne og finde din golden niche
- ✅ Skalere når vi har fundet product-market fit

[Få et uforpligtende tilbud](#kontakt)
EOT;

$dmify_page = array(
    'post_title'    => 'Dmify – 127 Nye Kunder gennem Strategisk Multi-Market Lead Generation',
    'post_name'     => 'dmify-127-nye-kunder',
    'post_content'  => $dmify_content,
    'post_excerpt'  => 'Tech SaaS virksomhed med bred målgruppe kæmpede med at finde deres sweet spot. Vi hjalp dem med at skaffe 127 nye kunder gennem data-driven segmentering og strategisk multi-market outreach.',
    'post_status'   => 'publish',
    'post_type'     => 'page',
    'page_template' => 'page-case-study.php'
);

$dmify_id = wp_insert_post($dmify_page);

if ($dmify_id && !is_wp_error($dmify_id)) {
    update_post_meta($dmify_id, '_wp_page_template', 'page-case-study.php');
    
    if ($acf_active) {
        update_field('case_company_name', 'Dmify.net', $dmify_id);
        update_field('case_quote', 'Vi anede ikke hvor vi skulle starte med lead generation. NordicLeads gjorde ikke bare research – de blev en del af vores go-to-market strategi. 127 nye kunder på 3 måneder taler for sig selv.', $dmify_id);
        update_field('case_quote_author', 'Dmify Team', $dmify_id);
        update_field('case_quote_role', 'Co-Founder', $dmify_id);
        
        // Stats repeater
        $stats = array(
            array('number' => '127', 'label' => 'Nye kunder'),
            array('number' => '1200+', 'label' => 'Kvalificerede leads'),
            array('number' => '41%', 'label' => 'Email open rate')
        );
        update_field('case_stats', $stats, $dmify_id);
    }
    
    echo '<p class="success">✅ Dmify case oprettet! ID: ' . $dmify_id . '</p>';
} else {
    echo '<p class="error">❌ Fejl ved oprettelse af Dmify case</p>';
}

// Case Study 3: Auto Specialisterne
echo '<h2>3. Auto Specialisterne Case Study</h2>';

$auto_content = <<<EOT
### Udfordringen

Auto Specialisterne ApS er et dansk marketing- og lead generation agency der hjælper autoværksteder, bilforhandlere og automotive servicevirksomheder med at få flere kunder gennem digitale kanaler.

De havde et solidt value proposition:
- **Google Ads kampagner** specifikt til automotive industrien
- **SEO optimering** for værksteder der vil ranke lokalt
- **Social media marketing** rettet mod bilentusiaster
- **Lead generation systemer** der bragte bookinger direkte ind

Men der var ét problem: **de kunne ikke finde nok værksteder at sælge til**.

De havde prøvet:
- ❌ **Manuelle søgninger på Google Maps** – tidskrævende og ineffektivt
- ❌ **LinkedIn prospecting** – få værkstedsejere var aktive på LinkedIn
- ❌ **Kolde opkald** – lav svarrate fra travle værksteder
- ❌ **Køb af leadlister** – forældede data, dårlig kvalitet, tvivlsom compliance

De havde brug for **strukturerede, verificerede leads fra automotive industrien** – hurtigt og i stor skala.

---

### Vores Løsning: Hyper-Targeted Automotive Research

Vi vidste at automotive industrien er **perfekt til lead generation** fordi:
- ✅ Alle værksteder er registreret i CVR-registret
- ✅ De fleste har hjemmesider med kontaktinfo
- ✅ Google Maps viser præcise lokationer og telefonnumre
- ✅ Det er en B2B kontekst med klar legitim interesse

#### 🎯 **Phase 1: Database Opbygning**

Vi byggede Danmarks mest omfattende automotive lead database:

**Kilder:**
- **CVR-registret** – alle registrerede autoværksteder og bilfirmaer
- **Google Maps scraping** – kontaktinfo, åbningstider, reviews
- **Firmahjemmesider** – email til ejere og daglige ledere
- **Brancheregistre** – specialisering (mærker, services)

**Segmentering:**
- Uafhængige værksteder (mest interessante kunder)
- Mærkeværksteder (Ford, Toyota, VW, etc.)
- Bilforhandlere med egen service
- Dækcentre og specialistværksteder
- Mobile mekanikere

**Datafelter:**
- ✅ Virksomhedsnavn
- ✅ CVR-nummer
- ✅ Ejer/daglig leder navn
- ✅ Direkte email
- ✅ Telefon
- ✅ Adresse & postnummer
- ✅ Hjemmeside
- ✅ Antal medarbejdere
- ✅ Specialisering/mærke

Alt blev **DNC-screenet** og leveret i en struktureret Excel-fil.

#### 📍 **Phase 2: Geografisk Targeting**

Auto Specialisterne fokuserede primært på **Sjælland og Fyn**, så vi filtrerede:
- Postnumre indenfor deres service-område
- Værksteder med 2-15 medarbejdere (sweet spot)
- Uafhængige værksteder først (højere conversion)

Dette gav os **800+ høj-kvalitet leads** klar til outreach.

#### 📞 **Phase 3: Multi-Channel Outreach**

Vi hjalp ikke kun med lead generation – vi overtog også outreach:

**Email Campaigns:**
- Personaliserede emails til værkstedsejere
- Subject lines der fangede opmærksomhed: *"Thomas, mangler I kunder til jeres værksted?"*
- Pain-point fokuseret messaging om tomme kalendere og sæsonudsving
- Case studies fra andre værksteder som social proof

**Phone Follow-ups:**
- Auto Specialisterne's sales team ringede op baseret på email engagement
- Vi leverede scripts og talking points
- Fokus på booking af demos, ikke hårdt salg

**LinkedIn Touch:**
- Vi fandt værkstedsejere på LinkedIn (hvor relevant)
- Connection requests med personal note
- Soft nurturing før sales-samtalen

---

### Resultater

#### 🚗 **127 Lukkede Salg**
Fra 800 leads til 127 betalende kunder på 4 måneder. En **conversion rate på 15,9%** fra lead til customer.

#### 📊 **22% Booking Rate**
Mere end hver femte værksted bookede en demo eller salgsmøde efter vores outreach.

#### 💰 **1.8M DKK i ny revenue**
Med en average deal size på 14.000 DKK, genererede kampagnen over 1.8 millioner kroner i årlig recurring revenue.

#### ⏱️ **85% hurtigere pipeline fill**
Tidligere tog det Auto Specialisterne uger at finde 20-30 kvalificerede leads. Nu fik de 800+ på under en uge.

---

### Hvad Gjorde Forskellen?

#### ✅ **Niche Expertise**
Vi forstod automotive industrien og vidste præcis hvor data fandtes og hvordan den skulle struktureres.

#### ✅ **Multi-Source Research**
Ved at kombinere CVR + Google Maps + hjemmesider fik vi de mest komplette og opdaterede kontaktinfo.

#### ✅ **Geografisk Præcision**
I stedet for at spilde tid på leads i Nordjylland (udenfor deres range), fokuserede vi på Sjælland/Fyn.

#### ✅ **Multi-Channel Tilgang**
Email + opkald + LinkedIn sikrede at vi ramte beslutningstagerne på deres foretrukne kanal.

---

### Automotive Industrien er Perfekt til Lead Generation

Hvis du arbejder med automotive industrien – hvad enten du er:
- Marketing agency der sælger til værksteder
- SaaS produkt til automotive (booking, CRM, inventory)
- B2B service provider (regnskab, forsikring, leasing)
- Reservedelsleverandør eller værktøjsforhandler

...så er lead generation **nemmere end i de fleste andre brancher**, fordi:

1. **Data er tilgængelig** – CVR + Google Maps giver struktureret info
2. **Klar B2B kontekst** – legitim interesse er nem at påvise
3. **Beslutningstagere er tilgængelige** – værkstedsejere tager deres telefon og svarer på emails
4. **Høj LTV (lifetime value)** – automotive businesses bliver langsigtede kunder

---

### Hvad Nu?

Auto Specialisterne fortsætter deres vækst og planlægger at ekspandere til **hele Danmark** i 2025. Vi arbejder allerede på:

- **Jylland-databasen** med 600+ nye værksteder
- **Mærkespecialist segmentering** (luksus brands vs. volume brands)
- **International expansion** til Sverige og Norge

---

### Arbejder Du med Automotive?

Hvis din virksomhed sælger til:
- 🚗 Autoværksteder
- 🚙 Bilforhandlere  
- 🔧 Specialistværksteder (dæk, bremser, elektronik)
- 📱 Tech/SaaS til automotive
- 💼 B2B services til automotive industrien

...så kan vi levere **præcist de leads du har brug for**.

**Vi leverer:**
- ✅ 100-1000+ leads med komplet kontaktinfo
- ✅ Segmenteret efter geografi, størrelse, og specialisering
- ✅ DNC-screened og GDPR-compliant
- ✅ Leveret i Excel/CSV klar til import i dit CRM
- ✅ Optional: Professionel outreach on your behalf

[Få et uforpligtende tilbud](#kontakt)
EOT;

$auto_page = array(
    'post_title'    => 'Auto Specialisterne – 127 Salg gennem Hyper-Targeted Automotive Leads',
    'post_name'     => 'auto-specialisterne-127-salg',
    'post_content'  => $auto_content,
    'post_excerpt'  => 'Dansk automotive marketing agency skulle finde værksteder der havde brug for hjælp til at skaffe flere kunder. Vi leverede 800+ verificerede leads og hjalp dem med at lukke 127 salg på 4 måneder.',
    'post_status'   => 'publish',
    'post_type'     => 'page',
    'page_template' => 'page-case-study.php'
);

$auto_id = wp_insert_post($auto_page);

if ($auto_id && !is_wp_error($auto_id)) {
    update_post_meta($auto_id, '_wp_page_template', 'page-case-study.php');
    
    if ($acf_active) {
        update_field('case_company_name', 'Auto Specialisterne ApS', $auto_id);
        update_field('case_quote', 'NordicLeads forstod automotive branchen bedre end nogen anden. De gav os ikke bare leads – de gav os den præcise målgruppe der havde brug for vores hjælp. 127 salg på 4 måneder er langt over hvad vi havde forventet.', $auto_id);
        update_field('case_quote_author', 'Thomas Nielsen', $auto_id);
        update_field('case_quote_role', 'Salgschef, Auto Specialisterne ApS', $auto_id);
        
        // Stats repeater
        $stats = array(
            array('number' => '127', 'label' => 'Lukkede salg'),
            array('number' => '800+', 'label' => 'Verificerede leads'),
            array('number' => '22%', 'label' => 'Booking rate')
        );
        update_field('case_stats', $stats, $auto_id);
    }
    
    echo '<p class="success">✅ Auto Specialisterne case oprettet! ID: ' . $auto_id . '</p>';
} else {
    echo '<p class="error">❌ Fejl ved oprettelse af Auto Specialisterne case</p>';
}

// Summary
echo '<hr>';
echo '<h2>✅ Opsummering</h2>';

if ($acf_active) {
    echo '<p class="info">ℹ️ ACF er installeret - Custom fields er blevet sat op automatisk.</p>';
} else {
    echo '<p class="info">⚠️ ACF er IKKE installeret. Du skal manuelt tilføje custom fields eller bruge standard WordPress meta fields.</p>';
    echo '<p>Se <strong>CASE-STUDY-SETUP-GUIDE.md</strong> for instruktioner om at tilføje custom fields manuelt.</p>';
}

echo '<h3>Oprettede sider:</h3>';
echo '<ul>';
echo '<li><a href="' . get_permalink($dentaldesk_id) . '" target="_blank">DentalDesk Case Study</a></li>';
echo '<li><a href="' . get_permalink($dmify_id) . '" target="_blank">Dmify Case Study</a></li>';
echo '<li><a href="' . get_permalink($auto_id) . '" target="_blank">Auto Specialisterne Case Study</a></li>';
echo '</ul>';

echo '<hr>';
echo '<p><strong>⚠️ VIKTIGT:</strong> Slet denne fil nu (create-case-studies.php) for sikkerhed!</p>';
echo '<p>Du kan slette den via FTP eller file manager.</p>';

