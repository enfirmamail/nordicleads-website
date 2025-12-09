<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.svg">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.svg">
    
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
            <a href="#hvordan">Kold lead generering</a>
            
            <!-- Services Dropdown -->
            <div class="nl-nav-dropdown">
                <button class="nl-nav-dropdown-toggle" aria-expanded="false" aria-haspopup="true">
                    Services
                    <svg class="nl-dropdown-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path d="M2 4L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="nl-nav-dropdown-menu">
                    <a href="<?php echo home_url('/services/lead-generation'); ?>">Lead Generation</a>
                    <a href="<?php echo home_url('/services/kunde-genaktivering'); ?>">Kunde Genaktivering</a>
                    <a href="<?php echo home_url('/services/email-outreach'); ?>">Email Outreach</a>
                    <a href="<?php echo home_url('/services/webudvikling'); ?>">Webudvikling</a>
                    <a href="<?php echo home_url('/services/ai-integration-automation'); ?>">AI-Integration & Automation</a>
                    <a href="<?php echo home_url('/services/custom-loesninger'); ?>">Custom Løsninger</a>
                </div>
            </div>
            
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
            <?php 
            $blog_url = get_permalink(get_option('page_for_posts')) ?: home_url('/blog');
            $faq_url = home_url('/#faq');
            ?>
            <a href="<?php echo esc_url($blog_url); ?>">Blog</a>
            <a href="<?php echo esc_url($faq_url); ?>">FAQ</a>
            <a href="<?php echo esc_url(home_url('/#kontakt')); ?>">Kontakt</a>
        </nav>
        
        <!-- CTA -->
        <div class="nl-header-cta">
            <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="nl-btn-header">Få leads nu</a>
            
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
        <a href="#hvordan">Kold lead generering</a>
        
        <!-- Services Mobile Dropdown -->
        <div class="nl-mobile-dropdown">
            <button class="nl-mobile-dropdown-toggle">
                Services
                <svg class="nl-dropdown-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M2 4L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div class="nl-mobile-dropdown-menu">
                <a href="<?php echo home_url('/services/lead-generation'); ?>">Lead Generation</a>
                <a href="<?php echo home_url('/services/kunde-genaktivering'); ?>">Kunde Genaktivering</a>
                <a href="<?php echo home_url('/services/email-outreach'); ?>">Email Outreach</a>
                <a href="<?php echo home_url('/services/webudvikling'); ?>">Webudvikling</a>
                <a href="<?php echo home_url('/services/ai-integration-automation'); ?>">AI-Integration & Automation</a>
                <a href="<?php echo home_url('/services/custom-loesninger'); ?>">Custom Løsninger</a>
            </div>
        </div>
        
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
        <?php 
        $blog_url = get_permalink(get_option('page_for_posts')) ?: home_url('/blog');
        $faq_url = home_url('/#faq');
        ?>
        <a href="<?php echo esc_url($blog_url); ?>">Blog</a>
        <a href="<?php echo esc_url($faq_url); ?>">FAQ</a>
        <a href="<?php echo esc_url(home_url('/#kontakt')); ?>">Kontakt</a>
    </div>
</header>


<script>
(function() {
    const header = document.getElementById('site-header');
    if (!header) return;
    
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    // Check if this is the front page
    const isFrontPage = document.body.classList.contains('home') || document.body.classList.contains('page-template-front-page');
    
    // Function to update header state
    function updateHeaderState() {
        if (isFrontPage) {
            // Front page: toggle scrolled state based on scroll position
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        } else {
            // All other pages: always show scrolled state (white background, dark text, shadow)
            header.classList.add('scrolled');
            header.style.boxShadow = '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)';
        }
    }
    
    // Run immediately
    updateHeaderState();
    
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            updateHeaderState();
            if (isFrontPage) {
                window.addEventListener('scroll', updateHeaderState);
            }
        });
    } else {
        if (isFrontPage) {
            window.addEventListener('scroll', updateHeaderState);
        }
    }
    
    // Mobile menu toggle
    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const isActive = mobileMenu.classList.contains('active');
            mobileMenu.classList.toggle('active');
            this.setAttribute('aria-expanded', !isActive);
            
            // Prevent body scroll when menu is open
            if (!isActive) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (mobileMenu.classList.contains('active') && 
                !mobileMenu.contains(e.target) && 
                !mobileToggle.contains(e.target)) {
                mobileMenu.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });
    }
    
    // Desktop dropdown functionality
    document.querySelectorAll('.nl-nav-dropdown').forEach(dropdown => {
        const toggle = dropdown.querySelector('.nl-nav-dropdown-toggle');
        const menu = dropdown.querySelector('.nl-nav-dropdown-menu');
        
        if (toggle && menu) {
            // Toggle on click
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const isOpen = menu.classList.contains('active');
                
                // Close all other dropdowns
                document.querySelectorAll('.nl-nav-dropdown-menu.active').forEach(m => {
                    if (m !== menu) {
                        m.classList.remove('active');
                        m.previousElementSibling.setAttribute('aria-expanded', 'false');
                    }
                });
                
                // Toggle current dropdown
                menu.classList.toggle('active');
                toggle.setAttribute('aria-expanded', !isOpen);
            });
            
            // Close on outside click
            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target)) {
                    menu.classList.remove('active');
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    });
    
    // Mobile dropdown functionality
    document.querySelectorAll('.nl-mobile-dropdown').forEach(dropdown => {
        const toggle = dropdown.querySelector('.nl-mobile-dropdown-toggle');
        const menu = dropdown.querySelector('.nl-mobile-dropdown-menu');
        
        if (toggle && menu) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                menu.classList.toggle('active');
                const isOpen = menu.classList.contains('active');
                toggle.setAttribute('aria-expanded', isOpen);
            });
        }
    });
})();
</script>
