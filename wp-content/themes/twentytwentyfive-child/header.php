<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php if (is_front_page()): ?>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Få 50-250 nye kunder hver måned med GDPR-sikre leads fra offentlige kilder. Dansk support, hurtig opsætning, ingen spam-risiko.">
    <meta name="keywords" content="lead generation danmark, kolde emails b2b, gdpr sikre leads, outreach service danmark, b2b leads danmark">
    <meta name="author" content="NordicLeads">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:title" content="NordicLeads - Lead generation og outreach til danske virksomheder">
    <meta property="og:description" content="Få 50-250 nye kunder hver måned med GDPR-sikre leads fra offentlige kilder. Dansk support, hurtig opsætning.">
    <meta property="og:image" content="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/og-image.jpg'); ?>">
    <meta property="og:locale" content="da_DK">
    <meta property="og:site_name" content="NordicLeads">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="twitter:title" content="NordicLeads - Lead generation og outreach til danske virksomheder">
    <meta property="twitter:description" content="Få 50-250 nye kunder hver måned med GDPR-sikre leads fra offentlige kilder.">
    <meta property="twitter:image" content="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/og-image.jpg'); ?>">
    
    <!-- Hreflang -->
    <link rel="alternate" hreflang="da-DK" href="<?php echo esc_url(home_url('/')); ?>">
    <link rel="alternate" hreflang="da" href="<?php echo esc_url(home_url('/')); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo esc_url(home_url('/')); ?>">
    <?php endif; ?>
    
    <!-- Preconnect to External Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased'); ?>>
<?php wp_body_open(); ?>

<!-- Skip to Main Content (Accessibility) -->
<a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:px-6 focus:py-3 focus:bg-blue-600 focus:text-white focus:rounded-lg focus:shadow-lg">
    Spring til hovedindhold
</a>

<!-- Site Header - Ultra Clean & Minimal with Shadow on Scroll -->
<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-xl border-b border-gray-100 transition-all duration-300" role="banner" id="site-header">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="flex items-center justify-between h-20" role="navigation" aria-label="Hovednavigation">
            
            <!-- Logo SVG - Premium Lead Target Icon -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group" aria-label="NordicLeads Forside">
                <svg class="w-9 h-9 text-blue-900 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#003366;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#0066cc;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <circle cx="20" cy="20" r="18" stroke="url(#logoGradient)" stroke-width="2.5" fill="none"/>
                    <circle cx="20" cy="20" r="11" stroke="url(#logoGradient)" stroke-width="2" fill="none"/>
                    <circle cx="20" cy="20" r="4" fill="url(#logoGradient)"/>
                    <path d="M20 2 L20 10 M20 30 L20 38 M2 20 L10 20 M30 20 L38 20" stroke="url(#logoGradient)" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
                <span class="text-xl font-bold text-gray-900 tracking-tight">NordicLeads</span>
            </a>
            
            <!-- Desktop Navigation - Minimal & Clean -->
            <ul class="hidden lg:flex items-center gap-8" id="nav-menu">
                <li><a href="#hvordan-virker-det" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors duration-200">Sådan virker det</a></li>
                <li><a href="#resultater" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors duration-200">Resultater</a></li>
                <li><a href="#priser" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors duration-200">Priser</a></li>
                <li><a href="#faq" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors duration-200">FAQ</a></li>
            </ul>
            
            <!-- CTA Button - Premium Design -->
            <div class="hidden lg:block">
                <a href="#kontakt" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-gradient-to-r from-blue-900 to-blue-700 rounded-lg shadow-sm hover:shadow-md transform hover:-translate-y-0.5 transition-all duration-200">
                    Book opkald
                </a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button 
                class="lg:hidden p-2 text-gray-600 hover:text-gray-900 transition-colors" 
                aria-label="Åbn navigation" 
                aria-expanded="false"
                id="mobile-menu-toggle"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </nav>
        
        <!-- Mobile Menu -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="py-6 space-y-4">
                <a href="#hvordan-virker-det" class="block text-base font-medium text-gray-600 hover:text-gray-900">Sådan virker det</a>
                <a href="#resultater" class="block text-base font-medium text-gray-600 hover:text-gray-900">Resultater</a>
                <a href="#priser" class="block text-base font-medium text-gray-600 hover:text-gray-900">Priser</a>
                <a href="#faq" class="block text-base font-medium text-gray-600 hover:text-gray-900">FAQ</a>
                <a href="#kontakt" class="block w-full text-center px-6 py-3 text-sm font-semibold text-white bg-gradient-to-r from-blue-900 to-blue-700 rounded-lg shadow-sm">
                    Book opkald
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Spacer for Fixed Header -->
<div class="h-20"></div>

