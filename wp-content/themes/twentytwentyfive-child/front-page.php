<?php
/**
 * Template Name: Front Page
 * Description: NordicLeads - Premium B2B Lead Generation
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" role="main">

    <!-- HERO SECTION - Clean B2B Trust, Premium 2025 -->
    <section id="hero" class="nl-hero">
        <div class="nl-hero-inner">

            <!-- Left Column: Content (55%) -->
            <div class="nl-hero-content">
                
                <!-- H1 -->
                <h1 class="nl-hero-title">
                    Stop med at lede.<br>
                    <span>Start med at sælge.</span>
                </h1>
                
                <!-- Subline -->
                <p class="nl-hero-subtitle">
                    Vi finder titusindvis af verificerede virksomhedskontakter fra din branche og niche. 
                    Direkte e-mails, telefonnumre og adresser – skræddersyet til dine behov, klar til at skaffe flere kunder.
                </p>
                
                <!-- Emotional Line -->
                <p class="nl-hero-emotional">Sig velkommen til dine nye kunder.</p>
                
                <!-- Check Bullets -->
                <ul class="nl-hero-checks">
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Verificerede e-mails & telefonnumre
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Skræddersyet til din branche
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        100% GDPR-sikker
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Klar til eksport (CSV/Excel)
                    </li>
                </ul>
                
                <!-- CTAs -->
                <div class="nl-hero-ctas">
                    <a href="#kontakt" class="nl-btn-primary">Bestil leads</a>
                    <a href="#hvordan" class="nl-btn-secondary">Sådan virker det</a>
                </div>
                
                <!-- Trust Line -->
                <p class="nl-hero-trust">
                    GDPR Art. 6(1)(f) · Legitim interesse · EU-hosting · Nordiske & Internationale virksomheder
                </p>
                
                <!-- Outreach Link -->
                <p class="nl-hero-outreach">
                    <a href="<?php echo esc_url(home_url('/services/email-outreach')); ?>">Har du også brug for outreach? <span>→</span></a>
                </p>
            </div>
            
            <!-- Right Column: Image (45%) -->
            <div class="nl-hero-image">
                <img 
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/wmremove-transformed.jpeg'); ?>" 
                    alt="Professionelt B2B-team arbejder med leads og data"
                    width="443"
                    height="295"
                    loading="eager"
                    fetchpriority="high"
                >
        </div>
        </div>
    </section>

    <!-- Trusted By Section - Clean B2B Social Proof with Auto-scroll -->
    <section class="nl-trusted">
        <div class="nl-trusted-inner">
            <p class="nl-trusted-headline">Her er nogle af de virksomheder, vi allerede hjælper med at skaffe flere kunder</p>
            <div class="nl-trusted-slider">
                <div class="nl-trusted-track">
                    <!-- Set 1: Dmify, DentalDesk, Auto Specialisterne, Dmify, DentalDesk, Nordisk Rengøring, Dmify, DentalDesk, FinanceHub, Dmify, DentalDesk, TechVenture -->
                    
                    <!-- Dmify 1 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" width="53" height="53" loading="lazy">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 1 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-logo-svg">
                                <rect width="64" height="64" rx="14" fill="#ffffff"/>
                                <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                                <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                            </svg>
                            <span class="nl-logo-name">DentalDesk.dk</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- Auto Specialisterne ApS -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="Auto Specialisterne ApS" class="nl-logo-svg">
                                <rect width="64" height="64" rx="12" fill="#003366"/>
                                <text x="32" y="38" font-family="Inter, sans-serif" font-size="24" font-weight="700" fill="#ffffff" text-anchor="middle">AS</text>
                                <rect x="12" y="48" width="40" height="3" rx="1.5" fill="#ffffff" opacity="0.6"/>
                            </svg>
                            <span class="nl-logo-name">Auto Specialisterne ApS</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- Dmify 2 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" width="53" height="53" loading="lazy">
                            <span class="nl-logo-name">Dmify.net</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 2 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-logo-svg">
                                <rect width="64" height="64" rx="14" fill="#ffffff"/>
                                <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                                <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                            </svg>
                            <span class="nl-logo-name">DentalDesk.dk</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- Nordisk Rengøring A/S -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="Nordisk Rengøring" class="nl-logo-svg">
                                <rect width="64" height="64" rx="12" fill="#059669"/>
                                <path d="M20 44V20h6l10 16V20h6v24h-6L26 28v16h-6z" fill="#ffffff"/>
                            </svg>
                            <span class="nl-logo-name">Nordisk Rengøring A/S</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                        </a>
                    <!-- Dmify 3 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" width="53" height="53" loading="lazy">
                            <span class="nl-logo-name">Dmify.net</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 3 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-logo-svg">
                                <rect width="64" height="64" rx="14" fill="#ffffff"/>
                                <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                                <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                            </svg>
                            <span class="nl-logo-name">DentalDesk.dk</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- FinanceHub DK -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="FinanceHub" class="nl-logo-svg">
                                <rect width="64" height="64" rx="12" fill="#1e40af"/>
                                <rect x="16" y="36" width="8" height="12" rx="2" fill="#ffffff"/>
                                <rect x="28" y="28" width="8" height="20" rx="2" fill="#ffffff"/>
                                <rect x="40" y="20" width="8" height="28" rx="2" fill="#ffffff"/>
                                <circle cx="20" cy="24" r="3" fill="#ffffff" opacity="0.6"/>
                                <circle cx="32" cy="18" r="3" fill="#ffffff" opacity="0.6"/>
                                <circle cx="44" cy="14" r="3" fill="#ffffff" opacity="0.6"/>
                            </svg>
                            <span class="nl-logo-name">FinanceHub DK</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- Dmify 4 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" width="53" height="53" loading="lazy">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 4 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-logo-svg">
                                <rect width="64" height="64" rx="14" fill="#ffffff"/>
                                <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                                <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                            </svg>
                            <span class="nl-logo-name">DentalDesk.dk</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- TechVenture ApS -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="TechVenture" class="nl-logo-svg">
                                <rect width="64" height="64" rx="12" fill="#7c3aed"/>
                                <path d="M18 20h28v6H36v18h-8V26H18v-6z" fill="#ffffff"/>
                            </svg>
                            <span class="nl-logo-name">TechVenture ApS</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                </div>
                <!-- Duplicate track for seamless infinite loop -->
                <div class="nl-trusted-track" aria-hidden="true">
                    <!-- Dmify 1 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" width="53" height="53" loading="lazy">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 1 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-logo-svg">
                                <rect width="64" height="64" rx="14" fill="#ffffff"/>
                                <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                                <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                            </svg>
                            <span class="nl-logo-name">DentalDesk.dk</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- Auto Specialisterne ApS -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="Auto Specialisterne ApS" class="nl-logo-svg">
                                <rect width="64" height="64" rx="12" fill="#003366"/>
                                <text x="32" y="38" font-family="Inter, sans-serif" font-size="24" font-weight="700" fill="#ffffff" text-anchor="middle">AS</text>
                                <rect x="12" y="48" width="40" height="3" rx="1.5" fill="#ffffff" opacity="0.6"/>
                            </svg>
                            <span class="nl-logo-name">Auto Specialisterne ApS</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- Dmify 2 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" width="53" height="53" loading="lazy">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 2 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-logo-svg">
                                <rect width="64" height="64" rx="14" fill="#ffffff"/>
                                <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                                <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                            </svg>
                            <span class="nl-logo-name">DentalDesk.dk</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- Nordisk Rengøring A/S -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="Nordisk Rengøring" class="nl-logo-svg">
                                <rect width="64" height="64" rx="12" fill="#059669"/>
                                <path d="M20 44V20h6l10 16V20h6v24h-6L26 28v16h-6z" fill="#ffffff"/>
                            </svg>
                            <span class="nl-logo-name">Nordisk Rengøring A/S</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- Dmify 3 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" width="53" height="53" loading="lazy">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 3 -->
                    <a href="<?php echo esc_url(home_url('/cases')); ?>" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-logo-svg">
                                <rect width="64" height="64" rx="14" fill="#ffffff"/>
                                <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                                <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                            </svg>
                            <span class="nl-logo-name">DentalDesk.dk</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- FinanceHub DK -->
                    <a href="#cases" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="FinanceHub" class="nl-logo-svg">
                                <rect width="64" height="64" rx="12" fill="#1e40af"/>
                                <rect x="16" y="36" width="8" height="12" rx="2" fill="#ffffff"/>
                                <rect x="28" y="28" width="8" height="20" rx="2" fill="#ffffff"/>
                                <rect x="40" y="20" width="8" height="28" rx="2" fill="#ffffff"/>
                                <circle cx="20" cy="24" r="3" fill="#ffffff" opacity="0.6"/>
                                <circle cx="32" cy="18" r="3" fill="#ffffff" opacity="0.6"/>
                                <circle cx="44" cy="14" r="3" fill="#ffffff" opacity="0.6"/>
                            </svg>
                            <span class="nl-logo-name">FinanceHub DK</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- Dmify 4 -->
                    <a href="https://dmify.net" target="_blank" rel="noopener noreferrer" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo" width="53" height="53" loading="lazy">
                            <span class="nl-logo-name">Dmify.net</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 4 -->
                    <a href="https://dentaldesk.dk" target="_blank" rel="noopener noreferrer" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="DentalDesk" class="nl-logo-svg">
                                <rect width="64" height="64" rx="14" fill="#ffffff"/>
                                <path d="M20 24c0-5 4-9 9-9 3 0 5.7 1.7 7 4 1.4-2.3 4.1-4 7-4 5 0 9 4 9 9 0 10-8 22-14 26-1 .6-2.3 .6-3.3 0-6-4-14-16-14-26z" fill="#0ea5e9"/>
                                <g transform="translate(-2,0)"><path d="M35.2 24.2c1.8-2 4.8-2.1 6.7-.3 1.9-1.8 4.9-1.7 6.7.3 2 2.2 1.5 5.6-1 7.4l-5.7 4.1-5.7-4.1c-2.5-1.8-3-5.2-1-7.4z" fill="#ffffff" opacity=".9"/></g>
                            </svg>
                            <span class="nl-logo-name">DentalDesk.dk</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- TechVenture ApS -->
                    <a href="#cases" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="TechVenture" class="nl-logo-svg">
                                <rect width="64" height="64" rx="12" fill="#7c3aed"/>
                                <path d="M18 20h28v6H36v18h-8V26H18v-6z" fill="#ffffff"/>
                            </svg>
                            <span class="nl-logo-name">TechVenture ApS</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Kunde Genaktivering CTA (placed after Trusted By) -->
    <section class="nl-reactivation-cta">
        <div class="nl-container">
            <div class="nl-reactivation-content">
                <div class="nl-reactivation-text">
                    <h2 class="nl-reactivation-title">Har I gamle kundelister liggende?</h2>
                    <p class="nl-reactivation-desc">
                        Det er 5-10x lettere at sælge til en tidligere kunde end at finde en ny. Vi genaktiverer jeres dormant kunder – GDPR-compliant, multichannel og med skarpt fokus på ROI.
                    </p>
                    <ul class="nl-reactivation-benefits">
                        <li>
                            <svg class="nl-check-icon" viewBox="0 0 20 20" fill="none">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" fill="currentColor"/>
                            </svg>
                            <span>GDPR-compliant audit & DNC-screening</span>
                        </li>
                        <li>
                            <svg class="nl-check-icon" viewBox="0 0 20 20" fill="none">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" fill="currentColor"/>
                            </svg>
                            <span>Multi-channel outreach (email, linkedin, m.m)</span>
                        </li>
                        <li>
                            <svg class="nl-check-icon" viewBox="0 0 20 20" fill="none">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" fill="currentColor"/>
                            </svg>
                            <span>Typisk 5-15% response rate</span>
                        </li>
                        <li>
                            <svg class="nl-check-icon" viewBox="0 0 20 20" fill="none">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" fill="currentColor"/>
                            </svg>
                            <span>Success-based pricing mulighed</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/services/kunde-genaktivering')); ?>" class="nl-btn-reactivation">
                        Læs om Kunde Genaktivering
                        <svg class="nl-btn-arrow" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="nl-reactivation-stats">
                    <div class="nl-stat-card">
                        <div class="nl-stat-number">5-10x</div>
                        <div class="nl-stat-label">Lettere at konvertere</div>
                    </div>
                    <div class="nl-stat-card">
                        <div class="nl-stat-number">5-15%</div>
                        <div class="nl-stat-label">Typisk response rate</div>
                    </div>
                    <div class="nl-stat-card">
                        <div class="nl-stat-number">300-500%</div>
                        <div class="nl-stat-label">Typisk ROI</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section with Hover Effects -->
    <section class="nl-features">
        <div class="nl-container">
            <div class="nl-features-header">
                <h2 class="nl-features-title">Kold lead generering</h2>
            </div>
        </div>
        <div class="nl-features-inner">
            <div class="nl-feature" data-index="0">
                <div class="nl-feature-badge">Vores styrker</div>
                <div class="nl-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <div class="nl-feature-title">
                    <div class="nl-feature-indicator"></div>
                    <span>Tusindvis af kvalificerede leads</span>
                </div>
                <p class="nl-feature-desc">Vi finder titusindvis af e-mails, telefonnumre og adresser fra branchen og nichen der passer præcis til din virksomhed. Mængden og kvaliteten skræddersyes til dine specifikke behov.</p>
            </div>

            <div class="nl-feature" data-index="1">
                <div class="nl-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <div class="nl-feature-title">
                    <div class="nl-feature-indicator"></div>
                    <span>Verificerede kontakter af højeste kvalitet</span>
                </div>
                <p class="nl-feature-desc">Alle e-mails og telefonnumre er verificerede og aktive. Kvaliteten varierer naturligvis med branche og niche, men vi garanterer kun kontakter der leverer resultater.</p>
            </div>

            <div class="nl-feature" data-index="2">
                <div class="nl-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <div class="nl-feature-title">
                    <div class="nl-feature-indicator"></div>
                    <span>Levering på under 24 timer</span>
                </div>
                <p class="nl-feature-desc">Vores teams og programmer kører døgnet rundt. Få dine leads leveret på under en dag.</p>
            </div>

            <div class="nl-feature" data-index="3">
                <div class="nl-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <polyline points="9 12 11 14 15 10"/>
                    </svg>
                </div>
                <div class="nl-feature-title">
                    <div class="nl-feature-indicator"></div>
                    <span>100% GDPR-sikker via legitim interesse</span>
                </div>
                <p class="nl-feature-desc">Alle leads er fra offentlige kilder som CVR og Google Maps. 100% GDPR-compliant via legitim interesse (Art. 6(1)(f)) – trygt og lovligt.</p>
            </div>

            <div class="nl-feature" data-index="4">
                <div class="nl-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <polyline points="7 10 12 15 17 10"/>
                        <line x1="12" y1="15" x2="12" y2="3"/>
                    </svg>
                </div>
                <div class="nl-feature-title">
                    <div class="nl-feature-indicator"></div>
                    <span>Klar til eksport på sekunder</span>
                </div>
                <p class="nl-feature-desc">Alle leads leveres i rene, strukturerede lister. CSV eller Excel-format klar til import i dit CRM, mail-system eller hvor du har brug for dem.</p>
            </div>

            <div class="nl-feature" data-index="5">
                <div class="nl-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <div class="nl-feature-title">
                    <div class="nl-feature-indicator"></div>
                    <span>Skræddersyet til din branche</span>
                </div>
                <p class="nl-feature-desc">Vi finder leads baseret på præcise søgekriterier og filtre. Fra start-ups til enterprise – vi matcher din målgruppe perfekt.</p>
            </div>

            <div class="nl-feature" data-index="6">
                <div class="nl-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <div class="nl-feature-title">
                    <div class="nl-feature-indicator"></div>
                    <span>DNC-screenet og opt-out-klar</span>
                </div>
                <p class="nl-feature-desc">Alle leads er screenet mod Do-Not-Contact-lister. Unsubscribe-links inkluderet i hver kampagne – fuld compliance garanteret.</p>
            </div>

            <div class="nl-feature" data-index="7">
                <div class="nl-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                </div>
                <div class="nl-feature-title">
                    <div class="nl-feature-indicator"></div>
                    <span>Nordiske & Internationale virksomheder</span>
                </div>
                <p class="nl-feature-desc">Nordiske og Internationale virksomheder stoler allerede på os til at levere kvalificerede B2B-leads. Bliv en del af et vækstfællesskab der faktisk virker.</p>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="hvordan" class="nl-section nl-section-light">
        <div class="nl-container">
            <div class="nl-section-header">
                <h2>Sådan virker det</h2>
                <p>Tre enkle trin til nye kunder</p>
            </div>
            
            <div class="nl-steps">
                <div class="nl-step">
                    <div class="nl-step-number">1</div>
                    <h3>Vi finder og verificerer leads</h3>
                    <p>Fra offentlige kilder som CVR-registret, Google Maps, firmahjemmesider og brancheregistre. Alt bliver DNC-screenet og verificeret – kun gyldige kontakter, 100 % GDPR-sikker via legitim interesse.</p>
                </div>
                <div class="nl-step">
                    <div class="nl-step-number">2</div>
                    <h3>Ønsker du, at vi kontakter dem for dig?</h3>
                    <p>Vi kan sende professionelle, personaliserede e-mails på dansk med unsubscribe og fuld compliance – eller du bruger bare listen selv. Vælger du outreach, klarer vi alt fra A-Z.</p>
                    <a href="<?php echo esc_url(home_url('/services/email-outreach')); ?>" class="nl-outreach-link">→ Læs mere om vores outreach-pakker</a>
                </div>
                <div class="nl-step">
                    <div class="nl-step-number">3</div>
                    <h3>Sig velkommen til dine nye kunder</h3>
                    <p>Du modtager dine leads i CSV eller Excel-format – klar til brug med det samme. Alle kontakter er verificerede, kvalificerede og klar til at blive kontaktet.</p>
                </div>
            </div>
            
            <!-- Pricing Explanation -->
            <div class="nl-pricing-explanation">
                <h3 class="nl-pricing-question">Kommer prisen an på hvor mange leads jeg modtager?</h3>
                <p class="nl-pricing-answer">
                    Nej, prisen afhænger ikke kun af antal leads. Vores team vurderer kvaliteten, responsraten, successraten og chancen for booking af demo og møder. Derfor vil nogle brancher kræve færre leads, fordi leadsne er højere kvalitet og har bedre konverteringspotentiale. I andre scenarier er det smartere at tage en større leadliste, fordi det er et sværere marked at trænge ind i. Vores team vurderer dette selvfølgelig og finder den bedste løsning til din specifikke situation.
                </p>
            </div>
        </div>
    </section>

    <!-- GDPR Trust Section -->
    <section class="nl-section nl-section-white">
        <div class="nl-container">
            <div class="nl-section-header">
                <h2>Hvorfor er vi GDPR-sikre?</h2>
                <p>Vi tager databeskyttelse alvorligt og følger alle retningslinjer</p>
                </div>
                
            <div class="nl-trust-grid">
                <div class="nl-trust-card">
                    <div class="nl-trust-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3>Legitim interesse</h3>
                    <p>Vi anvender GDPR Artikel 6(1)(f) til B2B-outreach med gensidig forretningsmæssig fordel for begge parter.</p>
                        </div>
                <div class="nl-trust-card">
                    <div class="nl-trust-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </div>
                    <h3>Kun offentlige kilder</h3>
                    <p>Alle data fra CVR-registret, Google Maps og offentlige firmahjemmesider. Ingen køb af tredjeparts-data.</p>
                        </div>
                <div class="nl-trust-card">
                    <div class="nl-trust-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                    </div>
                    <h3>DNC-screening</h3>
                    <p>Løbende screening mod Do-Not-Contact-lister og compliance-assessments. Unsubscribe i hver email.</p>
                        </div>
                <div class="nl-trust-card">
                    <div class="nl-trust-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3>EU-hosting & support</h3>
                    <p>Når en ny ordre kommer ind, kreerer vi leadlisten og samler de potentielle kunder. I det sekund listen er færdig, bliver den sendt direkte til dig – og aldrig opbevaret hos os. Vi opbevarer aldrig data vi ikke har lov til, og alt håndteres på EU-servere i Danmark.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="kontakt" class="nl-section nl-section-dark">
        <div class="nl-container">
            <div class="nl-contact-grid">
                <div class="nl-contact-text">
                    <h2>Få et skræddersyet tilbud – inden for 24 timer</h2>
                    <p>Vi prissætter efter din branche, niche, ønsket antal leads og kvalitet. Priser og antal leads varierer alt efter hvad du har brug for – fra små specialiserede lister til store volumen-indsamlinger.</p>
                    <p>Fortæl os kort hvad du leder efter – så sender vi et uforpligtende tilbud. Vores salgsteam finder den bedste løsning der passer præcist til dine behov.</p>
                    <p class="nl-contact-email">
                        Eller kontakt os direkte:<br>
                        <a href="mailto:info@nordicleads.dk">info@nordicleads.dk</a>
                    </p>
                </div>
                
                <div class="nl-contact-form-wrapper">
                    <form id="contact-form" class="nl-contact-form">
                        <div class="nl-form-row">
                            <div class="nl-form-group">
                                <label for="name">Navn <span>*</span></label>
                                <input type="text" id="name" name="name" required placeholder="Dit navn">
                            </div>
                            <div class="nl-form-group">
                                <label for="company">Virksomhed <span>*</span></label>
                                <input type="text" id="company" name="company" required placeholder="Din virksomhed">
                            </div>
                        </div>
                        <div class="nl-form-row">
                            <div class="nl-form-group">
                                <label for="email">E-mail <span>*</span></label>
                                <input type="email" id="email" name="email" required placeholder="din@email.dk">
                    </div>
                            <div class="nl-form-group">
                                <label for="phone">Telefon <span>*</span></label>
                                <input type="tel" id="phone" name="phone" required placeholder="+45 XX XX XX XX">
                    </div>
                </div>
                        <div class="nl-form-group">
                            <label for="message">Besked (valgfri)</label>
                            <textarea id="message" name="message" rows="5" placeholder="Fortæl os om din branche, niche, ønsket antal leads og eventuelle særlige krav. Jo mere vi ved, jo bedre kan vi tilpasse løsningen til dig..."></textarea>
                    </div>
                        <button type="submit" id="submit-btn" class="nl-form-submit">Få uforpligtende tilbud</button>
                        <p class="nl-form-disclaimer">Ved at indsende accepterer du vores <a href="#">privatlivspolitik</a>. Vi behandler dine data i henhold til GDPR.</p>
                    </form>
                    
                    <div id="form-success" class="nl-form-message nl-form-success hidden">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p>Tak for din henvendelse! Vi kontakter dig inden for 24 timer.</p>
                    </div>
                    
                    <div id="form-error" class="nl-form-message nl-form-error hidden">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        <p>Der opstod en fejl. Prøv igen eller kontakt os på <a href="mailto:info@nordicleads.dk">info@nordicleads.dk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="nl-section nl-section-white">
        <div class="nl-container nl-container-narrow">
            <div class="nl-section-header">
                <h2>Ofte stillede spørgsmål</h2>
                <p>Få svar på dine spørgsmål om leads, GDPR, priser og levering</p>
            </div>
            
            <div class="nl-faq">
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Hvor kommer jeres leads fra?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Alle leads er fra offentlige kilder som CVR-registret, Google Maps, firmahjemmesider og brancheregistre. Vi køber aldrig data fra tredjeparter – alt er scrapet fra offentligt tilgængelige kilder. Alle leads bliver verificeret og DNC-screenet før levering.</p>
                    </div>
                </div>
                
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Hvordan sikrer I GDPR-compliance?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Vi bruger legitim interesse (GDPR Art. 6(1)(f)) baseret på gensidig forretningsmæssig fordel. Alle leads er fra offentlige kilder, screenet mod Do-Not-Contact-lister, og vi opbevarer aldrig data efter levering – listen sendes direkte til dig og slettes fra vores systemer. Data håndteres på EU-servere i Danmark.</p>
                    </div>
                </div>
                
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Hvor hurtigt får jeg mine leads?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Når ordren er bekræftet, kreerer vi din skræddersyede leadliste og sender den direkte til dig – typisk inden for 24-48 timer. Jo mere specifikke kriterier du giver (branche, geografi, størrelse), jo hurtigere kan vi levere.</p>
                    </div>
                </div>
                
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Hvad koster det?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Priserne afhænger af din branche, niche, antal leads og kvalitetsniveau. Vi tilpasser prisen præcist til dine behov – fra små specialiserede lister til store volumen-indsamlinger. Kontakt os for et uforpligtende tilbud skræddersyet til din virksomhed.</p>
                    </div>
                </div>
                
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Kan I også kontakte leads'ene for mig?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Ja, det er en valgfri service. Du kan købe kun lead-listen og kontakte dem selv, eller vælge vores outreach-service hvor vi sender professionelle, personaliserede B2B-emails på vegne af dig. Outreach-pakker inkluderer fuld GDPR-compliance, unsubscribe-links og DNC-screening. Læs mere om vores outreach-pakker når du får tilbud.</p>
                    </div>
                </div>
                
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Hvor gode er jeres leads?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Alle leads bliver verificeret før levering. Vi tjekker at e-mails er aktive, telefonnumre er gyldige, og at virksomhederne matcher dine kriterier. Kvaliteten varierer naturligvis med branche og niche, men vi garanterer kun kontakter der leverer resultater. Mange af vores kunder rapporterer høj svarrate og bookingrate.</p>
                    </div>
                        </div>
                
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Kommer prisen an på hvor mange leads jeg modtager?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Nej, prisen afhænger ikke kun af antal leads. Vores team vurderer kvaliteten, responsraten, successraten og chancen for booking af demo og møder. Derfor vil nogle brancher kræve færre leads, fordi leadsne er højere kvalitet og har bedre konverteringspotentiale. I andre scenarier er det smartere at tage en større leadliste, fordi det er et sværere marked at trænge ind i. Vores team vurderer dette selvfølgelig og finder den bedste løsning til din specifikke situation.</p>
                    </div>
                </div>
                        
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Har du et specifikt behov eller spørgsmål?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Vi laver skræddersyede løsninger til alle slags behov – fra små specialiserede lister til store volumen-indsamlinger. Har du et specifikt krav, en unik niche eller bare et spørgsmål? Kontakt os via formularen herover, og vi finder den bedste løsning til din virksomhed.</p>
                    </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Sticky Lead Gen Bar -->
    <div class="nl-sticky-lead-bar" id="nl-sticky-lead-bar" aria-live="polite">
        <div class="nl-container">
            <div class="nl-sticky-content">
                <div class="nl-sticky-text">
                    <span class="nl-sticky-icon" aria-hidden="true">💡</span>
                    <span><strong>Har I gamle kundelister?</strong> Få gratis GDPR audit & DNC-screening</span>
                </div>
                <div class="nl-sticky-actions">
                    <button class="nl-btn-small nl-btn-white" type="button" id="nl-sticky-open">Få gratis audit</button>
                    <button class="nl-sticky-close" type="button" id="nl-sticky-close" aria-label="Luk bar">×</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Lead Gen Popup -->
    <div id="nl-leadgen-popup" class="nl-popup-overlay" role="dialog" aria-modal="true" aria-labelledby="nl-popup-title" aria-hidden="true">
        <div class="nl-popup-content">
            <button class="nl-popup-close" type="button" id="nl-popup-close" aria-label="Luk popup">×</button>
            <h2 id="nl-popup-title">🎁 Gratis GDPR Compliance Check</h2>
            <p class="nl-popup-desc">Har I en kundeliste I ikke får brugt? Vi laver en gratis audit og vurderer potentialet for genaktivering.</p>
            <ul class="nl-popup-benefits">
                <li>✅ Gratis DNC-screening</li>
                <li>✅ GDPR compliance audit</li>
                <li>✅ Vurdering af genaktiveringspotentiale</li>
                <li>✅ Uforpligtende rapport</li>
            </ul>
            <form class="nl-popup-form" id="nl-popup-form">
                <label class="nl-form-label" for="nl-popup-email">E-mail <span>*</span></label>
                <input type="email" id="nl-popup-email" name="email" required placeholder="din@email.dk">

                <label class="nl-form-label" for="nl-popup-message">Hvad vil du have auditeret?</label>
                <textarea id="nl-popup-message" name="message" rows="4" placeholder="Fortæl kort om jeres liste, antal kontakter, sidste kontakt og jeres ønsker."></textarea>

                <label class="nl-consent">
                    <input type="checkbox" id="nl-popup-consent" required>
                    <span>
                        Jeg accepterer at blive kontaktet om audit-resultatet, modtage relevante tilbud og opdateringer fra NordicLeads, og bekræfter at jeg har læst jeres privatlivspolitik. Du kan altid framelde igen via linket i vores mails.
                    </span>
                </label>

                <button type="submit" class="nl-btn-primary nl-btn-full">Få gratis audit</button>
                <p class="nl-popup-small">100% gratis og uforpligtende</p>
                <div class="nl-popup-status" id="nl-popup-status" role="status" aria-live="polite"></div>
            </form>
        </div>
    </div>

</main>

<script>
// Lead Gen Popup & Sticky Bar - Hybrid trigger
(function() {
    const popup = document.getElementById('nl-leadgen-popup');
    const stickyBar = document.getElementById('nl-sticky-lead-bar');
    const openBtn = document.getElementById('nl-sticky-open');
    const closeBarBtn = document.getElementById('nl-sticky-close');
    const closePopupBtn = document.getElementById('nl-popup-close');
    const form = document.getElementById('nl-popup-form');
    const statusEl = document.getElementById('nl-popup-status');

    let popupShown = false;
    let exitIntentDetected = false;
    let timeOnPage = 0;
    let scrollPercent = 0;
    const LS_POPUP_KEY = 'nl_popup_shown';
    const LS_BAR_KEY = 'nl_sticky_closed';

    // Helpers
    const hasPopupSeen = () => localStorage.getItem(LS_POPUP_KEY) === '1';
    const hasBarClosed = () => localStorage.getItem(LS_BAR_KEY) === '1';

    function showPopup(force = false) {
        if (!force && (popupShown || hasPopupSeen())) return;
        popupShown = true;
        localStorage.setItem(LS_POPUP_KEY, '1');
        if (timeInterval) clearInterval(timeInterval);
        popup.setAttribute('aria-hidden', 'false');
        popup.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function hidePopup() {
        popup.classList.remove('active');
        popup.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    function hideBar() {
        if (stickyBar) {
            stickyBar.classList.add('hidden');
            localStorage.setItem(LS_BAR_KEY, '1');
        }
    }

    function checkConditions() {
        if (popupShown || hasPopupSeen()) return;
        // Show if: (20s & 40% scroll) OR (60% scroll) OR (exit intent after 8s)
        const condition1 = timeOnPage >= 20 && scrollPercent >= 40;
        const condition2 = scrollPercent >= 60;
        const condition3 = exitIntentDetected && timeOnPage >= 8;
        if (condition1 || condition2 || condition3) {
            showPopup();
        }
    }

    // Time tracker
    const timeInterval = setInterval(() => {
        timeOnPage += 1;
        checkConditions();
    }, 1000);

    // Scroll tracker
    window.addEventListener('scroll', () => {
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        scrollPercent = docHeight > 0 ? (window.scrollY / docHeight) * 100 : 0;
        checkConditions();
    }, { passive: true });

    // Exit intent
    document.addEventListener('mouseleave', (e) => {
        if (e.clientY < 0) {
            exitIntentDetected = true;
            checkConditions();
        }
    });

    // Sticky bar interactions
    if (openBtn) openBtn.addEventListener('click', () => showPopup(true));
    if (closeBarBtn) closeBarBtn.addEventListener('click', hideBar);
    if (closePopupBtn) closePopupBtn.addEventListener('click', hidePopup);

    // Form submission (client-side only)
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = form.querySelector('#nl-popup-email').value.trim();
            const consent = form.querySelector('#nl-popup-consent').checked;
            if (!email || !consent) {
                statusEl.textContent = 'Udfyld email og accepter venligst samtykke.';
                statusEl.className = 'nl-popup-status error';
                return;
            }
            statusEl.textContent = 'Tak! Vi kontakter dig med en gratis audit.';
            statusEl.className = 'nl-popup-status success';
            form.reset();
            setTimeout(hidePopup, 1200);
        });
    }

    // Initial bar visibility
    if (stickyBar && !hasBarClosed()) {
        stickyBar.classList.remove('hidden');
    } else if (stickyBar) {
        stickyBar.classList.add('hidden');
    }
})();

// FAQ Accordion
document.querySelectorAll('.nl-faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const item = button.parentElement;
        const isOpen = item.classList.contains('active');
        
        // Close all
        document.querySelectorAll('.nl-faq-item').forEach(i => i.classList.remove('active'));
        
        // Open clicked if it was closed
        if (!isOpen) {
            item.classList.add('active');
        }
    });
});
</script>

<?php
get_footer();
?>
