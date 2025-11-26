<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if (is_front_page()): ?>
    <meta name="description" content="Få adgang til 50-250 relevante B2B-leads på minutter. Verificerede emails, telefonnumre og adresser fra CVR. 100% GDPR-compliant.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:title" content="NordicLeads – B2B Leads fra Offentlige Kilder">
    <meta property="og:description" content="50-250 verificerede B2B-leads med emails og telefonnumre. GDPR-compliant via legitimate interest.">
    <meta property="og:locale" content="da_DK">
    <link rel="alternate" hreflang="da-DK" href="<?php echo esc_url(home_url('/')); ?>">
    <?php endif; ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased'); ?>>
<?php wp_body_open(); ?>

<!-- Skip Link -->
<a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:px-4 focus:py-2 focus:bg-slate-900 focus:text-white focus:rounded-lg focus:text-sm focus:font-medium">
    Spring til indhold
</a>

<!-- Header -->
<header id="site-header" class="fixed top-0 inset-x-0 z-50 h-16 bg-white/95 backdrop-blur-xl border-b border-slate-200/60 transition-shadow duration-300" role="banner">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 h-full">
        <nav class="flex items-center justify-between h-full" role="navigation">
            
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2.5 shrink-0 group" aria-label="NordicLeads">
                <!-- NL Logo -->
                <div class="w-9 h-9 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-600/30 group-hover:shadow-xl group-hover:shadow-blue-600/40 transition-shadow duration-300">
                    <span class="text-white text-sm font-bold tracking-tight">NL</span>
                </div>
                <span class="text-base font-semibold text-slate-900 hidden sm:block">NordicLeads</span>
            </a>
            
            <!-- Desktop Nav -->
            <ul class="hidden lg:flex items-center gap-8">
                <li><a href="#hvordan" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors duration-200">Sådan virker det</a></li>
                <li><a href="#priser" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors duration-200">Priser</a></li>
                <li><a href="#faq" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors duration-200">FAQ</a></li>
                <li><a href="#kontakt" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors duration-200">Kontakt</a></li>
            </ul>
            
            <!-- CTA -->
            <div class="flex items-center gap-3">
                <a href="#kontakt" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-lg shadow-lg shadow-blue-600/25 hover:bg-blue-700 hover:shadow-xl hover:shadow-blue-600/30 transition-all duration-300">
                    Få leads nu
                </a>
                
                <!-- Mobile Toggle -->
                <button id="mobile-menu-toggle" class="lg:hidden p-2 -mr-2 text-slate-500 hover:text-slate-900 transition-colors" aria-label="Menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </nav>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden absolute left-0 right-0 top-16 bg-white border-b border-slate-200 shadow-lg">
            <div class="px-4 py-4 space-y-1">
                <a href="#hvordan" class="block px-3 py-2.5 text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 rounded-lg transition-colors">Sådan virker det</a>
                <a href="#priser" class="block px-3 py-2.5 text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 rounded-lg transition-colors">Priser</a>
                <a href="#faq" class="block px-3 py-2.5 text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 rounded-lg transition-colors">FAQ</a>
                <a href="#kontakt" class="block px-3 py-2.5 text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 rounded-lg transition-colors">Kontakt</a>
            </div>
        </div>
    </div>
</header>

<!-- Spacer -->
<div class="h-16"></div>
