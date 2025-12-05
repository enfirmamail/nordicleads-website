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

    <!-- Hero Section - Clean & Professional -->
    <section class="nl-cases-hero">
        <div class="nl-container">
            <div class="nl-cases-hero-content">
                <h1 class="nl-cases-title">Success Cases</h1>
                <p class="nl-cases-subtitle">
                    Se hvordan danske virksomheder har brugt vores leads til at vokse. Fra tech-startups til etablerede virksomheder – alle med samme mål: flere kvalificerede kunder.
                </p>
            </div>
        </div>
    </section>

    <!-- Cases Grid -->
    <section class="nl-cases-section">
        <div class="nl-container">
            <div class="nl-cases-grid" role="list">
                
                <!-- Case 1: Dmify.net -->
                <article class="nl-case-card" role="listitem">
                    <div class="nl-case-logo-wrapper">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" class="nl-case-logo-img">
                    </div>
                    <h2 class="nl-case-title">Dmify – 127 nye kunder gennem multi-market lead generation</h2>
                    
                    <div class="nl-case-content">
                        <p class="nl-case-text nl-case-excerpt">
                            Tech SaaS virksomhed med bred målgruppe kæmpede med at finde deres sweet spot. Vi hjalp dem med at skaffe 127 nye kunder gennem data-driven segmentering og strategisk multi-market outreach.
                        </p>
                        
                        <div class="nl-case-stats-mini">
                            <div class="nl-stat-mini">
                                <strong>127</strong>
                                <span>Nye kunder</span>
                            </div>
                            <div class="nl-stat-mini">
                                <strong>1200+</strong>
                                <span>Leads genereret</span>
                            </div>
                            <div class="nl-stat-mini">
                                <strong>41%</strong>
                                <span>Open rate</span>
                            </div>
                        </div>
                        
                        <blockquote class="nl-case-quote">
                            <p>"Vi anede ikke hvor vi skulle starte. NordicLeads gjorde ikke bare research – de blev en del af vores go-to-market strategi."</p>
                            <cite class="nl-case-quote-author">— Dmify Team</cite>
                        </blockquote>
                    </div>
                    
                    <div class="nl-case-cta">
                        <?php 
                        // Find Dmify case page dynamically
                        $dmify_page = get_page_by_path('dmify-127-nye-kunder');
                        if ($dmify_page) {
                            $dmify_url = get_permalink($dmify_page->ID);
                        } else {
                            $dmify_url = '#';
                        }
                        ?>
                        <a href="<?php echo esc_url($dmify_url); ?>" class="nl-case-read-more">Læs fuld case →</a>
                    </div>
                </article>

                <!-- Case 2: DentalDesk.dk -->
                <article class="nl-case-card" role="listitem">
                    <div class="nl-case-logo-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-case-logo-svg">
                            <rect width="64" height="64" rx="14" fill="#ffffff"/>
                            <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                            <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                        </svg>
                    </div>
                    <h2 class="nl-case-title">DentalDesk – Fra 0 til 50+ bookinger på 3 måneder</h2>
                    
                    <div class="nl-case-content">
                        <p class="nl-case-text nl-case-excerpt">
                            Dansk AI-powered receptionist startup skulle skalere hurtigt, men havde ingen systematisk måde at nå ud til klinikker. Vi hjalp dem med lead generation, professionel outreach og niche expansion.
                        </p>
                        
                        <div class="nl-case-stats-mini">
                            <div class="nl-stat-mini">
                                <strong>50+</strong>
                                <span>Bookinger</span>
                            </div>
                            <div class="nl-stat-mini">
                                <strong>300+</strong>
                                <span>Klinikker</span>
                            </div>
                            <div class="nl-stat-mini">
                                <strong>18%</strong>
                                <span>Conversion</span>
                            </div>
                        </div>
                        
                        <blockquote class="nl-case-quote">
                            <p>"Fra tom kalender til fyldt pipeline på under 3 måneder. Vi udvider nu til Norge og Sverige med deres hjælp."</p>
                            <cite class="nl-case-quote-author">— DentalDesk Team</cite>
                        </blockquote>
                    </div>
                    
                    <div class="nl-case-cta">
                        <?php 
                        $dentaldesk_page = get_page_by_path('dentaldesk-50-bookinger');
                        if ($dentaldesk_page) {
                            $dentaldesk_url = get_permalink($dentaldesk_page->ID);
                        } else {
                            $dentaldesk_url = '#';
                        }
                        ?>
                        <a href="<?php echo esc_url($dentaldesk_url); ?>" class="nl-case-read-more">Læs fuld case →</a>
                    </div>
                </article>

                <!-- Case 3: Auto Specialisterne -->
                <article class="nl-case-card" role="listitem">
                    <div class="nl-case-logo-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="Auto Specialisterne ApS" class="nl-case-logo-svg">
                            <rect width="64" height="64" rx="12" fill="#003366"/>
                            <text x="32" y="38" font-family="Inter, sans-serif" font-size="24" font-weight="700" fill="#ffffff" text-anchor="middle">AS</text>
                            <rect x="12" y="48" width="40" height="3" rx="1.5" fill="#ffffff" opacity="0.6"/>
                        </svg>
                    </div>
                    <h2 class="nl-case-title">Auto Specialisterne – 127 salg gennem hyper-targeted leads</h2>
                    
                    <div class="nl-case-content">
                        <p class="nl-case-text nl-case-excerpt">
                            Dansk automotive marketing agency skulle finde værksteder der havde brug for hjælp. Vi leverede 800+ verificerede leads og hjalp dem med at lukke 127 salg på 4 måneder.
                        </p>
                        
                        <div class="nl-case-stats-mini">
                            <div class="nl-stat-mini">
                                <strong>127</strong>
                                <span>Lukkede salg</span>
                            </div>
                            <div class="nl-stat-mini">
                                <strong>800+</strong>
                                <span>Verificerede leads</span>
                            </div>
                            <div class="nl-stat-mini">
                                <strong>22%</strong>
                                <span>Booking rate</span>
                            </div>
                        </div>
                        
                        <blockquote class="nl-case-quote">
                            <p>"NordicLeads forstod automotive branchen bedre end nogen anden. 127 salg på 4 måneder er langt over hvad vi havde forventet."</p>
                            <cite class="nl-case-quote-author">— Thomas Nielsen, Salgschef</cite>
                        </blockquote>
                    </div>
                    
                    <div class="nl-case-cta">
                        <?php 
                        $auto_page = get_page_by_path('auto-specialisterne-127-salg');
                        if ($auto_page) {
                            $auto_url = get_permalink($auto_page->ID);
                        } else {
                            $auto_url = '#';
                        }
                        ?>
                        <a href="<?php echo esc_url($auto_url); ?>" class="nl-case-read-more">Læs fuld case →</a>
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
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
