<?php
/**
 * Template Name: Cases
 * Description: NordicLeads - Success Cases
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" role="main">

    <!-- Hero Section - Modern & Visual -->
    <section class="nl-cases-hero-v2">
        <div class="nl-container">
            <div class="nl-cases-hero-content-v2">
                <span class="nl-cases-badge">Success Stories</span>
                <h1 class="nl-cases-title-v2">Udvalgte success cases</h1>
                <p class="nl-cases-subtitle-v2">
                    Fra danske startups til etablerede virksomheder. Her er historien om hvordan vi hjalp dem med at finde deres kunder.
                </p>
            </div>
        </div>
    </section>

    <!-- Cases Grid - Full Width Visual Cards -->
    <section class="nl-cases-section-v2">
        <div class="nl-container-wide">
            
            <!-- Case 1: DentalDesk - Featured Large -->
            <article class="nl-case-card-v2 nl-case-featured">
                <div class="nl-case-visual">
                    <div class="nl-case-image-placeholder dentaldesk">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" class="nl-case-icon">
                            <rect width="120" height="120" rx="24" fill="#ffffff"/>
                            <path d="M35 40c0-8 7-14 14-14 5 0 9 2.5 11 6 2.5-3.5 6.5-6 11-6 8 0 14 6 14 14 0 16-13 35-22 41-1.5 1-4 1-5.5 0-9-6-22-25-22-41z" fill="#0ea5e9"/>
                            <path d="M60 48c3-3 8-3.5 11-.5 3-3 8-2.5 11 .5 3 3.5 2.5 9-1.5 12l-9.5 7-9.5-7c-4-3-5-8.5-1.5-12z" fill="#ffffff" opacity=".9"/>
                        </svg>
                    </div>
                </div>
                <div class="nl-case-content-v2">
                    <div class="nl-case-meta">
                        <span class="nl-case-industry">AI & SaaS</span>
                        <span class="nl-case-time">3 måneder</span>
                    </div>
                    <h2 class="nl-case-title-v2"><a href="https://dentaldesk.dk" target="_blank" rel="noopener noreferrer">DentalDesk</a></h2>
                    <p class="nl-case-headline">Hvordan vi hjalp en dansk AI-startup med at finde deres første 50+ kunder</p>
                    <p class="nl-case-excerpt-v2">
                        En dansk startup med en AI-receptionist løsning havde et solidt produkt, men sad fast. De vidste ikke hvordan de skulle finde klinikker der rent faktisk havde brug for dem. Vi hjalp dem med at kontakte 300+ klinikker og udvide til nye brancher.
                    </p>
                    <div class="nl-case-stats-v2">
                        <div class="nl-stat-item-v2">
                            <span class="nl-stat-number-v2">50+</span>
                            <span class="nl-stat-label-v2">nordiske bookninger</span>
                        </div>
                        <div class="nl-stat-item-v2">
                            <span class="nl-stat-number-v2">300+</span>
                            <span class="nl-stat-label-v2">demoer udsendt</span>
                        </div>
                    </div>
                    <a href="<?php echo esc_url(get_page_link(get_page_by_path('dentaldesk-case')->ID ?? '#')); ?>" class="nl-case-link-v2">
                        Læs hele historien
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Case 2 & 3: Side by Side -->
            <div class="nl-cases-grid-v2">
                
                <!-- Case 2: Dmify -->
                <article class="nl-case-card-v2">
                    <div class="nl-case-visual">
                        <div class="nl-case-image-placeholder dmify">
                            <span class="nl-case-text-logo">Dmify.net</span>
                        </div>
                    </div>
                    <div class="nl-case-content-v2">
                        <div class="nl-case-meta">
                            <span class="nl-case-industry">SaaS & Tech</span>
                            <span class="nl-case-time">3 måneder</span>
                        </div>
                    <h2 class="nl-case-title-v2"><a href="https://dmify.net" target="_blank" rel="noopener noreferrer">Dmify</a></h2>
                    <p class="nl-case-headline">Fra "hvem er vores kunde?" til 120+ SaaS kunder</p>
                    <p class="nl-case-excerpt-v2">
                        En dansk SaaS-virksomhed med et fleksibelt produkt kunne ikke finde ud af hvem de skulle sælge til. Vi testede 10.000+ leads på tværs af 6 segmenter og fandt deres sweet spot: Growth agencies.
                    </p>
                        <div class="nl-case-stats-v2">
                            <div class="nl-stat-item-v2">
                            <span class="nl-stat-number-v2">120+</span>
                            <span class="nl-stat-label-v2">SaaS kunder</span>
                            </div>
                            <div class="nl-stat-item-v2">
                            <span class="nl-stat-number-v2">10.000+</span>
                            <span class="nl-stat-label-v2">leads testet</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url(get_page_link(get_page_by_path('dmify-case')->ID ?? '#')); ?>" class="nl-case-link-v2">
                            Læs hele historien
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Case 3: Auto Specialisterne -->
                <article class="nl-case-card-v2">
                    <div class="nl-case-visual">
                        <div class="nl-case-image-placeholder auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="Auto Specialisterne ApS" class="nl-case-icon">
                                <rect width="64" height="64" rx="12" fill="#003366"/>
                                <text x="32" y="38" font-family="Inter, sans-serif" font-size="24" font-weight="700" fill="#ffffff" text-anchor="middle">AS</text>
                                <rect x="12" y="48" width="40" height="3" rx="1.5" fill="#ffffff" opacity="0.6"/>
                            </svg>
                        </div>
                    </div>
                    <div class="nl-case-content-v2">
                        <div class="nl-case-meta">
                            <span class="nl-case-industry">B2B & Automotive</span>
                            <span class="nl-case-time">4 måneder</span>
                        </div>
                    <h2 class="nl-case-title-v2">Auto Specialisterne</h2>
                    <p class="nl-case-headline">20 nye autoværksteder på 4 måneder</p>
                    <p class="nl-case-excerpt-v2">
                        Et marketing bureau ville sælge til autoværksteder, men fandt maks 1 om måneden og stalede deres indkomst. Vi leverede 1000+ verificerede leads og hjalp dem med at konvertere 20 leads til nye kunder.
                    </p>
                        <div class="nl-case-stats-v2">
                            <div class="nl-stat-item-v2">
                            <span class="nl-stat-number-v2">20</span>
                            <span class="nl-stat-label-v2">nye værksteder</span>
                            </div>
                            <div class="nl-stat-item-v2">
                            <span class="nl-stat-number-v2">1000+</span>
                                <span class="nl-stat-label-v2">leads</span>
                            </div>
                        </div>
                        <a href="<?php echo esc_url(get_page_link(get_page_by_path('auto-specialisterne-case')->ID ?? '#')); ?>" class="nl-case-link-v2">
                            Læs hele historien
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <!-- Social Proof Section -->
    <section class="nl-cases-proof-v2">
        <div class="nl-container">
            <p class="nl-cases-proof-text-v2">
                Vær blandt danske og internationale virksomheder, der allerede booker flere møder og får flere kunder
            </p>
        </div>
    </section>

    <!-- CTA Section - Simple & Direct -->
    <section class="nl-cases-cta-v2">
        <div class="nl-container">
            <div class="nl-cases-cta-box">
                <h2 class="nl-cases-cta-title-v2">Klar til at få din egen case?</h2>
                <p class="nl-cases-cta-text-v2">
                    Vi hjælper danske virksomheder med at finde deres kunder gennem GDPR-sikker lead generation og professionel outreach. Klar til at se, hvad vi kan gøre for jer?
                </p>
                <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="nl-btn-primary nl-btn-large">
                    <span class="nl-mobile-hide">Book et uforpligtende opkald</span>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>

