<?php
/**
 * Twenty Twenty-Five Child Theme Functions
 * NordicLeads - Lead generation og outreach til danske virksomheder
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function twentytwentyfive_child_setup() {
    // Make theme available for translation
    load_child_theme_textdomain('twentytwentyfive-child', get_stylesheet_directory() . '/languages');
    
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'twentytwentyfive_child_setup');

/**
 * Enqueue Parent and Child Theme Styles and Scripts
 */
function twentytwentyfive_child_enqueue_assets() {
    // Parent theme stylesheet
    wp_enqueue_style(
        'twentytwentyfive-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->parent()->get('Version')
    );
    
    // Tailwind CSS (local copy to avoid CDN blocking)
    wp_enqueue_style(
        'tailwind-local',
        get_stylesheet_directory_uri() . '/assets/tailwind.min.css',
        array(),
        '3.4.1'
    );
    
    // Google Fonts - Inter (loaded asynchronously to avoid render blocking)
    // Note: Font is also loaded in header.php with media="print" trick for faster loading
    
    // Child theme stylesheet
    wp_enqueue_style(
        'twentytwentyfive-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('twentytwentyfive-parent-style', 'tailwind-local'),
        wp_get_theme()->get('Version')
    );
    
    // Child theme JavaScript
    wp_enqueue_script(
        'twentytwentyfive-child-script',
        get_stylesheet_directory_uri() . '/app.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('twentytwentyfive-child-script', 'nordicleadsData', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('nordicleads_nonce'),
        'siteUrl' => get_site_url(),
        'themeUrl' => get_stylesheet_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_assets');

/**
 * Add Preconnect to External Domains for Performance
 * Limited to 4 preconnect hints for optimal performance
 */
function twentytwentyfive_child_resource_hints($urls, $relation_type) {
    if ($relation_type === 'preconnect') {
        // Only add essential preconnects (max 4 recommended)
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin'
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin'
        );
        // Google Analytics and Tag Manager are loaded async, so preconnect is less critical
        // Removed to stay under 4 preconnect limit
    }
    return $urls;
}
add_filter('wp_resource_hints', 'twentytwentyfive_child_resource_hints', 10, 2);

/**
 * Add Custom Security Headers
 */
function twentytwentyfive_child_security_headers() {
    if (!is_admin()) {
        // Content Security Policy
        header("Content-Security-Policy: default-src 'self' https:; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.googletagmanager.com https://www.google-analytics.com https://connect.facebook.net https://cdn.jsdelivr.net https://accounts.google.com https://stats.wp.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net https://accounts.google.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; connect-src 'self' https://www.google-analytics.com https://*.google-analytics.com https://region1.google-analytics.com https://www.facebook.com https://stats.wp.com;");
        
        // X-Frame-Options
        header('X-Frame-Options: SAMEORIGIN');
        
        // X-Content-Type-Options
        header('X-Content-Type-Options: nosniff');
        
        // Referrer Policy
        header('Referrer-Policy: strict-origin-when-cross-origin');
        
        // Permissions Policy
        header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
    }
}
add_action('send_headers', 'twentytwentyfive_child_security_headers');

/**
 * Add Favicon Support (Enhanced)
 */
function twentytwentyfive_child_favicon() {
    $favicon_path = get_stylesheet_directory_uri() . '/assets/favicon.svg';
    $logo_path = get_stylesheet_directory_uri() . '/assets/logo.svg';
    
    // Multiple favicon sizes for better compatibility
    echo '<link rel="icon" type="image/svg+xml" href="' . esc_url($favicon_path) . '">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="192x192" href="' . esc_url($logo_path) . '">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="512x512" href="' . esc_url($logo_path) . '">' . "\n";
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . esc_url($logo_path) . '">' . "\n";
}
add_action('wp_head', 'twentytwentyfive_child_favicon', 5);

/**
 * Add Default Open Graph Image for all pages
 */
function twentytwentyfive_child_default_og_image() {
    // Only add if not already set (e.g. on front page or blog posts)
    if (!is_front_page() && !is_singular('post')) {
        $logo_url = get_stylesheet_directory_uri() . '/assets/logo.svg';
        echo '<meta property="og:image" content="' . esc_url($logo_url) . '">' . "\n";
        echo '<meta property="og:image:width" content="1200">' . "\n";
        echo '<meta property="og:image:height" content="630">' . "\n";
        echo '<meta property="og:image:alt" content="NordicLeads Logo">' . "\n";
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:image" content="' . esc_url($logo_url) . '">' . "\n";
    }
}
add_action('wp_head', 'twentytwentyfive_child_default_og_image', 3);

/**
 * Disable Emojis (Performance Optimization)
 */
function twentytwentyfive_child_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'twentytwentyfive_child_disable_emojis');

/**
 * Remove Query Strings from Static Resources (Performance)
 */
function twentytwentyfive_child_remove_query_strings($src) {
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('script_loader_src', 'twentytwentyfive_child_remove_query_strings', 15);
add_filter('style_loader_src', 'twentytwentyfive_child_remove_query_strings', 15);

/**
 * Defer JavaScript Loading (Performance)
 */
function twentytwentyfive_child_defer_scripts($tag, $handle, $src) {
    // Don't defer jQuery or admin scripts
    $defer_exclusions = array('jquery', 'jquery-core', 'jquery-migrate');
    
    if (in_array($handle, $defer_exclusions) || is_admin()) {
        return $tag;
    }
    
    return str_replace(' src', ' defer src', $tag);
}
add_filter('script_loader_tag', 'twentytwentyfive_child_defer_scripts', 10, 3);

/**
 * AJAX Handler for Contact Form Submission
 */
function twentytwentyfive_child_handle_contact_form() {
    // Verify nonce
    check_ajax_referer('nordicleads_nonce', 'nonce');
    
    // Sanitize inputs
    $name = sanitize_text_field($_POST['name']);
    $company = sanitize_text_field($_POST['company']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Validate email
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Ugyldig e-mail adresse.'));
        return;
    }
    
    // Prepare email
    $to = 'info@nordicleads.dk'; // Send directly to info email
    $subject = 'Ny henvendelse fra ' . $name . ' (' . $company . ')';
    $body = "Navn: $name\n";
    $body .= "Virksomhed: $company\n";
    $body .= "E-mail: $email\n";
    $body .= "Telefon: $phone\n\n";
    $body .= "Besked:\n$message\n";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: NordicLeads Website <noreply@nordicleads.dk>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        // Log lead (optional - could save to database)
        do_action('nordicleads_new_lead', array(
            'name' => $name,
            'company' => $company,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'timestamp' => current_time('mysql')
        ));
        
        wp_send_json_success(array(
            'message' => 'Tak for din henvendelse! Vi kontakter dig inden for 24 timer.'
        ));
    } else {
        wp_send_json_error(array(
            'message' => 'Der opstod en fejl. Prøv venligst igen eller kontakt os direkte på info@nordicleads.dk'
        ));
    }
    
    wp_die();
}
add_action('wp_ajax_nordicleads_contact', 'twentytwentyfive_child_handle_contact_form');
add_action('wp_ajax_nopriv_nordicleads_contact', 'twentytwentyfive_child_handle_contact_form');

/**
 * Add Body Classes for Customization
 */
function twentytwentyfive_child_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'nordicleads-frontpage';
    }
    if (is_home() || is_archive() || is_page_template('page-blog.php')) {
        $classes[] = 'nl-blog-page';
    }
    return $classes;
}
add_filter('body_class', 'twentytwentyfive_child_body_classes');

/**
 * Remove parent theme's content wrapper for blog pages
 */
function twentytwentyfive_child_remove_content_wrapper() {
    if (is_home() || is_archive() || is_page_template('page-blog.php')) {
        // Remove parent theme's content wrapper filters
        remove_all_filters('the_content');
    }
}
add_action('template_redirect', 'twentytwentyfive_child_remove_content_wrapper');

/**
 * Custom Excerpt Length for Blog Cards
 */
function twentytwentyfive_child_excerpt_length($length) {
    if (is_home() || is_archive() || is_page_template('page-blog.php')) {
        return 25;
    }
    return 30;
}
add_filter('excerpt_length', 'twentytwentyfive_child_excerpt_length', 999);

/**
 * Custom Excerpt More Text
 */
function twentytwentyfive_child_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'twentytwentyfive_child_excerpt_more');

/**
 * Add Structured Data JSON-LD to Head
 */
function twentytwentyfive_child_structured_data() {
    if (!is_front_page()) {
        return;
    }
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@graph' => array(
            // Organization
            array(
                '@type' => 'Organization',
                '@id' => get_site_url() . '/#organization',
                'name' => 'NordicLeads',
                'url' => get_site_url(),
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => get_stylesheet_directory_uri() . '/assets/logo.svg',
                    '@id' => get_site_url() . '/#logo'
                ),
                'contactPoint' => array(
                    '@type' => 'ContactPoint',
                    'email' => 'info@nordicleads.dk',
                    'contactType' => 'customer service',
                    'areaServed' => 'DK',
                    'availableLanguage' => 'da'
                ),
                'sameAs' => array()
            ),
            // ProfessionalService
            array(
                '@type' => 'ProfessionalService',
                '@id' => get_site_url() . '/#service',
                'name' => 'NordicLeads',
                'description' => 'Lead generation og outreach til danske virksomheder - GDPR-sikre leads fra offentlige kilder',
                'provider' => array(
                    '@id' => get_site_url() . '/#organization'
                ),
                'areaServed' => array(
                    '@type' => 'Country',
                    'name' => 'Denmark'
                ),
                'serviceType' => 'Lead Generation',
                'priceRange' => '$$'
            ),
            // Service
            array(
                '@type' => 'Service',
                'serviceType' => 'B2B Lead Generation',
                'provider' => array(
                    '@id' => get_site_url() . '/#organization'
                ),
                'areaServed' => array(
                    '@type' => 'Country',
                    'name' => 'Denmark'
                ),
                'hasOfferCatalog' => array(
                    '@type' => 'OfferCatalog',
                    'name' => 'Lead Generation Services',
                    'itemListElement' => array(
                        array(
                            '@type' => 'Offer',
                            'itemOffered' => array(
                                '@type' => 'Service',
                                'name' => 'GDPR-sikker lead generation'
                            )
                        ),
                        array(
                            '@type' => 'Offer',
                            'itemOffered' => array(
                                '@type' => 'Service',
                                'name' => 'Kolde emails på dansk'
                            )
                        )
                    )
                )
            ),
            // WebPage
            array(
                '@type' => 'WebPage',
                '@id' => get_site_url() . '/#webpage',
                'url' => get_site_url(),
                'name' => 'NordicLeads - Lead generation og outreach til danske virksomheder',
                'isPartOf' => array(
                    '@id' => get_site_url() . '/#website'
                ),
                'about' => array(
                    '@id' => get_site_url() . '/#organization'
                ),
                'description' => 'Få 50-250 nye kunder hver måned med GDPR-sikre leads fra offentlige kilder. Dansk support, hurtig opsætning, ingen spam-risiko.',
                'inLanguage' => 'da-DK'
            ),
            // WebSite
            array(
                '@type' => 'WebSite',
                '@id' => get_site_url() . '/#website',
                'url' => get_site_url(),
                'name' => 'NordicLeads',
                'description' => 'Lead generation og outreach til danske virksomheder',
                'publisher' => array(
                    '@id' => get_site_url() . '/#organization'
                ),
                'inLanguage' => 'da-DK'
            ),
            // BreadcrumbList
            array(
                '@type' => 'BreadcrumbList',
                '@id' => get_site_url() . '/#breadcrumb',
                'itemListElement' => array(
                    array(
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'Forside',
                        'item' => get_site_url()
                    )
                )
            )
        )
    );
    
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'twentytwentyfive_child_structured_data', 1);

/**
 * Add Blog Post Structured Data & SEO Meta Tags
 */
function twentytwentyfive_child_blog_seo() {
    // Only run on blog pages
    if (!is_singular('post') && !is_home() && !is_archive() && !is_page_template('page-blog.php')) {
        return;
    }
    
    // Blog Archive / Home Page
    if (is_home() || is_archive() || is_page_template('page-blog.php')) {
        // Meta description
        echo '<meta name="description" content="Læs vores blog om B2B lead generation, GDPR-compliance, cold email strategier og salgsoptimering. Praktiske tips til danske virksomheder.">' . "\n";
        
        // Open Graph
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:title" content="Blog - NordicLeads | Lead Generation Tips & Guides">' . "\n";
        echo '<meta property="og:description" content="Tips, guides og indsigt om B2B lead generation, GDPR-compliance og salgsstrategier.">' . "\n";
        echo '<meta property="og:url" content="' . esc_url(get_permalink(get_option('page_for_posts'))) . '">' . "\n";
        
        // Twitter Card
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="Blog - NordicLeads | Lead Generation Tips & Guides">' . "\n";
        
        // Canonical
        echo '<link rel="canonical" href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '">' . "\n";
        
        // Structured Data for Blog
        $blog_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Blog',
            'name' => 'NordicLeads Blog',
            'description' => 'Tips, guides og indsigt om B2B lead generation, GDPR-compliance og salgsstrategier.',
            'url' => get_permalink(get_option('page_for_posts')),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => 'NordicLeads',
                'url' => get_site_url(),
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => get_stylesheet_directory_uri() . '/assets/logo.svg'
                )
            ),
            'inLanguage' => 'da-DK'
        );
        
        echo '<script type="application/ld+json">' . wp_json_encode($blog_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
        
        return;
    }
    
    // Single Blog Post
    if (is_singular('post')) {
        global $post;
        
        // Get post data
        $title = get_the_title();
        $excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words(strip_tags(get_the_content()), 30);
        $author = 'NordicLeads';
        $published_date = get_the_date('c');
        $modified_date = get_the_modified_date('c');
        $permalink = get_permalink();
        $featured_image = get_the_post_thumbnail_url($post, 'full');
        
        // Meta description
        echo '<meta name="description" content="' . esc_attr($excerpt) . '">' . "\n";
        
        // Open Graph
        echo '<meta property="og:type" content="article">' . "\n";
        echo '<meta property="og:title" content="' . esc_attr($title) . ' | NordicLeads">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($excerpt) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url($permalink) . '">' . "\n";
        if ($featured_image) {
            echo '<meta property="og:image" content="' . esc_url($featured_image) . '">' . "\n";
        }
        echo '<meta property="article:published_time" content="' . $published_date . '">' . "\n";
        echo '<meta property="article:modified_time" content="' . $modified_date . '">' . "\n";
        echo '<meta property="article:author" content="' . $author . '">' . "\n";
        
        // Twitter Card
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr($excerpt) . '">' . "\n";
        if ($featured_image) {
            echo '<meta name="twitter:image" content="' . esc_url($featured_image) . '">' . "\n";
        }
        
        // Canonical
        echo '<link rel="canonical" href="' . esc_url($permalink) . '">' . "\n";
        
        // Structured Data for Article
        $article_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => $title,
            'description' => $excerpt,
            'url' => $permalink,
            'datePublished' => $published_date,
            'dateModified' => $modified_date,
            'author' => array(
                '@type' => 'Organization',
                'name' => $author,
                'url' => get_site_url()
            ),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => 'NordicLeads',
                'url' => get_site_url(),
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => get_stylesheet_directory_uri() . '/assets/logo.svg'
                )
            ),
            'mainEntityOfPage' => array(
                '@type' => 'WebPage',
                '@id' => $permalink
            ),
            'inLanguage' => 'da-DK'
        );
        
        // Add image if available
        if ($featured_image) {
            $article_schema['image'] = array(
                '@type' => 'ImageObject',
                'url' => $featured_image
            );
        }
        
        // Add word count and reading time
        $word_count = str_word_count(strip_tags(get_the_content()));
        $article_schema['wordCount'] = $word_count;
        
        echo '<script type="application/ld+json">' . wp_json_encode($article_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'twentytwentyfive_child_blog_seo', 2);

/**
 * Add Case Study SEO & Structured Data
 */
function twentytwentyfive_child_case_study_seo() {
    // Only run on case study pages
    if (!is_page_template('page-case-study.php')) {
        return;
    }
    
    global $post;
    
    // Get page data
    $title = get_the_title();
    $excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words(strip_tags(get_the_content()), 30);
    $permalink = get_permalink();
    $featured_image = get_the_post_thumbnail_url($post, 'full');
    
    // Get custom fields (if using ACF)
    $company_name = function_exists('get_field') ? get_field('case_company_name') : '';
    $quote = function_exists('get_field') ? get_field('case_quote') : '';
    $quote_author = function_exists('get_field') ? get_field('case_quote_author') : '';
    
    // Meta description
    echo '<meta name="description" content="' . esc_attr($excerpt) . '">' . "\n";
    
    // Open Graph
    echo '<meta property="og:type" content="article">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . ' | NordicLeads Case Study">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($excerpt) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($permalink) . '">' . "\n";
    if ($featured_image) {
        echo '<meta property="og:image" content="' . esc_url($featured_image) . '">' . "\n";
    }
    
    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($excerpt) . '">' . "\n";
    if ($featured_image) {
        echo '<meta name="twitter:image" content="' . esc_url($featured_image) . '">' . "\n";
    }
    
    // Canonical
    echo '<link rel="canonical" href="' . esc_url($permalink) . '">' . "\n";
    
    // Structured Data for Case Study
    $case_schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        '@id' => $permalink . '#article',
        'headline' => $title,
        'description' => $excerpt,
        'url' => $permalink,
        'datePublished' => get_the_date('c'),
        'dateModified' => get_the_modified_date('c'),
        'author' => array(
            '@type' => 'Organization',
            'name' => 'NordicLeads',
            'url' => get_site_url()
        ),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => 'NordicLeads',
            'url' => get_site_url(),
            'logo' => array(
                '@type' => 'ImageObject',
                'url' => get_stylesheet_directory_uri() . '/assets/logo.svg'
            )
        ),
        'mainEntityOfPage' => array(
            '@type' => 'WebPage',
            '@id' => $permalink
        ),
        'inLanguage' => 'da-DK'
    );
    
    // Add image if available
    if ($featured_image) {
        $case_schema['image'] = array(
            '@type' => 'ImageObject',
            'url' => $featured_image
        );
    }
    
    // Add company mentioned if available
    if ($company_name) {
        $case_schema['mentions'] = array(
            '@type' => 'Organization',
            'name' => $company_name
        );
    }
    
    echo '<script type="application/ld+json">' . wp_json_encode($case_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'twentytwentyfive_child_case_study_seo', 2);

/**
 * Remove Unnecessary WordPress Head Items (Performance & Security)
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');

/**
 * Enable SVG Upload Support
 */
function twentytwentyfive_child_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'twentytwentyfive_child_mime_types');

/**
 * Fix SVG Display in Media Library
 */
function twentytwentyfive_child_fix_svg_display($response, $attachment, $meta) {
    if ($response['mime'] == 'image/svg+xml' && empty($response['sizes'])) {
        $svg_path = get_attached_file($attachment->ID);
        if (file_exists($svg_path)) {
            $svg = simplexml_load_file($svg_path);
            if ($svg !== false) {
                $width = (int) $svg['width'];
                $height = (int) $svg['height'];
                $response['sizes'] = array(
                    'full' => array(
                        'url' => $response['url'],
                        'width' => $width,
                        'height' => $height,
                        'orientation' => $width > $height ? 'landscape' : 'portrait'
                    )
                );
            }
        }
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'twentytwentyfive_child_fix_svg_display', 10, 3);

/**
 * Custom Admin Footer Text
 */
function twentytwentyfive_child_admin_footer() {
    echo 'NordicLeads Theme v' . wp_get_theme()->get('Version');
}
add_filter('admin_footer_text', 'twentytwentyfive_child_admin_footer');

/**
 * Unsubscribe / DNC List Management
 */

/**
 * Get Unsubscribe/DNC List File Path
 */
function twentytwentyfive_child_get_unsubscribe_file() {
    $upload_dir = wp_upload_dir();
    $file_path = $upload_dir['basedir'] . '/nordicleads-unsubscribe.txt';
    
    // Create directory if it doesn't exist
    if (!file_exists($upload_dir['basedir'])) {
        wp_mkdir_p($upload_dir['basedir']);
    }
    
    // Create file if it doesn't exist
    if (!file_exists($file_path)) {
        file_put_contents($file_path, '');
        // Make file readable
        chmod($file_path, 0644);
    }
    
    return $file_path;
}

/**
 * Add Email to Unsubscribe/DNC List
 */
function twentytwentyfive_child_add_to_unsubscribe($email) {
    $file_path = twentytwentyfive_child_get_unsubscribe_file();
    $email = strtolower(trim($email));
    
    // Read existing emails
    $existing = array();
    if (file_exists($file_path)) {
        $content = file_get_contents($file_path);
        if ($content) {
            $lines = explode("\n", $content);
            $existing = array_filter(array_map('trim', $lines));
            $existing = array_map('strtolower', $existing);
        }
    }
    
    // Add email if not already in list
    if (!in_array($email, $existing)) {
        $existing[] = $email;
        // Sort alphabetically for easier management
        sort($existing);
        file_put_contents($file_path, implode("\n", $existing) . "\n", LOCK_EX);
    }
    
    return true;
}

/**
 * Check if Email is Unsubscribed/DNC
 */
function twentytwentyfive_child_is_unsubscribed($email) {
    $file_path = twentytwentyfive_child_get_unsubscribe_file();
    $email = strtolower(trim($email));
    
    if (!file_exists($file_path)) {
        return false;
    }
    
    $content = file_get_contents($file_path);
    if (!$content) {
        return false;
    }
    
    $emails = array_map('trim', explode("\n", $content));
    $emails = array_map('strtolower', $emails);
    
    return in_array($email, $emails);
}

/**
 * AJAX Handler for Unsubscribe
 */
function twentytwentyfive_child_handle_unsubscribe() {
    // Verify nonce
    check_ajax_referer('nordicleads_nonce', 'nonce');
    
    // Get and sanitize email
    $email = sanitize_email($_POST['email']);
    
    // Validate email
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Ugyldig e-mail adresse.'));
        return;
    }
    
    // Add to unsubscribe/DNC list
    twentytwentyfive_child_add_to_unsubscribe($email);
    
    // Log unsubscribe (optional hook for analytics)
    do_action('nordicleads_unsubscribe', array(
        'email' => $email,
        'timestamp' => current_time('mysql'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ));
    
    wp_send_json_success(array(
        'message' => 'Du er nu afmeldt vores nyhedsbrev.'
    ));
    
    wp_die();
}
add_action('wp_ajax_nordicleads_unsubscribe', 'twentytwentyfive_child_handle_unsubscribe');
add_action('wp_ajax_nopriv_nordicleads_unsubscribe', 'twentytwentyfive_child_handle_unsubscribe');

