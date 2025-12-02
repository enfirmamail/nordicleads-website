<?php
/**
 * Template Name: Cases
 * Description: NordicLeads - Success Cases & Customer Stories
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" role="main">

    <!-- Hero Section - Clean & Minimal -->
    <section class="nl-cases-hero">
        <div class="nl-container">
            <div class="nl-cases-hero-content">
                <h1 class="nl-cases-title">Se hvordan vi har hjulpet danske virksomheder med kvalificerede leads</h1>
                <p class="nl-cases-subtitle">
                    Fra 50 til tusindvis af leads – 100% GDPR-sikker. Verificerede kontakter fra CVR og offentlige kilder, skræddersyet til din branche.
                </p>
            </div>
        </div>
    </section>

    <!-- Cases Grid -->
    <section class="nl-cases-section">
        <div class="nl-container">
            <div class="nl-cases-grid">
                
                <!-- Case 1: Dmify.net -->
                <article class="nl-case-card">
                    <div class="nl-case-logo-wrapper">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" class="nl-case-logo-img">
                    </div>
                    <h2 class="nl-case-title">127 nye kunder på 3 måneder</h2>
                    
                    <div class="nl-case-content">
                        <div class="nl-case-section">
                            <h3 class="nl-case-section-title">Udfordring</h3>
                            <p class="nl-case-text">
                                Tech-startup manglede strukturerede leads til software-salg. Ingen systematisk tilgang til at finde potentielle kunder.
                            </p>
                        </div>
                        
                        <div class="nl-case-section">
                            <h3 class="nl-case-section-title">Løsning</h3>
                            <p class="nl-case-text">
                                Vi leverede 500 leads fra CVR-registret, filtreret efter virksomhedsstørrelse og branche. Alle kontakter verificerede og klar til kontakt.
                            </p>
                        </div>
                        
                        <div class="nl-case-section">
                            <h3 class="nl-case-section-title">Resultater</h3>
                            <p class="nl-case-text">
                                +35% flere kunder. 41% konverteringsrate. Fra tom pipeline til struktureret salgsproces.
                            </p>
                        </div>
                        
                        <blockquote class="nl-case-quote">
                            <p>"Vi leverede 1.200 leads fra CVR – resulterede i 41% konvertering. Systematisk tilgang gav os den struktur vi manglede."</p>
                            <cite class="nl-case-quote-author">— Dmify.net</cite>
                        </blockquote>
                    </div>
                    
                    <div class="nl-case-cta">
                        <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="nl-case-cta-link">Kontakt os for lignende resultater →</a>
                    </div>
                </article>

                <!-- Case 2: DentalDesk.dk -->
                <article class="nl-case-card">
                    <div class="nl-case-logo-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-case-logo-svg">
                            <rect width="64" height="64" rx="14" fill="#ffffff"/>
                            <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                            <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                        </svg>
                    </div>
                    <h2 class="nl-case-title">+50 bookinger fra tandlægeklinikker</h2>
                    
                    <div class="nl-case-content">
                        <div class="nl-case-section">
                            <h3 class="nl-case-section-title">Udfordring</h3>
                            <p class="nl-case-text">
                                Tandlægeklinik manglede nye kunder. Ingen strukturerede leads til at nå ud til potentielle patienter.
                            </p>
                        </div>
                        
                        <div class="nl-case-section">
                            <h3 class="nl-case-section-title">Løsning</h3>
                            <p class="nl-case-text">
                                Vi leverede 300 klinik-kontakter fra offentlige kilder. Alle verificerede, GDPR-sikre via legitim interesse. Vi kan også håndtere kontakten for dig.
                            </p>
                        </div>
                        
                        <div class="nl-case-section">
                            <h3 class="nl-case-section-title">Resultater</h3>
                            <p class="nl-case-text">
                                +50 bookinger. Fra tom kalender til 40+ bookinger. Høj engagement fra relevante kontakter.
                            </p>
                        </div>
                        
                        <blockquote class="nl-case-quote">
                            <p>"Fra tom kalender til fyldt pipeline. Vores leads var præcise og relevante – perfekt til vores målgruppe."</p>
                            <cite class="nl-case-quote-author">— DentalDesk.dk</cite>
                        </blockquote>
                    </div>
                    
                    <div class="nl-case-cta">
                        <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="nl-case-cta-link">Kontakt os for lignende resultater →</a>
                    </div>
                </article>

                <!-- Case 3: Auto Specialisterne -->
                <article class="nl-case-card">
                    <div class="nl-case-logo-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="Auto Specialisterne ApS" class="nl-case-logo-svg">
                            <rect width="64" height="64" rx="12" fill="#003366"/>
                            <text x="32" y="38" font-family="Inter, sans-serif" font-size="24" font-weight="700" fill="#ffffff" text-anchor="middle">AS</text>
                            <rect x="12" y="48" width="40" height="3" rx="1.5" fill="#ffffff" opacity="0.6"/>
                        </svg>
                    </div>
                    <h2 class="nl-case-title">+127 salg fra bilfirma-leads</h2>
                    
                    <div class="nl-case-content">
                        <div class="nl-case-section">
                            <h3 class="nl-case-section-title">Udfordring</h3>
                            <p class="nl-case-text">
                                Værksted manglede systematisk tilgang til at finde nye kunder. Ingen strukturerede leads til bilfirmaer og autoforhandlere.
                            </p>
                        </div>
                        
                        <div class="nl-case-section">
                            <h3 class="nl-case-section-title">Løsning</h3>
                            <p class="nl-case-text">
                                Vi leverede 800 bilfirma-leads fra CVR og Google Maps. Geografisk filtreret, verificerede kontakter, DNC-screenet. 100% GDPR-compliant.
                            </p>
                        </div>
                        
                        <div class="nl-case-section">
                            <h3 class="nl-case-section-title">Resultater</h3>
                            <p class="nl-case-text">
                                +127 salg. Struktureret pipeline med relevante leads. Høj konverteringsrate fra kvalificerede kontakter.
                            </p>
                        </div>
                        
                        <blockquote class="nl-case-quote">
                            <p>"800 leads fra CVR – alle relevante og verificerede. Systematisk tilgang gav os den struktur vi manglede til at vokse."</p>
                            <cite class="nl-case-quote-author">— Auto Specialisterne ApS</cite>
                        </blockquote>
                    </div>
                    
                    <div class="nl-case-cta">
                        <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="nl-case-cta-link">Kontakt os for lignende resultater →</a>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- Blog Integration Section -->
    <section class="nl-cases-blog">
        <div class="nl-container">
            <div class="nl-cases-blog-content">
                <h2 class="nl-cases-blog-title">Læs vores blog for mere om leads & GDPR</h2>
                <div class="nl-cases-blog-grid">
                    <article class="nl-cases-blog-item">
                        <h3 class="nl-cases-blog-item-title">Sådan får du leads lovligt i 2025</h3>
                        <p class="nl-cases-blog-item-excerpt">
                            GDPR-compliant lead generation gennem legitim interesse. Sådan finder du kvalificerede kontakter fra offentlige kilder.
                        </p>
                        <a href="#" class="nl-cases-blog-item-link">Læs mere →</a>
                    </article>
                    
                    <article class="nl-cases-blog-item">
                        <h3 class="nl-cases-blog-item-title">CVR-registret: Din guide til B2B leads</h3>
                        <p class="nl-cases-blog-item-excerpt">
                            Hvordan bruger du CVR-registret til at finde relevante virksomheder? Praktisk guide til GDPR-sikker lead generation.
                        </p>
                        <a href="#" class="nl-cases-blog-item-link">Læs mere →</a>
                    </article>
                    
                    <article class="nl-cases-blog-item">
                        <h3 class="nl-cases-blog-item-title">Fra tom kalender til fyldt pipeline</h3>
                        <p class="nl-cases-blog-item-excerpt">
                            Sådan strukturerer du din salgsproces med kvalificerede leads. Praktiske tips til SMBs der vil vokse.
                        </p>
                        <a href="#" class="nl-cases-blog-item-link">Læs mere →</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="nl-cases-cta">
        <div class="nl-container">
            <div class="nl-cases-cta-content">
                <h2 class="nl-cases-cta-title">Kontakt for din egen case</h2>
                <p class="nl-cases-cta-text">
                    Få et uforpligtende tilbud og se hvordan vi kan hjælpe din virksomhed med kvalificerede leads.
                </p>
                <div class="nl-cases-cta-buttons">
                    <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="nl-btn-primary">Få leads nu</a>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="nl-btn-secondary">Tilbage til forsiden</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
