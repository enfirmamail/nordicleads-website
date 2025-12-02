<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if (is_front_page()): ?>
    <meta name="description" content="Tusindvis af kvalificerede B2B-leads leveret på under 24 timer. Verificerede emails, telefonnumre og adresser skræddersyet til din branche. 100% GDPR-compliant.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:title" content="NordicLeads – Tusindvis af kvalificerede B2B-leads på under 24 timer">
    <meta property="og:description" content="Tusindvis af verificerede B2B-leads skræddersyet til din branche. Leveret på under 24 timer, 100% GDPR-compliant.">
    <meta property="og:locale" content="da_DK">
    <link rel="alternate" hreflang="da-DK" href="<?php echo esc_url(home_url('/')); ?>">
    <?php endif; ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip Link -->
<a href="#main-content" class="nl-skip-link">Spring til indhold</a>

<!-- Header - Sticky with shadow on scroll -->
<header id="site-header" role="banner">
    <div class="nl-header-inner">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nl-logo" aria-label="NordicLeads">
            <svg class="nl-logo-icon" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="headerBg" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#0066cc"/>
                        <stop offset="100%" stop-color="#003366"/>
                    </linearGradient>
                </defs>
                <rect width="64" height="64" rx="14" fill="url(#headerBg)"/>
                <text x="32" y="32" font-family="Inter, sans-serif" font-size="26" font-weight="700" fill="#ffffff" text-anchor="middle" dominant-baseline="central">NL</text>
            </svg>
            <span class="nl-logo-text">NordicLeads</span>
        </a>
        
        <!-- Desktop Nav - Centered -->
        <nav class="nl-nav-desktop" role="navigation">
            <?php if (is_page_template('page-cases.php')): ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">Tilbage til forsiden</a>
            <?php else: ?>
                <a href="#hvordan">Sådan virker det</a>
                <?php 
                // Find cases page dynamically
                $cases_page = get_pages(array(
                    'meta_key' => '_wp_page_template',
                    'meta_value' => 'page-cases.php'
                ));
                if (!empty($cases_page)) {
                    $cases_url = get_permalink($cases_page[0]->ID);
                } else {
                    $cases_url = home_url('/cases');
                }
                ?>
                <a href="<?php echo esc_url($cases_url); ?>">Cases</a>
                <a href="#faq">FAQ</a>
                <a href="#kontakt">Kontakt</a>
            <?php endif; ?>
        </nav>
        
        <!-- CTA -->
        <div class="nl-header-cta">
            <a href="#kontakt" class="nl-btn-header">Få leads nu</a>
            
            <!-- Mobile Toggle -->
            <button id="mobile-menu-toggle" class="nl-mobile-toggle" aria-label="Menu" aria-expanded="false">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="nl-mobile-menu">
        <?php if (is_page_template('page-cases.php')): ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">Tilbage til forsiden</a>
        <?php else: ?>
            <a href="#hvordan">Sådan virker det</a>
            <?php 
            // Find cases page dynamically
            $cases_page = get_pages(array(
                'meta_key' => '_wp_page_template',
                'meta_value' => 'page-cases.php'
            ));
            if (!empty($cases_page)) {
                $cases_url = get_permalink($cases_page[0]->ID);
            } else {
                $cases_url = home_url('/cases');
            }
            ?>
            <a href="<?php echo esc_url($cases_url); ?>">Cases</a>
            <a href="#faq">FAQ</a>
            <a href="#kontakt">Kontakt</a>
        <?php endif; ?>
    </div>
</header>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('site-header');
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    // Scroll shadow
    window.addEventListener('scroll', function() {
        if (window.scrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // Mobile menu toggle
    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            this.setAttribute('aria-expanded', mobileMenu.classList.contains('active'));
        });
    }
});
</script>
