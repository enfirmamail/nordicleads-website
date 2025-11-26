<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php if (is_front_page()): ?>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Få adgang til 50-250 relevante B2B-leads på minutter. Verificerede emails, telefonnumre og adresser fra CVR og offentlige kilder. 100% GDPR-compliant.">
    <meta name="keywords" content="b2b leads danmark, lead lister, email lister, cvr data, gdpr leads, virksomhedsdata">
    <meta name="author" content="NordicLeads">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:title" content="NordicLeads - B2B Leads fra Offentlige Kilder">
    <meta property="og:description" content="Få adgang til 50-250 relevante B2B-leads på minutter. GDPR-compliant data fra CVR og offentlige kilder.">
    <meta property="og:locale" content="da_DK">
    <meta property="og:site_name" content="NordicLeads">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="NordicLeads - B2B Leads fra Offentlige Kilder">
    <meta property="twitter:description" content="Få adgang til 50-250 relevante B2B-leads på minutter. GDPR-compliant.">
    
    <!-- Hreflang -->
    <link rel="alternate" hreflang="da-DK" href="<?php echo esc_url(home_url('/')); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo esc_url(home_url('/')); ?>">
    <?php endif; ?>
    
    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased bg-white text-slate-900'); ?>>
<?php wp_body_open(); ?>

<!-- Skip Link -->
<a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:px-6 focus:py-3 focus:bg-blue-600 focus:text-white focus:rounded-xl focus:shadow-lg focus:font-semibold">
    Spring til indhold
</a>

<!-- Header -->
<header id="site-header" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-xl border-b border-slate-100 transition-all duration-300" role="banner">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <nav class="flex items-center justify-between h-16" role="navigation" aria-label="Hovednavigation">
            
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2.5 group" aria-label="NordicLeads">
                <!-- New Premium SVG Logo -->
                <svg class="w-8 h-8 text-blue-600 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="2" width="28" height="28" rx="8" fill="currentColor" fill-opacity="0.1"/>
                    <circle cx="16" cy="16" r="6" fill="currentColor"/>
                    <circle cx="16" cy="16" r="10" stroke="currentColor" stroke-width="2" stroke-dasharray="4 2"/>
                    <path d="M16 4V8M16 24V28M4 16H8M24 16H28" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span class="text-lg font-bold text-slate-900 tracking-tight">NordicLeads</span>
            </a>
            
            <!-- Desktop Nav -->
            <ul class="hidden lg:flex items-center gap-8">
                <li><a href="#leads" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Leads</a></li>
                <li><a href="#hvordan" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Sådan virker det</a></li>
                <li><a href="#priser" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Priser</a></li>
                <li><a href="#faq" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">FAQ</a></li>
            </ul>
            
            <!-- CTA -->
            <div class="flex items-center gap-4">
                <a href="#kontakt" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/30 hover:-translate-y-0.5 transition-all duration-200">
                    Få leads
                </a>
                
                <!-- Mobile Toggle -->
                <button id="mobile-menu-toggle" class="lg:hidden p-2 -mr-2 text-slate-600 hover:text-slate-900 transition-colors" aria-label="Menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </nav>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden border-t border-slate-100">
            <div class="py-4 space-y-1">
                <a href="#leads" class="block px-3 py-2.5 text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 rounded-lg transition-colors">Leads</a>
                <a href="#hvordan" class="block px-3 py-2.5 text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 rounded-lg transition-colors">Sådan virker det</a>
                <a href="#priser" class="block px-3 py-2.5 text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 rounded-lg transition-colors">Priser</a>
                <a href="#faq" class="block px-3 py-2.5 text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 rounded-lg transition-colors">FAQ</a>
                <a href="#kontakt" class="block mt-2 px-4 py-3 text-center text-sm font-semibold text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg">Få leads</a>
            </div>
        </div>
    </div>
</header>

<!-- Spacer -->
<div class="h-16"></div>
