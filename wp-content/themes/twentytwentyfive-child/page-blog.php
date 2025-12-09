<?php
/**
 * Template Name: Blog
 * Description: Custom blog page template for NordicLeads
 * This template can be selected manually for a static blog page
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"></noscript>
    
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
            <?php 
            $blog_url = get_permalink(get_option('page_for_posts')) ?: home_url('/blog');
            ?>
            <a href="<?php echo esc_url($blog_url); ?>">Blog</a>
            <a href="#faq">FAQ</a>
            <a href="#kontakt">Kontakt</a>
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
        <?php 
        $blog_url = get_permalink(get_option('page_for_posts')) ?: home_url('/blog');
        ?>
        <a href="<?php echo esc_url($blog_url); ?>">Blog</a>
        <a href="#faq">FAQ</a>
        <a href="#kontakt">Kontakt</a>
    </div>
</header>


<script>
(function() {
    const header = document.getElementById('site-header');
    if (!header) return;
    
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    // Function to update header state - blog page starts with scrolled state
    function updateHeaderState() {
        // Blog page always has scrolled state (white background, dark text, shadow)
        header.classList.add('scrolled');
        header.style.boxShadow = '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)';
    }
    
    // Run immediately - blog header always starts scrolled
    updateHeaderState();
    
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            updateHeaderState();
            window.addEventListener('scroll', updateHeaderState);
        });
    } else {
        window.addEventListener('scroll', updateHeaderState);
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
})();
</script>

<style>
/* Force blog styling - highest priority */
body.page-template-page-blog main,
body.page-template-page-blog .wp-site-blocks,
body.page-template-page-blog .wp-block-group {
    padding: 0 !important;
    margin: 0 !important;
    max-width: 100% !important;
    width: 100% !important;
}
</style>

<main id="main-content" role="main">

    <!-- Blog Hero -->
    <section class="nl-blog-hero">
        <div class="nl-container">
            <div class="nl-blog-hero-content">
                <h1 class="nl-blog-hero-title">Blog</h1>
                <p class="nl-blog-hero-subtitle">
                    Tips, guides og indsigt om B2B lead generation, GDPR-compliance og salgsstrategier.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="nl-blog-section">
        <div class="nl-container">
            <?php
            // Get blog posts
            $blog_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 12,
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1
            ));
            
            if ($blog_query->have_posts()) : ?>
                <div class="nl-blog-grid">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <article class="nl-blog-card" itemscope itemtype="https://schema.org/BlogPosting">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="nl-blog-card-image">
                                    <a href="<?php the_permalink(); ?>" aria-label="Læs <?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail('large', array('class' => 'nl-blog-thumbnail', 'itemprop' => 'image')); ?>
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class="nl-blog-card-image nl-blog-card-image-placeholder">
                                    <a href="<?php the_permalink(); ?>" aria-label="Læs <?php the_title_attribute(); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 250" class="nl-blog-placeholder-svg">
                                            <rect width="400" height="250" fill="#f3f4f6"/>
                                            <g opacity="0.3">
                                                <circle cx="200" cy="100" r="30" fill="#0066cc"/>
                                                <path d="M170 130h60M180 145h40" stroke="#0066cc" stroke-width="3" stroke-linecap="round"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="nl-blog-card-content">
                                <div class="nl-blog-card-meta">
                                    <time datetime="<?php echo get_the_date('c'); ?>" class="nl-blog-date" itemprop="datePublished">
                                        <?php echo get_the_date('d. M Y'); ?>
                                    </time>
                                    <span class="nl-blog-read-time">
                                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="10" stroke-width="2"/>
                                            <path d="M12 6v6l4 2" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                        <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> min
                                    </span>
                                </div>
                                
                                <h2 class="nl-blog-card-title" itemprop="headline">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                
                                <?php if (has_excerpt()) : ?>
                                    <p class="nl-blog-card-excerpt" itemprop="description"><?php the_excerpt(); ?></p>
                                <?php else : ?>
                                    <p class="nl-blog-card-excerpt" itemprop="description"><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                                <?php endif; ?>
                                
                                <a href="<?php the_permalink(); ?>" class="nl-blog-card-link" itemprop="url">
                                    Læs artikel
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                            <meta itemprop="author" content="NordicLeads">
                            <meta itemprop="publisher" content="NordicLeads">
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <!-- Pagination -->
                <div class="nl-blog-pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $blog_query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'mid_size' => 2,
                        'prev_text' => '← Forrige',
                        'next_text' => 'Næste →',
                    ));
                    ?>
                </div>
            <?php else : ?>
                <div class="nl-blog-empty">
                    <h2>Ingen indlæg fundet</h2>
                    <p>Der er ingen blogindlæg at vise endnu.</p>
                </div>
            <?php endif; 
            wp_reset_postdata();
            ?>
        </div>
    </section>

</main>

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
                        <span class="font-semibold text-gray-300">CVR:</span> XX XX XX XX
                    </p>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Navigation</h3>
                <ul class="space-y-3">
                    <li><a href="#hvordan-virker-det" class="text-sm text-gray-400 hover:text-white transition-colors">Sådan virker det</a></li>
                    <li><a href="#resultater" class="text-sm text-gray-400 hover:text-white transition-colors">Resultater</a></li>
                    <li><a href="#priser" class="text-sm text-gray-400 hover:text-white transition-colors">Priser</a></li>
                    <li><a href="#faq" class="text-sm text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    <li><a href="#kontakt" class="text-sm text-gray-400 hover:text-white transition-colors">Kontakt</a></li>
                </ul>
            </div>
            
            <!-- Legal -->
            <div>
                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Juridisk</h3>
                <ul class="space-y-3">
                    <li><a href="#privacy" class="text-sm text-gray-400 hover:text-white transition-colors">Privatlivspolitik</a></li>
                    <li><a href="#terms" class="text-sm text-gray-400 hover:text-white transition-colors">Handelsbetingelser</a></li>
                    <li><a href="#gdpr" class="text-sm text-gray-400 hover:text-white transition-colors">GDPR Information</a></li>
                    <li><a href="#cookies" class="text-sm text-gray-400 hover:text-white transition-colors">Cookie Politik</a></li>
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
<a href="#kontakt" class="fixed bottom-6 right-6 z-40 inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white text-sm font-semibold rounded-full shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300 lg:hidden" aria-label="Book gratis opkald">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
    </svg>
    Book opkald
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
