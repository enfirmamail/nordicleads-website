<?php
/**
 * WordPress Script: Opret Case Study Sider (V2 - Human Version)
 * 
 * INSTRUKTIONER:
 * 1. Upload denne fil til din WordPress root (samme mappe som wp-config.php)
 * 2. Gå til: http://localhost:8000/create-case-studies-v2.php
 * 3. Scriptet opretter automatisk de 3 case study sider med naturlig tekst
 * 4. SLET FILEN EFTER BRUG (sikkerhed!)
 */

// Load WordPress
$wp_load_path = __DIR__ . '/wp-load.php';
if (!file_exists($wp_load_path)) {
    die('Fejl: wp-load.php ikke fundet. Filen skal være i WordPress root mappen.');
}

require_once($wp_load_path);

// Check if WordPress loaded
if (!function_exists('wp_insert_post')) {
    die('Fejl: WordPress er ikke korrekt indlæst. Tjek om wp-load.php findes.');
}

// Check if user is logged in
if (!is_user_logged_in()) {
    die('Fejl: Du skal være logget ind i WordPress for at køre dette script. <a href="' . wp_login_url($_SERVER['REQUEST_URI']) . '">Log ind her</a>');
}

// Check if user is admin
if (!current_user_can('manage_options')) {
    die('Fejl: Du skal være administrator for at køre dette script. Din bruger: ' . wp_get_current_user()->user_login);
}

// Check if ACF is active
$acf_active = function_exists('get_field');

echo '<html><head><meta charset="UTF-8"><title>Opretter Cases...</title></head><body>';
echo '<h1>Opretter Case Study Sider (V2 - Human Version)...</h1>';
echo '<style>body { font-family: Arial, sans-serif; padding: 20px; max-width: 900px; margin: 0 auto; } .success { color: green; background: #f0fdf4; padding: 1rem; margin: 1rem 0; border-radius: 8px; } .error { color: red; background: #fef2f2; padding: 1rem; margin: 1rem 0; border-radius: 8px; } .info { color: blue; background: #eff6ff; padding: 1rem; margin: 1rem 0; border-radius: 8px; }</style>';

// Case Study 1: DentalDesk
echo '<h2>1. DentalDesk Case Study</h2>';

$dentaldesk_content = <<<'EOT'
<h3>Situationen</h3>

<p>DentalDesk startede som en løsning på et ret konkret problem: Tandlægeklinikker bruger sindssygt meget tid på at svare i telefonen, booke tider og håndtere spørgsmål. Deres løsning? En AI-powered receptionist der kunne håndtere både telefonopkald og chatbots.</p>

<p>Produktet virkede. Kunderne de havde var glade. Men der var et kæmpe problem:</p>

<p><strong>De kunne ikke finde flere kunder.</strong></p>

<p>Teamet hos DentalDesk havde prøvet LinkedIn-annoncer. De fik clicks, men de var dyre og konverterede dårligt. De havde prøvet at ringe koldt til klinikker, men det var kaotisk og ineffektivt. De havde sendt emails til tilfældige klinikker de fandt online, men intet kom retur.</p>

<p>Efter 6 måneder sad de stadig med under 10 betalende kunder og en tom pipeline.</p>

<p>Det var der vi kom ind i billedet.</p>

<hr>

<h3>Hvad vi gjorde</h3>

<p>Vi startede med at lave det grundlæggende: Research.</p>

<p>Vi vidste at DentalDesk's produkt gav mening for klinikker. Problemet var at finde dem - og ikke bare tilfældige klinikker, men de rigtige.</p>

<p>Vi trak data fra CVR-registret og Google Maps og byggede en database med 300+ tandlægeklinikker i Danmark. Hver klinik blev screenet for kontaktinfo, klinikstørrelse og om de havde digital infrastruktur der gjorde dem til gode kandidater.</p>

<p>Derefter handlede det om outreach. Vi skrev personlige emails på dansk til klinikejere og daglige ledere. Ingen copypaste-templates. Hver email var skrevet til at vise at vi forstod deres hverdag: travle dage, patienter der ringer udenfor åbningstid, receptionister der skal have fri.</p>

<p>Vi fulgte op. Flere gange. Konsistent.</p>

<p>Og det virkede.</p>

<hr>

<h3>Hvad der skete</h3>

<p>Efter de første 2 måneder havde DentalDesk booket 30 demos. Halvdelen konverterede til betalende kunder.</p>

<p>Men så skete noget interessant. Vi begyndte at høre fra andre typer virksomheder. Kiropraktorer. Fysioterapeuter. Massører. Folk der havde nøjagtig samme problem som tandlægerne: For mange opkald, for lidt tid.</p>

<p>Vi udvidede strategien. Samme metode, nye lister. Indenfor 3 måneder havde DentalDesk over 50 nordiske bookninger og 300+ demoer udsendt.</p>

<p>Det sjove? De havde aldrig tænkt på kiropraktorer som en målgruppe. Men dataene viste at det gav perfekt mening.</p>

<hr>

<h3>Hvad der sker nu</h3>

<p>DentalDesk kører stadig med os. Deres næste skridt er at ekspandere til Norge, Sverige og Tyskland. Vi bygger allerede leads-lister i Oslo og Stockholm.</p>

<p>De har en skalerbar proces nu. Ikke bare et produkt der virker, men en måde at finde kunderne på der også virker.</p>

<hr>

<p><strong>Vil du have en lignende strategi for din virksomhed?</strong></p>

<p>Hvis du har et produkt der fungerer, men du sidder fast med at finde de rigtige kunder, så ved vi hvordan man løser det. Book et uforpligtende opkald og lad os se hvordan vi kan hjælpe.</p>
EOT;

$dentaldesk_page = array(
    'post_title'    => 'DentalDesk – Hvordan vi hjalp en dansk AI-startup med 50+ nordiske bookninger',
    'post_name'     => 'dentaldesk-case',
    'post_content'  => $dentaldesk_content,
    'post_excerpt'  => 'En dansk startup med en AI-receptionist løsning havde et solidt produkt, men sad fast. De vidste ikke hvordan de skulle finde klinikker der rent faktisk havde brug for dem. Vi hjalp med 50+ nordiske bookninger og 300+ demoer udsendt.',
    'post_status'   => 'publish',
    'post_type'     => 'page',
    'page_template' => 'page-case-study.php'
);

$dentaldesk_id = wp_insert_post($dentaldesk_page);

if ($dentaldesk_id && !is_wp_error($dentaldesk_id)) {
    update_post_meta($dentaldesk_id, '_wp_page_template', 'page-case-study.php');
    
    if ($acf_active) {
        update_field('case_company_name', 'DentalDesk.dk', $dentaldesk_id);
        update_field('case_quote', 'Vi havde produktet. Vi havde priserne. Men vi anede simpelthen ikke hvordan vi skulle finde beslutningstagerne hos klinikkerne. NordicLeads ordnede det på 3 måneder, og nu ekspanderer vi til Norge.', $dentaldesk_id);
        update_field('case_quote_author', 'Marcus', $dentaldesk_id);
        update_field('case_quote_role', 'Founder, DentalDesk', $dentaldesk_id);
        
        $stats = array(
            array('number' => '50+', 'label' => 'nordiske bookninger'),
            array('number' => '300+', 'label' => 'demoer udsendt')
        );
        update_field('case_stats', $stats, $dentaldesk_id);
    }
    
    echo '<div class="success">✅ DentalDesk case oprettet! <a href="' . get_permalink($dentaldesk_id) . '" target="_blank">Se siden</a></div>';
} else {
    echo '<div class="error">❌ Fejl ved oprettelse af DentalDesk case</div>';
}

// Case Study 2: Dmify
echo '<h2>2. Dmify Case Study</h2>';

$dmify_content = <<<'EOT'
<h3>Problemet</h3>

<p>Dmify havde bygget en SaaS-platform der gjorde det nemmere for virksomheder at optimere deres kundeflow og data. Det lyder simpelt, men det var dét der gjorde det svært.</p>

<p>Produktet var så fleksibelt at det kunne bruges af:</p>
<ul>
<li>E-commerce brands der ville forbedre checkout flows</li>
<li>Marketing agencies der kørte kampagner for kunder</li>
<li>SaaS-startups der skulle strukturere deres onboarding</li>
<li>Consulting firmaer der ville automatisere client management</li>
</ul>

<p>Fleksibilitet er godt på papiret. Men det skabte et kæmpe problem: <strong>Hvem skulle de egentlig sælge til?</strong></p>

<p>Teamet havde brugt 4 måneder på at prøve alt muligt. LinkedIn ads med bred targeting. Cold calls til tilfældige virksomheder. Generic emails der ikke ramte nogen. Resultatet? Få leads, endnu færre kunder, og ingen klar strategi.</p>

<p>De vidste at produktet var godt. Men de vidste ikke hvem der havde mest brug for det.</p>

<hr>

<h3>Vores tilgang</h3>

<p>Vi anbefalede noget de ikke havde regnet med: At teste bredt, men strategisk.</p>

<p>I stedet for at gætte hvilken niche der passede bedst, valgte vi at generere 10.000+ leads fordelt på 6 forskellige segmenter:</p>
<ul>
<li>Growth agencies (marketing/sales fokus)</li>
<li>Digital marketing bureauer</li>
<li>E-commerce brands (Shopify, WooCommerce)</li>
<li>SaaS-startups</li>
<li>Consulting firmaer</li>
<li>Tech-enabled service businesses</li>
</ul>

<p>Hver gruppe fik skræddersyet messaging baseret på deres specifikke pain points. For growth agencies talte vi om at skalere kunde-data. For e-commerce talte vi om conversion optimization. For SaaS-startups talte vi om onboarding flows.</p>

<p>Vi sendte emails, trackede svar-rater, bookings og konverteringer. Ikke i Danmark alene, men også i UK, Tyskland og Holland hvor email-reglerne er mindre strikse (men stadig 100% GDPR-compliant).</p>

<p>Efter 2 uger begyndte mønsteret at vise sig:</p>

<ul>
<li><strong>Growth agencies</strong> svarede 3x så ofte som andre segmenter</li>
<li><strong>SaaS-startups</strong> bookede flest demos</li>
<li><strong>UK-markedet</strong> konverterede bedre end Danmark</li>
</ul>

<p>Vi pivoterede. Vi droppede de segmenter der ikke fungerede og gik all-in på hvad der virkede.</p>

<hr>

<h3>Resultatet</h3>

<p>På 3 måneder havde Dmify lukket 120+ SaaS kunder og testet 10.000+ leads på tværs af seks segmenter.</p>

<p>Men det vigtigste? De havde fundet deres målgruppe.</p>

<p>Det var ikke e-commerce. Det var ikke SaaS. Det var <strong>growth agencies</strong> – virksomheder der hjalp andre med at skalere, og som havde brug for bedre værktøjer til at håndtere det.</p>

<p>Dmify kunne nu fokusere 100% af deres marketing og sales på én klar målgruppe. Deres messaging blev skarpere. Deres produkt blev mere målrettet. Og deres pipeline blev fyldt med kvalificerede leads.</p>

<hr>

<h3>Hvad der sker nu</h3>

<p>Dmify fortsætter med at vokse. De ekspanderer nu til Frankrig og Spanien med samme strategi: Test bredt, find hvad virker, og dobbelt ned.</p>

<p>Vi arbejder stadig sammen og bygger pipelines der leverer 200+ nye leads hver måned.</p>

<hr>

<p><strong>Har du også et bredt produkt?</strong></p>

<p>Hvis dit produkt kan bruges af flere typer virksomheder, men du ikke ved hvor du skal starte – det er okay. Vi hjælper dig med at teste, analysere og finde din rigtige målgruppe. Book et uforpligtende opkald og lad os tale om hvordan.</p>
EOT;

$dmify_page = array(
    'post_title'    => 'Dmify – Fra "hvem er vores kunde?" til 120+ SaaS kunder',
    'post_name'     => 'dmify-case',
    'post_content'  => $dmify_content,
    'post_excerpt'  => 'En dansk SaaS-virksomhed med et fleksibelt produkt havde et klassisk problem: Deres løsning kunne bruges af alle mulige virksomheder, men det gjorde det umuligt at finde ud af hvem de skulle kontakte. Vi fandt svaret gennem data og leverede 120+ SaaS-kunder.',
    'post_status'   => 'publish',
    'post_type'     => 'page',
    'page_template' => 'page-case-study.php'
);

$dmify_id = wp_insert_post($dmify_page);

if ($dmify_id && !is_wp_error($dmify_id)) {
    update_post_meta($dmify_id, '_wp_page_template', 'page-case-study.php');
    
    if ($acf_active) {
        update_field('case_company_name', 'Dmify.net', $dmify_id);
        update_field('case_quote', 'Vi anede ikke hvor vi skulle starte. Skulle vi gå efter e-commerce? Agencies? SaaS startups? NordicLeads testede det hele, fandt vores sweet spot og skaffede os 120+ SaaS-kunder. De blev en del af vores go-to-market strategi.', $dmify_id);
        update_field('case_quote_author', 'Oliver', $dmify_id);
        update_field('case_quote_role', 'Co-Founder, Dmify', $dmify_id);
        
        $stats = array(
            array('number' => '120+', 'label' => 'SaaS kunder'),
            array('number' => '10.000+', 'label' => 'leads testet')
        );
        update_field('case_stats', $stats, $dmify_id);
    }
    
    echo '<div class="success">✅ Dmify case oprettet! <a href="' . get_permalink($dmify_id) . '" target="_blank">Se siden</a></div>';
} else {
    echo '<div class="error">❌ Fejl ved oprettelse af Dmify case</div>';
}

// Case Study 3: Auto Specialisterne
echo '<h2>3. Auto Specialisterne Case Study</h2>';

$auto_content = <<<'EOT'
<h3>Situationen</h3>

<p>Auto Specialisterne ApS er et dansk marketing bureau der hjælper autoværksteder, bilforhandlere og automotive-virksomheder med at få flere kunder gennem digitale kanaler.</p>

<p>De havde en solid service: Google Ads optimeret til værksteder, SEO for lokal synlighed, social media marketing og booking-systemer der virkede. Deres kunder var glade, og ROI'en var god.</p>

<p>Men der var ét problem:</p>

<p><strong>De kunne ikke finde nok værksteder at sælge til.</strong></p>

<p>De prøvede manuelle søgninger på Google Maps. Det var tidskrævende og gav måske 10-15 værksteder om ugen. De prøvede LinkedIn prospecting, men de fleste værkstedsejere var ikke aktive der. De ringede koldt, men svar-raten var lav.</p>

<p>Efter 6 måneder havde de lukket 30 kunder. Det var okay. Men de ville vokse hurtigere.</p>

<hr>

<h3>Hvad vi gjorde</h3>

<p>Vi vidste at automotive-branchen er perfekt til lead generation. Hvorfor? Fordi dataen findes. CVR-registret har alle autoværksteder. Google Maps har telefonnumre og åbningstider. Hjemmesider har kontaktinfo til ejere og daglige ledere.</p>

<p>Vi byggede en database med 1000+ autoværksteder i Danmark. Vi fokuserede på Sjælland og Fyn (Auto Specialisternes primære område), og vi segmenterede efter:</p>

<ul>
<li>Uafhængige værksteder (mest interesserede)</li>
<li>Mærkeværksteder (Ford, Toyota, VW osv.)</li>
<li>Dækcentre og specialister</li>
<li>Mobile mekanikere</li>
</ul>

<p>Hver record indeholdt:</p>
<ul>
<li>Virksomhedsnavn og CVR</li>
<li>Navn på ejer eller daglig leder</li>
<li>Direkte email og telefonnummer</li>
<li>Antal medarbejdere</li>
<li>Specialisering (mærke/service)</li>
</ul>

<p>Alt blev DNC-screened og leveret i en struktureret Excel-fil klar til brug.</p>

<hr>

<h3>Outreach der virkede</h3>

<p>Men vi stoppede ikke ved research. Vi overtog også deres outreach.</p>

<p>Vi skrev personlige emails til værkstedsejere. Subject lines som "Thomas, mangler I kunder til jeres værksted i Roskilde?" fungerede langt bedre end generiske sales-emails.</p>

<p>Vi fokuserede på deres pain points: Tomme kalendere i lavsæson. Svingende kundeflow. Manglende online synlighed.</p>

<p>Vi fulgte op. Flere gange. Konsistent.</p>

<p>Og når værkstedsejerne svarede positivt, ringede Auto Specialisternes sales team op og bookede demos. Ikke hårdt salg. Bare en snak om hvordan de kunne hjælpe.</p>

<hr>

<h3>Resultatet</h3>

<p>På 4 måneder havde Auto Specialisterne lukket 20 nye autoværksteder som kunder. Med en gennemsnitlig deal size på 14.000 DKK om året, gav kampagnen et markant løft i ARR.</p>

<p>Men det vigtigste?</p>

<p>De havde nu en skalerbar proces. Tidligere tog det uger at finde 20-30 leads. Nu fik de 1000+ på under en uge. De kunne fokusere på salg i stedet for at google rundt efter værksteder.</p>

<hr>

<h3>Hvad der sker nu</h3>

<p>Auto Specialisterne ekspanderer nu til hele Danmark. Vi bygger allerede leads-databaser for Jylland med 600+ nye værksteder.</p>

<p>De planlægger også at gå til Sverige og Norge, hvor vi allerede har researched markedet.</p>

<hr>

<p><strong>Arbejder du med automotive?</strong></p>

<p>Hvis du sælger til autoværksteder, bilforhandlere eller andre automotive-virksomheder, kan vi levere præcist de leads du har brug for. Segmenteret, verificeret og klar til brug. Book et uforpligtende opkald og lad os snakke om hvordan vi kan hjælpe.</p>
EOT;

$auto_page = array(
    'post_title'    => 'Auto Specialisterne – Hvordan et marketing bureau fik 20 nye autoværksteder på 4 måneder',
    'post_name'     => 'auto-specialisterne-case',
    'post_content'  => $auto_content,
    'post_excerpt'  => 'Et dansk marketing agency ville sælge leadgeneration-løsninger til autoværksteder, men fandt kun 5-10 værksteder om måneden gennem manuelle søgninger. Vi skaffede dem 1000+ verificerede leads og hjalp dem med at konvertere 20 til nye kunder.',
    'post_status'   => 'publish',
    'post_type'     => 'page',
    'page_template' => 'page-case-study.php'
);

$auto_id = wp_insert_post($auto_page);

if ($auto_id && !is_wp_error($auto_id)) {
    update_post_meta($auto_id, '_wp_page_template', 'page-case-study.php');
    
    if ($acf_active) {
        update_field('case_company_name', 'Auto Specialisterne ApS', $auto_id);
        update_field('case_quote', 'Vi havde produktet. Vi havde salgsprocessen. Men vi kunne simpelthen ikke finde værkstederne hurtigt nok. NordicLeads leverede 1000 leads på en uge. Det tog os normalt 2 måneder. De forstod automotive bedre end vi selv gjorde.', $auto_id);
        update_field('case_quote_author', 'Thomas', $auto_id);
        update_field('case_quote_role', 'Salgschef, Auto Specialisterne', $auto_id);
        
        $stats = array(
            array('number' => '20', 'label' => 'nye autoværksteder'),
            array('number' => '1000+', 'label' => 'verificerede leads leveret')
        );
        update_field('case_stats', $stats, $auto_id);
    }
    
    echo '<div class="success">✅ Auto Specialisterne case oprettet! <a href="' . get_permalink($auto_id) . '" target="_blank">Se siden</a></div>';
} else {
    echo '<div class="error">❌ Fejl ved oprettelse af Auto Specialisterne case</div>';
}

// Create Cases Overview Page
echo '<h2>4. Cases Oversigtsside</h2>';

// Check if page already exists
$existing_cases_page = get_page_by_path('cases');
if ($existing_cases_page) {
    echo '<div class="info">ℹ️ Cases-siden eksisterer allerede. Opdaterer den...</div>';
    $cases_page_id = $existing_cases_page->ID;
    
    // Update existing page
    $cases_page_update = array(
        'ID'            => $cases_page_id,
        'post_title'    => 'Udvalgte success cases',
        'post_name'     => 'cases',
        'post_status'   => 'publish',
        'page_template' => 'page-cases.php'
    );
    wp_update_post($cases_page_update);
    update_post_meta($cases_page_id, '_wp_page_template', 'page-cases.php');
    
    echo '<div class="success">✅ Cases-siden opdateret! <a href="' . get_permalink($cases_page_id) . '" target="_blank">Se siden</a></div>';
} else {
    // Create new page
    $cases_page = array(
        'post_title'    => 'Udvalgte success cases',
        'post_name'     => 'cases',
        'post_content'  => '<p>Her er vores udvalgte success cases. Klik på hver case for at læse mere.</p>',
        'post_excerpt'  => 'Se hvordan vi har hjulpet danske og internationale virksomheder med at få flere kunder gennem lead generation og outreach.',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'page_template' => 'page-cases.php'
    );
    
    $cases_page_id = wp_insert_post($cases_page);
    
    if ($cases_page_id && !is_wp_error($cases_page_id)) {
        update_post_meta($cases_page_id, '_wp_page_template', 'page-cases.php');
        echo '<div class="success">✅ Cases-siden oprettet! <a href="' . get_permalink($cases_page_id) . '" target="_blank">Se siden</a></div>';
    } else {
        echo '<div class="error">❌ Fejl ved oprettelse af Cases-siden</div>';
        if (is_wp_error($cases_page_id)) {
            echo '<div class="error">Fejlbesked: ' . $cases_page_id->get_error_message() . '</div>';
        }
    }
}

// Summary
echo '<hr>';
echo '<h2>✅ Opsummering</h2>';

if ($acf_active) {
    echo '<div class="info">ℹ️ ACF er installeret - Custom fields er blevet sat op automatisk.</div>';
} else {
    echo '<div class="info">⚠️ ACF er IKKE installeret. Custom fields vil ikke vises, men hovedindholdet er der.</div>';
}

echo '<h3>Oprettede sider:</h3>';
echo '<ul style="line-height: 2;">';
if (isset($cases_page_id) && $cases_page_id) {
    echo '<li><strong>Cases Oversigt:</strong> <a href="' . get_permalink($cases_page_id) . '" target="_blank">' . get_permalink($cases_page_id) . '</a></li>';
}
echo '<li><strong>DentalDesk Case:</strong> <a href="' . get_permalink($dentaldesk_id) . '" target="_blank">' . get_permalink($dentaldesk_id) . '</a></li>';
echo '<li><strong>Dmify Case:</strong> <a href="' . get_permalink($dmify_id) . '" target="_blank">' . get_permalink($dmify_id) . '</a></li>';
echo '<li><strong>Auto Specialisterne Case:</strong> <a href="' . get_permalink($auto_id) . '" target="_blank">' . get_permalink($auto_id) . '</a></li>';
echo '</ul>';

echo '<hr>';
echo '<div class="error"><strong>⚠️ VIKTIGT:</strong> Slet denne fil nu (create-case-studies-v2.php) for sikkerhed!</div>';
echo '</body></html>';

