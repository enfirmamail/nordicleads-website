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
                    Kvalificerede B2B-leads<br>
                    <span>– leveret på få dage</span>
                </h1>
                
                <!-- Subline -->
                <p class="nl-hero-subtitle">
                    50–250 verificerede virksomhedskontakter med direkte e-mails og telefonnumre. 
                    Alt fra CVR og offentlige kilder – 100 % GDPR-sikker via legitim interesse.
                </p>
                
                <!-- Check Bullets -->
                <ul class="nl-hero-checks">
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Verificerede e-mails
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Direkte telefonnumre
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        DNC-screenet
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Klar til eksport (CSV/Excel)
                    </li>
                </ul>
                
                <!-- CTAs -->
                <div class="nl-hero-ctas">
                    <a href="#kontakt" class="nl-btn-primary">Få leads nu</a>
                    <a href="#priser" class="nl-btn-secondary">Se priser</a>
                </div>
                
                <!-- Trust Line -->
                <p class="nl-hero-trust">
                    GDPR Art. 6(1)(f) · Legitim interesse · EU-baseret · Brugt af 80+ danske virksomheder
                </p>
            </div>
            
            <!-- Right Column: Image (45%) -->
            <div class="nl-hero-image">
                <img 
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/wmremove-transformed.jpeg'); ?>" 
                    alt="Professionelt B2B-team arbejder med leads og data"
                    loading="eager"
                >
        </div>
        </div>
    </section>

    <!-- Trusted By Section - Clean B2B Social Proof with Auto-scroll -->
    <section class="nl-trusted">
        <div class="nl-trusted-inner">
            <div class="nl-trusted-slider">
                <div class="nl-trusted-track">
                    <!-- Set 1: Dmify, DentalDesk, Auto Specialisterne, Dmify, DentalDesk, Nordisk Rengøring, Dmify, DentalDesk, FinanceHub, Dmify, DentalDesk, TechVenture -->
                    
                    <!-- Dmify 1 -->
                    <a href="https://dmify.net" target="_blank" rel="noopener noreferrer" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 1 -->
                    <a href="https://dentaldesk.dk" target="_blank" rel="noopener noreferrer" class="nl-logo-item">
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
                    <a href="#cases" class="nl-logo-item">
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
                    <a href="https://dmify.net" target="_blank" rel="noopener noreferrer" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo">
                            <span class="nl-logo-name">Dmify.net</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 2 -->
                    <a href="https://dentaldesk.dk" target="_blank" rel="noopener noreferrer" class="nl-logo-item">
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
                    <a href="#cases" class="nl-logo-item">
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
                    <a href="https://dmify.net" target="_blank" rel="noopener noreferrer" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo">
                            <span class="nl-logo-name">Dmify.net</span>
                    </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 3 -->
                    <a href="https://dentaldesk.dk" target="_blank" rel="noopener noreferrer" class="nl-logo-item">
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
                    <a href="#cases" class="nl-logo-item">
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
                    <a href="https://dmify.net" target="_blank" rel="noopener noreferrer" class="nl-logo-item">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 4 -->
                    <a href="https://dentaldesk.dk" target="_blank" rel="noopener noreferrer" class="nl-logo-item">
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
                    <a href="#cases" class="nl-logo-item">
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
                    <a href="https://dmify.net" target="_blank" rel="noopener noreferrer" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 1 -->
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
                    <!-- Auto Specialisterne ApS -->
                    <a href="#cases" class="nl-logo-item" tabindex="-1">
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
                    <a href="https://dmify.net" target="_blank" rel="noopener noreferrer" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 2 -->
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
                    <!-- Nordisk Rengøring A/S -->
                    <a href="#cases" class="nl-logo-item" tabindex="-1">
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
                    <a href="https://dmify.net" target="_blank" rel="noopener noreferrer" class="nl-logo-item" tabindex="-1">
                        <div class="nl-logo-content">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo">
                            <span class="nl-logo-name">Dmify.net</span>
                        </div>
                        <span class="nl-logo-cta">Læs mere om denne case →</span>
                    </a>
                    <!-- DentalDesk 3 -->
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
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logos/dmify.png'); ?>" alt="Dmify logo">
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

    <!-- Social Proof / Stats Section -->
    <section class="nl-stats">
        <div class="nl-stats-inner">
            <div class="nl-stat">
                <span class="nl-stat-number">40%</span>
                <span class="nl-stat-label">Flere kunder i snit</span>
                </div>
            <div class="nl-stat">
                <span class="nl-stat-number">50-250</span>
                <span class="nl-stat-label">Nye leads/måned</span>
                </div>
            <div class="nl-stat">
                <span class="nl-stat-number">2 uger</span>
                <span class="nl-stat-label">Til første resultater</span>
                </div>
            <div class="nl-stat">
                <span class="nl-stat-number">100%</span>
                <span class="nl-stat-label">GDPR-compliant</span>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="hvordan" class="nl-section nl-section-light">
        <div class="nl-container">
            <div class="nl-section-header">
                <h2>Sådan virker det</h2>
                <p>Tre enkle trin fra leads til bookinger – vi håndterer det hele</p>
            </div>
            
            <div class="nl-steps">
                <div class="nl-step">
                    <div class="nl-step-number">1</div>
                    <h3>Vi finder leads</h3>
                    <p>Fra offentlige kilder som CVR, Google Maps og firmahjemmesider. 100% GDPR-compliant og målrettet din branche.</p>
                </div>
                <div class="nl-step">
                    <div class="nl-step-number">2</div>
                    <h3>Sender personaliserede emails</h3>
                    <p>Professionelle kolde emails på dansk med DNC-screening, compliance-checks og unsubscribe-funktionalitet.</p>
                </div>
                <div class="nl-step">
                    <div class="nl-step-number">3</div>
                    <h3>Du får bookede leads</h3>
                    <p>Varme leads leveret direkte til dig. Alt du skal gøre er at lukke salget – vi klarer resten.</p>
                </div>
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
                    <p>Data gemmes sikkert på EU-servere i Danmark. Dansk support der forstår lokal lovgivning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="priser" class="nl-section nl-section-light">
        <div class="nl-container">
            <div class="nl-section-header">
                <h2>Transparente priser</h2>
                <p>Vælg den pakke der passer til din virksomhed. Ingen skjulte omkostninger.</p>
            </div>
            
            <div class="nl-pricing">
                <!-- Starter -->
                <div class="nl-pricing-card">
                    <h3>Starter</h3>
                    <div class="nl-pricing-price">
                        <span class="nl-pricing-amount">2.500 kr</span>
                        <span class="nl-pricing-period">/måned</span>
                    </div>
                    <ul class="nl-pricing-features">
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> 50-100 leads/måned</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> GDPR-compliant outreach</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Email support</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Månedlig rapport</li>
                    </ul>
                    <a href="#kontakt" class="nl-pricing-btn">Kom i gang</a>
                </div>
                
                <!-- Pro -->
                <div class="nl-pricing-card nl-pricing-featured">
                    <div class="nl-pricing-badge">Mest populær</div>
                    <h3>Pro</h3>
                    <div class="nl-pricing-price">
                        <span class="nl-pricing-amount">4.500 kr</span>
                        <span class="nl-pricing-period">/måned</span>
                    </div>
                    <ul class="nl-pricing-features">
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> 150-250 leads/måned</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Alt fra Starter +</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Personaliserede kampagner</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> 30 dages garanti</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Prioriteret support</li>
                    </ul>
                    <a href="#kontakt" class="nl-pricing-btn nl-pricing-btn-primary">Vælg Pro</a>
                </div>
                
                <!-- Enterprise -->
                <div class="nl-pricing-card">
                    <h3>Enterprise</h3>
                    <div class="nl-pricing-price">
                        <span class="nl-pricing-amount">Custom</span>
                    </div>
                    <ul class="nl-pricing-features">
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> 250+ leads/måned</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Alt fra Pro +</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Dedikeret account manager</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Multi-kanal outreach</li>
                        <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Custom integrations</li>
                    </ul>
                    <a href="#kontakt" class="nl-pricing-btn">Kontakt os</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="nl-section nl-section-white">
        <div class="nl-container nl-container-narrow">
            <div class="nl-section-header">
                <h2>Ofte stillede spørgsmål</h2>
                <p>Få svar på dine spørgsmål om GDPR, resultater og processen</p>
            </div>
            
            <div class="nl-faq">
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Er det spam at sende kolde emails?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Nej, ikke når det gøres rigtigt. Vi sender kun B2B-emails baseret på legitim interesse (GDPR Art. 6(1)(f)) med gensidig forretningsmæssig fordel. Alle emails inkluderer unsubscribe, og vi screener mod DNC-lister. Det er professionel business development.</p>
                    </div>
                </div>
                
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Hvordan sikrer I GDPR-compliance?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Vi bruger legitim interesse (GDPR Art. 6(1)(f)) for B2B med mutual benefit. Alle leads er fra offentlige kilder (CVR, Google Maps), screenet mod DNC-lister, med compliance-assessments og unsubscribe i hver email. Data gemmes sikkert på EU-servere.</p>
                    </div>
                </div>
                
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Hvor hurtigt kan jeg forvente resultater?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>De fleste kunder ser første leads inden for 2-3 uger. Vi starter med at scrape og kvalificere leads, sender kampagner og optimerer baseret på respons. Pro-pakken har 30 dages garanti.</p>
                    </div>
                </div>
                
                <div class="nl-faq-item">
                    <button class="nl-faq-question">
                        <span>Kan jeg opsige når som helst?</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nl-faq-answer">
                        <p>Ja, alle pakker er månedlige uden binding. Du kan opsige eller pause med 30 dages varsel. Vi tror på at du bliver fordi du ser resultater – ikke fordi du er låst fast.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="kontakt" class="nl-section nl-section-dark">
        <div class="nl-container nl-container-narrow">
            <div class="nl-section-header nl-section-header-light">
                <h2>Book et gratis opkald</h2>
                <p>Vi kontakter dig inden for 24 timer og hjælper dig med at komme i gang</p>
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
                        <textarea id="message" name="message" rows="4" placeholder="Fortæl os kort om din virksomhed og dine mål..."></textarea>
                    </div>
                    <button type="submit" class="nl-form-submit">Send besked</button>
                    <p class="nl-form-disclaimer">Ved at indsende accepterer du vores <a href="#">privatlivspolitik</a>. Vi behandler dine data i henhold til GDPR.</p>
                </form>
            </div>
            
            <p class="nl-contact-email">
                Eller kontakt os direkte: <a href="mailto:info@nordicleads.dk">info@nordicleads.dk</a>
                </p>
        </div>
    </section>

</main>

<script>
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
