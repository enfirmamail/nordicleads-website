<!-- Site Footer - Minimal & Professional -->
<footer class="bg-gray-900 border-t border-gray-800" role="contentinfo">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <!-- Company Info -->
            <div class="md:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <svg class="w-10 h-10" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="footerBg" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#0066cc"/>
                                <stop offset="100%" stop-color="#003366"/>
                            </linearGradient>
                        </defs>
                        <rect width="64" height="64" rx="14" fill="url(#footerBg)"/>
                        <text x="32" y="32" font-family="Inter, sans-serif" font-size="26" font-weight="700" fill="#ffffff" text-anchor="middle" dominant-baseline="central">NL</text>
                    </svg>
                    <span class="text-xl font-semibold text-white">NordicLeads</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-md">
                    GDPR-sikker lead generation til danske virksomheder. 
                    Vi finder og kontakter potentielle kunder via professionel B2B outreach.
                </p>
                <div class="space-y-2">
                    <p class="text-sm text-gray-400">
                        <span class="font-semibold text-gray-300">Email:</span> 
                        <a href="mailto:info@nordicleads.dk" class="text-blue-400 hover:text-blue-300 transition-colors">info@nordicleads.dk</a>
                    </p>
                    <p class="text-sm text-gray-400">
                        <span class="font-semibold text-gray-300">Akut kontakt:</span> 
                        <a href="mailto:EnfirmaMail@gmail.com" class="text-blue-400 hover:text-blue-300 transition-colors"><strong>E</strong>nfirmaMail@gmail.com</a><br>
                        <span class="text-xs text-gray-500 block mt-1"><strong>E</strong>nfirma's Mail</span>
                    </p>
                    <p class="text-sm text-gray-400">
                        <span class="font-semibold text-gray-300">Samarbejde:</span> 
                        <a href="mailto:sammarbejde@nordicleads.dk" class="text-blue-400 hover:text-blue-300 transition-colors">sammarbejde@nordicleads.dk</a>
                    </p>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Hurtige links</h3>
                <ul class="space-y-3">
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
                    
                    $blog_url = get_permalink(get_option('page_for_posts')) ?: home_url('/blog');
                    ?>
                    <li><a href="<?php echo esc_url($cases_url); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Cases</a></li>
                    <li><a href="<?php echo esc_url($blog_url); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#hvordan')); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Sådan virker det</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#faq')); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Kontakt</a></li>
                </ul>
            </div>
            
            <!-- Legal -->
            <div>
                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Juridisk & Compliance</h3>
                <ul class="space-y-3">
                    <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Privatlivspolitik</a></li>
                    <li><a href="<?php echo esc_url(home_url('/terms-and-conditions')); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Handelsbetingelser</a></li>
                    <li><a href="<?php echo esc_url(home_url('/gdpr-info')); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">GDPR Information</a></li>
                    <li><a href="<?php echo esc_url(home_url('/cookie-policy')); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Cookie Politik</a></li>
                    <?php
                    // Find unsubscribe page
                    $unsubscribe_page = get_pages(array(
                        'meta_key' => '_wp_page_template',
                        'meta_value' => 'page-unsubscribe.php'
                    ));
                    if (!empty($unsubscribe_page)) {
                        $unsubscribe_url = get_permalink($unsubscribe_page[0]->ID);
                    } else {
                        $unsubscribe_url = home_url('/unsubscribe');
                    }
                    ?>
                    <li><a href="<?php echo esc_url($unsubscribe_url); ?>" class="text-sm text-gray-400 hover:text-white transition-colors">Afmeld nyhedsbrev</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="pt-8 border-t border-gray-800">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-sm text-gray-400">
                    &copy; <?php echo date('Y'); ?> NordicLeads. Alle rettigheder forbeholdes.
                </p>
                <p class="text-xs text-gray-500">
                    100% GDPR-compliant | EU-hosted | Made in Denmark 🇩🇰
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Sticky CTA Button - Floating -->
<a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="fixed bottom-6 right-6 z-40 inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white text-sm font-semibold rounded-full shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300 lg:hidden" aria-label="Kontakt os">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
    </svg>
    Kontakt os
</a>

<!-- Cookie Consent Banner - Modern -->
<div id="cookie-consent" class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-gray-200 shadow-2xl transform translate-y-full transition-transform duration-300" role="dialog" aria-labelledby="cookie-consent-title" aria-describedby="cookie-consent-desc" style="display: none;">
    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
            <div class="flex-1">
                <h3 id="cookie-consent-title" class="text-base font-semibold text-gray-900 mb-2">
                    Vi bruger cookies
                </h3>
                <p id="cookie-consent-desc" class="text-sm text-gray-600 leading-relaxed">
                    Vi bruger cookies til at forbedre din oplevelse, analysere trafik og tilpasse indhold. 
                    Ved at klikke "Accepter alle" samtykker du til vores brug af cookies. 
                    <a href="#privacy" class="text-blue-900 hover:underline font-medium">Læs mere</a>
                </p>
            </div>
            <div class="flex items-center gap-3">
                <button id="cookie-reject" class="px-5 py-2.5 text-sm font-semibold text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                    Kun nødvendige
                </button>
                <button id="cookie-accept" class="px-5 py-2.5 text-sm font-semibold text-white bg-gradient-to-r from-blue-900 to-blue-700 rounded-lg hover:shadow-lg transition-all">
                    Accepter alle
                </button>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>

